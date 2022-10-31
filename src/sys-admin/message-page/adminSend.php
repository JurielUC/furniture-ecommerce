<?php 
    include '../../php-database/admin-session.php';
                
    $mc=$_REQUEST['message_content'];
    $uid=$_REQUEST['user_id'];
    date_default_timezone_set('Asia/Manila');
    $timestamp = date("Y-m-d H:i:s");
    $Myfile=$_FILES['msg_file']['name'];

    $var1 = rand(1111,9999);  // generate random number in $var1 variable
    $var2 = rand(1111,9999);  // generate random number in $var2 variable

    $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
    $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

    $dst = "./image/".$var3.$Myfile;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "image/".$var3.$Myfile; // storing image path into the database with 32 characters hex number and file name

    move_uploaded_file($_FILES["msg_file"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name


    $sql = "INSERT INTO tb_pointmessage(message_to,	message_from, message_content, sender_name, msg_timestamp, msg_file) VALUES('$uid', '$loggedin_uid', '$mc', '$loggedin_fname $loggedin_lname', '$timestamp', '$dst_db')";
                
    if (mysqli_query($conn, $sql)) {

        $sql3 = mysqli_query($conn, "UPDATE tb_user SET recieved_msg = recieved_msg + 1 WHERE unique_id = '$uid'");
        $sql2 = mysqli_query($conn, "SELECT * FROM tb_user WHERE unique_id = $uid" );
        while ($row = mysqli_fetch_assoc($sql2))
                            {
                              $unique=$row['unique_id'];
                              $status=$row['status'];
                              $fname=$row['first_name'];
                              $lname=$row['last_name'];
                              $myfile=$row['myfile'];
        header("location: adminMessage.php?unique_id=$unique & status=$status & first_name=$fname & last_name=$lname & myfile=$myfile");
                            }
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>