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
 <?php
 $store="The rain in spain falls mainly on the plains.";
 $pattern="/in/i";
 echo preg_match_all($pattern,$store)
 ?>   
</body>
</html>