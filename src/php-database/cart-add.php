<?php 
    require_once 'user-session.php';

    $id=$_GET['id'];
    $price=$_GET['price'];
    $qty=$_GET['quantity'];

    $sql = mysqli_query($conn, "SELECT * FROM tb_cart WHERE product_id = '{$id}' AND user_id = '{$loggedin_uid}'");
      if(mysqli_num_rows($sql) > 0){
            $sql3 = mysqli_query($conn, "UPDATE tb_cart SET quantity = '$qty' WHERE product_id = '{$id}' AND user_id = '{$loggedin_uid}'");
            header("location: ../sys-user/order-page/userOrder.php?id=$id");
                exit;
      }else {

        date_default_timezone_set('Asia/Manila');
        $timestamp = date("Y-m-d H:i:s");
        $status = "processing";
        $total_price = $price * $qty;
                            
        $sql2 = "INSERT INTO tb_cart(user_id, product_id, quantity, total_price, datetime) VALUES('$loggedin_uid', '$id', '$qty', '$total_price', '$timestamp')";

        if (mysqli_query($conn, $sql2)) {

            header("location: ../sys-user/order-page/userOrder.php?id=$id");
                exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>