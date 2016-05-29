<?php
header("Content-type: text/css; charset=UTF-8");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
require_once('db.config.php');
include('functions.php');
if(!connectdb())die('Database Connection Error! <br/>'.mysql_error());
$fcats = mysql_query("SELECT id, name, slug, color FROM menu ORDER BY position");
			while($fcat=mysql_fetch_array($fcats))
			{
			$catlink = "$fcat[1]";
			echo "
			.".clean($fcat[1]).":hover
			{
			border-bottom: 2px solid $fcat[3];
			  -webkit-transition: border-bottom .25s ease .1s;
			  -moz-transition: border-bottom .25s ease .1s;
			  -o-transition: border-bottom .25s ease .1s;
			  -ms-transition: border-bottom .25s ease .1s;
			  transition: border-bottom .25s ease .1s;
			}
			.".clean($fcat[1])."
			{
			margin: 5px;
			}
			
			@media only screen and (min-width: 768px) {
			.".clean($fcat[1]).":hover
			{
			border-bottom: 5px solid $fcat[3];
			}
			}
			.".clean($fcat[1])." a
			{
			color: $fcat[3];
			text-decoration: none;
			}
			
			.".clean($fcat[1])."-menu
			{
			background: $fcat[3];
			}
			
			
			.".clean($fcat[1])."-menu ul
			{
			padding: 5px 5px;
			}
			
			
			.".clean($fcat[1])."-menu li
			{
			list-style: none;
			display: inline-block;
			padding: 10px 20px;
			}
			
			.".clean($fcat[1])."-menu li:hover
			{
			opacity: 0.8;
			}
			
			.".clean($fcat[1])."-menu a
			{
			color: #fff;
			text-decoration: none;
			}
			
			";
			}
			
echo "#main{height:auto;display:block;background-color:#FFF;border-top:1px solid #E3E6E8;border-bottom:1px solid #E3E6E8}
.navigation{display:block}
.navigation li:hover a{text-decoration:none}
.navigation ul{text-align:center;display:block}
.navigation li,.navigation li a{font-size:13px;display:inline-block}
.navigation li{position:static;color:#FFF;-webkit-transition:border-bottom .25s ease .1s;-moz-transition:border-bottom .25s ease .1s;-o-transition:border-bottom .25s ease .1s;-ms-transition:border-bottom .25s ease .1s;transition:border-bottom .25s ease .1s;border-bottom:2px solid transparent}.navigation li a{padding:3px;outline:0}@media only screen and (min-width:768px){.navigation li{position:relative;font-size:17px;border-bottom:5px solid transparent}.navigation li a{padding:10px 15px;font-size:17px;font-weight:400}}.navigation li:hover ul.dropdown{display:block}.navigation li ul.dropdown{position:absolute;display:none;width:200px;background:#00695b;box-shadow:0 2px 5px 0 rgba(0,0,0,.26);padding-top:0}.navigation li ul.dropdown li{display:block;list-style-type:none}.navigation li ul.dropdown li a{padding:10px;font-size:15px;color:#fff;display:block;border-bottom:1px solid #005c4d;font-weight:400}.navigation li ul.dropdown li:last-child a{border-bottom:none}.navigation li:first-child:hover a{border-radius:3px 0 0 3px}.navigation li ul.dropdown li:hover a{background:#56b5ae}}";
?>
