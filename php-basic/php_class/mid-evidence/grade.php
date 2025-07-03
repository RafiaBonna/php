<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>

    <h2>Grade  Value Calculator</h2>

    <form method="post" action="">
        Enter your marks (0 - 100): 
        <input type="number" name="marks" min="0" max="100" required>
        <input type="submit" name="submit" value="Get Grade">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $marks = $_POST['marks'];
        $grade = "";

        if ($marks >= 80 && $marks <= 100) {
            $grade = "A+";
            echo "<h3>OutStanding!</h3>";
            echo "<h3>Your Grade is : $grade</h3>";
        } elseif ($marks >= 70) {
            $grade = "A";
             echo "<h3>Very Good!</h3>";
             echo "<h3> Your Grade is : $grade</h3>";
        } elseif ($marks >= 60) {
            $grade = "B";
             echo "<h3>Good!</h3>";
             echo "<h3> Your Grade is : $grade</h3>";
        } elseif ($marks >= 40) {
            $grade = "C";
             echo "<h3>Poor!</h3>";
             echo "<h3>Your Grade is : $grade </h3>";
        } else {
            $grade = "F";
             echo "<h3>Fail!</h3>";
             echo "<h3>Your Grade is : $grade</h3>";
        }
    }
    ?>

</body>
</html>