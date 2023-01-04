<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "erp";
$conn = mysqli_connect($servername, $username, $password, $db);
date_default_timezone_set('Asia/Kolkata');

if(!$conn){
   die("sorry we faild to connect". mysqli_connect_error());
   }
//    else{
//    echo "connected successful";
//    }

?>
