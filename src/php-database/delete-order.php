<?php 
    require_once 'dbconnect.php';

    $id=$_GET['trans_id'];

    $sql = "DELETE FROM tb_orderprocess WHERE trans_id = '$id'";

    if (mysqli_query($conn, $sql)) {
        header("location: ../sys-user/message-page/userMessage.php");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>