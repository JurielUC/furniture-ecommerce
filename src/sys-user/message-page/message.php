<?php 
    require_once '../../php-database/user-session.php';

    $shopid = '1135622190';
                        
    $query = "SELECT * FROM tb_pointmessage WHERE message_to = $shopid 
            AND message_from = $loggedin_uid OR message_to = $loggedin_uid 
            AND message_from = $shopid ORDER BY msg_timestamp ASC";

    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result))
            {
                if($row['message_from'] === $shopid){
                    echo '  <p class="time-s">'. $row['msg_timestamp'] .'</p>
                        <div class="message-me message">
                            <div class="message-one">
                                <p>'. $row['message_content'] .'</p>
                            </div>
                        </div>';
                }
                elseif($row['message_from'] === $loggedin_uid) {
                    echo  ' <p class="time-s">'. $row['msg_timestamp'] .'</p>
                        <div class="message-admin">
                            <div class="message-two message">
                                <p>'. $row['message_content'] .'</p>
                            </div>
                        </div>';
                }
            }
        }else
            {
                echo '<p class="nm">No Message</p>';
            }
?>