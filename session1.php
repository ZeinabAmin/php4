<?php 
session_start();

$x=5;
$_SESSION['x']=$x;  //ass arr
$_SESSION['arr']=[1,2,3,4,5,6,7,8];
$_SESSION['str']='Ali';
echo 'x is created';


unset($_SESSION['x']);
session_destroy();
?>