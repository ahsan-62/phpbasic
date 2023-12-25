<?php

/*


Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

The PHP superglobal variables are:

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION

*/


//GLOBALS

// $x=10;
// $y=15;


// function addition(){

// $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];

// }
// addition();

// echo $z;

echo $_SERVER['HTTP_HOST']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['HTTP_REFERER']."<br>";
echo $_SERVER['HTTP_USER_AGENT']."<br>";


?>
