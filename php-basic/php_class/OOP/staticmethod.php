<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   class M{
    public static $value=50;
    public function staticValue(){
        return self::$value;
    }
    public static function show(){
        return "This is static method";
    }
    function applyStatic(){
        return self::show();
    }
   }
   class R extends M{
    public function xstatic(){
        return parent:: $value;
    }
   }
   $b =new R();
   echo $b->xstatic();
   //echo $b->staticValue();
  // echo $b->applyStatic();
   //echo s::show();

   ?> 
</body>
</html>