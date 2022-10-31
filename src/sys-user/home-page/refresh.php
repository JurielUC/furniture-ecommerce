<?php 
    require_once '../../php-database/user-session.php';
             
    $query = "SELECT * FROM tb_user WHERE unique_id = $loggedin_uid";

    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result))
            {
                echo '<p>'. $row['recieved_msg'] .'</p>';
            }
    }else
        {
            echo '';
        }
?>