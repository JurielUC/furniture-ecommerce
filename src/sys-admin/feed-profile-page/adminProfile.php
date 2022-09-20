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
                <img src="../../../image/logo.jpg" alt="">
                <h1>Gil's Furniture Shop</h1>
            </a>
        </div>
        <!--Put your navigation here below-->
        <nav>
            <a href="../product-page/adminProduct.php">Product</a>
            <a href="../message-page/adminMessage.php">Message</a>
            <a href="" style="border-bottom: 3px solid white; padding-bottom: 5px;">Shop Feed</a>
            <a href="../../php-database/admin-logout.php">Logout</a>
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
                    <h1>User Post</h1>
                </div>
                <div class="user-post-cont">
                    <div class="user-post">
                        <div class="pp-name-date">
                            <div class="pp-name">
                                <img src="../../../image/icon/account.png" alt="" width="35px" height="35px">
                                <h2>Juriel Comia</h2>
                            </div>
                            <p>02:05:00 - 10/10/22</p>
                        </div>
                        <div class="caption-attachment">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, sequi dolores! Debitis recusandae omnis repellat quas impedit officia, beatae pariatur! Autem voluptates at eveniet minus cumque similique facilis ullam id?</p>
                        </div>
                        <div class="comment-send">
                            <form action="" method="post">
                                <textarea name="comment" id="" cols="85" rows="2" placeholder="Comment..."></textarea>
                                <button type="submit"><img src="../../../image/icon/send.png" alt="" width="40px" height="40px"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section class="shopinfo-cont">
                <div class="search-bar">
                    <form action="">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit">Search</button>
                    </form>
                </div>  
                <div class="shopinfo">
                    <?php include '../../php-database/shopinfo.php'; 
                        while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <h1><u>Business Information</u></h1>
                    <div class="profile-pic">
                        <img src="../../../image/logo.jpg" alt="" width="100px" height="100px">
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
                                                <img src="../product-page/<?php echo $row["profile_pic"]; ?>" alt="" width="80px" height="80px">
                                                <form action="../../php-database/businessinfo-update.php" method="post">
                                                    <div>
                                                        <label for="">ID</label>
                                                        <input type="text" name="id" value="<?php echo $row["id"]; ?>" readonly>
                                                    </div>
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
                                                <img src="<?php echo $loggedin_mf; ?>" alt="" width="80px" height="80px">
                                                <form action="../../php-database/admin-account-update.php" method="post">
                                                    <div>
                                                        <label for="">Account ID</label>
                                                        <input type="text" name="id" value="<?php echo $loggedin_id; ?>" readonly>
                                                    </div>
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
                                                        <input type="text" name="a_password" value="<?php echo $loggedin_psw; ?>">
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