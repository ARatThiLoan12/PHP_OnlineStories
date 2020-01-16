<?php
	$db = new mysqli('localhost', 'root', '', 'MVC');

	if(isset($_POST['login'])){
		$userName = $_POST['userName'];
		$password = $_POST['password'];
	
		$sql = "SELECT * FROM user where username ='$userName' and pass = '$password'";;
		$result = $db->query($sql)->fetch_all();

		if(count($result)>0){
			echo "<script>alert('Login successful');</script>";
		}else {
			echo "<script>alert('Login fail');</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="userName">
		<input type="text" name="password">
		<button type="submit" name="login">Login</button>
	</form>
</body>
</html>