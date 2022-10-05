<?php 
    require_once 'user-session.php';

    $id=$_GET['id'];
                            
    $sql2 = "DELETE FROM tb_cart WHERE product_id = '{$id}' AND user_id = '{$loggedin_uid}';";

    if (mysqli_query($conn, $sql2)) {

        header("location: ../sys-user/getproduct-page/get-product.php?id=$id");
            exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>