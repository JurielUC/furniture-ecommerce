<?php 
    require_once 'dbconnect.php';

    $query = "SELECT product_name, price, product_img FROM tb_product ORDER BY id DESC";
    $result = mysqli_query($conn, $query);

?>