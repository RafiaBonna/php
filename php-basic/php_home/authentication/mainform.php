<?php
session_start();
if (!isset($_SESSION["sname"])) {
    header("location:login.php");
    exit();
}

require_once("class.php");

if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $batch = $_POST["batch"];

    $student = new student($id, $name, $email, $batch);
    $student->store();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <style>
        div {
            background-color: lavender;
            width: 300px;
            padding: 15px;
            margin: 20px auto;
            border-radius: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<a href="Login.php">Logout</a>
<a href="close.php">Close</a>
<div>
    <form method="POST" action="#">
        <fieldset>
            <legend style="text-align: center;">Registration Form</legend>
            ID:<br>
            <input type="number" name="id" required><br><br>
            Name:<br>
            <input type="text" name="name" required><br><br>
            Email:<br>
            <input type="text" name="email" required><br><br>
            Batch:<br>
            <input type="text" name="batch" required><br><br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</div>


<div style="width: 50%; margin: auto; back">
    <?php student::display_result(); ?>
</div>
</body>
</html>