<?php

$db= new mysqli("localhost","root","","storiesonline");
$sql = "SELECT * FROM account";
$result = $db->query($sql)->fetch_all();

session_start();
if(isset($_POST["login"])){
	setcookie("cookie_username",$_POST["username"]);
		$_SESSION["session_username"] = $_POST["username"];
		for ($i=0; $i < count($result); $i++) { 
		if($_POST["username"]==$result[$i][1]&&$_POST["password"]==$result[$i][2]){
			echo "Login succesfully!";
			$_SESSION["userId"] = $result[$i][0];
			header("Location:UI.php");
		}
		else {
			unset($_SESSION["userId"]);
		}
	}
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background: url(img/login-img.jpg);
			background-size: cover;
			font-family: sans-serif;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="CSS/sheetStyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body>
	<div class="title"><h1>Sign In</h1></div>
	<div class="container2">
		<div class="left"></div>
		<div class="right">
			<div class="formBox">
				<form action="" method="post">
					<p><i class="fas fa-user" style="margin-right: 5px;"></i>User name</p>
					<input type="text" name="username" placeholder="Online">
					<p><i class="fas fa-lock" style="margin-right: 5px;"></i>Password</p>
					<input type="Password" name="password" placeholder="******">
					<input type="submit" name="login" value="Sign In">
					<a href="#">Forget Password?</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>