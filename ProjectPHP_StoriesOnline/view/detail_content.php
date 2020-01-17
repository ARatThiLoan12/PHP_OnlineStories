<?php
    require_once '../database/connectdatabase.php';

    $name = $_GET['chapter'];

    $sql = "SELECT content
	FROM content 
	WHERE nameChap='".$name."'";
	$chapname=$db->query($sql)->fetch_all();
    $resultChap=$chapname[0][0];

?>
<html>
<head>
    <style type="text/css">
        img{
            height: 200px;
            width: 150px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="../css/sheetStyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body>
    <?php require_once 'header.php'; ?>
    <div class="container">
        <div>
            <p><?php 
               echo $resultChap;
            ?></p>
        </div>
    </div>
    <?php require_once 'footer.php'?>
</body>
</html>