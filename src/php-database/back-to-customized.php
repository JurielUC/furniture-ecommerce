<?php 
    include 'dbconnect.php';

    $trans_id = $_REQUEST['trans_id'];

    $sql = "UPDATE tb_customize SET selected = '1', trans_id = '0' WHERE trans_id = $trans_id";
    $result = mysqli_query($conn, $sql);

            if ($result) {
                header("location: ../sys-user/customization-page/customized-design.php");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
?>