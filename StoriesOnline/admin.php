<?php
require 'connectdatabase.php';
$sql = "SELECT * FROM products";
$result = $db->query($sql)->fetch_all();

if(isset($_POST['delete'])){
	$id = $_POST['delete'];
	$sql2 = "DELETE FROM products WHERE id=" .$id;
	$db->query($sql2);
	header("location: admin.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="CSS/sheetStyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    /* btn menu */
.dropdown>.dropdown-menu {
	top: 200%;
	transition: 0.3s all ease-in-out;
  }
.dropdown:hover>.dropdown-menu {
	display: block;
	top: 100%;
  }
.dropdown>.dropdown-toggle:active {
	/*Without this, clicking will make it sticky*/
	  pointer-events: none;
  }
</style>
</head>
<body>
	<header>
		<div class="pos-f-t">
			<nav class="navbar navbar-dark bg-dark">
            <div class="dropdown">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="addChap.php">Add new chapter</a>
                    <a class="dropdown-item" href="delete.php">Delete user</a>
                    <a class="dropdown-item" href="addStory.php">Add new story</a>
                </div>
            </div>
				<h3 style="color: white">Đọc Truyện Online - Kho Truyện Của Loan</h3>
				<div id="login">
					<button class="btn"><a href="myFavo.php">  
					<i class="fas fa-heart"></i>Profile</a></button>
					<button class="btn"><a href="UI.php">  
						<i class="fas fa-sign-in-alt"></i>LogOut</a></button>
				</div>
			</nav>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<?php for ($i=0; $i < count($result); $i++) { ?>

				<div class="col-md-4">
					<div class="product">
						<div class="img-box ">
							<?php echo " <img src='img/".$result[$i][4]."'>"; ?>
						</div>
						<div class="details">
							<h2><?php echo $result[$i][1]; ?><br><?php echo $result[$i][2]; ?></h2>
							<div class="prich "><?php echo $result[$i][3]; ?></div>
							<div>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half"></i>
							</div>
							<p>
								<?php echo $result[$i][5]; ?>
							</p>
							<div class="overlay">
								<form action="" method="post">
									<button type="button" name="read" class="btn btn-secondary"><a href="Content.php?id=<?php echo $result[$i][0]; ?>"><i class="fas fa-book-reader"></i></a></button>
									<button type="submit" name="delete" class="btn btn-secondary" value=<?php echo $result[$i][0] ?>><i class="fas fa-trash-alt"></i></button>
									<button type="button" name="edit" class="btn btn-secondary"><i class="fas fa-edit"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	<div class="foot">
		<h5>Liên hệ: (+84) 911 475 691</h5>
		<p>Administrator</p>
	</div>
</body>
</html>