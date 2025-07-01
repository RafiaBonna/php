<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series Generator</title>
</head>
<body>

    <h2>Generate Fibonacci Series</h2>

    <form method="post" action="">
        <h3>Enter how many numbers you want: </h3>
        <input type="number" name="count" min="1" required>
        <input type="submit" name="generate" value="Generate">
    </form>

    <?php
    if (isset($_POST['generate'])) {
        $count = $_POST['count'];
        
        $num1 = 0;
        $num2 = 1;

        echo "<h3>Fibonacci Series of $count numbers:</h3>";
        echo "<p>";

        for ($i = 0; $i < $count; $i++) {
            echo $num1 . " ";
            $next = $num1 + $num2;
            $num1 = $num2;
            $num2 = $next;
        }

        echo "</p>";
    }
    ?>

</body>
</html>