<?php
    session_start();
    require_once '../../php-database/dbconnect.php';
    // Check connection
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $password=mysqli_real_escape_string($conn,$_POST['u_password']);

        $sql="SELECT id FROM tb_user WHERE email='$email' and u_password='$password'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
        $active=$row['active'] = '';
        $count=mysqli_num_rows($result);

        if($count==1) {
            //session_register("email");
            $_SESSION['login_user']=$email;
            header("location: ../home-page/userhome.php");
        } 
        else { 
            header("location: userlogin.php?remark_login=failed"); 
            
        }
    }
?>