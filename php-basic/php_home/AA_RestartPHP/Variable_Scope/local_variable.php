<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local_variable</title>
</head>
<body>
 <?php
 function festival(){
    $baishahkhi ="Pahela Baishakh";
    echo $baishahkhi;  //  ✅ ekhane fuction er vitore variable ta call kora jabe.
 }
 festival();
 //echo $baishahkhi; ❌ ekhane variable k function er baire call kora hoise ta eta kaj korbe na.
 ?>
</body>
</html>