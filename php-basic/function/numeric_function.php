<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- numeric [is_numeric(),round(),rand(min,max);] -->
  <?php
//   is_numeric[it shows result with 0 or 1]
    function number(){
       echo is_numeric(12);
    }
    number();
     echo "<br>";
     //   Round[it shows result with 0 or 1]
      function number2(){
        echo ("Round: ".round(34.5545));
      }
      number2();
        echo "<br>";
         function number3(){
        echo rand(1000,8888);
        echo "<br>";
        echo ("Random Number: ".rand());
      }
      number3();  
  ?>
</body>
</html>