<?php
$db = mysqli_connect('localhost','root','','products');
if(isset($_POST['submit'])){
    $n =$_POST['sname'];
    $p =$_POST['price'];
    $uid=$_POST['uid'];
    $db->query("call call_skin_cares('n','p','uid')");
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
            <legend style = "text-align:center">Insert Data</legend>
            Productname: <br>
            <input type="text" name="sname"> <br> <br> 
            Price : <br>
            <input type="number" name="price"> <br> <br>
            User: <br>
            <input type="text" name="uid"> <br> <br>
        <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
</div>    
</body>
</html>
