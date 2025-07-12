<?php
session_start();
if(!isset($_SESSION["sname"])){
    header("location:login.php");
}
?>
<?php
    require_once("class.php");
  if(isset($_POST["submit"])){
	$id=$_POST["id"];
	$name=$_POST["name"];
	$email=$_POST["email"];
	$batch=$_POST["batch"];  
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
            background-color: lavender;
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
        <a href="close.php">another</a>
        <form method="POST" action="#">
        <fieldset>
            <legend style="text-align: center; font-weight: bolder; font-size: larger; color: black;"> Registration Form</legend>
              ID:<br>
      <input type="number" name="id" id="id" required><br><br> 
             Name:<br>
      <input type="text" name="name" id="name" required><br><br>
      Email: <br>
      <input type="text" name="email" id="email" required><br><br>
          Batch:<br>
      <input type="text" name="batch" id="batch" required><br><br>
      <input type="submit" name="submit" value="Submit" style="width: 55px; background-color: white; border-radius: 10px;">
        </fieldset>
        </form>
    </div>
    <?php
    student::display_result();
  ?>
</body>
</html>