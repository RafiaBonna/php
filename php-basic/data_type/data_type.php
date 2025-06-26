<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>Data_type</h1>  
  <?php
//   string
  $r="Bonna";
//   echo $r;
var_dump($r);
echo "<br>";
// integer
$num=2025;
var_dump($num);
echo "<br>";
//float
$m=146.789;
var_dump($m);
echo "<br>";
//boolean
$s=true;
var_dump($s);
echo "<br>";
//array
$y=array("a","l","a","m");
var_dump($y);
echo "<br>";
//object
class School{
    public $name;
    public $year;
    public function __construct($name,$year){
        $this->name =$name;
        $this->year =$year;
    }
}
$obj =new School ("IDEAL HIGH SCHOOL",1975);
var_dump($obj);
  ?>

</body>
</html>