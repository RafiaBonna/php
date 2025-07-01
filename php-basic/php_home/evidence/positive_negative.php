<!DOCTYPE html>
<html>
<head>
    <title>Count Positive, Negative, and Zero Numbers</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Enter numbers separated by commas (e.g., 5, -3, 0, 7, -1)</h2>
    <form method="POST" action="">
        <label>Numbers:</label><br>
        <input type="text" name="numbers" style="width:300px;" placeholder="5, -3, 0, 7, -1" required>
        <br><br>
        <input type="submit" name="submit" value="Count">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $input = $_POST['numbers'];

        // Remove spaces
        $input = str_replace(' ', '', $input);

        // Split input by commas
        $numbersArray = explode(',', $input);

        // Counters
        $positiveCount = 0;
        $negativeCount = 0;
        $zeroCount = 0;

        // Check each number
        foreach ($numbersArray as $num) {
            if (is_numeric($num)) {
                $num = (float)$num;
                if ($num > 0) {
                    $positiveCount++;
                } elseif ($num < 0) {
                    $negativeCount++;
                } else {
                    $zeroCount++;
                }
            } else {
                echo "<p style='color:red;'>Error: '$num' is not a valid number.</p>";
            }
        }

        // Display results
        echo "<h3>Results:</h3>";
        echo "Positive numbers: " . $positiveCount . "<br>";
        echo "Negative numbers: " . $negativeCount . "<br>";
        echo "Zeroes: " . $zeroCount . "<br>";
    }
    ?>
</body>
</html>