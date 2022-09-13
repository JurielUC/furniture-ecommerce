<?php
    session_start();
    require '../../php-database/dbconnect.php';
    // Check connection
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $password=mysqli_real_escape_string($conn,$_POST['a_password']);

        $sql="SELECT id FROM tb_admin WHERE email='$email' and a_password='$password'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
        $active=$row['active'] = '';
        $count=mysqli_num_rows($result);

        if($count==1) {
            //session_register("email");
            $_SESSION['login_admin']=$email;
            header("location: ../product-page/adminProduct.php");
        } 
        else { 
            header("location: adminLogin.php?remark_login=failed"); 
            
        }
    }
?>