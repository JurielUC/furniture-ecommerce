<?php 
    include '../../php-database/user-session.php';
                
    $post=$_REQUEST['long_desc'];
    $trans_id=$_REQUEST['trans_id'];
    $timestamp = date("Y-m-d H:i:s");
    $value = "0";

    $sql = "INSERT INTO tb_userpost(user_email, long_desc, date_time, fname, lname, myfile, response) VALUES('$loggedin_session','$post', '$timestamp', '$loggedin_fname', '$loggedin_lname', '$loggedin_mf', '$value')";
                
    if (mysqli_query($conn, $sql)) {
        $sql4 = mysqli_query($conn, "UPDATE tb_orderprocess SET customize = '2' WHERE trans_id = $trans_id");
        $sql2 = mysqli_query($conn, "INSERT INTO tb_ordercompleted SELECT * FROM tb_orderprocess WHERE trans_id = '$trans_id'");
        $sql3 = mysqli_query($conn, "DELETE FROM tb_orderprocess WHERE trans_id = '$trans_id'");
        $alert = "Posted!";
        header("location: ../myprofile-page/userProfile.php?message=$alert");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>