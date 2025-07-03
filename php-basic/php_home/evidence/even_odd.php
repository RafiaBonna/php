<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>

    <h2>Check if a Number is Even or Odd</h2>

    <form method="post" action="">
        Enter a number: <input type="number" name="num" required>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];

        if ($num % 2 == 0) {
            echo "<p>The number $num is Even.</p>";
        } else {
            echo "<p>The number $num is Odd.</p>";
        }
    }
    ?>

</body>
</html>