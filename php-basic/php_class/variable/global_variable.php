<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>Global Variable</h1>
  <?php
  $m =50;
  $b =50;
  function add(){
    global $m,$b,$a;
    $a =$m+$b;
  }
  add();
  echo $a;
  ?>
  <br>
  <h1>Super global variable</h1>  
  <?php
  echo "<br>";
  echo $_SERVER['SERVER_NAME'];
  echo "<br>";
  echo $_SERVER['SERVER_PORT'];
  echo "<br>";
  echo $_SERVER['SCRIPT_FILENAME'];
  echo "<br>";
  echo $_SERVER['SERVER_ADDR'];
   echo "<br>";
  echo $_SERVER['SERVER_ADMIN'];
   echo "<br>";
  ?>
 <!-- <?php
  echo $_GET['fname'];
  echo "<br>";
  echo $_GET['email'];
 ?>
 <form action="#" method="GET">
Name: <br> <input type="Text" name="fname"> <br>
Email: <br> <input type="Text" name="email"> <br>  <br>
<input type="submit" value="Submit">
</form> -->

 <?php
  echo $_POST['Contact'];
  echo "<br>";
  echo $_POST['Address'];
 ?>

 <form action="#" method=POST>
CONTACT: <br> <input type="Text" name="Contact"> <br>
ADDRESS: <br> <input type="Text" name="Address"> <br>  <br>
<input type="submit" value="Submit">
</form>

 <?php
  echo $_REQUEST['Cont'];
  echo "<br>";
  echo $_REQUEST['dress'];
 ?>
 <form action="#" method=POST>
SUBJECT: <br> <input type="Text" name="Cont"> <br>
YEAR: <br> <input type="Text" name="dress"> <br>  <br>
<input type="submit" value="Submit">
</form>

</body>
</html>