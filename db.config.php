<?php
$database_name = 'test';
$database_host = 'localhost';
$database_user = 'root';
$database_password = '';
function connectdb()
{
global $database_name, $database_user, $database_host, $database_password;
$conms = @mysql_connect($database_host,$database_user,$database_password); 
if(!$conms) return false;
$condb = @mysql_select_db($database_name);
if(!$condb) return false;
return true;
}
?>
