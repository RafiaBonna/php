<?php
session_start();
if (isset($_POST["Login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $file = file("dataa.txt");
    foreach ($file as $line) {
        list($_username, $_password) = explode(",", trim($line));
        if (trim($_username) === $username && trim($_password) === $password) {
            $_SESSION["sname"] = $username;
            header("location:mainform.php");
            exit();
        }
    }
    $msg = "Username or Password is incorrect!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h3><?php echo isset($msg) ? $msg : ""; ?></h3>
<form action="#" method="post">
    <div>
        Username:<br>
        <input type="text" name="username" required>
    </div>
    <div>
        Password:<br>
        <input type="password" name="password" required>
    </div><br>
    <div>
        <input type="submit" name="Login" value="Log In">
    </div>
</form>
</body>
</html>