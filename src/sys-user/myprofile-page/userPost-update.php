<!--session link-->
<?php include '../../php-database/user-session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile/Update Post - Gil Reyes FRS</title>
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
        <nav>
            <a href="../home-page/userhome.php" class="a">Your Feed</a>
            <a href="../message-page/userMessage.php" class="a"><span class="your_div"></span>Message</a>
            <div class="dropdown" style="float:right;">
                <a class="dropbtn"><img src="../../../image/icon/down-chevron.png" alt="" width="13px" height="13px"> More</a>
                <div class="dropdown-content">
                    <a href="../customization-page/userCustomization.php">Create Design</a>
                    <a href="../myprofile-page/userProfile.php" style="background-color: #d9e2ef; border-bottom: 3px solid white; padding-bottom: 5px;">My Profile</a>
                    <a href="../../php-database/user-logout.php">Logout</a>
                </div>
            </div>
        </nav>
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    <!------------------------------------------------>

    <main>
        <div class="container">
            <section class="post-cont">

                <?php

                    $update_id=$_GET['id'];

                    $sql="SELECT * FROM tb_userpost WHERE id = '$update_id'";
                    $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_assoc($result))
                            {  
                ?>
                <div class="prod-back">
                    <a href="userProfile.php"><img src="../../../image/icon/arrow.png" alt="" width="15px" height="15px"></a>
                    <p>Delete or Update Post</p>
                </div>
                <div class="form-cont">
                    <form action="../../php-database/updatePost.php" method="post">
                        <input type="text" name="id" id="" value="<?php echo $row['id'];?>" hidden>
                        <textarea name="long_desc" rows="3"><?php echo $row['long_desc'];?></textarea>
                        <div class="attach-submit">
                            <a onclick="openAlert()">Delete</a>
                            <input type="submit" value="Update">
                        </div>
                    </form>
                </div>
                        <!--Alert-->
                        <div class="alert" id="alert">
                            <div class="alert-cont">
                                <div class="alert-content">
                                    <img src="../../../image/icon/remove.png" alt="" width="70px" height="70px">
                                    <h1>Are you sure?</h1>
                                    <p>Do you really want to delete this post? This process cannot be undone.</p>
                                    <div class="alert-btn">
                                        <button class="btn-secondary" onclick="closeAlert()">Cancel</button>
                                        <button class="btn-danger" onclick="window.location.href='../../php-database/delete-post.php?id=<?php echo $row['id']; ?>';">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                                }
                        ?>
            </section>
            <section class="shopinfo-cont"> 
                <div class="shopinfo">
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
                    <button class="edt-pass" onclick="window.location.href='../customization-page/customized-design.php'">Customized Design List</button>
                </div>              
            </section>
        </div>
        <script src="userProfile.js"></script>
        <script src="../../js/alert.js"></script>
    </main>
</body>
</html>