<?php
if(isset($_POST['bin'])){
    $clientname=$_POST['name'];
    $code=$_POST['word'];
    $file=file("storing.txt");
    foreach($file as $serial){
        list($_clientname,$_code)=explode(",",$serial);
        if($_clientname==$clientname && $_code==$code){
            header("location:log_class.php");
        } else{
            $msg="Client name or password is incorrect!";
        }
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
     <?php 
    echo isset($msg)?$msg:"";
    ?>
    <form action="#" method="post"> 
    <div>
    Username<br/>
    <input type="text" name="name" />
   </div>
   <div>
    Password<br/>
    <input type="text" name="word" />
   </div>
   <div>
    <input type="submit" value="Log In" name="bin" />
   </div>
    </form>
</body>
</html>