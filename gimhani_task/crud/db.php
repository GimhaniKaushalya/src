<?php
$servername="localhost"; 
$username= "gimhani23000";
$password="UMsa0xAT";
$dbname="wp_gimhani23000";

// database connection
$conn =new mysqli($servername,$username,$password,$dbname);

// check connection
if($conn->connect_error){
    die("connection Failed:" .$conn->connect_error);
}

?>