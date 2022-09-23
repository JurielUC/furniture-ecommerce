<?php 
    include '../../php-database/user-session.php';
                
    $mc=$_REQUEST['message_content'];
    $timestamp = date("Y-m-d H:i:s");
    $Myfile=$_FILES['file']['name'];

    $var1 = rand(1111,9999);  // generate random number in $var1 variable
    $var2 = rand(1111,9999);  // generate random number in $var2 variable

    $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
    $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

    $dst = "./image/".$var3.$Myfile;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "image/".$var3.$Myfile; // storing image path into the database with 32 characters hex number and file name

    move_uploaded_file($_FILES["file"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name


    $sql = "INSERT INTO tb_pointmessage(message_to,	message_from, message_content, sender_name, msg_timestamp, msg_file) VALUES('ADMIN', '$loggedin_session', '$mc', '$loggedin_fname', '$timestamp', '$dst_db')";
                
    if (mysqli_query($conn, $sql)) {
        header("location: userMessage.php");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>