<?php
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
if(isset($_FILES['newfile'])){
   $filename= $_FILES['newfile']['name'];
   $tmp_file= $_FILES['newfile']['tmp_name'];
   $file_size= $_FILES['newfile']['size'];
   $img="pic/";
   $kb=$file_size/1024;
   if($kb>400){
    echo "File is too large";
   } else {
    move_uploaded_file($tmp_file,$img.$file_name);
    echo "successfully";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <div style=" width:350px; margin:10px auto">
<form action="#" method="post" enctype="multipart/form-data">
<fieldset>
<input type="file" name="newfile"><br><br>
<input type="submit" name="submit"><br>
</fieldset>
</form>
 <?php
  if(isset($_POST['submit'])){
    echo "<img src='pic/$name' width='300px'><br>";
  }
 ?>
</body>
</html>