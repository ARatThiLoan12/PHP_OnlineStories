<?php
     require 'connectdatabase.php';
     $sql = "SELECT * FROM account";
     $result = $db->query($sql)->fetch_all();

     if(isset($_POST['delete'])){
        $id = $_POST['delete'];
        $sql2 = "DELETE FROM account WHERE id=".$id;
        $db->query($sql2);
        header("location: delete.php");
    }

?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="CSS/sheetStyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <style>
            .table tr th{
            text-align: center;
            border: 1px solid black;
            }
            .table tr td{
            border: 1px solid black;
            text-align: center;
            width: auto;
            }
            table,th,td{
            border: 1px solid lightgrey;
            border-collapse: collapse;
            text-align: center;
            align-items: center;
            }
            th,td{
            padding: 5px 5px;
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
				<a href="admin.php"><h3 style="color: white">Đọc Truyện Online - Kho Truyện Của Loan</h3></a>
				<div id="login">
					<button class="btn"><a href="userProfile.php">  
						<i class="far fa-user"></i>Profile</a></button>
					<button class="btn"><a href="admin.php">  
						<i class="fas fa-sign-in-alt"></i>LogOut</a></button>
				</div>
			</nav>
		</div>
    </header>
        <div>
        <?php
            echo '<form action="" method="post">';
                echo '<table>';
                    echo '<tr>';
                        echo '<th> ID </th>';
                        echo '<th> User Name </th>';
                        echo '<th> User type </th>';
                        echo '<th>  </th>';
                    echo '</tr>';
                    for($i=0; $i<count($result); $i++){
                    echo '<tr>';
                        echo '<td>'. $result[$i][0] .'</th>';
                        echo '<td>'. $result[$i][1] .'</th>';
                        echo '<td>'. $result[$i][3] .'</th>';
                        echo '<td> <button name="delete" value="'. $result[$i][0].'"> DELETE </button> </th>';
                    echo '</tr>';
                    }
                echo '</table>';
            echo '</form>';
          ?>
        </div>
    </body>
</html>