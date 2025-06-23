<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- string function[strlen(),SUBSTR(string,start,length),strtoupper(),strSupper(),str_replace('search','replace','variable'),str_word_count()] -->
  <?php
  echo strlen("Country");
  echo "<br>";

  function name(){
    return strlen("Canada");
  }
echo name();

echo "<br>";
function data(){
    return str_word_count("This is php and mysql demo.");
}
echo data();
echo "<br>";
function goal(){
    return strrev("Saheb");
}
echo goal ();
echo "<br>";
function doll(){
    return strtoupper("teddy");
}
echo doll ();
echo "<br>";
function weather(){
    return strtolower("Rainy");
}
echo weather ();
echo "<br>";
function uni(){
    $bm ="Learn too say No";
    return str_replace('too','to',$bm);
};
echo uni();
echo "<br>";

  ?>  
</body>
</html>