<?php 
    require_once 'dbconnect.php';

    $id=$_POST['id'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $cno=$_POST['contact_no'];
    $email=$_POST['email'];

    $t_name = trim($name);
    $t_address = trim($address);
    $t_cno = trim($cno);
    $t_email = trim($email);

    $query = "UPDATE tb_shopinfo SET name='$t_name', address='$t_address', contact_no='$t_cno', email='$t_email' WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $alert = "Business Info Updated!";
        header("location: ../sys-admin/feed-profile-page/adminProfile.php?message=$alert");
            exit;
      } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
      }
?>