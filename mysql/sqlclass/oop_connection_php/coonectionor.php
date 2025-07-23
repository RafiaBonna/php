<?php
$conn= mysqli_connect("localhost","root","","e_commerce");
if(!$conn){
    die("Connection Failed.");
}
echo "Connection Successful";
?>