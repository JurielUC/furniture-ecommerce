<?php 
    include '../../php-database/admin-session.php';

    $id=$_GET['id'];
    $uid=$_GET['unique_id'];
    $status=$_GET['status'];
    $fname=$_GET['first_name'];
    $lname=$_GET['last_name'];
    $ppic=$_GET['myfile'];

    //direct message when cancel
    date_default_timezone_set('Asia/Manila');
    $timestamp = date("Y-m-d H:i:s");
    $mc="Your customized furniture order has been placed. Please fill-up the form provided for your delivery address. Thank you!<br><b>Cust ID: $id</b>";

    $select = "SELECT * FROM tb_customize WHERE cust_id = '$id'";
    $result = mysqli_query($conn, $select);

    while ($row = mysqli_fetch_assoc($result))
        {     
            $cust_id=$row['cust_id'];
            $user_id=$row['user_id'];
            $size=$row['size'];
            $qty=$row['qty'];
            $type=$row['type'];
            $category=$row['category'];
            $front=$row['img_front'];
            $back=$row['img_back'];


            $sql = "INSERT INTO tb_customizedplacement(cust_id,	user_id, size, type, qty, category, img_front, img_back, datetime) 
                    VALUES('$cust_id', '$user_id', '$size', '$type', '$qty', '$category', '$front', '$back', '$timestamp')";
            
            if (mysqli_query($conn, $sql)) {

                $sql2 = mysqli_query($conn, "INSERT INTO tb_pointmessage(message_to,	message_from, message_content, sender_name, msg_timestamp, msg_file) VALUES('$uid', '$loggedin_uid', '$mc', '$loggedin_fname $loggedin_lname', '$timestamp', '0')");
                $sql3 = mysqli_query($conn, "UPDATE tb_user SET recieved_msg = recieved_msg + 1 WHERE unique_id = '$uid'");
        
                $sql4 = mysqli_query($conn, "UPDATE tb_customize
                        SET sent = '0'
                            WHERE cust_id='$id'");
        
                header("location: adminMessage-inquiries.php?unique_id=$uid & status=$status & first_name=$fname & last_name=$lname & myfile=$ppic");
                    exit;
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
        }
?>