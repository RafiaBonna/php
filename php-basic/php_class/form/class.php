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
         private $email;
       
        public static $file_path="store.txt";
   function __construct($_id,$_name,$_email) {
     $this->id= $_id;
    $this->name= $_name;
    $this->email= $_email;
   
   }
     public function info(){
        return $this->id.",".$this->name.",".$this->email.PHP_EOL;
    }
    public function store(){
        file_put_contents(self::$file_path,$this->info(),FILE_APPEND);
    }
public static function display_result(){
    $desh=file(self::$file_path);
    echo"<b>Student ID|Name|Email</b> <br/>";
    foreach($desh as $a){
        list($id,$name,$email)=explode(",",trim($a));
        echo "$id|$name|$email <br/>";
    }
}

     }
    
    ?>
</body>
</html>