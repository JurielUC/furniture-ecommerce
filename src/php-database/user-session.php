<?php 
    session_start();
    require 'dbconnect.php';
    
    $user_check=$_SESSION['login_user'];
    $ses_sql=mysqli_query($conn,"select * from tb_user where email='$user_check'");
    $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    $loggedin_session=$row['email'];
    $loggedin_id=$row['id'];
    $loggedin_status=$row['status'];
    $loggedin_uid=$row['unique_id'];
    $loggedin_fname=$row['first_name'];
    $loggedin_lname=$row['last_name'];
    $loggedin_address=$row['u_address'];
    $loggedin_cno=$row['contact_no'];
    $loggedin_psw=$row['u_password'];
    $loggedin_mf=$row['myfile'];

    if(!$_SESSION['login_user'])
    {  
        header("Location: ../sys-user/login-page/userlogin.php"); //redirect to the login page to secure the welcome page without login access.  
    }  
?>