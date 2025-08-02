<?php
include("connect.php");

    $query = "SELECT o.id AS order_id, c.customer_name, c.email, o.brand_name, o.products_name, o.quantity, o.price 
    FROM orders o
    JOIN customers c ON o.customer_id = c.id
    ORDER BY o.id DESC";


$result = $easy_shopping->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    
<div class="mt-4">
    <h5 class="text-center text-white bg-primary p-2 rounded">Order Records</h5>
    
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover align-middle ">
    <thead class="table-dark text-center">
        <tr>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Brand</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th colspan='2'>Actions</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= ($row['customer_name']) ?></td>
                <td><?= ($row['email']) ?></td>
                <td><?= ($row['brand_name']) ?></td>
                <td><?= ($row['products_name']) ?></td>
                <td><?= ($row['quantity']) ?></td>
                <td><?= ($row['price']) ?> </td>
                <td>

                    <a href="edit.php?id=<?= $row['order_id'] ?>" class="btn btn-sm btn-warning me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    </td>
                    <td>
                    <a href="delete.php?id=<?= $row['order_id'] ?>" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="return confirm('Are you sure you want to delete this record?')">
                        <i class="bi bi-trash"></i>
                    </a>

                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
