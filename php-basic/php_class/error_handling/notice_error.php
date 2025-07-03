<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   if(isset($m)){
    return $r=$m+2;
   } else{
    trigger_error('$m is notice error');
   }
   ?> 
</body>
</html>