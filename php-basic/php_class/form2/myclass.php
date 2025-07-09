<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class FormDetails{
        private $name;
        private $roll;
        public static $file_path="store.txt";
   function __construct($_name,$_roll) {
    $this->name= $_name;
    $this->roll= $_roll;
   }
     public function info(){
        return $this->name.",".$this->roll.PHP_EOL;
    }
    public function store(){
        file_put_contents(self::$file_path,$this->info(),FILE_APPEND);
    }
public static function display_people(){
    $desh=file(self::$file_path);
    echo"<b>Country Name|Code</b> <br/>";
    foreach($desh as $a){
        list($name,$roll)=explode(",",trim($a));
        echo "$name|$roll <br/>";
    }
}

     }
    
    ?>
</body>
</html>