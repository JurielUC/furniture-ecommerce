<?php 
    require_once 'dbconnect.php';

    $trans_id=$_REQUEST['trans_id'];
    $uid=$_REQUEST['unique_id'];
    $status=$_GET['status'];
    $fname=$_GET['first_name'];
    $lname=$_GET['last_name'];
    $ppic=$_GET['myfile'];
    $process="Processing";
    $empty="-";

    $query = "SELECT * FROM tb_user WHERE unique_id=$uid";
    $result = mysqli_query($conn, $query);


    $sql = "INSERT INTO tb_progress(trans_id, zero, two_five, fifty, seven_five, hundred) VALUES('$trans_id' ,'$process', '$empty', '$empty', '$empty', '$empty')";

    if (mysqli_query($conn, $sql)) {
        header("location: ../sys-admin/message-page/adminMessage.php?unique_id=$uid & status=$status & first_name=$fname & last_name=$lname & myfile=$ppic");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>