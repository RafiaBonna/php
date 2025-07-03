<?php
$students = array(
    "Rafia" => "A",
    "Rima"=> "B+",
    "Annesha" => "A-",
    "Sadia"=> "B",
    "Puja" => "C"
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Grades</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 30px auto;
        }
        th, td {
            border: 1px solid #444;
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: lavender;
        }
    </style>
</head>
<body>

<h2 style="text-align: center;">Student Grades Table</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Grade</th>
    </tr>
    <?php
    foreach ($students as $name => $grade) {
        echo "<tr>";
        echo "<td>$name</td>";
        echo "<td>$grade</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>