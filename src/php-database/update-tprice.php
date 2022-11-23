<?php
    include 'admin-session.php';

    $id=$_REQUEST['id'];
    $uid=$_REQUEST['unique_id'];
    $status=$_REQUEST['status'];
    $fname=$_REQUEST['first_name'];
    $lname=$_REQUEST['last_name'];
    $ppic=$_REQUEST['myfile'];

    $cta=$_REQUEST['ct_amount'];
    $nta=$_REQUEST['nt_amount'];

    $mc = "The total amount of your customized <b>Order: $id</b> has been updated to <b>PHP $nta.00</b> from <b>PHP $cta.00</b>.";
    date_default_timezone_set('Asia/Manila');
    $timestamp = date("Y-m-d H:i:s");

    if(isset($_REQUEST["price-btn"]))
        {
            $query = "UPDATE tb_orderprocess SET total_price='$nta' WHERE trans_id='$id'";
            $result = mysqli_query($conn, $query);

            if ($result) {

                $sql = mysqli_query($conn, "INSERT INTO tb_pointmessage(message_to,	message_from, message_content, sender_name, msg_timestamp, msg_file) VALUES('$uid', '$loggedin_uid', '$mc', '$loggedin_fname $loggedin_lname', '$timestamp', '0')");
                $sql3 = mysqli_query($conn, "UPDATE tb_user SET recieved_msg = recieved_msg + 1 WHERE unique_id = '$uid'");
                
                header("location: ../sys-admin/message-page/adminMessage-inquiries.php?unique_id=$uid & status=$status & first_name=$fname & last_name=$lname & myfile=$ppic");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }

?>