<?php 
session_start();

$x=5;
echo $_SESSION['x'];
print_r($_SESSION['arr']);
print_r($_SESSION);


unset($_SESSION['x']);
session_destroy();
$_SESSION=[];

?>