<?php 
    include '../../php-database/user-session.php';

    $id=$_REQUEST['id'];
    //direct message when cancel
    date_default_timezone_set('Asia/Manila');
    $timestamp = date("Y-m-d H:i:s");
    $mc="$loggedin_fname $loggedin_lname sent you an inquiry.";
                
    $sql = "UPDATE tb_customize
                SET sent = '1'
                    WHERE id='$id'";
                
    if (mysqli_query($conn, $sql)) {

        $sql3 = mysqli_query($conn, "INSERT INTO tb_pointmessage(message_to, message_from, message_content, sender_name, msg_timestamp, msg_file) VALUES('1135622190', '$loggedin_uid', '$mc', '$loggedin_fname $loggedin_lname', '$timestamp', '0')");
        $sql2 = mysqli_query($conn, "UPDATE tb_user SET unread_msg = unread_msg + 1 WHERE unique_id = '$loggedin_uid'");
        header("location: customized-design.php");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>