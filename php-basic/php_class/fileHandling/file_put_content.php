<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   //file_put_contents(filename,data,mode,context)
   echo file_put_contents("storing.txt","Good Morning World!");
   //explode() function
   //explode (separator,string,limit);
   echo "<br>";
   $details= "This is our World";
   echo $details;
    echo "<br>";
   print_r(explode(" ",$details,5))
   ?> 
</body>
</html>