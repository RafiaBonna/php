<?php 
include("connect.php");

if (isset($_POST['submit'])) {
    $user_name = $_POST['customers_name'];
    $user_email = $_POST['customers_email'];  
    $easy_shopping->query("CALL call_customer('$user_name','$user_email')");

    // if ($easy_shopping->query("CALL call_customer('$user_name','$user_email')")) {
    //     echo "<h3 style='text-align: center;color:green;'>Information Added</h3>";
    // } else {
    //     echo "<h3 style='text-align: center'>Information is not Added</h3>";
    //     echo "<p style='color:red; text-align:center; color:red;'>" . $easy_shopping->error . "</p>";
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
                CUSTOMERS INFORMATION
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Customers Name:</label>
                        <input type="text" class="form-control" name="customers_name" id="customers_name" placeholder="customers name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Email Address:</label>
                        <input type="email" class="form-control" name="customers_email" id="customers_email" placeholder="name@example.com">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Add Information</button>
                </form>

            </div>
    
        </div>
    </div>      

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>