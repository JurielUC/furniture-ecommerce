<?php 
    require_once 'dbconnect.php';

    $query = "SELECT * FROM tb_product WHERE category = 'Door' ORDER BY id DESC";
    $result = mysqli_query($conn, $query);

?>