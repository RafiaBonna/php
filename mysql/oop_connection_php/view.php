<?php
$db =mysqli_connect('localhost','root','','e_commerce');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div>
    <h2>Employee Information</h2>
    <table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Email</th>
</tr>
<?php
$purchase_details =$db->query("select * from purchase_details");
while(list($id,$name,$age,$email,)=$purchase_details->fetch_row()){
    echo "<tr>
     <td>$id</td>
    <td>$name</td>
    <td>$age</td>
    <td>$email</td>
    </tr>";
}
?>
    </table>
</div>
</body>
</html>
