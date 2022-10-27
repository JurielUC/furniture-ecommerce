<!--session link-->
<?php include '../../php-database/admin-session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gil's Furniture</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="adminProfile.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
    <!--Header and divider-->
    <header>
        <div class="app-name">
            <a href="">
                <img src="../../../image/logo.png" alt="">
                <h1>Gil's Furniture Shop</h1>
            </a>
        </div>
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    <!------------------------------------------------>
    <main>
        <div class="container">
            <h4 class="message-pop"><?php if(!empty($_GET['message'])) {
                $message = $_GET['message'];
                echo $message; }?>
            </h4>
            <div class="update-cont">
                <div class="back-btn">
                    <button class="bck" onclick="window.location.href='adminProfile.php'"><img src="../../../image/icon/arrow.png" alt="" width="15px" height="11px"></button>
                    <h4>Create New Account for Admin</h4>
                </div>
                <div class="content-cont">
                    <form action="../../php-database/create-admin.php" method="post">
                        <div class="input">
                            <input type="text" name="unique_id" value="<?php echo $loggedin_uid; ?>" hidden>
                            <label for="fname">First Name</label>
                            <input type="text" name="first_name" id="fname" placeholder="Enter First Name">

                            <label for="lname">Last Name</label>
                            <input type="text" name="last_name" id="lname" placeholder="Enter Last Name">

                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" placeholder="Enter Email">

                            <label for="cno">Contact No</label>
                            <input type="text" name="contact_no" id="cno" placeholder="Enter Contact No">

                            <label for="pos">Position</label>
                            <input type="text" name="position" id="pos" placeholder="Enter Position">
                        </div>
                        <div class="input">
                            <label for="psw">Password</label>
                            <input type="password" name="a_password" id="psw" placeholder="Enter Password">
                            <input type="submit" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script type="text/javascript" src="../../../js/alert.js"></script>
</body>
</html>