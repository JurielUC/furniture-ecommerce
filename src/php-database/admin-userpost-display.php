<?php 
    require_once 'dbconnect.php';

    $query = "SELECT * FROM tb_userpost ORDER BY date_time DESC";
    $result = mysqli_query($conn, $query);

?>