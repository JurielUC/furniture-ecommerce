<?php 
    require_once 'admin-session.php';

    $trans_id=$_REQUEST['trans_id'];
    $uid=$_REQUEST['unique_id'];
    $status=$_GET['status'];
    $fname=$_GET['first_name'];
    $lname=$_GET['last_name'];
    $ppic=$_GET['myfile'];
    $process="Processing";
    $empty="----------";

    //direct message when accept
    date_default_timezone_set('Asia/Manila');
    $timestamp = date("Y-m-d H:i:s");
    $mc="The shop accepted your order. Transaction ID: <b>$trans_id.</b>";

    $query = "SELECT * FROM tb_user WHERE unique_id=$uid";
    $result = mysqli_query($conn, $query);


    $sql = "INSERT INTO tb_progress(trans_id, zero, two_five, fifty, seven_five, hundred) VALUES('$trans_id' ,'$process', '$empty', '$empty', '$empty', '$empty')";

    if (mysqli_query($conn, $sql)) {

        $sql3 = mysqli_query($conn, "INSERT INTO tb_pointmessage(message_to,	message_from, message_content, sender_name, msg_timestamp, msg_file) VALUES('$uid', '$loggedin_uid', '$mc', '$loggedin_fname $loggedin_lname', '$timestamp', '0')");
        $sql2 = mysqli_query($conn, "UPDATE tb_user SET recieved_msg = recieved_msg + 1 WHERE unique_id = '$uid'");
        header("location: ../sys-admin/message-page/adminMessage.php?unique_id=$uid & status=$status & first_name=$fname & last_name=$lname & myfile=$ppic");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>