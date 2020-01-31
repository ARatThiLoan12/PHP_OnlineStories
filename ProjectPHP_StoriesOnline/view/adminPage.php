<?php
require_once '../database/connectdatabase.php';

if(isset($_POST['addStory'])){
    $sql = "INSERT INTO story VALUES (null,'".$_POST['name'] ."','" .$_POST['author']."','". $_POST['type'] ."','" . $_POST['img'] . "','". $_POST['details']."');";
    $db->query($sql);
    header('location: adminPage.php');
}
if(isset($_POST['addChap'])){
    $sql = "INSERT INTO content VALUES (null,'".$_POST['no'] ."','" .$_POST['nameChap']."','". $_POST['content'] ."','" . $_POST['idStory']."');";
    $db->query($sql);
    header('location: adminPage.php');
}
if(isset($_POST['delete'])){
	$id = $_POST['delete'];
	$sql2 = "DELETE FROM story WHERE id=" .$id;
	$db->query($sql2);
	header("location: adminPage.php");
}
if(isset($_POST['edit'])){
	$idEdit= $_POST['edit'];
	$name=$_POST['proName'];
	$author=$_POST['author'];
	$type=$_POST['type'];
	$detail=$_POST['details'];
	$update = "UPDATE story SET title='".$name."',author='".$author."',type='".$type."',details='".$detail."' WHERE id=".$idEdit;
	$db->query($update);
	header("location: adminPage.php");
}
if(isset($_POST['editChap'])){
	$id = $_POST['id'];
	$chapterName=$_POST['nameChap'];
	$chapter=$_POST['no'];
	$story=$_POST['idStory'];
	$sql2 = "UPDATE content SET noChap=".$chapter.",nameChap='".$chapterName."', idStory=".$story." WHERE id=" .$id;
	$db->query($sql2);
	header("location: adminPage.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/sheetStyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
.dropdown>.dropdown-menu {
	top: 200%;
	transition: 0.3s all ease-in-out;
}
.dropdown:hover>.dropdown-menu {
	display: block;
	top: 100%;
}
.dropdown>.dropdown-toggle:active {
	pointer-events: none;
}
.form_button {
	margin: 5px 0;
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
                    <a class="dropdown-item" href="deleteAccount.php">Delete user</a>
                    <a class="dropdown-item" href="" class="" data-toggle="modal" data-target="#addStory">Add new story</a>
                </div>
            </div>
				<h3 style="color: white">Đọc Truyện Online - Kho Truyện Của Loan</h3>
				<div id="login">
					<button class="btn"><a href="index.php">  
						<i class="fas fa-sign-in-alt"></i>LogOut</a></button>
				</div>
			</nav>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h1> Danh sách truyện </h1>
			</div>

			<table class="table table-striped table-bordered table-hover" style="width:100%">
				<thead>
					<tr align="center">
						<th> ID </th>
						<th> Title </th>
						<th> Avatar </th>
						<th> Author </th>
						<th> Type </th>
						<th> Detail </th>
						<th> Options </th>
					</tr>
				</thead>
				<tbody>
					<?php
						for ($i=0; $i < count($story); $i++) { 
					?>
					<tr align="center">
						<td><?php echo $story[$i]->id; ?></td>
						<td><?php echo $story[$i]->name; ?></td>
						<td>
							<img src='../img/<?php echo $story[$i]->img; ?>' width="100px"; height="100px";>
						</td>
						<td><?php echo $story[$i]->author; ?></td>
						<td><?php echo $story[$i]->type; ?></td>
						<td><?php echo $story[$i]->details; ?></td>

						<td class="center">
							<form action="" method="post">
								<a href="content.php?id=<?php echo $story[$i]->id; ?>">
									<button type="button" name="read" class="btn btn-secondary form_button">
										<i class="fas fa-book-reader"></i>
									</button>
								</a>
								<a href="" data-toggle="modal" data-target="#edit<?php echo $story[$i]->id ?>">
									<button type="submit" name="editStory" class="btn btn-secondary form_button" value=<?php echo $story[$i]->id ?>>
										<i class="fas fa-edit"></i>
									</button>
								</a>
								<button type="submit" name="delete" class="btn btn-secondary form_button" value=<?php echo $story[$i]->id ?>>
									<i class="fas fa-trash-alt"></i>
								</button>
							</form>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<?php require_once 'footer.php' ?>
	<div>
		<div class="modal fade" id="addStory">
	    	<div class="modal-dialog">
	    		<div class="modal-content">
		        	<form method="post">
						<div class="modal-header">
							<h3>Add new story</h3>
						</div>
			        	<div class="modal-body">
							<input type="text" class="form-control" name="name" placeholder="Story name"><br>
							<input type="text" class="form-control" name="author" placeholder="Author"><br>
							<input type="text" class="form-control" name="type" placeholder="Type"><br>
							<input type="file" class="form-control" name="img" placeholder="Image"><br>
							<input type="text" class="form-control" name="details" placeholder="Details"><br>
			          		<button name="addStory" type="addStory" class="btn btn-danger" style="margin: auto;">Submit</button>  
			      		</div>
		      		</form>  
	    		</div>
			</div>
		</div>
	</div>

	<div>
		<div class="modal fade" id="addChap">
	    	<div class="modal-dialog">
	    		<div class="modal-content">
		        	<form method="post">
			        	<div class="modal-body">
							<input type="text" class="form-control" name="idStory" placeholder="Which story"><br>
							<input type="text" class="form-control" name="no" placeholder="Number of chapter"><br>
							<input type="text" class="form-control" name="nameChap" placeholder="Chapter name"><br>
							<input type="text" class="form-control" name="content" placeholder="Content"><br>
			          		<button name="addChap" type="addChap" class="btn btn-danger" style="margin: auto;">Submit</button>  
			      		</div>
		      		</form>  
	    		</div>
			</div>
		</div>
	</div>

	<!-- <div>
		<div class="modal fade" id="editStory">
	    	<div class="modal-dialog">
	    		<div class="modal-content">
		        	<form method="post">
			        	<div class="modal-body">
			        		<input type="text" class="form-control" name="id" placeholder="Which story"><br>
							<input type="text" class="form-control" name="no" placeholder="Number of chapter"><br>
							<input type="text" class="form-control" name="nameChap" placeholder="Chapter name"><br>
			          		<button  name="editChap" class="btn btn-danger" style="margin: auto;">Submit</button>  
			      		</div>
		      		</form>  
	    		</div>
			</div>
		</div>
	</div> -->

	<div>
		<?php for ($i=0; $i < count($story); $i++) { ?>
		<div class="modal fade" id="edit<?php echo $story[$i]->id ?>">
	    	<div class="modal-dialog">
	    		<div class="modal-content">
		        	<form method="post">
						<div class="modal-header">
							<h3>Edit the story</h3>
						</div>
			        	<div class="modal-body">
							<input type="text" class="form-control" name="proName" value="<?php echo $story[$i]->name; ?>" placeholder="Story name"><br>
							<input type="text" class="form-control" name="author" value="<?php echo $story[$i]->author; ?>" placeholder="Author"><br>
							<input type="text" class="form-control" name="type" value="<?php echo $story[$i]->type; ?>" placeholder="Type"><br>
							<textarea class="form-control" name="details" rows="10" cols="30" placeholder="Details"><?php echo $story[$i]->details;?></textarea><br>
			          		<button name="edit" value="<?php echo $story[$i]->id; ?>" class="btn btn-primary" style="margin: auto;">Update</button>  
			      		</div>
		      		</form>  
	    		</div>
			</div>
		</div>
	<?php } ?>
	</div>
</body>
</html>