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
if(!$conn)die('Database Connection Error! <br/>'.mysqli_connect_error());

echo '<div id="main">';
			echo '<nav>';
			echo '<div class="navigation">';
			echo '<ul>';
			
			$sql = "SELECT * FROM menu ORDER BY position";
			$query = mysqli_query($conn,$sql);
			if(mysqli_num_rows($query)>0)
			{
			while($fcat=mysqli_fetch_assoc($query))
			{
			if ($fcat['slug']=='')
			{
			echo '<li class="'.clean($fcat['name']).'"><a href="/'.$fcat['slug'].'">'.$fcat['icon'].' '.$fcat['name'].'</a></li>';
			}
			else
			{
			echo '<li class="'.clean($fcat['name']).'"><a href="/'.$fcat['slug'].'/">'.$fcat['icon'].' '.$fcat['name'].'</a></li>';
			}
			}
			}
echo '</ul>';
echo '</div>';
echo '</nav>';

echo '</div>';
mysqli_close($conn);
?>
<h1 class="text-center">Dynamic Multi-Color Menu</h1>
</body>
</html>
