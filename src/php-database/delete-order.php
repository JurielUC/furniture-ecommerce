<?php 
    require_once 'dbconnect.php';

    $id=$_GET['trans_id'];

    $query = "SELECT * FROM tb_orderprocess WHERE trans_id=$id";
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result))
            {
                $prodID=$row['product_id'];
                $qty=$row['order_qty'];
                $sql4 = mysqli_query($conn, "UPDATE tb_product SET quantity = quantity + $qty WHERE id = '{$prodID}'");
            }

    $sql = "DELETE FROM tb_orderprocess WHERE trans_id = '$id'";

    if (mysqli_query($conn, $sql)) {
        header("location: ../sys-user/message-page/userMessage.php");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>