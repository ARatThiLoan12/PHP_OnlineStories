<?php

$db= new mysqli("localhost","root","","storiesonline");
$result = "SELECT *from "

if(isset($_POST["login"])){
	
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
		.title{
			text-align: center;
			padding: 50px 0 20px;
		}
		.title h1{
			margin: 0;
			padding: 0;
			color: #262626;
			text-transform: uppercase;
			font-size: 36;
		}
		.container{
			height: 400px;
			width: 50%;
			background: #fff;
			margin: 0 auto;
			border: 2px solid #fff;
			box-shadow: 0 15px 40px rgba(0, 0, .5);
		}
		.container .left{
			float: left;
			width: 50%;
			height: 400px;
			background: url(img/login-img.jpg);
			background-size: cover;
			box-sizing: border-box;
		}
		.container .right{
			float: right;
			width: 50%;
			height: 400px;
			box-sizing: border-box;
		}
		.formBox{
			margin: 0;
			padding: 0;
			padding: 40px 40px;
			font-weight: bold;
			color: #a6af13; 
		}
		.formBox input{
			margin-bottom: 5px;
			width: 100%;
		}
		.formBox input[type="text"],
		.formBox input[type="Password"]{
			border: none;
			border-bottom: 2px solid #a6af13;
			outline: none;
			height: 40px;
		}
		.formBox input[type="text"]:focus,
		.formBox input[type="Password"]:focus{
			border-bottom: 2px solid #262626;
		}
		.formBox input[type="submit"]{
			height: 40px;
			outline: none;
			border: none;
			color: #fff;
			background: #262626;
			cursor: pointer;
		}
		.formBox input[type="submit"]:hover{
			background: #a6af13;
		}
		.formBox a{
			text-decoration: none;
			color: #262626;
			font-size: 12px;
			font-weight: bold;
		}
	</style>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body>
	<div class="title"><h1>Sign In</h1></div>
	<div class="container">
		<div class="left"></div>
		<div class="right">
			<div class="formBox">
				<form action="" method="post">
					<p><i class="fas fa-user" style="margin-right: 5px;"></i>User name</p>
					<input type="text" name="name" placeholder="Online">
					<p><i class="fas fa-lock" style="margin-right: 5px;"></i>Password</p>
					<input type="Password" name="pass" placeholder="******">
					<input type="submit" name="login" value="Sign In">
					<a href="#">Forget Password?</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>