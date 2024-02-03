<?php 
$title="your informaton";
include "header.php" ;

$name=$_POST["name"];
$email=$_POST["email"];
$date=$_POST["date"];
$nop=$_POST["nop"];

echo "Hello" . $name  ."<br>Your mail id is :" . $email;


 include "footer.php";
 ?>
