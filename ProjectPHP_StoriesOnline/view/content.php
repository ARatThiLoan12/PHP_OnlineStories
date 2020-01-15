<?php
    require_once '../database/connectdatabase.php';

    $id = $_GET['id'];

    $sql = "SELECT C.idStory ,C.chapName, P.proName, P.author, P.type, P.img, P.details, C.id
	FROM products as P, content as C 
	WHERE P.id = C.idStory and
	C.idStory = ".$id.";";
	$content=$db->query($sql)->fetch_all();

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
                $chapter = 1;
                $j=0;
                for($i=0; $i<count($content); $i++){
        	        if($id == $content[$i][0]){
        	        	$j=$i;
        	        }
                }
                echo '<div style="display:flex; justify-content: space-between;"><img src="../img/'.$content[$j][5].'">';
                echo '<div>';
                    echo '<p> Ten truyen:'.$content[$j][2].'</p>';
                    echo '<p>Tac gia:'.$content[$j][3].'</p>';
                    echo '<p>The loai:'.$content[$j][4].'</p>';
                    echo '<p>Tom tat:'.$content[$j][6].'</p>';
                echo '</div></div>';
                echo "List of chapter: ";
                echo "<form action='detail_content.php' method='get'>";
                for($i=0; $i<count($content); $i++){
                    if($id == $content[$i][0]){
                        echo '<p><button style="border:none; background:none" name="chapter" value="'.$content[$i][1].'">'.$content[$i][1].'</button></p>';
                    }
                }
                echo "</form>";
            ?></p>
        </div>
    </div>
    <?php require_once 'footer.php'?>
</body>
</html>