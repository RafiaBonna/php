<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- preg_replace(pattern,replacement,subject)  -->
     <!-- preg_replace(pattern,replacement,input,limit,count) -->
      <?php
      $store= "Visit Microsoft!  Microsoft!  Microsoft!";
      $pattern="/Microsoft/i";
      echo preg_replace($pattern, "Zoo",$store);
      ?>
</body>
</html>