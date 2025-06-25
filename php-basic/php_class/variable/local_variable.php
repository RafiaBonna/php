<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Local Variable</h1>
  <?php
  function info(){
    $a =121;
    echo $a;
  }
  info();
  ?>
  <h1>Global Variable</h1>
  <?php
  $m =50;
  $b =50;
  function add(){
    global $m,$b,$a;
    $a =$m+$b;
  }
  add();
  echo $a;
  ?>
  <br>
  <h1>Super global variable</h1>  
  <?php
  echo "<br>";
  echo $_SERVER['SERVER_NAME'];
  echo "<br>";
  echo $_SERVER['SERVER_PORT'];
  echo "<br>";
  echo $_SERVER['SCRIPT_FILENAME'];
  echo "<br>";
  echo $_SERVER['SERVER_ADDR'];
   echo "<br>";
  echo $_SERVER['SERVER_ADMIN'];
  ?>
</body>
</html>