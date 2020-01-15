<?php
    require_once '../database/connectdatabase.php';
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/sheetStyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body>
    <?php require_once 'header.php'; ?>
    <div class="container">
    <div>

    <p><?php 
    	$id = $_GET['id'];
    	$chapter = $_GET["chapter"];
        $sql = "SELECT * FROM content WHERE id = $id"; 
        // AND noStory = $chapter
		$content = $db->query($sql)->fetch_all();
        for($i=0; $i<count($content); $i++){
	        if($id== $content[$i][3]){
	        	echo $content[$i][2];
	        }
        }
    ?></p>

    </div>
    </div>
    <?php require_once 'footer.php'?>
</body>
</html>