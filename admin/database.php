<?php

//Parameters To Connect To The Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "purobackery";

$connection = mysqli_connect($servername, $username, $password, $database) or die(mysqli_error());

if(!$connection){
  die("Database Connection Failed");
}

?>
