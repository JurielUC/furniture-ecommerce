<?php 
    require_once 'dbconnect.php';

    $query = "SELECT * FROM tb_userpost WHERE response = '0' ORDER BY date_time DESC";
    $result = mysqli_query($conn, $query);

?>