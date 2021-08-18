<?php 

$host="localhost";
$user="root";
$password="";
$db="demo";

MySQLi_connect($host,$user,$password);
MySQLi_select_db($db,'demo');

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=MySQLi_query($sql);
    
    if(MySQLi_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>


<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="style.css">
	<link rel="stylesheet" a href="font-awesome.min.css">
</head>
<body>
	<div class="container">
	<img src="image/login.png"/>
		<form method="POST" action="#">
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Enter your password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>