<?php
$db =mysqli_connect('localhost','root','','salary_table');
if(isset($_GET['deleteid'])){
    $deleteid_id =$_GET['deleteid'];
    $sql = "DELETE FROM employee_details WHERE id =$deleteid_id";
    if(mysqli_query($db,$sql) == TRUE){
        header('location:delete.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  body {
    font-family: Arial, sans-serif;
    padding: 20px;
  }

  table {
     margin-left: auto;
    margin-right: auto;
    border-collapse: collapse;    /* collapse borders into a single line */
    width: 50%;                   /* full-width table */
  }

  th, td {
    border: 1px solid #ccc;       /* light gray border */
    padding: 8px;                 /* space inside cells */
    text-align: left;             /* align text left */
  }

  th {
   
    background-color: #9ed0f1ff;    /* light header background */
  }

  tr:nth-child(odd) {
    background-color: #fafafa;    /* zebra stripe on odd rows */
  }

  tr:hover {
    background-color: #f1f1f1;    /* hover highlight */
  }
</style>
</head>
<body>
<div>
    <h2 style = text-align:center>Employee Information</h2>
    <table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Salary</th>
    <th>Action</th>
</tr>
<?php
$employee_details = $db-> query ("select * from employee_details");
while(list($_id,$_name,$_email,$_salary) = $employee_details->fetch_row()){
    echo "
    <tr>
    <td>$_id</td>
    <td>$_name</td>
    <td>$_email</td>
    <td>$_salary</td>
    <td> 
    <a href ='delete.php?deleteid=$_id'>
    Delete
    </a> ||
    <a href='edit.php?id=$_id'> 
							<span>Edit</span> </a>
    </td>
    </tr>";
}
?>
    </table>
</div>
