<?php 
include("connect.php");

$customers = $easy_shopping->query("SELECT * FROM customers");


if(isset($_POST['porder'])){
    $bname = $_POST['bname'];
    $pname= $_POST['pname'];
    $pquantity= $_POST['pquantity'];
    $pprice= $_POST['pprice'];
    $cid= $_POST['cid'];
    $easy_shopping->query("INSERT INTO orders(brand_name, products_name, quantity, price, customer_id)VALUES ('$bname', '$pname', $pquantity, '$pprice', $cid)");

//     if($easy_shopping->query("INSERT INTO orders(brand_name, products_name, quantity, price, customer_id)VALUES ('$bname', '$pname', $pquantity, '$pprice', $cid)")
// ){
//     echo "<h3 style='text-align: center;color:green;'>Information Added </h3>";
// }else{
//     echo "<h3 style='text-align: center; color:red;'>Information is not Added </h3>";

// }

    
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container mt-5">
        <div class="card  shadow-sm">
             <div class="card-header fs-5 text-center bg-primary text-light fw-bolder">
                ORDER INFORMATION
            </div>
            <div class="card-body">
                    <form action="" method="post"> 
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label fw-bold">Brand Name :</label>
                            <input type="text" class="form-control" name="bname" id="bname" placeholder="brand name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Product Name :</label>
                            <input type="text" class="form-control" name="pname" id="pname" placeholder="product name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Quantity :</label>
                            <input type="number" class="form-control" name="pquantity" id="pquantity" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Product Price :</label>
                            <input type="number" class="form-control" name="pprice" id="pprice" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Users Contact :</label>
                            <select id="cid" name="cid" class="form-select" required>
                                <option value="">-- Select User Contact --</option>
                                <?php while ($row = $customers->fetch_assoc()): ?>
                                    <option value="<?= $row['id'] ?>"><?= $row['email'] ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                            <input type="submit" class="form-control bg-primary text-white fw-bold" name="porder" id="porder" value="Place Order" >

                    </form>
            </div>
    
        </div>
    </div>      

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>
