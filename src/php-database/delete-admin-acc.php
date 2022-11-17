<?php 
    require_once 'dbconnect.php';

    $id=$_GET['id'];

    $sql = "DELETE FROM tb_admin WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        header("location: ../sys-admin/feed-profile-page/account-list.php");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>