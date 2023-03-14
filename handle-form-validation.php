<?php
session_start();

if(isset($_POST['submit']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$age=$_POST['age'];
$gender=$_POST['gender'];

// print_r($_POST);
// extract($_POST);
// echo $username;


$erorrs=[];
if(empty($username)){
    $erorrs[]="username is required";
}elseif (is_numeric($username) || !is_string($username)) {
    $erorrs[]="name must be string";
}elseif (strlen($username) < 5 || strlen($username) > 50) {
    $erorrs[]="min length is 5 & max length is 50";
}

if(empty($email)){
    $erorrs[]="email is required";
}elseif (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erorrs[]=" must be valid email";
}

if(empty($password)){
    $erorrs[]="password is required";
}elseif (strlen($password) < 8 || strlen($password) > 50) {
    $erorrs[]="length[8-50]";
}

if(empty($age)){
    $erorrs[]="age is required";
}elseif (! is_numeric($age)) {
    $erorrs[]="age must be a number";
}elseif ($age < 5 || $age > 65) {
    $erorrs[]="age between [5-65]";
}

if(empty($gender)){
    $erorrs[]="gender is required";
}elseif (! in_array($gender,['male','female'])){
    $erorrs[]="must be female or male only";
}



if(empty($erorrs)){
    print_r($_POST);
}else{
    //print_r($erorrs);
    $_SESSION['erorrs']=$erorrs;
    header("location: form-validation.php");
}
}
?>