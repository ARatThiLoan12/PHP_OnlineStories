<?php
require '../model/user.php';
session_start();
$user = null;
	if(isset($_SESSION['isLogin'])){
		if($_SESSION['isLogin'] == true){
			$user = new User();
			$user->fullname = $_SESSION['fullname'];
			echo $user->fullname;
		} 
	}else{
		echo "null";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if($user == null){?>
		<button><a href="login.php">Login</a></button>
	<?php } else {?>
		<h1> Hello <?php echo $user->fullname; ?> </h1>
	<?php } ?>
</body>
</html>