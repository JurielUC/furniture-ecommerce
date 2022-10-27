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
    <link rel="stylesheet" href="adminMessage.css?v=<?php echo time(); ?>">
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
            <a href="../product-page/adminProduct.php">Product</a>
            <a href="../feed-profile-page/adminProfile.php">Shop Feed</a>
            <a href="../../php-database/admin-logout.php">Logout</a>
        </nav>
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    <!------------------------------------------------>
    <?php
        include '../../php-database/dbconnect.php';

        $uid=$_GET['unique_id'];
        $status=$_GET['status'];
        $fname=$_GET['first_name'];
        $lname=$_GET['last_name'];
        $ppic=$_GET['myfile'];
        $tid=$_GET['trans_id'];
        
        $query = "SELECT * FROM tb_orderprocess INNER JOIN tb_product ON tb_orderprocess.product_id = tb_product.id WHERE trans_id = '$tid'";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result))
            {  
                $dt=$row['datetime'];
                $oq=$row['order_qty'];
                $tp=$row['total_price'];
                $pi=$row['product_img'];
                $pn=$row['product_name'];
                $pr=$row['price'];
                $cpn=$row['phone_no'];
                $addr=$row['address'];
                $pcode=$row['postal_code'];
                $hno=$row['house_no'];
                $sett=$row['settings'];
                $paym=$row['payment_method'];

    ?>
    <main>
        <div class="container">
            <div class="sml-cont">
                <div class="back-btn">
                    <button onclick="window.location.href='adminMessage.php?unique_id=<?php echo $uid; ?> & first_name=<?php echo $fname; ?> & last_name=<?php echo $lname; ?> & status=<?php echo $status; ?> & myfile=<?php echo $ppic; ?>'"><img src="../../../image/icon/arrow.png" alt="" width="15px" height="11px"></button>
                    <h4>Update Progress</h4>
                </div>
                <div class="content-cont">
                    <div class="set-parent">
                        <div class="set-one">
                            <h5>Customer Name:&nbsp</h5>
                            <p><?php echo $fname; ?> <?php echo $lname; ?></p>
                        </div>
                        <div class="set-two">
                            <h5>Transaction No:</h5>
                            <p><?php echo $tid; ?></p>
                        </div>
                    </div>
                    <div class="set-parent">
                        <div class="set-one">
                            <h5>Delivery Address:&nbsp</h5>
                            <p><?php echo $hno; ?>, <?php echo $addr; ?>, <?php echo $pcode; ?></p>
                        </div>
                        <div class="set-two">
                            <h5>Contact No:</h5>
                            <p><?php echo $cpn; ?></p>
                        </div>
                    </div>
                    <div class="set-parent">
                        <div class="set-one">
                            <h5>Settings:&nbsp</h5>
                            <p><?php echo $sett; ?></p>
                        </div>
                        <div class="set-two">
                            <h5>Payment Method:</h5>
                            <p><?php echo $paym; ?></p>
                        </div>
                    </div>
                    <div class="set-parent">
                        <div class="set-one">
                            <h5>Quantity:&nbsp</h5>
                            <p><?php echo $oq; ?> pc/s</p>
                        </div>
                        <div class="set-two">
                            <h5>Total Price:</h5>
                            <p>PHP <?php echo $tp; ?>.00</p>
                        </div>
                    </div>
                    <div class="product-parent">
                        <div class="prod-child">
                            <img src="../../sys-admin/product-page/<?php echo $row['product_img']; ?>" alt="" height="100px">
                            <div>
                                <h2><?php echo $pn; ?></h2>
                                <p>PHP <?php echo $pr; ?>.00 each</p>
                            </div>
                        </div>
                    </div>
                    <?php 

                        $sql2 = "SELECT * FROM tb_progress WHERE trans_id = '$tid'";
                        $result2 = mysqli_query($conn, $sql2);

                        while ($data = mysqli_fetch_assoc($result2))
                        { 
                    ?>
                    <div class="progress-parent">
                        <div class="prog-child">
                            <h3>Progress Timeline <input type="submit" name="reset" value="Reset" form="form1"></h3>
                            <form action="../../php-database/building-progress.php" id="form1">
                                <input type="text" name="trans_id" id="" value="<?php echo $tid; ?>" hidden>
                                <input type="text" name="unique_id" id="" value="<?php echo $uid; ?>" hidden>
                                <input type="text" name="status" id="" value="<?php echo $status; ?>" hidden>
                                <input type="text" name="first_name" id="" value="<?php echo $fname; ?>" hidden>
                                <input type="text" name="last_name" id="" value="<?php echo $lname; ?>" hidden>
                                <input type="text" name="myfile" id="" value="<?php echo $ppic; ?>" hidden>
                            <div class="progress-timeline">
                                <div class="percentage">
                                    <input type="submit" name="zero" value="Done">
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
                                    <input type="submit" name="two_five" value="Done">
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
                                    <input type="submit" name="fifty" value="Done">
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
                                    <input type="submit" name="seven_five" value="Done">
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
                                    <input type="submit" name="hundred" value="Done">
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
                            </div>
                            </form>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
    <?php } ?>
    <script src="adminMessage.js"></script>
</body>
</html>