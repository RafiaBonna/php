<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- preg_match(pattern,input,matches,flags,offset) -->
    <!-- preg_match(pattern,input,matches)-->
    <!-- syntax for preg_match is (Double slash //) -->
      <?php
      $str="Returns a new where matched patterns heve been replaced with another string";
      $pattern="/String/i";// (i) is insensitive case used when there is no need to check upper case or lower case.

      echo preg_match($pattern,$str);
      ?>
</body>
</html>