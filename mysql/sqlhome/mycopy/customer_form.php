<?php 
include("connect.php");

if (isset($_POST['submit'])) {
    $user_name = $_POST['customers_name'];
    $user_email = $_POST['customers_email'];  
    $easy_shopping->query("CALL call_customer('$user_name','$user_email')");
}
?>

<div class="card mb-4 shadow-sm">
    <div class="card-header bg-primary text-white fw-bold">Customer Information</div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label fw-bold">Name:</label>
                <input type="text" class="form-control" name="customers_name">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Email:</label>
                <input type="email" class="form-control" name="customers_email">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Add Customer</button>
        </form>
    </div>
</div>
