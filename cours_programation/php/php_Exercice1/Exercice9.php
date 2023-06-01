<?php
$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;
/*
 z est creer par La superglobal $GLOBALS
  z = 100
*/
?>