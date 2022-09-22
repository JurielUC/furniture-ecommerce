<?php 
    include '../../php-database/user-session.php';
                
    $mc=$_REQUEST['message_content'];
    $timestamp = date("Y-m-d H:i:s");
    $position = 'ADMIN';

    $sql = "INSERT INTO tb_pointmessage(message_to,	message_from, message_content, sender_name, timestamp, file) VALUES('$loggedin_session','$post', '$timestamp', '$loggedin_fname', '$loggedin_lname', '$loggedin_mf')";
                
    if (mysqli_query($conn, $sql)) {
        $alert = "Posted!";
        header("location: userProfile.php?message=$alert");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>