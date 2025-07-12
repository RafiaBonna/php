<?php
if(isset($_POST['submit'])){
  $tmp_name=$_FILES["newfile"]["tmp_name"];
  $name=$_FILES['newfile']['name'];
  
	  copy($tmp_name,"pic/".$name);
	  
}
?>


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
</div>

</body>