<?php 
    require_once 'user-session.php';

    $id=$_GET['id'];

    $sql = mysqli_query($conn, "SELECT * FROM tb_cart WHERE product_id = '{$id}' AND user_id = '{$loggedin_uid}'");
      if(mysqli_num_rows($sql) > 0){
          $alert = "Already Added to Cart!";
          header("location: ../sys-user/getproduct-page/get-product.php?message=$alert & id=$id");
                exit;
      }else {

        date_default_timezone_set('Asia/Manila');
        $timestamp = date("Y-m-d H:i:s");
                            
        $sql2 = "INSERT INTO tb_cart(user_id, product_id, datetime) VALUES('$loggedin_uid', '$id', '$timestamp')";

        if (mysqli_query($conn, $sql2)) {
            $alert = "Added to Cart!";
            header("location: ../sys-user/getproduct-page/get-product.php?message=$alert & id=$id");
                exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>