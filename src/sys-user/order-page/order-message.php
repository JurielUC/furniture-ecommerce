<?php
    require_once '../../php-database/user-session.php';

    date_default_timezone_set('Asia/Manila');
    $timestamp = date("Y-m-d H:i:s");
    $mc = "New order request. Accept it!";

    //insert data to tb_user table
    
    $sql2 = mysqli_query($conn, "INSERT INTO tb_pointmessage(message_to, message_from, message_content, sender_name, msg_timestamp, msg_file) VALUES('1135622190', '$loggedin_uid', '$mc', '$loggedin_fname $loggedin_lname', '$timestamp', 'none'");

?>