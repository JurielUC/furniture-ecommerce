<?php 
    include '../../php-database/admin-session.php';

    $uid=$_GET['unique_id'];
    $status=$_GET['status'];
    $fname=$_GET['first_name'];
    $lname=$_GET['last_name'];
    $ppic=$_GET['myfile'];
    $trans_id=$_GET['trans_id'];

    //direct message when cancel
    date_default_timezone_set('Asia/Manila');
    $timestamp = date("Y-m-d H:i:s");
    $mc="Your payment on <b>Transaction ID: $trans_id</b> has been recieved. Thank you!";

    $sql = "UPDATE tb_orderprocess SET
                payment_method = 'Paid via GCash'
                    WHERE trans_id='$trans_id'";
            
    if (mysqli_query($conn, $sql)) {

        $sql2 = mysqli_query($conn, "INSERT INTO tb_pointmessage(message_to,	message_from, message_content, sender_name, msg_timestamp, msg_file) VALUES('$uid', '$loggedin_uid', '$mc', '$loggedin_fname $loggedin_lname', '$timestamp', '0')");
        $sql3 = mysqli_query($conn, "UPDATE tb_user SET recieved_msg = recieved_msg + 1 WHERE unique_id = '$uid'");
        
                header("location: adminMessage.php?unique_id=$uid & status=$status & first_name=$fname & last_name=$lname & myfile=$ppic");
                    exit;
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
?>