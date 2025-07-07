<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable-Declaration</title>
</head>
<body>
    <h2>C_FoodPark</h2>
 <?php
 $food ="Cupcake";
 $Food ="CheeseCake";
 $FOOD ="Corndog";
 echo $food." ".$Food." ".$FOOD;
 echo "<br>";
 ?> 
 <h2>My Diary</h2>
 <?php
 $Name ="Rafia Alam"; //string
 $age =26;   //integer
 $height =5.1; //float
$color ="Blue"; //string
$food ="Cold Drink"; //string
$is_student =true;  //boolean
echo "My name is ". $Name."<br>";
echo "I am ".$age. " years old"."<br>";
echo "My height is ".$height ."<br>";
echo "My favourite color is ".$color ."<br>";
echo "I love ".$food."<br>";
var_dump ($is_student);
 ?>
</body>
</html>