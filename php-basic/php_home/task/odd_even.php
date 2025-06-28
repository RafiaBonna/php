<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="POST" action="">
Enter a Number: <input type="number" name="num" required>
<input type="submit" name="submit" value="submit">
   </form>
  <?php
   if(isset($_POST['submit'])){
    $data=$_POST['num'];
    if($data%2 ==0){
        echo" <h3>This is even.</h3>";
    }else{
        echo"<h3>This is odd.</h3>";
    }
   }
  ?>
  <?php
  if(isset($_POST['submit'])){
    $data=$_POST['num'];
    if($data%2==0){
        echo "<h3>This is Even Number</h3>";
    } else {
        echo "<h3>This is Odd Number</h3>";
    }
  }
  ?>
</body>
</html>