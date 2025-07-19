<?php
session_start();

// লগইন না করলে login.php তে ফেরত
if (!isset($_SESSION["sname"])) {
    header("Location: login.php");
    exit();
}

// সেটআপ
$imgDir = "pic/";
$allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
$maxSizeKb = 400;
$uploadedImages = [];

// ফাইল আপলোড চেক
if (isset($_POST['submit'])) {
    foreach ($_FILES['file']['name'] as $i => $name) {
        $tmp = $_FILES['file']['tmp_name'][$i];
        $type = $_FILES['file']['type'][$i];
        $sizeKb = $_FILES['file']['size'][$i] / 1024;

        if ($sizeKb > $maxSizeKb) {
            echo "<p style='color:red;'>$name is too big!</p>";
            continue;
        }

        if (!in_array($type, $allowedTypes)) {
            echo "<p style='color:red;'>$name type not allowed!</p>";
            continue;
        }

        if (move_uploaded_file($tmp, $imgDir . $name)) {
            $uploadedImages[] = $name;
        }
    }
}
?>

<!-- HTML PART -->
<!DOCTYPE html>
<html>
<head><title>Upload</title></head>
<body>
    <h2>Upload Photos</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file[]" multiple required><br>
        <input type="submit" name="submit" value="Upload">
    </form>

    <?php if (!empty($uploadedImages)): ?>
        <h3>Uploaded Images</h3>
        <?php foreach ($uploadedImages as $img): ?>
            <img src="pic/<?php echo $img; ?>" width="150">
        <?php endforeach; ?>
    <?php endif; ?>
    <br><br>
    <a href="logout.php">Logout</a>
</body>
</html>
