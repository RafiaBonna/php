<?php session_start();
  
  if(isset($_POST["Login"])){
	  
	  $username=$_POST["username"];
	  $password=$_POST["password"];
	  
	  $file=file("dataa.txt");  //form password set here
	  
	  foreach($file as $line){
		  
		  list($_username,$_password)=explode(",",$line);
		  
		  if(trim($_username)==$username && trim($_password)==$password){
			  
			
			 $_SESSION["sname"]=$username;
			
			 header("location:mainform.php");
			  
		  }else{
			  
			  $msg="Username or Password is incorrect!";
		  }
		  
	  }
	  
  }

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
 <?php
   echo isset($msg)?$msg:"";
 ?>
 <form action="#" method="post">
   <div>
    Username : <br/>
    <input type="text" name="username" />
   </div>
   <div>
    Password :<br/>
    <input type="password" name="password" />
   </div> <br/>
   <div>
    <input type="submit" value="Log In" name="Login" />
   </div>
 </form>
</body>
</html>