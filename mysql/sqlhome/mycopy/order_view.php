<?php 
include("connect.php");

$query = "SELECT o.id AS order_id, c.customer_name, c.email, o.brand_name, o.products_name, o.quantity, o.price 
          FROM orders o
          JOIN customers c ON o.customer_id = c.id
          ORDER BY o.id DESC";

$result = $easy_shopping->query($query);
?>

<div class="card shadow-sm">
    <div class="card-header bg-dark text-white fw-bold">Order Records</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Name</th><th>Email</th><th>Brand</th><th>Product</th><th>Qty</th><th>Price</th><th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row['customer_name'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['brand_name'] ?></td>
                            <td><?= $row['products_name'] ?></td>
                            <td><?= $row['quantity'] ?></td>
                            <td><?= $row['price'] ?></td>
                            <td><a href="edit.php?id=<?= $row['order_id'] ?>" class="btn btn-warning btn-sm">Edit</a></td>
                            <td><a href="delete.php?id=<?= $row['order_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>