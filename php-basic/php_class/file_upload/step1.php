<?php
if(isset($_POST['submit'])){
  $tmp_name=$_FILES["newfile"]["tmp_name"];
  $name=$_FILES['newfile']['name'];
  
	  move_uploaded_file($tmp_name,"pic/".$name);
	  
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
  <div style=" width:400px; margin:10px auto">
<form action="#" method="post" enctype="multipart/form-data">
<fieldset>
<input type="file" name="newfile"><br><br>
<input type="submit" name="submit"><br>
</fieldset>
</form> 
<?php
if(isset($_POST['submit'])){

  echo "<img src='pic/$name' width='300px'>";
}

?> 
</body>
</html>