<?php 
    require_once 'dbconnect.php';

    $id=$_GET['id'];

    $sql = "DELETE FROM tb_userpost WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        header("location: ../sys-user/myprofile-page/userProfile.php");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>