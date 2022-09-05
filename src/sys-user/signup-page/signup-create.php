<?php
    require_once '../../php-database/dbconnect.php';

    $first_name=$_REQUEST['first_name'];
    $last_name=$_REQUEST['last_name'];
    $address=$_REQUEST['u_address'];
    $email=$_REQUEST['email'];
    $contact_no=$_REQUEST['contact_no'];
    $password=$_REQUEST['u_password'];

    $trim_first = trim($first_name);
    $trim_last = trim($last_name);
    $trim_email = trim($email);

    //insert data to tb_user table
    $sql = "INSERT INTO tb_user(first_name, last_name, u_address, email, contact_no, u_password) VALUES('$trim_first','$trim_last', '$address', '$trim_email', '$contact_no', '$password')";

    if (mysqli_query($conn, $sql)) {
        header("location: signup-page.php");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>