<?php
$db=mysqli_connect('localhost','root','','employee_management');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{

        }
    </style>
</head>
<body>
 <div>
    <h2 style= text-align:center>Employee Information</h2>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>department</th>
            <th>salary</th> 
            <th>join_date</th>
            <th>created_at</th>
        </tr>
        <?php
        $employees=$db->query("select* from employees");
        while(list($id,$name,$email,$phone,$department,$salary,$join_date,$created_at)=$employees->fetch_row()){
            echo"
            <tr>
            <td>$id</td>
            <td>$name</td>
            <td>$email</td>
            <td>$phone</td>
            <td>$department</td>
            <td>$salary</td> 
            <td>$join_date</td>
            <td>$created_at</td>
            </tr>
            "
        }
        ?>
    </table>
 </div>   
</body>
</html>