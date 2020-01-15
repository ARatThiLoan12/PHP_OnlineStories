<?php
	require_once '../database/connectdatabase.php';

	session_start();
	$idUser = $_SESSION['id']; 

	$sql = "SELECT C.idCart, P.proName, P.author, P.type, P.img, P.details
	FROM products as P, cart as C 
	WHERE P.id = C.idStory and
	 C.idUser=" .$idUser.";";
	$display=$db->query($sql)->fetch_all();

	if(isset($_POST['dlt'])){
		echo "<script>alert('Hi');</script>";
		$deleteFromfavo = "DELETE FROM cart WHERE idCart=" .$_POST['dlt']." ;";
		$db->query($deleteFromfavo);
		header('location: favoritePage.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style type="text/css">
			img{
				width: 200px;
				height: 400px;
			}
            table, th, td{
            border: 1px solid lightgrey;
            border-collapse: collapse;
            text-align: center;
            align-items: center;
            margin-top: 20px;
            margin-bottom: 20px;
            }
            th, td{
            padding: 10px 10px;
            }
		</style>
		<link rel="stylesheet" type="text/css" href="../css/sheetStyle.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body>
	<?php require_once 'header.php';?>
	<div class="container">
	<table>
		<tr>
			<th>Bìa truyện</th>
			<th>Tên truyện</th>
			<th>Tác giả</th>
			<th>Thể loại</th>
			<th>Tóm tắt truyện</th>
			<th></th>
		</tr>
		<form action="" method="post">
	<?php for($i=0; $i<count($display); $i++){
		echo '<tr>';
		echo '<td>'." <img style='height: 200px; width: 200px;' src='../img/".$display[$i][4]."'>".'</td>';
		echo '<td>'. $display[$i][1] .'</td>';
		echo '<td>'. $display[$i][2] .'</td>';
		echo '<td>'. $display[$i][3] .'</td>';
		echo '<td>'. $display[$i][5] .'</td>';
		echo '<td><button type="submit" name="dlt" value="'.$display[$i][0] .'">Delete</button></td>';
		echo '</tr>';
	}?>
	</form>
	</table>
	</div>
	<?php require 'footer.php';?>
</body>
</html>