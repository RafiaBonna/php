<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>

    <h2>Find the Factorial of a Number</h2>

    <form method="post" action="">
        Enter a number: <input type="number" name="num" min="0" required>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        $factorial = 1;

        // 0! er maan  1
        if ($num == 0) {
            $factorial = 1;
        } else {
            for ($i = 1; $i <= $num; $i++) {
                $factorial *= $i;
            }
        }

        echo "<h3>Factorial of $num is: $factorial</h3>";
    }
    ?>

</body>
</html>