<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $add=function($a,$b){
        return $a+$b;
    };
    echo $add(40,80);
    echo "<br>";
    // arrow function
    $addArrow=fn($a,$b)=>$a+$b;
    echo $addArrow(50,40);
        echo "<br>";
    ?> 
</body>
</html>