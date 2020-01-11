<?php
if(isset($_POST['addCart'])){
      $idProduct=$_POST['addCart'];
      $idAccount=0;
        if(isset($_SESSION['id-account-login'])){
          $idAccount=$_SESSION['id-account-login'];
        }
        $sql ="select quantity from product where id = ".$idProduct.";";
        $checkQuantityPro=$db->query($sql)->fetch_all();
          if(count($checkQuantityPro)>0)
          {
          
            if ($checkQuantityPro[0][0]<1){
              // echo "<script>alert('Not enough.');</script>";
              // $sql ="delete from product where id = ".$idProduct." ;";
              echo "<script>confirm('Not enough.');</script>";
              header("Location: index.php");
              exit;
              // $db->query($sql);
            }
          }
      $sql ="select id_product from cart where id_product = ".$idProduct.";";
      $checkEmptyInCart=$db->query($sql)->fetch_all();     
        if(count($checkEmptyInCart)<1){
          $sql = "insert into cart(id_product,id_account,quantitty) values (".$idProduct.",".$idAccount.",1);";
          // echo "<script>alert('".$sql."');</script>";
          $db->query($sql);
        }else {
          $sql= "update cart set quantitty=quantitty+1 where id_product = ".$idProduct." and id_account = ".$idAccount." ;";
          // echo "<script>alert('".$sql."');</script>";
          $db->query($sql);
        }
      $sql=" update product set quantity=quantity-1 where id = ".$idProduct.";";
      $db->query($sql);
    }
    $sql = "Select * from product where quantity>=1;";
    $product=$db->query($sql)->fetch_all();
?>