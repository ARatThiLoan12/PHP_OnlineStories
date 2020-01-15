<?php
require_once '../database/connectdatabase.php';

global $checkLogin;
if($checkLogin==true){
	header('location: login.php');
}
session_start();
$idUser = $_SESSION['id'];

for($i=0; $i<count($user); $i++){
	if($idUser == $user[$i]->id){
		echo "<script>alert('Welcome ".$user[$i]->userName."')</script>";
	}
}

if(isset($_POST["love"])){
	$idStory = $_POST["love"];

	$check ="select idStory from cart where idUser = ".$idUser." and idStory=".$idStory.";";
    $check_exist=$db->query($check)->fetch_all();
    if(count($check_exist)<1){
    	$addToFavo = "INSERT INTO cart VALUES (null, " .$idUser."," . $idStory .");";
		$db->query($addToFavo);
    }else echo '<script> alert("This story existed") </script>';
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php require_once 'header.php';?>

	<div class="container">
		<div class="row">
			<?php for ($i=0; $i < count($story); $i++) { ?>
				<div class="col-md-4">
					<div class="product">
						<div class="img-box ">
							<?php echo " <img src='../img/".$story[$i]->img."'>"; ?>
						</div>
						<div class="details">
							<h2><?php echo $story[$i]->name; ?><br><?php echo $story[$i]->author; ?></h2>
							<div class="prich "><?php echo $story[$i]->type; ?></div>
							<div>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half"></i>
							</div>
							<p>
								<?php echo $story[$i]->details; ?>
							</p>
							<div class="overlay">
								<form action="" method="POST">
									<!-- <button type="button" name="read" class="btn btn-secondary"><a href="content.php?id=<?php echo $story[$i]->id; ?>&chapter=2"><i class="fas fa-book-reader"></i></a></button> -->
									<button type="button" name="read" class="btn btn-secondary"><a href="content.php?id=<?php echo $story[$i]->id; ?>"><i class="fas fa-book-reader"></i></a></button>
									<button type="submit" name="love" class="btn btn-secondary" value="<?php echo $story[$i]->id; ?>"><i class="far fa-heart"></i></button>
									<button type="button" name="rate" class="btn btn-secondary"><i class="far fa-thumbs-up"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>

	<?php require_once 'footer.php';?>
</body>
</html>