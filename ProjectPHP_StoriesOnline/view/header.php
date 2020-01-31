<?php
	require_once '../database/connectdatabase.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/sheetStyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<style type="text/css">
	/* area search*/
	.header-search {
		width: 200px;
		margin-right: 125px;
		padding-top: 10px;
	}
	.btn-search {
		color: #000;
		background-color: #fbdd12;
		height: 2.2rem;
	}
	.btn-search:hover {
		color: #fff;
		background-color: #fbdd12;
	}
	</style>
</head>
<body>
	<header>
		<div class="pos-f-t">
			<nav class="navbar navbar-dark bg-dark">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<h3 style="color: white"><a href="userInterface.php"> Đọc Truyện Online - Kho Truyện Của Loan</a></h3>
				<div id="search">
					<form role="search" action="search.php" method="POST">
						<div class="input-group header-search">
							<input type="text" maxlength="50" name="search" id="searchs" class="form-control" placeholder="Nhập từ khóa..." style="font-size: 14px;">
							<span class="input-group-btn">
								<button class="btn-search btn btn-default" type="submit"><span class="fas fa-search"></span></button>
							</span>
						</div>
					</form>
				</div>
				<div id="login">
					<button class="btn"><a href="favoritePage.php">
					<i class="fas fa-heart"></i>My favorite</a>
					</button>
					<button class="btn"><a href="index.php">
					<i class="fas fa-sign-in-alt"></i>Log out</a>
					</button>
				</div>
			</nav>
		</div>
	</header>
</body>