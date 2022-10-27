<?php 
    include 'dbconnect.php';
                
    $uid=$_REQUEST['unique_id'];
    $postID=$_REQUEST['post_id'];
    $comment=$_REQUEST['comment'];
    date_default_timezone_set('Asia/Manila');
    $timestamp = date("Y-m-d H:i:s");
    $shopres = 'Shop Response';

    $sql = "INSERT INTO tb_comment(post_id, commenter_id, comment, datetime, shopres) VALUES('$postID','$uid', '$comment', '$timestamp', '$shopres')";
                
    if (mysqli_query($conn, $sql)) {
        header("location: ../sys-admin/feed-profile-page/adminProfile.php?unique_id=$uid");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>