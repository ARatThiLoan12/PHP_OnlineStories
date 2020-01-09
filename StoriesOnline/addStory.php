<?php
    require 'connectdatabase.php';
    if(isset($_POST['submit'])){
        $sql = "INSERT INTO products VALUES (null,'".$_POST['proName'] ."','" .$_POST['author']."','". $_POST['type'] ."','" . $_POST['img'] . "','". $_POST['details']."');";
        $db->query($sql);
        ?>
        <script>
            location.href = 'admin.php';
        </script>
        <?php
    }
?>
<html>
    <head>
        <style>
            #container{
                display: flex;
                align-items:center;
                justify-content: space-between;
                padding-top: 10px;
                margin-top: 50px;
                margin-left: 100px;
                width: 300px;
            }
            #container input{
                margin-top:10px;
            }
        </style>
    </head>
    <body>
        <div id="container">
        <form action="" method="post">
            <input type="text" name="proName" placeholder="story name">
            <input type="text" name="author" placeholder="author name">
            <input type="text" name="type" placeholder="story type">
            <input type="text" name="details" placeholder="details">
            <input type="text" name="content" placeholder="chap1">
            <input type="file" name="img" placeholder="image">
            <input type="submit" name="submit">
        </form>
        </div>
    </body>
</html>