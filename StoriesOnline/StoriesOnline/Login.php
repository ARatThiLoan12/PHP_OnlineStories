<?php

require 'connectdatabase.php';
global $result;
$sql = "SELECT * FROM account";
$result = $db->query($sql)->fetch_all();

function get_login($name,$pass){
	global $result;
	global $checkLogin;
	$check=false;      
	for($i=0;$i<count($result);$i++){
		if($result[$i][1]==$name && $result[$i][2]==$pass){
			if($result[$i][3]=="User"){
			?>
			<script>
				location.href = "UI2.php";
			</script>
			<?php
			}else{
				?>
			<script>
				location.href = "admin.php";
			</script>
			<?php
			}
			$arr=array($name,$pass);
			$_SESSION['login'] = $arr;
			$checkLogin=true;  
			$check=true;
			return $name;
		}
	}
	if($check==false){
		?>
		<script>
			alert("login fail");                 
		</script>

		<?php
	}
}
if(isset($_POST['login'])){
	$name=$_POST['username'];
	$pass=$_POST['password'];
	get_login($name,$pass);
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