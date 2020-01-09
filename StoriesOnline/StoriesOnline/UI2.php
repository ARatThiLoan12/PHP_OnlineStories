<?php
require 'connectdatabase.php';
$sql = "SELECT * FROM products";
$result = $db->query($sql)->fetch_all();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="CSS/sheetStyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body>
	<header>
		<div class="pos-f-t">
			<nav class="navbar navbar-dark bg-dark">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<h3 style="color: white">Đọc Truyện Online - Kho Truyện Của Loan</h3>
				<div id="login">
					<!-- <span><?php echo $_POST['username']?></span> -->
					<button class="btn"><a href="myFavo.php">  
					<i class="fas fa-heart"></i>My favorite</a></button>
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
								
								<button type="button" name="read" class="btn btn-secondary"><a href="content.php?id=<?php echo $result[$i][0]; ?>"><i class="fas fa-book-reader"></i></a></button>
								<button type="button" name="love" class="btn btn-secondary"><i class="far fa-heart"></i></button>
								<button type="button" name="rate" class="btn btn-secondary"><i class="far fa-thumbs-up"></i></button>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	<div class="foot">
		<h5>Liên hệ: (+84) 911 475 691</h5>
		<p>Chúc bạn đọc truyện vui vẻ :)</p>
	</div>
</body>
</html>