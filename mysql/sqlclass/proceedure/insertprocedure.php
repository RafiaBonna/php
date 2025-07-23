<?php
$db = mysqli_connect('localhost','root','','salary_table');
if(isset($_POST['submit'])){
    $name =$_POST['username'];
    $email =$_POST['email'];
    $salary =$_POST['salary'];
    $db->query("call call_users('$name','$email','$salary')");
}
?>
<div style="background-color: lavender; width: 30%; margin-left: 20px;">
    <body >
    <form  method="POST">
        <fieldset>
            <legend style = "text-align:center">Information Form</legend>
            Username: <br>
            <input type="text" name="username"> <br> <br> 
            Email : <br>
            <input type="email" name="email"> <br> <br>
            Salary: <br>
            <input type="number" name="salary"> <br> <br>
        <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
</div>    
</body>
</html>