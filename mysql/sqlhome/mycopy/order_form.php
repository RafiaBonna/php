<?php 
include("connect.php");
$customers = $easy_shopping->query("SELECT * FROM customers");

if(isset($_POST['porder'])){
    $bname = $_POST['bname'];
    $pname= $_POST['pname'];
    $pquantity= $_POST['pquantity'];
    $pprice= $_POST['pprice'];
    $cid= $_POST['cid'];
    $easy_shopping->query("INSERT INTO orders(brand_name, products_name, quantity, price, customer_id) VALUES ('$bname', '$pname', $pquantity, '$pprice', $cid)");
}
?>

<div class="card mb-4 shadow-sm">
    <div class="card-header bg-success text-white fw-bold">Order Information</div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label fw-bold">Brand:</label>
                <input type="text" class="form-control" name="bname">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Product Name:</label>
                <input type="text" class="form-control" name="pname">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Quantity:</label>
                <input type="number" class="form-control" name="pquantity">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Price:</label>
                <input type="number" class="form-control" name="pprice">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Select Customer:</label>
                <select name="cid" class="form-select" required>
                    <option value="">-- Select --</option>
                    <?php while ($row = $customers->fetch_assoc()): ?>
                        <option value="<?= $row['id'] ?>"><?= $row['email'] ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <input type="submit" name="porder" class="btn btn-success" value="Place Order">
        </form>
    </div>
</div>