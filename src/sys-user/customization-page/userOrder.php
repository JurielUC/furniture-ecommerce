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
    <link rel="stylesheet" href="../order-page/userOrder.css?v=<?php echo time(); ?>">
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
            <a href="../home-page/userhome.php" class="a">Your Feed</a>
            <a href="../message-page/userMessage.php" class="a"><span class="your_div"></span>Message</a>
            <div class="dropdown" style="float:right;">
                <a class="dropbtn"><img src="../../../image/icon/down-chevron.png" alt="" width="13px" height="13px"> More</a>
                <div class="dropdown-content">
                    <a href="userCustomization.php">Create Design</a>
                    <a href="../myprofile-page/userProfile.php">My Profile</a>
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
                    <?php 
                        require_once '../../php-database/dbconnect.php';

                        $custID=$_GET['cust_id'];
                        
                        $query = "SELECT * FROM tb_customize WHERE cust_id=$custID";
                        $result = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_assoc($result))
                        {

                    ?>
                <div class="prod-back">
                    <a href="customized-design.php"><img src="../../../image/icon/arrow.png" alt="" width="15px" height="15px"></a>
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
                                        <p><?php echo $row['category']; ?></p>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <input type="text" name="user_id" value="<?php echo $loggedin_uid;?>" hidden>
                                    <input type="text" name="cust_id" value="<?php echo $row['cust_id'];?>" hidden>
                                    <input type="text" name="total_price" value="<?php echo $row['price']; ?>" hidden>
                                    <input type="number" name="quantity" id="quantity" value="<?php echo $row['qty'];?>" readonly>
                                    <p>pc/s</p>
                                </div>
                            </div>
                        </div>
                        <div id="payment">
                            <label for="payment-method">Payment Method</label>
                            <select name="payment" id="payment-method" required>
                                <option value="">Select...</option>
                                <option value="COD">Cash On Delivery</option>
                            </select>
                        </div>
                        <div id="total-price">
                            <h4>Total Price</h4>
                            <p>PHP <?php echo $row['price']; ?>.00</p>
                        </div>
                        <p style="font-size: .8rem; color: #FF0000; margin-top: 10px; text-align: center;">Note: Expect additional charges from the shop depending on the carved design in solid wood.</p>
                    
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
                <?php } ?>
            </section>
        </div>
        <script src="../../js/alert.js"></script>
    </main>
</body>
</html>