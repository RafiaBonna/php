<?php
require_once("student_class.php");

if (isset($_POST["submit"])) {
    $cname  = $_POST["cname"];
    $cont = $_POST["cont"];
    $student = new FormDetails($cname, $cont);
    $student->dstore();
    echo "Successful!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Registration Form</title>
</head>
<body>
  <form method="POST" action="#">
      Name:<br>
      <input type="text" name="cname" id="cname" required><br><br>

      Contact:<br>
      <input type="number" name="cont" id="cont" required><br><br>

      <input type="submit" name="submit" value="Submit" style="width: 55px; background-color: aqua;">
  </form>
</body>
</html>