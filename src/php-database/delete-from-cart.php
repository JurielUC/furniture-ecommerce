<?php 
    require_once 'user-session.php';

    $id=$_GET['id'];
                            
    $query = "SELECT * FROM tb_product INNER JOIN tb_cart ON tb_product.id = tb_cart.product_id WHERE id=$id";
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result))
            {
                $qty=$row['quantity'];
                $sql4 = mysqli_query($conn, "UPDATE tb_product SET quantity = quantity + $qty WHERE id = '{$id}'");
            }
    $sql2 = "DELETE FROM tb_cart WHERE product_id = '{$id}' AND user_id = '{$loggedin_uid}';";

    if (mysqli_query($conn, $sql2)) {

        header("location: ../sys-user/getproduct-page/get-product.php?id=$id");
            exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>