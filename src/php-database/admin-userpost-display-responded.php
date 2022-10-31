<?php 
    require_once 'dbconnect.php';

    $query = "SELECT * FROM tb_userpost LEFT JOIN tb_comment ON tb_userpost.id = tb_comment.post_id WHERE response = '1' ORDER BY date_time DESC";
    $result = mysqli_query($conn, $query);

?>