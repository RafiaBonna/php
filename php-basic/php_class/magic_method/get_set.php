<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
class B {
    public $name;
    public $brand;

    // Accept parameter and assign it
    public function set_one($name) {
        $this->name = $name;
    }

    // Return the stored property
    public function get_one() {
        return $this->name;
    }
}

$obj = new B();
$obj->set_one('Alam Saheb');
echo $obj->get_one();  // Outputs: Alam
?>
</body>
</html>