<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        $mobile=array(
            array("Nokia","Redmi","Samsung"),
            array("Oneplus","Motoral","symphoney"),
            array("Vivo","Apple","Walton")
        );
        echo $mobile[0][2];
        echo "<br>"; 
        echo $mobile[1][0];
        echo "<br>";
         echo $mobile[2][2];
        echo "<br>";
        for($i=0; $i<3; $i++){
            echo "<p><b> Item Title $i </b></p>";
            for ($l=0; $l<3; $l++){
                echo $mobile[$i][$l]."<br>";;
            }
        }
        echo "<br>";
        echo "<br>";
        echo "<br>";
        ?>
        <?php
        $matha = array(
            array(
                array(10,20),
                array(30,40),
            ),
             array(
                array(50,60),
                array(70,80),
            ),
        );
        print_r($matha);
        ?>
        <?php
$snacks = array (
  array("Pizza","Mini","Large"),
  array("Sandwich","Mini","Large"),
  array("Burger","Mini","Large"),
  array("Hotdog","Mini","Large")
);
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$snacks[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>

    </body>
    </html>
</body>
</html>