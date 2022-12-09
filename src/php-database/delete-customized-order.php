<?php 
    require_once 'dbconnect.php';

    $id=$_GET['trans_id'];

    $sql = "DELETE FROM tb_orderprocess WHERE trans_id = '$id'";

    if (mysqli_query($conn, $sql)) {
        $sql2 = mysqli_query($conn,"UPDATE tb_customize SET selected = '0', trans_id = '0' WHERE trans_id = $id");
        header("location: ../sys-user/message-page/userMessage-customized.php");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>