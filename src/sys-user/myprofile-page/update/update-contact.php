<!--session link-->
<?php include '../../../php-database/user-session.php'; ?>

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
    <link rel="stylesheet" href="../userProfile.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
    <!--Header and divider-->
    <header>
        <div class="app-name">
            <a href="">
                <img src="../../../../image/logo.png" alt="">
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
            <section id="for-edit">
                <div class="update-cont">
                    <div class="back-btn">
                        <button class="bck" onclick="window.location.href='../userProfile.php'"><img src="../../../../image/icon/arrow.png" alt="" width="15px" height="11px"></button>
                        <h4>Update Contact No.</h4>
                    </div>
                    <div class="content-cont">
                        <form action="../../../php-database/update-user.php" method="post">
                            <div class="input">
                                <label for="contact">Contact No.</label>
                                <input type="text" name="unique_id" value="<?php echo $loggedin_uid; ?>" hidden>
                                <input type="text" name="contact_no" id="contact" value="<?php echo $loggedin_cno; ?>">
                                <input type="button" onclick="openAlert()" value="Update">
                            </div>
                            <!--Alert-->
                            <div class="alert" id="alert">
                                <div class="alert-cont">
                                    <div class="alert-content">
                                        <img src="../../../../image/icon/check.png" alt="" width="70px" height="70px">
                                        <h1>Are you sure?</h1>
                                        <p>Do you really want to update this contact number?</p>
                                        <div class="alert-btn">
                                            <button class="btn-green" name="cno-btn" type="submit">Yes</button>
                                            </form>
                                            <input type="button" class="btn-secondary" onclick="closeAlert()" value="No">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <script src="../../../js/alert.js"></script>
</body>
</html>