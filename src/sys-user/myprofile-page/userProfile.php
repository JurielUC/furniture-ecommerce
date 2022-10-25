<!--session link-->
<?php include '../../php-database/user-session.php'; ?>

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
    <link rel="stylesheet" href="userProfile.css?v=<?php echo time(); ?>">
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
            <a href="../home-page/userhome.php">Your Feed</a>
            <a href="../message-page/userMessage.php">Message</a>
            <a href="../myprofile-page/userProfile.php" style="border-bottom: 3px solid white; padding-bottom: 5px;">Profile</a>
            <a href="../../php-database/user-logout.php">Logout</a>
        </nav>
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    <!------------------------------------------------>

    <main>
        <div class="container">
            <section class="post-cont">
                <h1 style="text-align: center; color: #a8896c;" class="create-message"><?php if(!empty($_GET['message'])) {
                    $message = $_GET['message'];
                    echo $message; }?>
                </h1>
                <div class="form-cont">
                    <form action="userPost.php" method="post">
                        <textarea name="long_desc" id="" cols="95" rows="3" placeholder="Write something..." required></textarea>
                        <div class="attach-submit">
                            <a class="customize" href="../customization-page/userCustomization.php">Create Design</a>
                            <input type="submit" value="Post">
                        </div>
                    </form>
                </div>
                <div class="category">
                    <button class="active" onclick="window.location.href='userProfile.php';">My Post</button>
                    <button onclick="window.location.href='all-post.php';">All Post</button>
                </div>
                <div class="user-post-cont">
                        <?php 
                            include '../../php-database/dbconnect.php';

                            $query = "SELECT * FROM tb_userpost WHERE user_email = '$loggedin_session' ORDER BY date_time DESC";
                            $result = mysqli_query($conn, $query);

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
                            ?>
                    <div class="user-post">
                        <div class="pp-name-date">
                            <!--Put php codes for product display here-->
                            <div class="pp-name">
                                <img class="profile-pic" src="../signup-page/<?php echo $row['myfile']; ?>" alt="" width="35px" height="35px">
                                <h2><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></h2>
                                <a href="userPost-update.php?id=<?php echo $row['id']; ?>"><img title="Update and Delete" src="../../../image/icon/ellipsis.png" alt="" width="30px" height="30px"></a>
                            </div>
                            
                            <p><?php echo $row['date_time']; ?></p>
                        </div>
                        <div class="caption-attachment">
                            <p><?php echo $row['long_desc']; ?></p>
                        </div>

                        
                        <div class="comment-send">
                            <form action="" method="post">
                                <textarea name="comment" id="" cols="85" rows="2" placeholder="Comment..."></textarea>
                                <button type="submit"><img src="../../../image/icon/send.png" alt="" width="40px" height="40px"></button>
                            </form>
                        </div>
                    </div>
                        <?php 
                                }
                        ?>
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
                    <h1><u>My Profile</u></h1>
                    <div class="profile-pic">
                        <img src="../signup-page/<?php echo $loggedin_mf; ?>" alt="" width="100px" height="100px">
                    </div>
                    <h3><img src="../../../image/icon/owner.png" alt="" width="15" height="15">&nbsp&nbspName</h3>
                    <p><?php echo $loggedin_fname; ?> <?php echo $loggedin_lname; ?></p>
                    <h3><img src="../../../image/icon/placeholder.png" alt="" width="15" height="15">&nbsp&nbspAddress</h3>
                    <p><?php echo $loggedin_address; ?></p>
                    <h3><img src="../../../image/icon/gmail.png" alt="" width="15" height="15">&nbsp&nbspEmail</h3>
                    <p><?php echo $loggedin_session; ?></p>
                    <h3><img src="../../../image/icon/phone (1).png" alt="" width="15" height="15">&nbsp&nbspContact Number</h3>
                    <p><?php echo $loggedin_cno; ?></p>
                    <h3 class="create-message" style="text-align: center;"><?php if(!empty($_GET['alert'])) {
                        $message = $_GET['alert'];
                        echo $message; }?>
                    </h3>
                    <button onclick="openProfile()">Update Info</button>
                    <button>Terms and Conditions</button>
                </div>              
            </section>
                                <!--Display Popup Profile when clicked-->
                                <div class="profile-popup" id="myProfileForm">
                                    <div class="profile-popup-form">
                                        <div class="popup-header">
                                            <div class="exit-button">
                                                <button class="update-popup-close" onclick="closeProfile()" title="Close"><img src="../../../image/icon/arrow.png" alt="" width="17px" height="17px"></button>
                                                <h2>Update Information</h2>
                                            </div>
                                            <div class="profile-content">
                                                <!--<img src="../signup-page/<?php //echo $loggedin_mf; ?>" alt="" width="80px" height="80px">-->
                                                <form action="../../php-database/user-account-update.php" method="post" enctype="multipart/form-data">
                                                    <!--<div>
                                                        <label for="">Profile Photo</label>
                                                        <input type="file" name="myfile" value="<?php //echo $loggedin_mf; ?>">
                                                    </div>-->
                                                    <div>
                                                        <label for="">Account ID</label>
                                                        <input type="text" name="unique_id" value="<?php echo $loggedin_uid; ?>" readonly>
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
                                                        <label for="">Address</label>
                                                        <input type="text" name="u_address" value="<?php echo $loggedin_address; ?>">
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
                                                        <label for="">Password</label>
                                                        <input type="password" name="u_password" id="myText" placeholder="Enter Password" required>
                                                        <div class="takenote">
                                                            <p>You can change or use your old password.<br>Don't let this empty.</p>
                                                        </div>
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
        <script src="userProfile.js"></script>
    </main>
</body>
</html>