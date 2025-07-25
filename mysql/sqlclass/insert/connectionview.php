<!-- $db = mysqli_connect('localhost','root','','salary_table');
এই লাইনে তুমি তোমার কম্পিউটার বা সার্ভারে থাকা MySQL ডাটাবেসের সাথে সংযোগ তৈরি করছো।

'localhost' মানে ডাটাবেস একই মেশিনে আছে।

'root' হলো ডাটাবেস ইউজারনেম (ডিফল্ট অ্যাডমিন)।

'' এখানে ডাটাবেস পাসওয়ার্ড দেওয়া হয়নি।

'salary_table' হলো তোমার ডাটাবেসের নাম।

এই সংযোগ $db ভেরিয়েবলে সংরক্ষণ করো, যাতে পরের অংশে তুমি ডাটাবেসে প্রশ্ন (query) চালাতে পারো। -->
<?php
$db =mysqli_connect('localhost','root','','salary_table');
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
</tr>
<?php
$employee_details =$db->query("select * from employee_details");
while(list($id,$name,$email,$salary)=$employee_details->fetch_row()){
    echo "<tr>
     <td>$id</td>
    <td>$name</td>
    <td>$email</td>
    <td>$salary</td>
    </tr>";
}
?>
    </table>
</div>
</body>
</html>