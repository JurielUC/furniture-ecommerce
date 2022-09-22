<?php 
    include '../../php-database/user-session.php';
                
    $post=$_REQUEST['long_desc'];
    $timestamp = date("Y-m-d H:i:s");

    $sql = "INSERT INTO tb_userpost(user_email, long_desc, date_time, fname, lname, myfile) VALUES('$loggedin_session','$post', '$timestamp', '$loggedin_fname', '$loggedin_lname', '$loggedin_mf')";
                
    if (mysqli_query($conn, $sql)) {
        $alert = "Posted!";
        header("location: userProfile.php?message=$alert");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>