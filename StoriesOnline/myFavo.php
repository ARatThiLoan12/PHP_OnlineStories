<?php
	require 'connectdatabase.php';
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
		header('location: myFavo.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		<style type="text/css">
			img{
				width: 200px;
				height: 400px;
			}
            table,th,td{
            border: 3px solid lightgrey;
            border-collapse: collapse;
            text-align: center;
            align-items: center;
            }
            th,td{
            padding: 10px 10px;
            }
		</style>
	</title>
</head>
<body>
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
		echo '<td>'." <img style='height: 200px; width: 200px;' src='img/".$display[$i][4]."'>".'</td>';
		echo '<td>'. $display[$i][1] .'</td>';
		echo '<td>'. $display[$i][2] .'</td>';
		echo '<td>'. $display[$i][3] .'</td>';
		echo '<td>'. $display[$i][5] .'</td>';
		echo '<td><button type="submit" name="dlt" value="'.$display[$i][0] .'">Delete</button></td>';
		echo '</tr>';
	}?>
	</form>
	</table>
</body>
</html>