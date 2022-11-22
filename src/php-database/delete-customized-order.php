<?php 
    require_once 'dbconnect.php';

    $id=$_GET['trans_id'];

    $query = "SELECT * FROM tb_orderprocess WHERE trans_id=$id";
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result))
            {
                $prodID=$row['product_id'];
                $sql4 = mysqli_query($conn, "UPDATE tb_customize SET sent = '0' WHERE cust_id = '{$prodID}'");
            }

    $sql = "DELETE FROM tb_orderprocess WHERE trans_id = '$id'";

    if (mysqli_query($conn, $sql)) {
        header("location: ../sys-user/message-page/userMessage-customized.php");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>