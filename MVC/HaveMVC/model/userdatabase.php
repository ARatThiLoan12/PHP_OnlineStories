<?php
	require 'database.php';
	require 'user.php';

	function login($username, $password){
		global $db;
		$sql = "SELECT * FROM user where username ='$username' and pass = '$password'";;
		$result = $db->query($sql)->fetch_all();

		if(count($result)>0){
			$user = new User();
			$user->fullname = $result[0][1];
			return $user;
		}
		return null;
		// if(count($result)>0){
		// 	echo "<script>alert('Login successful');</script>";
		// }else {
		// 	echo "<script>alert('Login fail');</script>";
		// }
	}
?>