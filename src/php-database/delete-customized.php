<?php 
    require_once 'dbconnect.php';

    $id=$_GET['id'];

    $sql = "DELETE FROM tb_customize WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        header("location: ../sys-user/customization-page/customized-design.php");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>