<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $days= array("Saturday","Sunday","Monday","Tuesday","Wednesday","Thursday","Friday");
    $filtered_array =preg_grep("/^T/i",$days);
    print_r ($filtered_array);
  
    ?>
</body>
</html>