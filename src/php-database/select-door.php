<?php 
    require_once 'dbconnect.php';

    $query = "SELECT * FROM tb_product WHERE category = 'Door' AND quantity > 0 ORDER BY id DESC";
    $result = mysqli_query($conn, $query);

?>