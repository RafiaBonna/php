<?php
require_once("class.php");

if (isset($_POST["submit"])) {
    $id     = ($_POST["id"]);
    $name   =($_POST["name"]);
    $email  =($_POST["email"]);
    $id_ok    = preg_match('/^[0-9]{3,5}$/', $id);
    $email_ok = preg_match('/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+[\.][A-Za-z]{2,}$/', $email);

    if (!$id_ok && !$email_ok) {
        echo "Both ID and Email are invalid.";
    } elseif (!$id_ok) {
        echo "Invalid ID";
    } elseif (!$email_ok) {
        echo "Invalid email";
    } else {
        $student = new student($id, $name,  $email);
        $student->store();
        echo "Registration completed successfully!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            background-color: gainsboro;
            width: 200px;
            height: 240px;
            margin: 10px;
            padding: 10px;
            border-radius: 10px;
            font-weight:bolder;  
        }
    </style>
</head>
<body>
    <div>
        <form method="POST" action="#">
        <fieldset>
            <legend style="text-align: center; font-weight: bolder; font-size: larger; color: black;"> Registration Form</legend>
              ID:<br>
      <input type="number" name="id" id="id" required><br><br> 
             Name:<br>
      <input type="text" name="name" id="name" required><br><br>
          Email:<br>
      <input type="text" name="email" id="email" required><br><br>
      <input type="submit" name="submit" value="Submit" style="width: 55px; background-color: white; border-radius: 10px;">
        </fieldset>
        </form>
    </div>
    <?php
    student::display_result();
  ?>
</body>
</html>