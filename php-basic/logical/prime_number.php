<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--  <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $name = $_POST['n']; 
       echo "You entered: " . htmlspecialchars($name); 
   }
   ?> -->
   <form method="POST">
    Name:
    <input type="text" name="n">
    <input type="submit" value="Submit">
   </form> 
 
  <?php   
    if($_POST){
        $fact = 1;  
        // getting value from input text box 'number'  
        $number = $_POST['number'];  
        echo "Factorial of $number:<br><br>";  
        //start loop  
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $i;  
            }  
            echo $fact . "<br>";  
    }  
?> 

<!-- incomplete -->

   </body>
</html>