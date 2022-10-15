<?php 
    include 'user-session.php';

    $id=$_REQUEST['id'];
    $desc=$_REQUEST['long_desc'];
                
    $sql = "UPDATE tb_userpost
                SET long_desc = '$desc'
                    WHERE id='$id'";
                
    if (mysqli_query($conn, $sql)) {
        $alert = "Updated!";
        header("location: ../sys-user/myprofile-page/userProfile.php?message=$alert");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>