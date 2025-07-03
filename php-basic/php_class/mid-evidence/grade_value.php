<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>

    <h2>Grade  Value</h2>

    <form method="post" action="">
        Enter your grade: 
        <input type="text" name="marks" required>
        <input type="submit" name="submit" value="Get result">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $marks = $_POST['marks'];
        $grade = "";

        if ($marks =="A+") {
            echo "<h3>OutStanding!</h3>";
        } elseif ($marks =="A") {
             echo "<h3>Very Good!</h3>";
        } elseif ($marks =="B") {
             echo "<h3>Good!</h3>";
        } elseif ($marks =="C") {
             echo "<h3>Poor!</h3>";
        } else {
             echo "<h3>Fail!</h3>";
        }
    }
    ?>

</body>
</html>