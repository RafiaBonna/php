
<?php
$db = mysqli_connect('localhost','root','','salary_table');
//display or show data
if(isset($_GET['id'])){
    $getid = $_GET['id'];
    $sql = "SELECT * FROM employee_details WHERE id=$getid";
    $query =mysqli_query($db,$sql);
    $data = mysqli_fetch_assoc($query);
    $id =$data['id'];
    $name =$data['username'];
    $email =$data['email'];
    $salary=$data['salary'];
}
//update data post
if(isset($_POST['edit'])){
       $id =$_POST['id'];
    $name =$_POST['username'];
    $email =$_POST['email'];
    $salary=$_POST['salary'];
    $sqli1 ="UPDATE employee_details SET
                 username='$name',
                 age='$age',
                 email='$email', 
                 salary='$salary'
                 where id ='$id' ";
                 if(mysqli_query($db,$sqli1) ==TRUE){
                    header('location:delete.php');
                    echo "DATA update";
                 } else{
                    echo $sqli1 . "Data not update";
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
            ID: <br>
             <input type="number" name="id" value="<?php echo $id?>"> <br> <br> 
            Username: <br>
            <input type="text" name="name" value="<?php echo $name?>"> <br> <br> 
            Email : <br>
            <input type="email" name="email" value="<?php echo $email?>"> <br> <br>
            Salary: <br>
            <input type="number" name="salary" value="<?php echo $salary?>"> <br> <br>
        <input type="submit" name="edit" value="Edit">
        </fieldset>
    </form>
</div>    
</body>
</html>