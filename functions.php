<?php
function clean($string) {
   $search=array("`","~","!","@","#","$",'%',"^","&","*","(",")","_","+","=",",",".","?","/","<",">",":",";","'",'"'); 
   $replace=array("","","","","","","","","","","","","","","","","","","","","","","","",""); 
   $string = str_replace($search,$replace,$string); 
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   $string = str_replace('--', '-', $string); // Replaces all spaces with hyphens.
   $string = str_replace('--', '-', $string); // Replaces all spaces with hyphens.
   $string = trim($string);
   $string = rtrim($string,'-');
   $string = strtolower($string);
   return $string; // Removes special chars.
}

?>
