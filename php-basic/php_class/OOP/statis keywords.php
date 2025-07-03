<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class client{
        const name="Hello Dhaka!"."<br>";
       public static function info(){
         echo "this  is static method <br>";
       }
    }
    // $person= new user();
    //$person->info();
    echo client:: info();
    echo client:: name;
    // echo User::$name="my world";
    //echo client:: $name="Hello World! "."<br>";
    ?>
</body>
</html>