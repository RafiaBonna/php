<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
Enter your Number: <input type="number" name="num" required>
<input type="submit" name="submit" value="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $data=$_POST['num'];
        $isPrime=True;
        if($data==1 || $data==0){
            $isPrime =false;
            echo "$data is not a prime or composite number";
        } else{
            for($i=2; $i<($data);$i++){
                if($data % $i==0){
                    $isPrime=false;
                    break;
                }
            }
        }
        if($isPrime){
            echo "$data is a prime number";
        } else{
            echo "$data is  not a prime number";
        }
    }
    ?>
</body>
</html>