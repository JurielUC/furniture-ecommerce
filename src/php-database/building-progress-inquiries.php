<?php
    include 'admin-session.php';

    $trans_id=$_REQUEST['trans_id'];
    $uid=$_REQUEST['unique_id'];
    $status=$_REQUEST['status'];
    $fname=$_REQUEST['first_name'];
    $lname=$_REQUEST['last_name'];
    $custID=$_REQUEST['cust_id'];
    $ppic=$_REQUEST['myfile'];
    $done = 'DONE';
    $process = 'Processing';
    $empty="----------";
    //direct message when cancel
    date_default_timezone_set('Asia/Manila');
    $timestamp = date("Y-m-d H:i:s");

    if(isset($_REQUEST["zero"]))
        {
            $mc="Your order percentage with Transaction ID of <b>$trans_id</b> is now 25%.";

            $query = "UPDATE tb_progress SET zero='$done', two_five='$process', fifty='$empty', seven_five='$empty', hundred='$empty' WHERE trans_id='$trans_id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $sql3 = mysqli_query($conn, "UPDATE tb_user SET recieved_msg = recieved_msg + 1 WHERE unique_id = '$uid'");
                $sql2 = mysqli_query($conn, "INSERT INTO tb_pointmessage(message_to, message_from, message_content, sender_name, msg_timestamp, msg_file) VALUES('$uid', '$loggedin_uid', '$mc', '$loggedin_fname $loggedin_lname', '$timestamp', '0')");
                header("location: ../sys-admin/message-page/adminMessage-inquiries.php?unique_id=$uid & status=$status & first_name=$fname & last_name=$lname & myfile=$ppic");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }

    elseif(isset($_REQUEST["two_five"]))
        {
            $mc="Your order percentage with Transaction ID of <b>$trans_id</b> is now 50%.";

            $query = "UPDATE tb_progress SET two_five='$done', fifty='$process', seven_five='$empty', hundred='$empty' WHERE trans_id='$trans_id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $sql3 = mysqli_query($conn, "UPDATE tb_user SET recieved_msg = recieved_msg + 1 WHERE unique_id = '$uid'");
                $sql2 = mysqli_query($conn, "INSERT INTO tb_pointmessage(message_to, message_from, message_content, sender_name, msg_timestamp, msg_file) VALUES('$uid', '$loggedin_uid', '$mc', '$loggedin_fname $loggedin_lname', '$timestamp', '0')");
                header("location: ../sys-admin/message-page/adminMessage-inquiries.php?unique_id=$uid & status=$status & first_name=$fname & last_name=$lname & myfile=$ppic");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }

    elseif(isset($_REQUEST["fifty"]))
        {
            $mc="Your order percentage with Transaction ID of <b>$trans_id</b> is now 75%.";

            $query = "UPDATE tb_progress SET fifty='$done', seven_five='$process', hundred='$empty' WHERE trans_id='$trans_id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $sql3 = mysqli_query($conn, "UPDATE tb_user SET recieved_msg = recieved_msg + 1 WHERE unique_id = '$uid'");
                $sql2 = mysqli_query($conn, "INSERT INTO tb_pointmessage(message_to, message_from, message_content, sender_name, msg_timestamp, msg_file) VALUES('$uid', '$loggedin_uid', '$mc', '$loggedin_fname $loggedin_lname', '$timestamp', '0')");
                header("location: ../sys-admin/message-page/adminMessage-inquiries.php?unique_id=$uid & status=$status & first_name=$fname & last_name=$lname & myfile=$ppic");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }

    elseif(isset($_REQUEST["seven_five"]))
        {
            $mc="Your order percentage with Transaction ID of <b>$trans_id</b> is now 100% and ready for delivery.";

            $query = "UPDATE tb_progress SET seven_five='$done', hundred='$process' WHERE trans_id='$trans_id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $sql3 = mysqli_query($conn, "UPDATE tb_user SET recieved_msg = recieved_msg + 1 WHERE unique_id = '$uid'");
                $sql2 = mysqli_query($conn, "INSERT INTO tb_pointmessage(message_to, message_from, message_content, sender_name, msg_timestamp, msg_file) VALUES('$uid', '$loggedin_uid', '$mc', '$loggedin_fname $loggedin_lname', '$timestamp', '0')");
                header("location: ../sys-admin/message-page/adminMessage-inquiries.php?unique_id=$uid & status=$status & first_name=$fname & last_name=$lname & myfile=$ppic");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }

    elseif(isset($_REQUEST["hundred"]))
        {
            $mc="Your order with Transaction ID of <b>$trans_id</b> has been delivered. Please, write a feedback. Thank you!";

            $query = "UPDATE tb_progress SET hundred='$done' WHERE trans_id='$trans_id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $sql3 = mysqli_query($conn, "UPDATE tb_customize SET sent = '0' WHERE cust_id='$custID'");
                $sql2 = mysqli_query($conn, "INSERT INTO tb_pointmessage(message_to, message_from, message_content, sender_name, msg_timestamp, msg_file) VALUES('$uid', '$loggedin_uid', '$mc', '$loggedin_fname $loggedin_lname', '$timestamp', '0')");
                $sql4 = mysqli_query($conn, "UPDATE tb_user SET recieved_msg = recieved_msg + 1 WHERE unique_id = '$uid'");
                header("location: ../sys-admin/message-page/adminMessage-inquiries.php?unique_id=$uid & status=$status & first_name=$fname & last_name=$lname & myfile=$ppic");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }

    elseif(isset($_REQUEST["reset"]))
        {
            $query = "UPDATE tb_progress SET zero='$process', two_five='$empty', fifty='$empty', seven_five='$empty', hundred='$empty' WHERE trans_id='$trans_id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                header("location: ../sys-admin/message-page/adminMessage-inquiries.php?unique_id=$uid & status=$status & first_name=$fname & last_name=$lname & myfile=$ppic");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }
?>