<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class SavingsAccount{
        private $balance =500;
        public function deposit ($amount){
            $this->balance += $amount;
        }
         public function getBalance (){
           return $this->balance;
    }
     private function data(){
           return "This is private function Savings balance";
}
 public function display(){
    return $this ->data();
 }
 }
 $account= new SavingsAccount();
 $account-> deposit(5000);
 //echo $account->balance; //error cannot access private property
 echo $account ->getBalance();
 echo "<br>";
  echo $account ->display();
  // echo $account ->info(); //error
    ?>
</body>
</html>