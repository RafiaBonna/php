
<!-- <?php  
 if(isset($_POST['submit'])){ 
    $filename=$_FILES['names']['name'];
    $temp_file=$_FILES['names']['tmp_name'];
    $file_size=$_FILES['names']['size'];
    $file_type=$_FILES['names']['type'];
    $img="pic/";
    $uploadDone = 1;
    $kb=$file_size/1024;
    // 1024 byte	1 Kilobyte(kb)
    
  if($kb>500){ 
  echo "File is too large";
  } else { 
    move_uploaded_file("$temp_file","$img.$filename");
    echo "Submission Completed!";
  }

    if($file_type != "jpg" && $file_type != "jpeg"
        && $file_type != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadDone = 0;
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

echo "<image src='$img.$filename' width='300px'>";

?>
</body> -->


<?php
$img = '';        // Initialize variables
$filename = '';

if (isset($_POST['submit'])) {
  $filename     = $_FILES['names']['name'];
  $temp_file    = $_FILES['names']['tmp_name'];
  $file_size    = $_FILES['names']['size'];
  $file_type    = $_FILES['names']['type'];
  $img          = 'pic/';  // Directory path
  $kb           = $file_size / 1024;
  $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

  if ($kb > 500) {
    echo "File is too large";
  } elseif (!in_array(mime_content_type($temp_file), $allowedTypes)) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  } elseif (move_uploaded_file($temp_file, $img . $filename)) {
    echo "Submission Completed!";
  } else {
    echo "Failed to upload file.";
  }
}
?>
<html>
<body>
  <div style=" width:350px; margin:10px auto">
    <form action="#" method="post" enctype="multipart/form-data">
      <fieldset>
        <input type="file" name="names"><br><br>
        <input type="submit" name="submit"><br>
      </fieldset>
    </form>

    <?php
    if ($img && $filename) {
      echo "<img src='{$img}{$filename}' width='300px'>";
    }
    ?>
  </div>
</body>
</html>