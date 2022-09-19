<?php 
    require_once 'dbconnect.php';

    $id=$_POST['id'];
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $address=$_POST['u_address'];
    $cno=$_POST['contact_no'];
    $email=$_POST['email'];
    $psw=$_POST['u_password'];

    $t_fname = trim($fname);
    $t_lname = trim($lname);
    $t_address = trim($address);
    $t_cno = trim($cno);
    $t_email = trim($email);
    $t_psw = trim($psw);

    $query = "UPDATE tb_user SET first_name='$t_fname', last_name='$t_lname', u_address='$t_address', contact_no='$t_cno', email='$t_email', u_password='$t_psw' WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $alert = "Account Updated!";
        header("location: ../sys-user/myprofile-page/userProfile.php?message=$alert");
            exit;
      } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
      }
?>