<!--session link-->
<?php include '../../php-database/admin-session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gil Reyes FRS</title>
    <link rel="icon" href="../../../image/logo2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="adminMessage.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
    <!--Header and divider
    <header>
        <div class="app-name">
            <a href="">
                <img src="../../../image/logo.png" alt="">
                <h1>Gil Reyes FRS</h1>
            </a>
        </div>
        <!--Put your navigation here below
        <nav>
            <a class="a" href="../product-page/adminProduct.php">Product</a>
            <a class="a" href="../feed-profile-page/adminProfile.php">Shop Feed</a>
            <a class="a" href="../../php-database/admin-logout.php">Logout</a>
        </nav>
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    ---------------------------------------------->
    <?php
        include '../../php-database/dbconnect.php';

        $uid=$_GET['unique_id'];
        $status=$_GET['status'];
        $fname=$_GET['first_name'];
        $lname=$_GET['last_name'];
        $ppic=$_GET['myfile'];
        $tid=$_GET['trans_id'];
        
        $query = "SELECT * FROM tb_orderprocess WHERE trans_id = '$tid' AND customize = '1'";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result))
            {  
                $trans_id2=$row['trans_id'];
                $dt=$row['datetime'];
                $oq=$row['order_qty'];
                $tp=$row['total_price'];
                $cpn=$row['phone_no'];
                $addr=$row['address'];
                $pcode=$row['postal_code'];
                $hno=$row['house_no'];
                $sett=$row['settings'];
                $paym=$row['payment_method'];

    ?>
    <main>
        <div class="container">
        <script type="text/javascript">
            function PrintDiv() {
                self.focus();
                var divContents = document.getElementById("pdf").innerHTML;
                var printWindow = window.open('', '', 'height=400,width=800');
                printWindow.document.write('<html><head><title>Gil Reyes Wood Furniture and Repair Shop</title>');
                printWindow.document.write('</head><body>');
                printWindow.document.write(divContents);
                printWindow.document.write('</body></html>');
                printWindow.document.close();
                printWindow.print();
            }
        </script>
            <div class="sml-cont" style="background-color: #ffffff; box-shadow: none;">
                <!--<div class="back-btn">
                    <button onclick="window.location.href='adminMessage-inquiries.php?unique_id=<?php echo $uid; ?> & first_name=<?php echo $fname; ?> & last_name=<?php echo $lname; ?> & status=<?php echo $status; ?> & myfile=<?php echo $ppic; ?>'"><img src="../../../image/icon/arrow.png" alt="" width="15px" height="11px"></button>
                    <h4>Order Information</h4>

                    <button class="print-btn" download onclick="PrintDiv();" title="Print"><img src="../../../image/icon/print.png" alt="" width="15px" height="15px"> Print</button>
                </div>-->
                <div class="content-cont">
                    <div class="print-canvas" id="pdf">
                        <div class="shopname">
                            <h3>Gil Furniture and Repair Shop</h3>
                            <p>Matingain 2, Lemery, Batangas</p>
                        </div>
                        <div class="details">
                            <div class="details-set">
                                <div class="half">
                                    <h5>Customer's Name:</h5>
                                    <p><?php echo $fname; ?> <?php echo $lname; ?></p>
                                </div>
                                <div class="half">
                                    <h5>Transaction No:</h5>
                                    <p><?php echo $tid; ?></p>
                                </div>
                            </div>
                            <div class="details-set">
                                <div class="whole">
                                    <h5>Address:</h5>
                                    <p><?php echo $hno; ?>, <?php echo $addr; ?>, <?php echo $pcode; ?></p>
                                </div>
                            </div>
                            <div class="details-set">
                                <div class="half">
                                    <h5>Contact No:</h5>
                                    <p><?php echo $cpn; ?></p>
                                </div>
                                <div class="half">
                                    <h5>Settings:</h5>
                                    <p><?php echo $sett; ?></p>
                                </div>
                            </div>
                            <div class="details-set">
                                <div class="half">
                                    <h5>Quantity:</h5>
                                    <p><?php echo $oq; ?> pc/s</p>
                                </div>
                                <div class="half">
                                    <h5>Payment Method:</h5>
                                    <p><?php echo $paym; ?></p>
                                </div>
                            </div>
                            <div class="details-set">
                                <div class="half">
                                    <h5>Total:</h5>
                                    <p>PHP <?php echo $tp; ?>.00</p>
                                </div>
                                <div class="half">
                                    <h5>Downpayment:</h5>
                                    <p>PHP <?php   $tprice = $row['total_price'];
                                                        $percent = 20;

                                                        $dp = ($percent / 100) * $tprice;

                                                        echo $dp; ?></p>
                                </div>
                            </div>
                            <div class="details-set">
                                <div class="half">
                                    <h5>Remaining Balance:</h5>
                                    <p>PHP <?php   $new_amount = $tprice - $dp;
                                        echo $new_amount;
                                    ?></p>
                                </div>
                            </div>
                            <div class="details-set" style="display: flex; flex-direction: column;">
                                <?php 
                                    $query2 = "SELECT * FROM tb_customize WHERE trans_id = '$tid'";
                                    $result2 = mysqli_query($conn, $query2);
                            
                                    while ($row2 = mysqli_fetch_assoc($result2))
                                        {  
                                ?>
                                <div class="prod-display">
                                    <img src="../../sys-user/customization-page/<?php echo $row2['img_front']; ?>" alt="" height="100px">
                                    <img src="../../sys-user/customization-page/<?php echo $row2['img_back']; ?>" alt="" height="100px"> 
                                    <div>
                                        <h2><?php echo $row2['type']; ?></h2>
                                        <p><?php echo $tp; ?></p>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php } ?>
    <script src="adminMessage.js"></script>
</body>
</html>