<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
class Car {
    public $brand;
    public $color;

    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
        echo "Brand: $brand, colour: $color\n";
    }
}

$myCar = new Car("Toyota", "Red");
// output: brand: Toyota, color: Red
?>  
</body>
</html>