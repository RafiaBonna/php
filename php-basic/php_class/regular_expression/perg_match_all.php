<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- preg_match_all(pattern,input,matches,flags,offset) -->
     <!-- preg_match_all (finds the total words or letters in the sentences) -->
 <!-- <?php
 $store="The rain in spain falls mainly on the plains.";
 $pattern="/in/i";
 echo preg_match_all($pattern,$store)             
 ?>    -->

 <?php
//  echo "<br>";
//  preg_match_all("/[^eh]/"."This is matches elements",$p);
//  print_r($p);
 echo "<br>";
 $text="This is mathches elements is eleeeeeeven thiseeeee 234567811";
 $ptrn="/e{3,5}/i";
 echo preg_match_all($ptrn,$text);
 echo "<br>";
 $text="b12cv";
 $ptrn="/^[a-zA-Z0-9]{3,5}$/";
 echo preg_match_all($ptrn,$text);
 ?>
</body>
</html>