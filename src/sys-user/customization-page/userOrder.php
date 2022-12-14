<!--session link-->
<?php include '../../php-database/user-session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order - Gil Reyes FRS</title>
    <link rel="icon" href="../../../image/logo2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../order-page/userOrder.css?v=<?php echo time(); ?>">
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
            <a href="../home-page/userhome.php" class="a">Your Feed</a>
            <a href="../message-page/userMessage.php" class="a"><span class="your_div"></span>Message</a>
            <div class="dropdown" style="float:right;">
                <a class="dropbtn"><img src="../../../image/icon/down-chevron.png" alt="" width="13px" height="13px"> More</a>
                <div class="dropdown-content">
                    <a href="userCustomization.php">Designs</a>
                    <a href="../myprofile-page/userProfile.php">My Profile</a>
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
            <section class="product-cont">
                <div class="prod-back">
                    <?php 
                        require_once '../../php-database/dbconnect.php';

                        $trans_id=$_GET['trans_id'];
                    ?>
                    <a href="../../php-database/back-to-customized.php?trans_id=<?php echo $trans_id; ?>"><img src="../../../image/icon/arrow.png" alt="" width="15px" height="15px"></a>
                    <p>Checkout</p>
                </div>
                <div class="product">
                    <form action="submit-order.php" method="post">
                        <div id="buyer-info">
                            <h3><u>Delivery Address</u></h3>
                            <div class="buyer-info-inputs">
                                <input class="big fullname" type="text" name="fullname" id="fullname" value="<?php echo $loggedin_fname; ?> <?php echo $loggedin_lname; ?>" readonly required>
                                <input class="sm" type="text" name="phone_no" id="phone_no" value="<?php echo $loggedin_cno; ?>" readonly required>
                            </div>
                            <div class="buyer-info-inputs">
                                <input class="big" type="text" name="address" id="address" placeholder="Barangay/Municipal" value="<?php echo $loggedin_address; ?>" title="We are available in Batangas area only." required>
                                <input class="sm" type="text" name="postal" id="postal" placeholder="Postal Code" required>
                            </div>
                            <div class="buyer-info-inputs">
                                <input class="big" type="text" name="house_no" id="house_no" placeholder="Street name/Building/House No." required>
                                <select class="select" name="settings" id="settings">
                                    <option value="Home">Home</option>
                                    <option value="Work">Work</option>
                                    <option value="Office">Office</option>
                                </select>
                            </div>
                        </div>
                        <div id="selected-product">
                            <h3><u>Customized Furniture</u></h3>
                                <?php 
                                    
                                    $query = "SELECT * FROM tb_customize WHERE trans_id=$trans_id";
                                    $result = mysqli_query($conn, $query);

                                    while($row = mysqli_fetch_assoc($result))
                                    {

                                ?>
                            <div class="spe-product">
                                
                                <div class="img-name">
                                    <div class="image">
                                        <img src="<?php echo $row['img_front']; ?>" alt="" width="60px">
                                    </div>
                                    <div class="image">
                                        <img src="<?php echo $row['img_back']; ?>" alt="" width="60px">
                                    </div>
                                    <div class="name-product">
                                        <h4><?php echo $row['type']; ?></h4>
                                        <p><?php echo $row['price']; ?></p>
                                    </div>
                                </div>
                                
                                <div class="quantity">
                                    <input type="text" name="user_id" value="<?php echo $loggedin_uid;?>" hidden>
                                    <input type="text" name="cust_id" value="<?php echo $row['selected'];?>" hidden>
                                    <input type="text" name="trans_id" value="<?php echo $row['trans_id'];?>" hidden>
                                    <input type="number" id="quantity" value="<?php echo $row['qty'];?>" readonly>
                                    <p>pc/s</p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        
                        <div id="payment">
                            <label for="payment-method">Payment Method</label>
                            <select name="payment" id="payment-method" required>
                                <option value="">Select...</option>
                                <option value="COD">Cash On Delivery</option>
                                <option value="GCash">GCash ePayment</option>
                            </select>
                        </div>
                        <div id="total-price">
                            <h4>Total Quantity</h4>
                            <p><?php 
                                    $query2 = "SELECT SUM(qty) AS total_quantity FROM tb_customize WHERE user_id = '$loggedin_uid' AND trans_id = '$trans_id'";
                                    $result2 = mysqli_query($conn, $query2);

                                    while ($row = mysqli_fetch_assoc($result2))
                                        {       
                                            $tq = $row['total_quantity'];
                                            echo $tq;
                                            echo "<input type='text' name='quantity' value='$tq' hidden>";
                                        }
                                        ?> pc(s)</p>
                        </div>
                        <div id="total-price">
                            <h4>Total Price</h4>
                            <p>PHP <?php 
                                    $query2 = "SELECT SUM(price) AS total_amount FROM tb_customize WHERE user_id = '$loggedin_uid' AND trans_id = '$trans_id'";
                                    $result2 = mysqli_query($conn, $query2);

                                    while ($row = mysqli_fetch_assoc($result2))
                                        {       
                                            $ta = $row['total_amount'];
                                            echo $ta;
                                            echo "<input type='text' name='total_price' value='$ta' hidden>";
                                        }
                                        ?></p>
                        </div>
                        <div id="total-price">
                            <h4>Downpayment</h4>
                            <p>PHP 
                                <?php
                                    $percent = 20;

                                    $dp = ($percent / 100) * $ta;

                                    echo $dp;
                            
                                ?>
                            </p>
                        </div>
                        <div id="total-price">
                            <h4>Amount after DPayment</h4>
                            <p>PHP 
                                <?php
                                    $new_amount = $ta - $dp;

                                    echo $new_amount;
                            
                                ?>
                            </p>
                        </div>
                        <span class="span-note">
                            <p>Once your order has been accepted. You have to send your downpayment via GCASH first before we process your order.</p>
                        </span>
                        <p style="font-size: .8rem; color: #FF0000; margin-top: 10px; text-align: center;">Note: Expect additional charges from the shop depending on the design and wood type.</p>
                        <p style="font-size: .8rem; color: #FF0000; margin-top: 10px; text-align: center;">Note: There will be some changes to the price depending on the agreement.</p>
                    
                </div>
                        <!--Alert-->
                        <div class="alert" id="alert">
                            <div class="alert-cont">
                                <div class="alert-content">
                                    <img src="../../../image/icon/check.png" alt="" width="70px" height="70px">
                                    <h1>Are you sure?</h1>
                                    <p>Do you really want to place this order? You can't cancel your order once the shop accepts it.</p>
                                    <div class="alert-btn">
                                        <button class="btn-green" type="submit">Yes</button>
                                        </form>
                                        <button class="btn-secondary" onclick="closeAlert()">No</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                <div class="checkout">
                    <button onclick="openAlert()">Place Order</button>
                </div>
            </section>
        </div>
        <script src="../../js/alert.js"></script>
    </main>
</body>
</html>