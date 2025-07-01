<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>

    <h2>Student Grade Calculator</h2>

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
        } elseif ($marks >= 70) {
            $grade = "A";
        } elseif ($marks >= 60) {
            $grade = "A-";
        } elseif ($marks >= 50) {
            $grade = "B";
        } elseif ($marks >= 40) {
            $grade = "C";
        } elseif ($marks >= 33) {
            $grade = "D";
        } else {
            $grade = "F";
        }

        echo "<h3>Your Grade is: $grade</h3>";
    }
    ?>

</body>
</html>