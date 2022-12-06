<?php 
    include 'dbconnect.php';

    $custID = $_REQUEST['cust_id'];

    $sql = "UPDATE tb_customize SET selected = '1' WHERE cust_id = $custID";
    $result = mysqli_query($conn, $sql);

            if ($result) {
                header("location: ../sys-user/customization-page/customized-design.php");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
?>