<?php  
$db = new mysqli('localhost','root','','companies');

// Manufacturer insert
if(isset($_POST['btnSubmit'])){
	$mname = $_POST['mname'];
	$contact = $_POST['contact'];
	$db->query("CALL add_manufacture('$mname','$contact')");
}

// Product insert
if(isset($_POST['addProduct'])){
	$pname = $_POST['pname'];
	$price = $_POST['price'];
	$mid = $_POST['manufac'];
	$db->query("CALL add_product('$pname','$price','$mid')");
}

// Manufacturer delete
if(isset($_POST['delmanufact'])){
	$mid = $_POST['manufac'];
	$db->query("DELETE FROM manufacturer WHERE id='$mid'");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Manufacturer & Product Management</title>

	<!-- ✅ Standard CSS Styling -->
	<style>
		body {
			font-family: Arial, sans-serif;
			background: #f4f6f9;
			margin: 20px;
			padding: 20px;
			color: #333;
		}

	
		form {
			background: #ffffff;
			padding: 20px;
			margin-top: 20px;
			box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
			border-radius: 8px;
			max-width: 600px;
		}

		table {
			width: 100%;
			border-collapse: collapse;
		}

		td, th {
			padding: 10px;
			text-align: left;
		}

		input[type="text"], select {
			width: 100%;
			padding: 8px 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
		}

		input[type="submit"] {
			background-color: #3498db;
			color: white;
			border: none;
			padding: 10px 16px;
			border-radius: 4px;
			cursor: pointer;
			transition: background 0.3s ease;
		}

		input[type="submit"]:hover {
			background-color: #2980b9;
		}

		/* View Product Table */
		table[border="1"] {
			margin-top: 20px;
			background: white;
			box-shadow: 0 2px 6px rgba(0,0,0,0.1);
		}

		th {
			background-color: #3498db;
			color: white;
			text-align: center;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		tr:hover {
			background-color: #eaf4fd;
		}
	</style>
</head>
<body>

	<h3>Add Manufacturer</h3>
	<form method="post">
		<table>
			<tr>
				<td><label for="mname">Name</label></td>
				<td><input type="text" name="mname" required /></td>
			</tr>
			<tr>
				<td><label for="contact">Contact</label></td>
				<td><input type="text" name="contact" required /></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="btnSubmit" value="Add Manufacturer" /></td>
			</tr>
		</table>
	</form>

	<h3>Add Product</h3>
	<form method="post">
		<table>
			<tr>
				<td><label for="pname">Name</label></td>
				<td><input type="text" name="pname" required /></td>
			</tr>
			<tr>
				<td><label for="price">Price</label></td>
				<td><input type="text" name="price" required /></td>
			</tr>
			<tr>
				<td><label for="manufac">Manufacturer</label></td>
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
				<td></td>
				<td><input type="submit" name="addProduct" value="Add Product" /></td>
			</tr>
		</table>
	</form>

	<h3>Delete Manufacturer</h3>
	<form method="post">
		<table>
			<tr>
				<td><label for="manufac">Manufacturer</label></td>
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
				<td></td>
				<td><input type="submit" name="delmanufact" value="Delete Manufacturer" /></td>
			</tr>
		</table>
	</form>

	<h3>View Products</h3>
	<table border="1"> 
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Price</th>
			<th>Manufacturer</th>
			<th>Contact</th>
		</tr>
		<?php 
			$product = $db->query("SELECT * FROM view_product");
			while(list($_id,$_name,$_price,$_mname,$_mcont) = $product->fetch_row()){
				echo "<tr> 
						<td>$_id</td>
						<td>$_name</td>
						<td>$_price</td>
						<td>$_mname</td>
						<td>$_mcont</td>
					</tr>";
			}
		?>
	</table>

</body>
</html>
<!-- 	h3 {
			color: #2c3e50;
			border-bottom: 2px solid #3498db;
			padding-bottom: 5px;
			margin-top: 40px;
		}
 -->