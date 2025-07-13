<?php
//  echo "<pre>";
//  print_r($_FILES);
//  echo "</pre>";

if(isset($_FILES['names'])){
$file_name = $_FILES['names']['name'];
$tmp_file = $_FILES['names']['tmp_name'];
$file_size = $_FILES['names']['size'];
$img = "pic/";
$kb=$file_size/1024;


  if($kb>500){ 
  echo "File is too large!";
  } else { 
    move_uploaded_file($tmp_file,$img.$file_name);
    echo "Task Completed!";
  }
}
?>
<body>
  <div style=" width:350px; margin:10px auto">
<form action="#" method="post" enctype="multipart/form-data">
<fieldset>
<input type="file" name="names"><br><br>
<input type="submit" name="submit"><br>
</fieldset>
</form> 
<?php 

if(isset($_FILES['names'])){
  echo "<image src='$img/$file_name' width='300px'>";
}

?>
</body>