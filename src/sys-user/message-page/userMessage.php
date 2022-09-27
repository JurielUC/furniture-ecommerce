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
    <link rel="stylesheet" href="userMessage.css?v=<?php echo time(); ?>">
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
            <a href="../home-page/userhome.php">Your Feed</a>
            <a href="../message-page/userMessage.php" style="border-bottom: 3px solid white; padding-bottom: 5px;">Message</a>
            <a href="../myprofile-page/userProfile.php">Profile</a>
            <a href="../../php-database/user-logout.php">Logout</a>
        </nav>
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    <!------------------------------------------------>

    <main>
        <div class="container">
            <section class="message-cont">
                <div class="message-head">
                    <img src="../../../image/icon/account.png" alt="" width="30px" height="30px">
                    <a href="../home-page/userhome.php">Shop Admin</a>

                </div>
                <div class="message-box" id="your_div">
                    <?php 
                        require_once '../../php-database/user-session.php';

                        $shopid = '1135622190';
                        
                        $query = "SELECT * FROM tb_pointmessage WHERE message_to = $shopid 
                        AND message_from = $loggedin_uid OR message_to = $loggedin_uid 
                        AND message_from = $shopid ORDER BY msg_timestamp ASC";

                        $result = mysqli_query($conn, $query);
                        if(mysqli_num_rows($result) > 0){
                            while ($row = mysqli_fetch_assoc($result))
                                {
                        ?>
                            <?php 
                                if($row['message_from'] === $shopid){
                                    echo '  <p class="time-s">'. $row['msg_timestamp'] .'</p>
                                            <div class="message-me message">
                                                <div class="message-one">
                                                    <p>'. $row['message_content'] .'</p>
                                                </div>
                                            </div>';
                                }
                                elseif($row['message_from'] === $loggedin_uid) {
                                    echo  ' <p class="time-s">'. $row['msg_timestamp'] .'</p>
                                            <div class="message-admin">
                                                <div class="message-two message">
                                                    <p>'. $row['message_content'] .'</p>
                                                </div>
                                            </div>';
                                }
                            }
                            ?>
                                
                                <?php
                                    }else
                                        {
                                            echo '<p class="nm">No Message</p>';
                                        }
                                ?>
                </div>
                <div class="message-input">
                    <form action="userSend.php" method="post" enctype="multipart/form-data">
                        <div class="file">
                            <label for="file_upload" title="Attach File"><img src="../../../image/icon/attach-paperclip-symbol.png" alt="" width="28px" height="28px"></label>
                            <input type="file" name="file" id="file_upload">
                        </div>

                        <textarea name="message_content" id="" cols="82" rows="1" placeholder="Write someting..."></textarea>
                        <button title="Send" name="submit"><img src="../../../image/icon/send.png" alt="" width="30px" height="30px"></button>
                    </form>
                </div>
            </section>
            <section class="progress-cont"> 
                <div class="progress">
                    <div class="progress-header">
                        <h2>Project Progress</h2>
                    </div>
                    <div class="progress-bar-cont">
                        <!--put php for message display here-->
                        
                    </div>
                </div>              
            </section>
            <script src="userMessage.js"></script>
        </div>
    </main>
</body>
</html>