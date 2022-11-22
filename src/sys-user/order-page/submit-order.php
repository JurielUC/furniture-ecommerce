<?php
    require_once '../../php-database/dbconnect.php';

    $user_id=$_REQUEST['user_id'];
    $name=$_REQUEST['fullname'];
    $phone_no=$_REQUEST['phone_no'];
    $address=$_REQUEST['address'];
    $postal=$_REQUEST['postal'];
    $h_no=$_REQUEST['house_no'];
    $settings=$_REQUEST['settings'];
    $prod_id=$_REQUEST['product_id'];
    $qty=$_REQUEST['quantity'];
    $payment=$_REQUEST['payment'];
    $t_price=$_REQUEST['total_price'];
    $trans_id = rand(time(), 100000000);
    date_default_timezone_set('Asia/Manila');
    $timestamp = date("Y-m-d H:i:s");
    //$mc = "New order request. Accept it!";

    //insert data to tb_user table
    $sql = "INSERT INTO tb_orderprocess(trans_id, user_id, product_id, 
        fullname, phone_no, address, postal_code, 
        house_no, settings, order_qty, payment_method, total_price, datetime) VALUES('$trans_id', '$user_id', 
        '$prod_id','$name', '$phone_no', '$address', '$postal', '$h_no', '$settings', 
        '$qty', '$payment', '$t_price', '$timestamp')";
    
    //$sql2 = "INSERT INTO tb_pointmessage(message_to, message_from, message_content, sender_name, msg_timestamp) VALUES('1135622190', '$user_id', '$mc', '$name', '$timestamp'";

    if (mysqli_query($conn, $sql)) {

        $sql2 = "INSERT INTO tb_pointmessage(message_to, message_from, message_content, sender_name, msg_timestamp) VALUES('1135622190', '$user_id', '$mc', '$name', '$timestamp'";

        $sql4 = mysqli_query($conn, "UPDATE tb_user SET unread_msg = unread_msg + 1 WHERE unique_id = '$user_id'");
        $sql5 = mysqli_query($conn, "UPDATE tb_user SET all_msg = all_msg + 1 WHERE unique_id = '$user_id'");
        $sql3 = mysqli_query($conn, "DELETE FROM tb_cart WHERE user_id = '$user_id'");
        
        header("location: ../message-page/userMessage.php");
            exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

?>