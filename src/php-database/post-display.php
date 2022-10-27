<?php 
    require_once 'user-session.php';

    $query = "SELECT * FROM tb_userpost LEFT JOIN tb_comment ON tb_userpost.id = tb_comment.post_id ORDER BY date_time DESC";
    $result = mysqli_query($conn, $query);

?>