<!--session link-->
<?php include '../../php-database/user-session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Placement - Gil Reyes FRS</title>
    <link rel="icon" href="../../../image/logo2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="userOrder.css?v=<?php echo time(); ?>">
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
            <a href="" style="border-bottom: 3px solid white; padding-bottom: 5px;">Your Feed</a>
            <a href="">Message</a>
            <a href="">Profile</a>
            <a href="../../../php-database/user-logout.php">Logout</a>
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

                        $id=$_GET['id'];
                        
                        $query = "SELECT * FROM tb_product INNER JOIN tb_cart ON tb_product.id = tb_cart.product_id WHERE id=$id";
                        $result = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_assoc($result))
                        {

                    ?>
                <div class="prod-back">
                    <a href="../../php-database/delete-from-cart.php?id=<?php echo $row['id']; ?>"><img src="../../../image/icon/arrow.png" alt="" width="15px" height="15px"></a>
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
                            <h3><u>Selected Product</u></h3>
                            <div class="spe-product">
                                <div class="img-name">
                                    <div class="image">
                                        <img src="../../sys-admin/product-page/<?php echo $row['product_img']; ?>" alt="" width="60px">
                                    </div>
                                    <div class="name-product">
                                        <h4><?php echo $row['product_name']; ?></h4>
                                        <p>PHP <?php echo $row['price'];?>.00</p>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <input type="text" name="user_id" value="<?php echo $loggedin_uid;?>" hidden>
                                    <input type="text" name="product_id" value="<?php echo $row['id'];?>" hidden>
                                    <input type="text" name="total_price" value="<?php echo $row['total_price'];?>" hidden>
                                    <input type="number" name="quantity" id="quantity" value="<?php echo $row['quantity'];?>" readonly>
                                    <p>pc/s</p>
                                </div>
                            </div>
                        </div>
                        <div id="payment">
                            <label for="payment-method">Payment Method</label>
                            <select name="payment" id="payment-method" required>
                                <option value="">Select...</option>
                                <option value="COD">Cash On Delivery</option>
                                <option value="GCash">GCash Payment</option>
                            </select>
                        </div>
                        <div id="total-price">
                            <h4>Total Price</h4>
                            <p>PHP <?php echo $row['total_price'];?></p>
                        </div>
                    
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