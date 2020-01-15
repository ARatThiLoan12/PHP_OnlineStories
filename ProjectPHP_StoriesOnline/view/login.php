<?php

require_once '../database/connectdatabase.php';

session_start();
function login($name,$pass){
	global $user;
	global $checkLogin;
	$check=false;      
	for($i=0;$i<count($user);$i++){
		if($user[$i]->userName==$name && $user[$i]->password==$pass){
			if($user[$i]->canRead()){
				echo "read";
			?>
			<script>
				location.href = "userInterface.php";
			</script>
			<?php
			}else if($user[$i]->canManage()){
				echo "manage";
				?>
			<script>
				location.href = "adminPage.php";
			</script>
			<?php
			} else {
			?>
			<script>
				location.href = "login.php";
			</script>
			<?php
			}

			$arr=array($name,$pass);
			$_SESSION['login'] = $arr;
			$_SESSION['id'] = $user[$i]->id;
			echo $_SESSION['id'];
			$checkLogin=true;  
			$check=true;
			return $name;
		}
	}
	if($check==false){
		?>
		<script>
			alert("Login fail");                 
		</script>

		<?php
	}
}
if(isset($_POST['login'])){
	$name=$_POST['username'];
	$pass=$_POST['password'];
	login($name,$pass);
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
	<link rel="stylesheet" type="text/css" href="../css/sheetStyle.css">
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