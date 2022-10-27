<?php
    include 'dbconnect.php';

    $uid=$_REQUEST['unique_id'];
    $fname=$_REQUEST['first_name'];
    $lname=$_REQUEST['last_name'];
    $addr=$_REQUEST['u_address'];
    $cno=$_REQUEST['contact_no'];
    $psw=$_REQUEST['u_password'];
    $ppic=$_FILES['myfile']['name'];

    if(isset($_REQUEST["name-btn"]))
        {
            $query = "UPDATE tb_user SET first_name='$fname', last_name='$lname' WHERE unique_id='$uid'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $alert = "Name Updated!";
                header("location: ../sys-user/myprofile-page/userProfile.php?message=$alert & unique_id=$uid");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }

    elseif(isset($_REQUEST["addr-btn"]))
        {
            $query = "UPDATE tb_user SET u_address='$addr' WHERE unique_id='$uid'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $alert = "Address Updated!";
                header("location: ../sys-user/myprofile-page/userProfile.php?message=$alert & unique_id=$uid");
                    exit;
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        }

    elseif(isset($_REQUEST["cno-btn"]))
        {
            $query = "UPDATE tb_user SET contact_no='$cno' WHERE unique_id='$uid'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $alert = "Address Updated!";
                header("location: ../sys-user/myprofile-page/userProfile.php?message=$alert & unique_id=$uid");
                    exit;
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        }

    elseif(isset($_REQUEST["pw-btn"]))
        {
            $encrypt_pass = md5($psw);

            $query = "UPDATE tb_user SET u_password='$encrypt_pass' WHERE unique_id='$uid'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $alert = "Password Updated!";
                header("location: ../sys-user/myprofile-page/userProfile.php?message=$alert & unique_id=$uid");
                    exit;
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        }

    elseif(isset($_REQUEST["ppic-btn"]))
        {
            $var1 = rand(1111,9999);  // generate random number in $var1 variable
            $var2 = rand(1111,9999);  // generate random number in $var2 variable

            $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
            $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

            $dst = "../sys-user/signup-page/image/".$var3.$ppic;  // storing image path into the {all_images} folder with 32 characters hex number and file name
            $dst_db = "image/".$var3.$ppic; // storing image path into the database with 32 characters hex number and file name

            move_uploaded_file($_FILES["myfile"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
            
            $query = "UPDATE tb_user SET myfile='$dst_db' WHERE unique_id='$uid'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $alert = "Image Updated!";
                header("location: ../sys-user/myprofile-page/userProfile.php?message=$alert & unique_id=$uid");
                    exit;
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        }
?>