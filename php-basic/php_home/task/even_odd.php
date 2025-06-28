<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>
    <h2>Check Even or Odd Number</h2>

    <form method="post" action="">
        Enter a number: <input type="number" name="num" required>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $data = $_POST['num'];

        if ($data % 2 == 0) {
            echo "<h3>$data is an Even number.</h3>";
        } else {
            echo "<h3>$data is an Odd number.</h3>";
        }
    }
    ?>

             <!-- Ternary operator to check even or odd -->

     <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];

        $result = ($num % 2 == 0) ? "$num is an Even number." : "$num is an Odd number.";

        echo "<h3>$result</h3>";
    }
    ?>
</body>
</html>
