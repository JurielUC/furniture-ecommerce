<?php 
    require_once 'dbconnect.php';

    $query = "SELECT * FROM tb_designs ORDER BY id DESC";
    $result = mysqli_query($conn, $query);

?>