<?php 
    require_once '../../php-database/dbconnect.php';

    $uid=$_GET['unique_id'];
             
    $query = "SELECT * FROM tb_user WHERE unique_id = $uid";

    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result))
            {
                if($row['unread_msg'] == 1) {
                    echo '<p class="times">'. $row['unread_msg'] .' New Message</p>';
                }
                else {
                    echo '<p class="times">'. $row['unread_msg'] .' New Messages</p>';
                }
            }
    }else
        {
            echo '<p class="times">0 New Message</p>';
        }
?>