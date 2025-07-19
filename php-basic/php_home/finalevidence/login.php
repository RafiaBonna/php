<?php
session_start();

// যদি ফর্ম সাবমিট হয়
if (isset($_POST["Login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // ইউজার ডেটা ফাইল থেকে পড়া
    $file = file("dataa.txt");

    // লাইন ধরে ধরে মিলিয়ে দেখা
    foreach ($file as $line) {
        list($savedUser, $savedPass) = explode(",", trim($line));
        
        if ($username === trim($savedUser) && $password === trim($savedPass)) {
            $_SESSION["sname"] = $username; // লগইন সফল
            header("Location: fileupload.php");
            exit();
        }
    }

    $msg = "Invalid username or password!";
}
?>
<!-- HTML Form start here-->
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($msg)) echo "<p style='color:red;'>$msg</p>"; ?>
    <form method="post">
        Username: <input type="text" name="username" required><br> <br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" name="Login" value="Log In">
    </form>
</body>
</html>