<?php
    require_once 'dbconnect.php';

    $uid=$_REQUEST['unique_id'];
    $first_name=$_REQUEST['first_name'];
    $last_name=$_REQUEST['last_name'];
    $email=$_REQUEST['email'];
    $contact_no=$_REQUEST['contact_no'];
    $pos=$_REQUEST['position'];
    $password=$_REQUEST['a_password'];

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $sql = mysqli_query($conn, "SELECT * FROM tb_admin WHERE email = '{$email}'");
      if(mysqli_num_rows($sql) > 0){
          $alert = "This email already exist!";
          header("location: ../sys-admin/feed-profile-page/add-admin.php?message=$alert & unique_id=$uid");
                exit;
      }else {

        $trim_first = trim($first_name);
        $trim_last = trim($last_name);
        $trim_email = trim($email);
        $ran_id = rand(time(), 100000000);

        //insert data to tb_user table
        $sql = "INSERT INTO tb_admin(unique_id, first_name, last_name, email, contact_no, position, a_password) VALUES('$ran_id', '$trim_first','$trim_last', '$trim_email', '$contact_no', '$pos', '$password')";

        if (mysqli_query($conn, $sql)) {
            $alert = "Account Created Successfully. YOU CAN USE IT NOW!";
            header("location: ../sys-admin/feed-profile-page/add-admin.php?message=$alert & unique_id=$uid");
                exit;
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

      }
    }else{
      $alert = "$email is not a valid email!";
      header("location: ../sys-admin/feed-profile-page/add-admin.php?message=$alert & unique_id=$uid");
        exit;
    }

    
?>