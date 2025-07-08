<?php
require_once("myclass.php");
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $roll=$_POST["roll"];
    $desh=new FormDetails($name,$roll);
    $desh->store();
    echo "Completed !";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic_form</title>
     <style>
        div{
            background-color: lavenderblush;
            width: 200px;
            height: 180px;
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
      Country Name:<br>
      <input type="text" name="name" id="name" required><br><br>

      Code:<br>
      <input type="number" name="roll" id="roll" required><br><br>

      <input type="submit" name="submit" value="Submit" style="width: 55px; background-color: aqua;">
      </fieldset>
  </form>
  </div>
  <?php
    FormDetails::display_people();
  ?>
</body>
</html>