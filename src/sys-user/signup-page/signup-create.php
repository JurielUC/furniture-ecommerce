<?php
    require_once '../../php-database/dbconnect.php';

    $first_name=$_REQUEST['first_name'];
    $last_name=$_REQUEST['last_name'];
    $address=$_REQUEST['u_address'];
    $email=$_REQUEST['email'];
    $contact_no=$_REQUEST['contact_no'];
    $password=$_REQUEST['u_password'];
    $Myfile=$_FILES['myfile']['name'];

    $var1 = rand(1111,9999);  // generate random number in $var1 variable
    $var2 = rand(1111,9999);  // generate random number in $var2 variable

    $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
    $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

    $dst = "./image/".$var3.$Myfile;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "image/".$var3.$Myfile; // storing image path into the database with 32 characters hex number and file name

    move_uploaded_file($_FILES["myfile"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name

    $trim_first = trim($first_name);
    $trim_last = trim($last_name);
    $trim_email = trim($email);

    //insert data to tb_user table
    $sql = "INSERT INTO tb_user(first_name, last_name, u_address, email, contact_no, u_password, myfile) VALUES('$trim_first','$trim_last', '$address', '$trim_email', '$contact_no', '$password', '$dst_db')";

    if (mysqli_query($conn, $sql)) {
        $alert = "Account Created Successfully. YOU MAY LOGIN NOW!";
        header("location: ../login-page/userlogin.php?message=$alert");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>