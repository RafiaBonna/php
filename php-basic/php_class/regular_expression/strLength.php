<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $pass ="Screenlock";
    if (strlen($pass)<8)
    echo "Password is Incorrect";
    else
     echo "Password is Valid !";
    ?>
</body>
</html>