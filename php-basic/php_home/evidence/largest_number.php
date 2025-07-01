<!DOCTYPE html>
<html>
<head>
    <title>Find Largest Number</title>
</head>
<body>

    <h2>Find the Largest Among 3 Numbers</h2>

    <form method="post" action="">
        Enter first number: <input type="number" name="num1" required><br><br>
        Enter second number: <input type="number" name="num2" required><br><br>
        Enter third number: <input type="number" name="num3" required><br><br>
        <input type="submit" name="submit" value="Find Largest">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $c = $_POST['num3'];

        if ($a >= $b && $a >= $c) {
            $largest = $a;
        } elseif ($b >= $a && $b >= $c) {
            $largest = $b;
        } else {
            $largest = $c;
        }

        echo "<h3>The largest number is: $largest</h3>";
    }
    ?>

</body>
</html>