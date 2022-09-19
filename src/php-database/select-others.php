<?php 
    require_once 'dbconnect.php';

    $query = "SELECT * FROM tb_product WHERE category = 'Others' ORDER BY id DESC";
    $result = mysqli_query($conn, $query);

?>