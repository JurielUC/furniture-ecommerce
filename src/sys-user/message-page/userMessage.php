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
                    <!--Auto reload script-->
                    <script>
                        function ajaxCall() {
                            $.ajax({
                                url: "message.php",
                                success: (function (result) {
                                    $("#your_div").html(result);
                                })
                            })
                        };

                        ajaxCall(); // To output when the page loads
                        setInterval(ajaxCall, (2 * 1000)); // x * 1000 to get it in seconds
                    </script>
                    <img src="../../../image/logo2.png" alt="" width="30px" height="30px">
                    <a href="../home-page/userhome.php">Shop Admin</a>

                </div>
                <div class="message-box" id="your_div">
                    
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
                        <h2>Your Order</h2>
                    </div>
                    <div class="progress-bar-cont">
                        <!--put php for message display here-->
                        <?php 
                            include '../../php-database/dbconnect.php';

                            $query = "SELECT * FROM tb_orderprocess INNER JOIN tb_product ON tb_orderprocess.product_id = tb_product.id WHERE user_id = '$loggedin_uid' ORDER BY tb_orderprocess.id DESC";
                            $result = mysqli_query($conn, $query);
                        ?>
                        <div class="canvas">
                            <?php
                                if (mysqli_num_rows($result) == 0) {
                                    echo "<div class='nodata' style='height: 50vh; display: flex; justify-content: center; align-items: center; flex-direction: column; text-align: center; opacity: 25%;'>
                                        <img src='../../../image/icon/file.png' width='120px' height='120px'>
                                        <p>No Order</p>
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

                            <!--Put your sql select for progress here-->
                            <?php 
                                $trans_id2=$row['trans_id'];
                                $sql2 = "SELECT * FROM tb_progress WHERE trans_id = '$trans_id2'";
                                $result2 = mysqli_query($conn, $sql2);


                                if (mysqli_num_rows($result2) == 0) {
                                    echo "<a class='cancel-order' href='../../php-database/delete-order.php?trans_id=$trans_id2'>Cancel Order</a>";
                                    }

                                while ($data = mysqli_fetch_assoc($result2))
                                { 
                            ?>
                            <div class="progress-timeline">
                                <p>Progress Timeline</p>
                                <div class="percentage">
                                    <div class="prog-status">
                                        <p><?php echo $data['zero']; ?></p>
                                    </div>
                                    <div class="percent">
                                        <p>0</p>
                                    </div>
                                    <div class="prog-desc">
                                        <p>Lorem Ipsum</p>
                                    </div>
                                </div>
                                <div class="percentage">
                                    <div class="prog-status">
                                        <p><?php echo $data['two_five']; ?></p>
                                    </div>
                                    <div class="percent">
                                        <p>25%</p>
                                    </div>
                                    <div class="prog-desc">
                                        <p>Lorem Ipsum</p>
                                    </div>
                                </div>
                                <div class="percentage">
                                <div class="prog-status">
                                        <p><?php echo $data['fifty']; ?></p>
                                    </div>
                                    <div class="percent">
                                        <p>50%</p>
                                    </div>
                                    <div class="prog-desc">
                                        <p>Lorem Ipsum</p>
                                    </div>
                                </div>
                                <div class="percentage">
                                <div class="prog-status">
                                        <p><?php echo $data['seven_five']; ?></p>
                                    </div>
                                    <div class="percent">
                                        <p>75%</p>
                                    </div>
                                    <div class="prog-desc">
                                        <p>Lorem Ipsum</p>
                                    </div>
                                </div>
                                <div class="percentage">
                                <div class="prog-status">
                                        <p><?php echo $data['hundred']; ?></p>
                                    </div>
                                    <div class="percent">
                                        <p>100%</p>
                                    </div>
                                    <div class="prog-desc">
                                        <p>Lorem Ipsum</p>   
                                    </div>
                                </div>
                                <?php
                                    if($data['hundred'] == 'DONE') {
                                        echo "<a class='rate-order' href=''>Rate Order</a>";
                                            }
                                ?>
                                <div class="line"></div>
                            </div>
                            <?php }} ?>
                        </div>
                    </div>
                </div>              
            </section>
            <script src="userMessage.js"></script>
        </div>
    </main>
</body>
</html>