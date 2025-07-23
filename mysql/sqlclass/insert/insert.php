<?php
$db =mysqli_connect('localhost','root','','salary_table');
if(isset($_POST['submit'])){
    $n=$_POST['sname'];
    $e=$_POST['semail'];
    $s=$_POST['ssalary'];

$sql="INSERT INTO employee_details(username,email,salary) VALUES ('$n','$e','$s')";

if(mysqli_query($db,$sql) == TRUE){
    echo "DATA INSERTED !";
    header ('location:connectionview.php');
}else{
    echo "NOT INSERTED !";
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

<div style="background-color: lavender; width: 30%; margin-left: 20px;">
    <body >
    <form  method="POST">
        <fieldset>
            <legend style = "text-align:center">Information Form</legend>
            Username: <br>
            <input type="text" name="sname"> <br> <br> 
            Email : <br>
            <input type="email" name="semail"> <br> <br>
            Salary: <br>
            <input type="number" name="ssalary"> <br> <br>
        <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
</div>    
</body>
</html>



