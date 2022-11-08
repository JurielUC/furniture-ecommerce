<?php 
    include '../../php-database/admin-session.php';

    $id=$_REQUEST['id'];
    $uid=$_GET['unique_id'];
    $status=$_GET['status'];
    $fname=$_GET['first_name'];
    $lname=$_GET['last_name'];
    $ppic=$_GET['myfile'];

    //direct message when cancel
    date_default_timezone_set('Asia/Manila');
    $timestamp = date("Y-m-d H:i:s");
    $mc="The shop canceled your customized furniture order.";
                
    $sql = "UPDATE tb_customize
                SET sent = '0'
                    WHERE id='$id'";
                
    if (mysqli_query($conn, $sql)) {

      $sql3 = mysqli_query($conn, "UPDATE tb_user SET recieved_msg = recieved_msg + 1 WHERE unique_id = '$uid'");
      $sql2 = mysqli_query($conn, "INSERT INTO tb_pointmessage(message_to,	message_from, message_content, sender_name, msg_timestamp, msg_file) VALUES('$uid', '$loggedin_uid', '$mc', '$loggedin_fname $loggedin_lname', '$timestamp', '0')");

        header("location: adminMessage-inquiries.php?unique_id=$uid & status=$status & first_name=$fname & last_name=$lname & myfile=$ppic");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>