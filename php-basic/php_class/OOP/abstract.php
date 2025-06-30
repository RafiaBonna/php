<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    abstract class Forest{
        abstract public function getName();
        public function display(){
            echo "Bird";
        }

    }
    class amazon extends Forest{
public function getName(){
    echo "In the Sky";
}
public function display(){
    echo "Bird";
}
    }
    class ambar extends  Forest{ 
    public function getName(){ 
        echo "On this Earth";
    }
  
    public function display(){ 
        echo "Birdy";
    }
}
$add = new ambar;
$add->getName();
    ?>
</body>
</html>