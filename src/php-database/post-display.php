<?php 
    require_once 'user-session.php';

    $query = "SELECT * FROM tb_userpost WHERE user_email = '$loggedin_session' ORDER BY date_time DESC";
    $result = mysqli_query($conn, $query);

?>