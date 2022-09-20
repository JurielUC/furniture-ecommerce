<?php 
    require_once 'dbconnect.php';

    $id=$_POST['id'];
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $cno=$_POST['contact_no'];
    $email=$_POST['email'];
    $position=$_POST['position'];
    $psw=$_POST['a_password'];

    $t_fname = trim($fname);
    $t_lname = trim($lname);
    $t_address = trim($address);
    $t_cno = trim($cno);
    $t_position = trim($position);
    $t_email = trim($email);
    $t_psw = trim($psw);

    $query = "UPDATE tb_admin SET first_name='$t_fname', last_name='$t_lname', contact_no='$t_cno', email='$t_email', position='$t_position', a_password='$t_psw' WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $alert = "Account Updated!";
        header("location: ../sys-admin/feed-profile-page/adminProfile.php?message=$alert");
            exit;
      } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
      }
?>