<!--session link-->
<?php include '../../php-database/user-session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile/My Post - Gil Reyes FRS</title>
    <link rel="icon" href="../../../image/logo2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="userProfile.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <!--Header and divider-->
    <header>
        <div class="app-name">
            <a href="">
                <img src="../../../image/logo.png" alt="">
                <h1>Gil Reyes FRS</h1>
            </a>
        </div>
        <!--Auto reload script-->
        <script>
            function ajaxCall() {
                $.ajax({
                    url: "refresh.php",
                    success: (function (result) {
                        $(".your_div").html(result);
                    })
                })
            };

            ajaxCall(); // To output when the page loads
            setInterval(ajaxCall, (2 * 1000)); // x * 1000 to get it in seconds
        </script>
        <!--Put your navigation here below-->
        <nav class="block">
            <a href="../home-page/userhome.php" class="a">Your Feed</a>
            <a href="../message-page/userMessage.php" class="a"><span class="your_div"></span>Message</a>
            <div class="dropdown" style="float:right;">
                <a class="dropbtn"><img src="../../../image/icon/down-chevron.png" alt="" width="13px" height="13px"> More</a>
                <div class="dropdown-content">
                    <a href="../customization-page/userCustomization.php">Designs</a>
                    <a href="../myprofile-page/userProfile.php" style="background-color: #d9e2ef; border-bottom: 3px solid white; padding-bottom: 5px;">My Profile</a>
                    <a href="../terms-and-policy/privacy-policy.php" target="_blank">Privacy Policy</a>
                    <a href="../terms-and-policy/terms-and-conditions.php" target="_blank">Terms of Use</a>
                    <a href="../../php-database/user-logout.php">Logout</a>
                </div>
            </div>
        </nav>
        <div class="nav-phone">
            <div class="dropdown" style="float:right;">
                <a class="dropbtn"><img src="../../../image/icon/down-chevron.png" alt="" width="13px" height="13px"> Menu</a>
                <div class="dropdown-content">
                    <a href="../home-page/userhome.php" class="a">Your Feed</a>
                    <a href="../message-page/userMessage.php" class="a"><span class="your_div"></span>Message</a>
                    <a href="../customization-page/userCustomization.php">Designs</a>
                    <a href="../myprofile-page/userProfile.php" style="border-bottom: 3px solid white; padding-bottom: 5px;">Profile</a>
                    <a href="../terms-and-policy/privacy-policy.php" target="_blank">Privacy Policy</a>
                    <a href="../terms-and-policy/terms-and-conditions.php" target="_blank">Terms of Use</a>
                    <a href="../../php-database/user-logout.php">Logout</a>
                </div>
            </div>
        </div>

    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    <!------------------------------------------------>

    <main>
        <div class="container">
            <section class="post-cont" id="post-cont">
                <h3 style="text-align: center; color: #a8896c;" class="create-message"><?php if(!empty($_GET['message'])) {
                    $message = $_GET['message'];
                    echo $message; }?>
                </h3>
                <div class="form-cont">
                    <form action="userPost.php" method="post">
                        <textarea name="long_desc" rows="3" placeholder="Write something..." required></textarea>
                        <div class="attach-submit">
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
                        
                        <div class="divider-lang" style="height: 10px;">

                        </div>
                    </div>
                        <?php
                                }
                        ?>
                </div>
            </section>
            <section class="shopinfo-cont">
                <div class="shopinfo" id="shopinfo">
                    <h1><u>My Profile</u></h1>
                    <div class="profile-pic">
                        <img src="../signup-page/<?php echo $loggedin_mf; ?>" alt="" width="100px" height="100px">
                        <button class="edit-btn" onclick="window.location.href='update/update-pic.php'">Change Photo</button>
                    </div>
                    <h3><img src="../../../image/icon/owner.png" alt="" width="15" height="15">&nbsp&nbspName</h3>
                    <p><?php echo $loggedin_fname; ?> <?php echo $loggedin_lname; ?> <button class="edit-btn" onclick="window.location.href='update/update-name.php'">Edit</button></p>
                    <div class="info-line"></div>
                    <h3><img src="../../../image/icon/placeholder.png" alt="" width="15" height="15">&nbsp&nbspAddress</h3>
                    <p><?php echo $loggedin_address; ?> <button class="edit-btn" onclick="window.location.href='update/update-address.php'">Edit</button></p>
                    <div class="info-line"></div>
                    <h3><img src="../../../image/icon/phone (1).png" alt="" width="15" height="15">&nbsp&nbspContact Number</h3>
                    <p><?php echo $loggedin_cno; ?> <button class="edit-btn" onclick="window.location.href='update/update-contact.php'">Edit</button></p>
                    <div class="info-line"></div>
                    <h3><img src="../../../image/icon/gmail.png" alt="" width="15" height="15">&nbsp&nbspEmail</h3>
                    <p><?php echo $loggedin_session; ?></p>
                    <div class="info-line"></div>
                    
                    <!--<button onclick="openProfile()">Update Info</button>-->
                    <button class="edt-pass" onclick="window.location.href='update/update-password.php'">Change Password</button>
                    <button class="edt-pass dl-btn" onclick="window.location.href='../customization-page/customized-design.php'">Customized Design List</button>
                </div>              
            </section>
            <section class="open-shopinfo">
                <button id="open" onclick="openShopInfo()"><img src="../../../image/icon/up-arrow.png" alt="" width="30px" height="30px"></button>
                <button id="close" onclick="closeShopInfo()"><img src="../../../image/icon/down-arrow.png" alt="" width="30px" height="30px"></button>
            </section>
        </div>
        <script src="userProfile.js"></script>
        <script>
            function openShopInfo() {
                document.getElementById("shopinfo").style.display = "block";
                document.getElementById("close").style.display = "block";
                document.getElementById("post-cont").style.display = "none";
                }
            function closeShopInfo() {
                document.getElementById("shopinfo").style.display = "none";
                document.getElementById("close").style.display = "none";
                document.getElementById("post-cont").style.display = "block";
                }
        </script>
    </main>
</body>
</html>