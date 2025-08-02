<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "easy_shopping";

$easy_shopping = new mysqli($host,$user,$pass,$database);

// if ($easy_shopping->connect_error) {
//     die("Connection failed: " . $easy_shopping->connect_error);
// }else{
//     echo "<h1>Connect Successfully</h1>";
// }


?>