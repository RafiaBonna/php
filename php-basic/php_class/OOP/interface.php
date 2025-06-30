<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body?>
<?php
//interfaces allows you to specify what class should implement
//1.interfaces cannot have properties
//2.all interface methods must be public
//3.all methods in an interface are abstract
interface Client{
    public function getName();
    public function info();
    public function display();
}
class Project implements Client{
    public function getName(){
        echo "Learn at first" ;
    }
   public function info(){
        echo "Then try to practice" ;
    } 
     public function display(){
        echo "Finally apply it" ;
    }    
}
$add = new Project;
$add->getName();
echo "<br>";
$add->info();
echo "<br>";
$add->display();
?>
</body>
</html>