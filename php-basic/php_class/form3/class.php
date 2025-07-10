<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class student{
         private $id;
        private $name;
         private $batch;
       
        public static $file_path="collect.txt";
   function __construct($_id,$_name,$_batch) {
     $this->id= $_id;
    $this->name= $_name;
    $this->batch= $_batch;
   
   }
     public function info(){
        return $this->id.",".$this->name.",".$this->batch.PHP_EOL;
    }
    public function store(){
        file_put_contents(self::$file_path,$this->info(),FILE_APPEND);
    }
public static function display_result(){
    $desh=file(self::$file_path);
    echo"<b>Student ID|Name|Batch</b> <br/>";
    foreach($desh as $a){
        list($roll,$name,$batch)=explode(",",trim($a));
        echo "$roll|$name|$batch <br/>";
    }
}

     }
    
    ?>
</body>
</html>