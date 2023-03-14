<?php 
setcookie('name','Ali',time()+3600,'localhost','/'); //work on all browser //root
//setcookie('name','Ali',time()+3600,'localhost','cookie.php'); //work on specific file

echo $_COOKIE['name'];
echo "<br>"; 

echo time(); //unix
echo "<br>";
echo time()+3600; //an hour
echo "<br>";
echo time()+86400; //day
echo "<br>";
echo time()+604800; // week
echo "<br>";
//localhost or /

//cookie delete manual set past date or expire date or close browser
//session destroy or close browser


//setcookie('name','Ali');//true  //one value not arr
//$_COOKIE['name']="Ali"; //false
?>