<?php
$db = mysqli_connect('localhost', 'root', '', 'product_db');

if (isset($_POST['submit'])) {
    $name = $_POST['cname'];
    $cont = $_POST['contact'];
    $db->query("call call_categories('$name','$cont')");
}

if (isset($_POST['ssubmit'])) {
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $db->query("call call_products('$pname','$price')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bootstrap Form</title>
    <!-- ✅ Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row g-4">
        <!-- ✅ User Form -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    User Information
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Username:</label>
                            <input type="text" name="cname" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contact:</label>
                            <input type="text" name="contact" class="form-control" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- ✅ Product Form -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    Product Information
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Product Name:</label>
                            <input type="text" name="pname" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Select User:</label>
                            <select name="user_id" class="form-select" required>
                                <option value="">-- Select User --</option>
                                <?php
                                $users = $db->query("SELECT * FROM categories");
                                while ($row = $users->fetch_assoc()):
                                ?>
                                    <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price:</label>
                            <input type="number" name="price" class="form-control" required>
                        </div>

                        <button type="submit" name="ssubmit" class="btn btn-success w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ✅ Bootstrap JS (Optional for interactivity) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
