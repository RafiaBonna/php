<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Largest Number Finder</title>
</head>
<body>
    <form method="post">
        Enter first number (a): <input type="number" name="a"><br>
        Enter second number (b): <input type="number" name="b"><br>
        Enter third number (m): <input type="number" name="m"><br>
        <input type="submit" value="Find Largest">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $m = $_POST["m"];

        if ($m > $b && $m > $a){
            echo "The largest number is: " . $m;
        } else if ($b > $m && $b > $a){
            echo "The largest number is: " . $b;
        } else {
            echo "The largest number is: " . $a;
        }
    }
    ?>
</body>
</html>
</body>
</html>