<!--put php for message display here-->
<?php require_once '../../php-database/dbconnect.php'; 
                            
    $query = "SELECT * FROM tb_user WHERE all_msg > 0 ORDER BY unread_msg DESC";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result))
    {
        $uid=$row['unique_id'];
        $sql2 = mysqli_query($conn, "UPDATE tb_user SET unread_msg = unread_msg - unread_msg WHERE unique_id = '$uid'");
    ?>
    <div class="inbox-message" onclick="window.location.href='../message-page/adminMessage.php?unique_id=<?php echo $row['unique_id']; ?> & status=<?php echo $row['status']; ?> & first_name=<?php echo $row['first_name']; ?> & last_name=<?php echo $row['last_name']; ?> & myfile=<?php echo $row['myfile']; ?> & <?php echo $sql2; ?>';">
    <img src="../../sys-user/signup-page/<?php echo $row['myfile']; ?>" alt="" width="40px" height="40px">
        <div class="name-addr">
            <h4><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></h4>
            <p><?php echo $row['status']; ?></p>
        </div>
        <p class="msg-num"><?php echo $row['unread_msg']; ?> message/s</p>
    </div>
<?php 
    }
?>