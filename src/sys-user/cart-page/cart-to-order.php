<?php
    require_once '../../php-database/dbconnect.php';

    $user_id=$_REQUEST['user_id'];
    $product_id=$_REQUEST['product_id'];

    $sql = "INSERT INTO tb_order(order_id, user_id, product_id, quantity, price, datetime) SELECT cart_id, user_id, product_id, quantity, price, datetime FROM tb_cart";
                
    if (mysqli_query($conn, $sql)) {

        $sql3 = mysqli_query($conn, "DELETE FROM tb_cart WHERE user_id = '$user_id'");
        header("location: ../order-page/userOrder.php");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>