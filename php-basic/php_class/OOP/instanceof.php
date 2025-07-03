<?php
class M {
    public $name = "Hello!";
}
class B {
    public $brand = "Fi Fie Foe Fun!";
}

$m = new M();
$b = new B();

var_dump($b instanceof M);
var_dump($m instanceof B);
?>
