<?php
$dbase =mysqli_connect('localhost','root','','crud-one');
if(isset($_POST['submit'])){
    $i=$_POST['id'];
    $n=$_POST['name'];
    $e=$_POST['email'];
    $s=$_POST['salary'];

$sql="INSERT INTO employee_details(id,username,email,salary) VALUES ('$i','$n','$e','$s')";

if(mysqli_query($dbase,$sql)==TRUE){
    echo "DATA INSERTED";
    header ('location:connectionview.php');
}else{
    echo "NOT INSERTED";
}
}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<div style="background-color: lavender; width: 30%; margin-left: 20px;">
    <body style="background-image: url(pexels-photo-3658208);
background-repeat: no-repeat;
background-attachment: auto;
background-position: cover;">
   
    <form action="">
        <fieldset>
            <legend style = "text-align:center">Information Form</legend>
            ID: <br>
            <input type="Number" name="id"> <br> <br>
            Username: <br>
            <input type="text" name="name"> <br> <br> 
            Email : <br>
            <input type="email" name="email"> <br> <br>
            Salary: <br>
            <input type="Number" name="salary"> <br> <br>
        <input type="Submit" name="Submit" value="submit">
        </fieldset>
    </form>
</div>    
</body>
</html>