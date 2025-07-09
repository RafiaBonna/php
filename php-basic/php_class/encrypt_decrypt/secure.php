<?php
$password="admin";
$m=md5($password);
echo $m;
echo "<br>";
$m= sha1($password);
echo $m;
echo "<br>";
echo strlen($m);
echo "<br>";
$m=base64_encode($password);
echo $m;
echo "<br>";
echo strlen($m);
echo "<br>";
echo base64_decode("YUVRAZ39=");
?>