<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>global_scope</title>
</head>
<body>
      <?php
   $name = "Weeding Ceremony";
   function programme(){
      global $name;
      echo $name; // ✅ এখন কাজ করবে
   }
   programme();
   ?>
         <!-- <?php
   $name = "Birthday Ceremony";
   function gramme(){
      echo $name; //  ❌ এখানে কাজ করবে না
   }
   gramme();
   ?>  -->  
</body>
</html>