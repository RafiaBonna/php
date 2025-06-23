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
//   
  echo strlen("Country");
  echo "<br>";

  function name(){
    return strlen("Canada");
  }
echo name();

echo "<br>";
// str_word_count
function data(){
    return str_word_count("This is php and mysql demo.");
}
echo data();
echo "<br>";
// strrev
function goal(){
    return strrev("Saheb");
}
echo goal ();
echo "<br>";
// strtoupper
function doll(){
    return strtoupper("teddy");
}
echo doll ();
echo "<br>";
// strtolower
function weather(){
    return strtolower("Rainy");
}
echo weather ();
echo "<br>";
// str_replace
function uni(){
    $bm ="Learn too say No";
    return str_replace('too','to',$bm);
};
echo uni();
echo "<br>";

  ?>  
</body>
</html>