<?php
//vars in php case sensitive
//functions in php case insensitive //COUNT() //count() //COunt() the same


//super global arrays 

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

//isset(); //return true or false //check on vars or arrays
//array_key_exists('submit',$_POST); //key,array //check on ass arr only
// header("location: add-user.php"); //redirect



// if (array_key_exists('submit',$_POST)) {
if (isset($_POST['submit'])) { 

$username=$_POST['username'];
$email=$_POST['email'];
//extract($_post); //create vars from keys

echo"hello, your name is $username";
}else {
    header("location: add-user.php");
}




?>