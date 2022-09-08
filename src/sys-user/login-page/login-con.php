<?php
    session_start();
    require_once '../../php-database/dbconnect.php';
    // Check connection
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $password=mysqli_real_escape_string($conn,$_POST['u_password']);
        $result = mysqli_query($conn,"SELECT * FROM tb_user");
        $c_rows = mysqli_num_rows($result);

        if ($c_rows!=$email || $c_rows!=$password) {
            header("location: userlogin.php?remark_login=failed");
        }

        $sql="SELECT id FROM tb_user WHERE email='$email' and u_password='$password'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result);
        $active=$row['active'];
        $count=mysqli_num_rows($result);

        if($count==1) {
            $_SESSION['login_user']=$email;
            header("location: ../home-page/userhome.php");
        }
    }
?>