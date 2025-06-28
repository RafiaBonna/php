<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset</title>
</head>
<body>
 <?php
  $data =null;
  $data=20;
  if(isset($data)){
    $r=$data+10;
    echo $r;
  }
  else{
    echo "False";
  }
  echo "<br>";
 ?>
  <?php
  $data =50;
  if(isset($data)){
    $m=$data+10;
    var_dump ($m);
  }
  else{
     ("False");
  }
 ?>
<?php
$age = 25;

if (!isset($name)) {
    echo "Name is not set.<br>";
}

if (!isset($age)) {
    echo "Age is not set.<br>";
} else {
    echo "Age is set and value is: $age";
}
?>
</body>
</html>