<!DOCTYPE html>
<html lang="en">
<head>
<title>Dynamic Multi-Color Menu - PHPAns</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Multi-Color Menu">
<meta name="keywords" content="multi color menu css,multi color menu wordpress,dynamic multi color menu, multi color menu mysql-php, PHP multi color menu, mysql multi color menu, multi color menu, free multi color menu, multicolor dynamic menus,Multi-Color Menu"/>
<meta name="author" content="phpans.com">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"> <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./styles.php">
</head>
<body>
<?php
require_once('db.config.php');
include('functions.php');
if(!connectdb())die('Database Connection Error! <br/>'.mysql_error());

echo '<div id="main">';
			echo '<nav>';
			echo '<div class="navigation">';
			echo '<ul>';
			
			$fcats = mysql_query("SELECT id, name, slug, color, icon FROM menu ORDER BY position");
			while($fcat=mysql_fetch_array($fcats))
			{
			if ($fcat[2]=='')
			{
			echo '<li class="'.clean($fcat[1]).'"><a href="/'.$fcat[2].'">'.$fcat[4].' '.$fcat[1].'</a></li>';
			}
			else
			{
			echo '<li class="'.clean($fcat[1]).'"><a href="/'.$fcat[2].'/">'.$fcat[4].' '.$fcat[1].'</a></li>';
			}
			}
			
echo '</ul>';
echo '</div>';
echo '</nav>';

echo '</div>';
?>
<h1 class="text-center">Dynamic Multi-Color Menu</h1>
</body>
</html>
