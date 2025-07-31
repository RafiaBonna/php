<?php
$db = new mysqli('localhost', 'root', '', 'shop_management');

// Add Manufacturer
if (isset($_POST['btnSubmit'])) {
    $mname = $_POST['mname'];
    $add = $_POST['dress'];
    $contact = $_POST['contact'];
    $db->query("CALL add_manufacture('$mname','$add','$contact')");
}

// Add Product
if (isset($_POST['addProduct'])) {
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $manu = $_POST['manufac'];
    $db->query("CALL add_product('$pname', $price, $manu)");
}

// Delete Manufacturer
if (isset($_POST['delmanufact'])) {
    $mid = $_POST['manufac'];
    $db->query("DELETE FROM manufacturer WHERE id = $mid");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Manufacturer & Product</title>
      <link rel="stylesheet" href="evi.css">
</head>
<body>

<h2 style="text-align:center;">Manufacturer and Product Management</h2>

<div class="forms-container">
    <!-- Add Manufacturer Form -->
    <form method="post">
        <h3 style="text-align:center;">Add Manufacturer</h3>
        <table>
            <tr>
                <td><label>Name</label></td>
                <td><input type="text" name="mname" required /></td>
            </tr>
             <tr>
                <td><label>Address</label></td>
                <td><input type="text" name="dress" required /></td>
            </tr>
            <tr>
                <td><label>Contact</label></td>
                <td><input type="text" name="contact" required /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="btnSubmit" value="Add Manufacturer" /></td>
            </tr>
        </table>
    </form>

    <!-- Add Product Form -->
    <form method="post">
        <h3 style="text-align:center;">Add Product</h3>
        <table>
            <tr>
                <td><label>Name</label></td>
                <td><input type="text" name="pname" required /></td>
            </tr>
            <tr>
                <td><label>Price</label></td>
                <td><input type="text" name="price" required /></td>
            </tr>
            <tr>
                <td><label>Manufacturer</label></td>
                <td>
                    <select name="manufac" required>
                        <?php 
                            $manufac = $db->query("SELECT * FROM manufacturer");
                            while(list($_mid,$_mname) = $manufac->fetch_row()){
                                echo "<option value='$_mid'>$_mname</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="addProduct" value="Add Product" /></td>
            </tr>
        </table>
    </form>

    <!-- Delete Manufacturer Form -->
    <form method="post">
        <h3 style="text-align:center;">Delete Manufacturer</h3>
        <table>
            <tr>
                <td><label>Manufacturer</label></td>
                <td>
                    <select name="manufac" required>
                        <?php 
                            $manufac = $db->query("SELECT * FROM manufacturer");
                            while(list($_mid,$_mname) = $manufac->fetch_row()){
                                echo "<option value='$_mid'>$_mname</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="delmanufact" value="Delete Manufacturer" /></td>
            </tr>
        </table>
    </form>
</div>

<!-- Product Table -->
<?php 
$sql ="SELECT * FROM view_product";
$result =mysqli_query($db,$sql); 

if ($result->num_rows > 0) {
    echo "<table border='1' width='80%' align='center'>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Price</th>
                <th>Manufacturer</th>
            </tr>";
    while(list($pid, $pname, $price, $mname) = $result->fetch_row()){
        echo "<tr>
                <td align='center'>$pid</td>
                <td>$pname</td>
                <td>$price</td>
                <td>$mname</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p style='text-align:center;'>No products found.</p>";
}
?>

</body>
</html>
