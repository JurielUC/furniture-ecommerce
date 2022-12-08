<?php 
    include 'dbconnect.php';

    $trans_id = $_GET['trans_id'];
    $user_id = $_GET['user_id'];
    $rand = rand(1000, 100000000);

    $sql = "UPDATE tb_customize SET trans_id = '$trans_id', selected = '$rand' WHERE selected = '1' AND user_id = $user_id";

    $result = mysqli_query($conn, $sql);

            if ($result) {
                header("location: ../sys-user/customization-page/userOrder.php?trans_id=$trans_id");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
?>