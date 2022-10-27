<?php 
    session_start();
    require 'dbconnect.php';
    
    $user_check=$_SESSION['login_admin'];
    $ses_sql=mysqli_query($conn,"select * from tb_admin where email='$user_check'");
    $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    $loggedin_session=$row['email'];
    $loggedin_id=$row['id'];
    $loggedin_uid=$row['unique_id'];
    $loggedin_fname=$row['first_name'];
    $loggedin_lname=$row['last_name'];
    $loggedin_cno=$row['contact_no'];
    $loggedin_psw=$row['a_password'];
    $loggedin_position=$row['position'];

    if(!$_SESSION['login_admin'])
    {  
        header("Location: ../sys-admin/login-page/adminLogin.php"); //redirect to the login page to secure the welcome page without login access.  
    }  
?>