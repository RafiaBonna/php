<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Flower{
        protected $type;
        public function setType($type){
            $this->type =$type;
        }
        public function getType(){
            return "This is $this->type";
        }
    }
    class Fragrance extends Flower{
        public function getType(){
return"This is $this->type";
        }
         
    }
    $color=new Fragrance();
    //echo $color->type="Fragrance";
    $color->setType("Flower");
    echo $color->getType();
    ?>
</body>
</html>