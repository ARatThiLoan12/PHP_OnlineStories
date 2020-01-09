<?php
    require 'connectdatabase.php';
    $sql = "SELECT * FROM content";
    $result = $db->query($sql)->fetch_all();
?>
<html>
<head>
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
				<a href="UI2.php"><h3 style="color: white">Đọc Truyện Online - Kho Truyện Của Loan</h3></a>
				<div id="login">
					<button class="btn"><a href="userProfile.php">  
						<i class="far fa-user"></i>Profile</a></button>
					<button class="btn"><a href="UI.php">  
						<i class="fas fa-sign-in-alt"></i>LogOut</a></button>
				</div>
			</nav>
		</div>
    </header>
    <div class="container">
    <div>

    <p><?php 
    	$id = $_GET['id'];
        $sql = "SELECT * FROM content WHERE id =" .$id;
        $content = $db->query($sql)->fetch_all();
        for($i=0; $i<count($content); $i++){
	        if($id== $content[$i][3]){
	        	echo " <img src='img/".$content[$i][4]."'>";
	        	echo  $content[$i][4];
	        	echo $content[$i][2];
	        }
        }
    ?></p>

    </div>
    </div>
    <div class="foot">
		<h5>Liên hệ: (+84) 911 475 691</h5>
		<p>Chúc bạn đọc truyện vui vẻ :)</p>
	</div>
</body>
</html>