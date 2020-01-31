<?php
    require_once '../database/connectdatabase.php';
    // error_reporting(2);
    
    // Search story
    $message = "Có thể từ khóa bạn tìm kiếm không có, vui lòng kiểm tra lại!";
    if(isset($_POST['search']))
    {
        $searchKeyword = $_POST['search'];
        $sql = "SELECT * FROM story WHERE (title LIKE '%$searchKeyword%')";
    }
    else {
        echo $message;
    }

    $resultSearch = $db->query($sql)->fetch_all();
    
    $count;
    if($resultSearch)
    {
        $count = count($resultSearch);
    }
    else {
        $count = 0;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/sheetStyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body>
   <?php include 'header.php';?>
   <div class="container"> 
   <div>
        <h3 class="section-title"> Kết Quả Tìm Kiếm </h3>
        <p style="color: black; margin-left: 10px;">Có <?php echo $count; ?> truyện được tìm thấy</p>
    </div>
   
    <div class="content-main">
        <div class="row">
			<?php for ($i=0; $i < count($resultSearch); $i++) { ?>
				<div class="col-md-4">
					<div class="product">
						<div class="img-box ">
							<?php echo " <img src='../img/".$resultSearch[$i][4]."'>"; ?>
						</div>
						<div class="details">
                        <div class="flex-container">
								<div class="intro"><?php echo $story[$i]->name; ?><br><?php echo $story[$i]->author; ?></div>
								<div class="prich "><?php echo $story[$i]->type; ?></div>
							</div>
							<div>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half"></i>
							</div>
							<p>
								<?php echo $resultSearch[$i][5]; ?>
							</p>
							<div class="overlay">
								<form action="" method="POST">
									<!-- <button type="button" name="read" class="btn btn-secondary"><a href="content.php?id=<?php echo $resultSearch[$i]->id; ?>&chapter=2"><i class="fas fa-book-reader"></i></a></button> -->
									<button type="button" name="read" class="btn btn-secondary"><a href="content.php?id=<?php echo $resultSearch[$i][0]; ?>"><i class="fas fa-book-reader"></i></a></button>
									<button type="submit" name="love" class="btn btn-secondary" value="<?php echo $resultSearch[$i][0]; ?>"><i class="far fa-heart"></i></button>
									<button type="button" name="rate" class="btn btn-secondary"><i class="far fa-thumbs-up"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
    </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>