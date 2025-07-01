<!DOCTYPE html>
<html>
<head>
    <title>Positive or Negative Checker</title>
</head>
<body>

    <h2>Check if a Number is Positive, Negative or Zero</h2>

    <form method="post" action="">
        Enter a number: <input type="number" name="num" required>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];

        if ($num > 0) {
            echo "<h3>$num is a Positive Number.</h3>";
        } elseif ($num < 0) {
            echo "<h3>$num is a Negative Number.</h3>";
        } else {
            echo "<h3>The number is Zero.</h3>";
        }
    }
    ?>

</body>
</html>