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
        <!--Put your navigation here below-->
        <nav>
            <a class="a" href="../product-page/adminProduct.php">Product</a>
            <a class="a" href="" style="border-bottom: 3px solid white; padding-bottom: 5px;">Shop Feed</a>
            <a class="a" href="../../php-database/admin-logout.php">Logout</a>
        </nav>
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    <!------------------------------------------------>

    <main>
        <div class="container">
            <section class="post-cont">
                <div class="form-cont">
                    <h1>Customer's Post/Feedback</h1>
                </div>
                <div class="category">
                    <button onclick="window.location.href='adminProfile.php';">Without Response</button>
                    <button class="active" onclick="window.location.href='adminProfile-res.php';">With Response</button>
                </div>
                <div class="user-post-cont">
                        <?php 
                            include '../../php-database/admin-userpost-display-responded.php';

                            if (mysqli_num_rows($result) == 0) {
                                echo "<div class='nodata' style='width: 690px; height: 50vh; display: flex; justify-content: center; align-items: center; flex-direction: column; text-align: center; opacity: 25%;'>
                                    <img src='../../../image/icon/file.png' width='120px' height='120px'>
                                    <p>No Post</p>
                                    </div>";
                                }
                        ?>
                        <?php
                                while ($row = mysqli_fetch_assoc($result))
                                {   
                                    $postID=$row['id'];
                            ?>
                    <div class="user-post">
                        <div class="pp-name-date">
                            <!--Put php codes for product display here-->
                            <div class="pp-name">
                                <img src="../../sys-user/signup-page/<?php echo $row['myfile']; ?>" alt="" width="35px" height="35px">
                                <h2><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></h2>
                            </div>
                            
                            <p><?php echo $row['date_time']; ?></p>
                        </div>
                        <div class="caption-attachment">
                            <p><?php echo $row['long_desc']; ?></p>
                        </div>

                        <div class="shop-response">
                            <h3><?php echo $row['shopres']; ?></h3>
                            <p><?php echo $row['comment']; ?></p>
                        </div>
                        
                        <div class="divider-lang" style="height: 10px;">

                        </div>
                    </div>
                        <?php
                                }
                        ?>
                </div>
            </section>
            <section class="shopinfo-cont">
                <!--<div class="search-bar">
                    <form action="">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit">Search</button>
                    </form>
                </div> -->
                <div class="shopinfo">
                    <?php include '../../php-database/shopinfo.php'; 
                        while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <h1><u>Business Information</u></h1>
                    <div class="profile-pic">
                        <img src="../../../image/logo.png" alt="" width="100px" height="100px">
                    </div>
                    <h3><img src="../../../image/icon/placeholder.png" alt="" width="15" height="15">&nbsp&nbspLocation</h3>
                    <p><?php echo $row["address"]; ?></p>
                    <h3><img src="../../../image/icon/gmail.png" alt="" width="15" height="15">&nbsp&nbspEmail</h3>
                    <p><?php echo $row["email"]; ?></p>
                    <h3><img src="../../../image/icon/phone (1).png" alt="" width="15" height="15">&nbsp&nbspContact Number</h3>
                    <p><?php echo $row["contact_no"]; ?></p>
                    <h3><img src="../../../image/icon/owner.png" alt="" width="15" height="15">&nbsp&nbspBusiness Owner</h3>
                    <p><?php echo $row["name"]; ?></p>
                    <h3 class="create-message" style="text-align: center;"><?php if(!empty($_GET['message'])) {
                        $message = $_GET['message'];
                        echo $message; }?>
                    </h3>
                    
                    <button onclick="openBusinessInfo()">Update Info</button>
                    <button onclick="openAccountInfo()">Update Account</button>
                    <button onclick="window.location.href='add-admin.php'">Create New Account</button>
                    <button>Terms and Conditions</button>
                </div>           
            </section>
                                <!--Display Popup Business Information when clicked-->
                                <div class="busi-info-popup" id="myBInfoForm">
                                    <div class="busi-info-popup-form">
                                        <div class="popup-header">
                                            <div class="exit-button">
                                                <button class="update-busi-info-close" onclick="closeBusinessInfo()" title="Close"><img src="../../../image/icon/arrow.png" alt="" width="17px" height="17px"></button>
                                                <h2>Update Information</h2>
                                            </div>
                                            <div class="busi-info-content">
                                                <img src="../../../image/logo.png" alt="" width="80px" height="80px">
                                                <button class="change-photo">Change Photo</button>
                                                <form action="../../php-database/businessinfo-update.php" method="post">
                                                        <input type="text" name="id" value="<?php echo $row["id"]; ?>" hidden>
                                                    <div>
                                                        <label for="">Name</label>
                                                        <input type="text" name="name" value="<?php echo $row["name"]; ?>">
                                                    </div>
                                                    <div>
                                                        <label for="">Address</label>
                                                        <input type="text" name="address" value="<?php echo $row["address"]; ?>">
                                                    </div>
                                                    <div>
                                                        <label for="">Contact No</label>
                                                        <input type="text" name="contact_no" value="<?php echo $row["contact_no"]; ?>">
                                                    </div>
                                                    <div>
                                                        <label for="">Email</label>
                                                        <input type="email" name="email" value="<?php echo $row["email"]; ?>">
                                                    </div>
                                                    <div>
                                                        <input type="submit" class="submit" value="Update">
                                                    </div>
                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

                                <!--Display Popup Business Information when clicked-->
                                <div class="account-popup" id="myAccountForm">
                                    <div class="account-popup-form">
                                        <div class="popup-header">
                                            <div class="exit-button">
                                                <button class="update-busi-info-close" onclick="closeAccountInfo()" title="Close"><img src="../../../image/icon/arrow.png" alt="" width="17px" height="17px"></button>
                                                <h2>Update Information</h2>
                                            </div>
                                            <div class="account-content">
                                                <form action="../../php-database/admin-account-update.php" method="post">
                                                    <div>
                                                        <label for="">First Name</label>
                                                        <input type="text" name="first_name" value="<?php echo $loggedin_fname; ?>">
                                                    </div>
                                                    <div>
                                                        <label for="">Last Name</label>
                                                        <input type="text" name="last_name" value="<?php echo $loggedin_lname; ?>">
                                                    </div>
                                                    <div>
                                                        <label for="">Contact No</label>
                                                        <input type="text" name="contact_no" value="<?php echo $loggedin_cno; ?>">
                                                    </div>
                                                    <div>
                                                        <label for="">Email</label>
                                                        <input type="email" name="email" value="<?php echo $loggedin_session; ?>" readonly>
                                                    </div>
                                                    <div>
                                                        <label for="">Position</label>
                                                        <input type="text" name="position" value="<?php echo $loggedin_position; ?>" readonly>
                                                    </div>
                                                    <div>
                                                        <label for="">Password</label>
                                                        <input type="password" name="a_password" value="<?php echo $loggedin_psw; ?>">
                                                    </div>
                                                    <div>
                                                        <input type="submit" class="submit" value="Update">
                                                    </div>
                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        </div>
    </main>
    <script src="adminProfile.js"></script>
</body>
</html>