<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 class king{
    public $name="Alberto";
    function Info(){
        echo "This is king parent class.";
    }
 }
 $m =new  king();
 echo $m->name;
 echo "<br>";
echo $m->info();
 ?>   
</body>
</html>