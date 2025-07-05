<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  $myfile =fopen("firstfile.txt","w")or die ("Unable to open file !");
  $text ="This is my new task file.\n";
  fwrite($myfile,$text);
    $text ="This is my second task file.\n";
    fwrite($myfile,$text);
    fclose($myfile);
    ?>
</body>
</html>