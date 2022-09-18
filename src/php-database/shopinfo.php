<?php 
    require_once 'dbconnect.php';

    $query = "SELECT * FROM tb_shopinfo";
    $result = mysqli_query($conn, $query);

?>