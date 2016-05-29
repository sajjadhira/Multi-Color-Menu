<?php
function clean($string) {
   $string = strtolower( preg_replace('@[\W_]+@', '-', $string) );
   return $string; // Removes special chars.
}

?>
