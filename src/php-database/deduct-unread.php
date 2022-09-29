<?php
    require_once 'dbconnect.php';

    $sql2 = mysqli_query($conn, "UPDATE tb_user SET unread_msg = unread_msg - unread_msg WHERE unique_id = '$uid'");
?>