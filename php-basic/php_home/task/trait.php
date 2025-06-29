<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   trait A{
    public function info(){
echo "info method";
    }
    function details(){
        echo "details";
    }
   }
   trait b {
    public function show(){
        echo "this is show method";
    }
   }
   trait C{
    public function display(){
        echo "this is nice place";
    }
   }
   class Saheb {
    use c;
    public $name;
    public $age;
    public function addition(){
        $a=60;
        $b=60;
        echo $a+$b;
    }
   }
    $obj=new saheb();
   $obj->addition();
    echo "<br>";
    $obj->display();


   ?> 
</body>
</html>