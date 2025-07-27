<!-- <?php
 $db =mysqli_connect('localhost','root','','product_db');
 if(isset($_POST['submit'])){
    $name =$_POST['cname'];
    $cont =$_POST['contact'];
    $db->query("call call_categories('$name','$cont')");
 }
 if(isset($_POST['ssubmit'])) {
     $pname = $_POST['pname'];
    $price = $_POST['price'];
     $db->query("call call_products('$name','$price')");
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<div style="background-color: lavender; width: 30%; margin-left: 20px;">
    <body >
    <form  method="POST">
        <fieldset>
            <legend style = "text-align:center">User Information</legend>
            Username: <br>
            <input type="text" name="cname"> <br> <br> 
            Contact : <br>
            <input type="text" name="contact"> <br> <br>
        <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
</div> 
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<div style="background-color: lavender; width: 30%; margin-left: 20px;">
    <body >
<div>
    <form  method="POST">
        <fieldset>
            <legend style = "text-align:center">Product Information</legend>
            product name: <br>
            <input type="text" name="pname"> <br> <br> 
            <select name="user_id">
                <option value="">--select user--</option>
                <?php
              $st= $db->query("SELECT * FROM products");
              while ($row = $st->fetch_assoc());
                ?>
                <option value="<?=$row['id']?>"<?=$row['pname']?>></option>
            </select>
            price : <br>
            <input type="number" name="price"> <br> <br>
        <input type="submit" name="ssubmit" value="submit">
        </fieldset>
    </form>
    </div> -->