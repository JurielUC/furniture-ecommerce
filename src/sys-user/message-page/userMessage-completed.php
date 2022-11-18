<!--session link-->
<?php include '../../php-database/user-session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completed - Gil Reyes FRS</title>
    <link rel="icon" href="../../../image/logo2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="userMessage.css?v=<?php echo time(); ?>">
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
        <!--Put your navigation here below-->
        <nav>
            <a class="a" href="../home-page/userhome.php">Your Feed</a>
            <a class="a" href="../message-page/userMessage.php" style="border-bottom: 3px solid white; padding-bottom: 5px;">Message</a>
            <div class="dropdown" style="float:right;">
                <a class="dropbtn"><img src="../../../image/icon/down-chevron.png" alt="" width="13px" height="13px"> More</a>
                <div class="dropdown-content">
                    <a href="../customization-page/userCustomization.php">Designs</a>
                    <a href="../myprofile-page/userProfile.php">Profile</a>
                    <a href="../terms-and-policy/privacy-policy.php" target="_blank">Privacy Policy</a>
                    <a href="../terms-and-policy/terms-and-conditions.php" target="_blank">Terms of Use</a>
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
            <section class="message-cont">
                <div class="message-head">
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
                    <img src="../../../image/logo2.png" alt="" width="30px" height="30px">
                    <a class="shop" href="../home-page/userhome.php">Shop Admin</a>
                    <div class="refresh-btn">
                        <span class="your_div"></span>
                        <a href="../../php-database/read-message.php?unique_id=<?php echo $loggedin_uid; ?>">&nbsp|&nbspRefresh</a>
                        
                    </div>
                    
                </div>
                <div class="message-box" id="your_div">
                <?php 
                    require_once '../../php-database/user-session.php';

                    $sql2 = mysqli_query($conn, "UPDATE tb_user SET recieved_msg = recieved_msg - recieved_msg WHERE unique_id = '$loggedin_uid'");

                    $shopid = '1135622190';
                                        
                    $query = "SELECT * FROM tb_pointmessage WHERE message_to = $shopid 
                            AND message_from = $loggedin_uid OR message_to = $loggedin_uid 
                            AND message_from = $shopid ORDER BY msg_timestamp ASC";

                    $result = mysqli_query($conn, $query);
                    if(mysqli_num_rows($result) > 0){
                        while ($row = mysqli_fetch_assoc($result))
                            {
                                if($row['message_from'] === $shopid){
                                    if($row['message_content'] == NULL) {
                                        echo '  <p class="time-s">'. $row['msg_timestamp'] .'</p>
                                        <div class="message-me message">
                                            <div class="message-one">
                                                <img src=../../sys-admin/message-page/'. $row['msg_file'] .' width="360px">
                                            </div>
                                        </div>';
                                    } else {
                                        echo '  <p class="time-s">'. $row['msg_timestamp'] .'</p>
                                        <div class="message-me message">
                                            <div class="message-one">
                                                <p>'. $row['message_content'] .'</p>
                                            </div>
                                        </div>';
                                    }
                                    
                                }
                                elseif($row['message_from'] === $loggedin_uid) {
                                    if($row['message_content'] == NULL) {
                                        echo  '<p class="time-s">'. $row['msg_timestamp'] .'</p>
                                            <div class="message-admin">
                                                <div class="message-two message">
                                                    <img src='. $row['msg_file'] .' width="360px">
                                                </div>
                                            </div>';
                                    } else {
                                        echo  '<p class="time-s">'. $row['msg_timestamp'] .'</p>
                                            <div class="message-admin">
                                                <div class="message-two message">
                                                    <p>'. $row['message_content'] .'</p>
                                                </div>
                                            </div>';
                                    }
                                }
                            }
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
                        <h2>Order History</h2>
                        <div class="dropdown" style="float:right;">
                            <button class="dropbtn">Menu</button>
                            <div class="dropdown-content">
                                <a href="userMessage.php">Your Order</a>
                                <a href="userMessage-customized.php">Customized Order</a>
                                <a href="#" style="background-color: #d9e2ef;">Order History</a>
                                <a href="other-history.php">Other History</a>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar-cont">
                        <!--put php for message display here-->
                        <?php 
                            include '../../php-database/dbconnect.php';

                            $query = "SELECT * FROM tb_ordercompleted INNER JOIN tb_product ON tb_ordercompleted.product_id = tb_product.id WHERE user_id = '$loggedin_uid' ORDER BY tb_ordercompleted.id DESC";
                            $result = mysqli_query($conn, $query);
                        ?>
                        <div class="canvas">
                            <?php
                                if (mysqli_num_rows($result) == 0) {
                                    echo "<div class='nodata' style='height: 50vh; display: flex; justify-content: center; align-items: center; flex-direction: column; text-align: center; opacity: 25%;'>
                                        <img src='../../../image/icon/file.png' width='120px' height='120px'>
                                        <p>No Order History</p>
                                        </div>";
                                    }

                                while ($row = mysqli_fetch_assoc($result))
                                {      
                            ?>
                            <div class="tran-cont">
                                <div class="p-s">
                                    <p class="title">Transaction ID:</p>
                                    <p>&nbsp<?php echo $row['trans_id']; ?></p>
                                </div>
                                <div class="d-t">
                                    <p class="title">Order Date:</p>
                                    <p>&nbsp<?php echo $row['datetime']; ?></p>
                                </div>
                                <div class="d-t">
                                    <p class="title">Quantity:</p>
                                    <p>&nbsp<?php echo $row['order_qty']; ?> pc/s</p>
                                </div>
                                <div class="d-t">
                                    <p class="title">Payment Method:</p>
                                    <p>&nbsp<?php echo $row['payment_method']; ?></p>
                                </div>
                                <div class="d-t">
                                    <p class="title">Total Price:</p>
                                    <p>&nbspPhp <?php echo $row['total_price']; ?>.00</p>
                                </div>
                            </div>
                            <div class="order">
                                <p>Your Order:</p>
                                <div class="spe-order">
                                    <img src="../../sys-admin/product-page/<?php echo $row['product_img']; ?>" alt="" height="50px">
                                    <div>
                                        <h4><?php echo $row['product_name']; ?></h4>
                                        <p>Php <?php echo $row['price']; ?>.00</p>
                                    </div>
                                </div>
                            </div>
                                <div class="line"></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>              
            </section>
            <script src="userMessage.js"></script>
        </div>
    </main>
</body>
</html>