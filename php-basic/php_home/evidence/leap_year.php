<!DOCTYPE html>
<html>
<head>
    <title>Leap Year Checker</title>
</head>
<body>
    <h2>Check if a Year is a Leap Year</h2>
    <form method="post">
        <label>Enter a year:</label>
        <input type="number" name="year" required>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $year = $_POST['year'];

        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            echo "<h3>$year is a Leap Year.</h3>";
        } else {
            echo "<h3>$year is a common Year.</h3>";
        }
    }
    ?>
</body>
</html>