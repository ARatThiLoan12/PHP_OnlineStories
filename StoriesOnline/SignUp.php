<?php
require 'connectdatabase.php';
$sql = "SELECT * FROM account";
$result = $db->query($sql)->fetch_all();

if(isset($_POST["signup"])){
	$name = $_POST['username'];
	$pwd = $_POST['password'];
	$cf = $_POST['confirm'];

	if($pwd==$cf){
		$sql = "INSERT INTO account VALUES (null,'".$name."','".$pwd ."','User')";
		$db->query($sql);
		// doan nay chua toi uu
		header("Location: UI2.php");
	}else header("Location: SignUp.php");
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
	<div class="title"><h1>Register</h1></div>
	<div class="container2">
		<div class="left"></div>
		<div class="right">
			<div class="formBox">
				<form action="" method="post">
					<p><i class="fas fa-user" style="margin-right: 5px;"></i>User name</p>
					<input type="text" name="username" placeholder="Online">
					<p><i class="fas fa-lock" style="margin-right: 5px;"></i>Password</p>
					<input type="Password" name="password" placeholder="******">
					<p><i class="fas fa-lock" style="margin-right: 5px;"></i>Confirm password</p>
					<input type="Password" name="confirm" placeholder="******">
					<input type="submit" name="signup" value="Sign Up">
				</form>
			</div>
		</div>
	</div>
</body>
</html>