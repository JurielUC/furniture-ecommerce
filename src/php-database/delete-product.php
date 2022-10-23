<?php 
    require_once 'dbconnect.php';

    $id=$_GET['id'];

    $sql = "DELETE FROM tb_product WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        header("location: ../sys-admin/product-page/adminProduct.php");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>