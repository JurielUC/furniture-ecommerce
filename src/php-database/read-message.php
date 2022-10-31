<?php 
    include 'dbconnect.php';
                
    $uid=$_GET['unique_id'];
    $value_zero="0";

    $sql3 = mysqli_query($conn, "UPDATE tb_user SET recieved_msg = '$value_zero' WHERE unique_id = '$uid'");

    header("location: ../sys-user/message-page/userMessage.php");

?>