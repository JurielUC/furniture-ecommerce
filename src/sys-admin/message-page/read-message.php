<?php 
    include '../../php-database/dbconnect.php';
                
    $uid=$_GET['unique_id'];

    $query = "SELECT * FROM tb_user WHERE unique_id=$uid";
    $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result))
        {
            $status=$row['status'];
            $fname=$row['first_name'];
            $lname=$row['last_name'];
            $ppic=$row['myfile'];
            $value_zero="0";
        

            $sql3 = mysqli_query($conn, "UPDATE tb_user SET unread_msg = '$value_zero' WHERE unique_id = '$uid'");

            header("location: adminMessage.php?unique_id=$uid & status=$status & first_name=$fname & last_name=$lname & myfile=$ppic");
        }
?>