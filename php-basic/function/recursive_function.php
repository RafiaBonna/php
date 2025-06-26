<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>A recursive function is a function that calls itself
         within its own definition to solve a problem. </h3>
         
  <?php
  function Data($point){
    if($point<=10){
    echo"$point <br>";
    Data($point+1);
  }
  }
  Data(2);
  ?>  
</body>
</html>