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
    <link rel="stylesheet" href="adminProfile.css?v=<?php echo time(); ?>">
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
            <a class="a" href="../product-page/adminProduct.php">Product</a>
            <a class="a" href="" style="border-bottom: 3px solid white; padding-bottom: 5px;">Shop Feed</a>
            <a class="a"href="../../php-database/admin-logout.php">Logout</a>
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
                    include '../../php-database/dbconnect.php';

                    $to=$_GET['to'];
                    $from=$_GET['from'];
                ?>
                <div class="form-cont">
                    <h1>Sales Report</h1>
                </div>
                <div class="category">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
                        <label for="from">From: </label>
                        <input type="date" name="from" id="from" value="<?php echo $from ?>">
                        <label for="to">To: </label>
                        <input type="date" name="to" id="to" value="<?php echo $to ?>">
                        <input type="submit" value="SHOW">
                    </form>
                </div>
                <div class="user-post-cont">
                    <div class="trans-tally">
                        <div class="sold tally-cont">
                                <div class="tally-text">
                                    <div>
                                        <h5>No. of product sold</h5>
                                    </div>
                                    <!--PHP code to get number of item sold-->
                                    <?php 
                                        $sql5 = "SELECT SUM(order_qty) AS total FROM tb_ordercompleted WHERE date BETWEEN '$from' AND '$to'";
                                        $res5 = mysqli_query($conn, $sql5);

                                        while($ps = mysqli_fetch_assoc($res5)){
                                            $nps=$ps['total'];
                                            if($nps == NULL){
                                                echo "<div class='res'><h1>0</h1></div>";
                                            }else{
                                                echo "<div class='res'><h1>$nps</h1></div>";
                                            }
                                        }
                                    ?>
                                </div>
                                <div class="tally-icon">
                                    <img src="../../../image/icon/sold-out.png" alt="" width="70px">
                                </div>
                            </div>
                            <div class="transaction-no tally-cont">
                                <div class="tally-text">
                                    <div>
                                        <h5>No. of transactions</h5>
                                    </div>
                                    <!--PHP code to get number of item sold-->
                                    <?php 
                                        $sql6 = "SELECT COUNT(order_qty) AS total_trans FROM tb_ordercompleted WHERE date BETWEEN '$from' AND '$to'";
                                        $res6 = mysqli_query($conn, $sql6);

                                        while($ps6 = mysqli_fetch_assoc($res6)){
                                            $nps6=$ps6['total_trans'];
                                            echo "<div class='res'><h1>$nps6</h1></div>";
                                        }
                                    ?>
                                </div>
                                <div class="tally-icon">
                                    <img src="../../../image/icon/transaction.png" alt="" width="70px">
                                </div>
                            </div>
                    </div>
                    <div class="total-sale">
                        <div class="total-sale-desc"><p>Total Sales Revenue from <b><?php echo $from; ?></b> to <b><?php echo $to; ?></b></p></div>
                        <div class="total-sale-res">
                            <img src="../../../image/icon/philippine-peso.png" alt="" width="20px">&nbsp
                            <?php 
                                $sql7 = "SELECT SUM(total_price) AS tprice FROM tb_ordercompleted WHERE date BETWEEN '$from' AND '$to'";
                                $res7 = mysqli_query($conn, $sql7);

                                while($ps7 = mysqli_fetch_assoc($res7)){
                                    $nps7=$ps7['tprice'];
                                    if($nps7 == NULL){
                                        echo "<h3>0.00</h3>";
                                    }else{
                                        echo "<h3>$nps7.00</h3>";
                                    }
                                }
                            ?>
                            <p></p>
                        </div>
                    </div>
                    <div class="trans-table">
                        <table>
                            <tr class="table-head">
                                <th width="25%">Transaction ID</th>
                                <th width="25%">User ID</th>
                                <th width="25%">Date</th>
                                <th width="25%">Total Amount</th>
                            </tr>
                            <?php 
                                $sql8 = "SELECT * FROM tb_ordercompleted WHERE date BETWEEN '$from' AND '$to'";
                                $res8 = mysqli_query($conn, $sql8);

                                if (mysqli_num_rows($res8) == 0) {
                                    echo "<div class='nodata' style='position: absolute; width: 690px; height: 50vh; display: flex; justify-content: center; align-items: center; flex-direction: column; text-align: center; opacity: 25%;'>
                                        <img src='../../../image/icon/file.png' width='120px' height='120px'>
                                        <p>No Transactions</p>
                                        </div>";
                                    }

                                while($row8 = mysqli_fetch_assoc($res8)){
                            ?>
                            <tr class="table-data">
                                <td><?php echo $row8['trans_id']; ?></td>
                                <td><?php echo $row8['user_id']; ?></td>
                                <td><?php echo $row8['datetime']; ?></td>
                                <td>PHP <?php echo $row8['total_price']; ?>.00</td>
                            </tr>
                            <?php 
                                }
                            ?>
                        </table>
                    </div>
                    
                </div>
            </section>
            <section class="shopinfo-cont">
                <!--<div class="search-bar">
                    <form action="">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit">Search</button>
                    </form>
                </div> -->
                <div class="shopinfo">
                    <?php include '../../php-database/shopinfo.php'; 
                        while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <h1><u>Business Information</u></h1>
                    <div class="profile-pic">
                        <img src="../../../image/logo.png" alt="" width="100px" height="100px">
                    </div>
                    <h3><img src="../../../image/icon/placeholder.png" alt="" width="15" height="15">&nbsp&nbspLocation</h3>
                    <p><?php echo $row["address"]; ?></p>
                    <div class="info-line"></div>
                    <h3><img src="../../../image/icon/gmail.png" alt="" width="15" height="15">&nbsp&nbspEmail</h3>
                    <p><?php echo $row["email"]; ?></p>
                    <div class="info-line"></div>
                    <h3><img src="../../../image/icon/phone (1).png" alt="" width="15" height="15">&nbsp&nbspContact Number</h3>
                    <p><?php echo $row["contact_no"]; ?></p>
                    <div class="info-line"></div>
                    <h3><img src="../../../image/icon/owner.png" alt="" width="15" height="15">&nbsp&nbspBusiness Owner</h3>
                    <p><?php echo $row["name"]; ?></p>
                    <div class="info-line"></div>
                    <h3 class="create-message" style="text-align: center;"><?php if(!empty($_GET['message'])) {
                        $message = $_GET['message'];
                        echo $message; }?>
                    </h3>
                    <button onclick="window.location.href='adminProfile.php';">Back to feed</button>
                    <button onclick="window.location.href='../existing-design/existing-design.php';">Add Design</button>
                    <?php 
                        $sql6 = "SELECT * FROM tb_admin WHERE id = '$loggedin_id'";
                        $result2 = mysqli_query($conn, $sql6);

                            while($row2 = mysqli_fetch_assoc($result2)) {
                            if($row2['position'] == "ADMIN"){
                                echo '<button onclick="openBusinessInfo()">Update Info</button>';
                            }else {
                                echo "";
                            }
                        }
                    ?>
                    <button onclick="openAccountInfo()">Update Account</button>
                    <button onclick="window.location.href='../../sys-user/terms-and-policy/privacy-policy.php';">Privacy Policy</button>
                    <button onclick="window.location.href='../../sys-user/terms-and-policy/terms-and-conditions.php';">Terms of use</button>
                    <div class="margin-a"></div>
                    
                    <?php 
                        $sql6 = "SELECT * FROM tb_admin WHERE id = '$loggedin_id'";
                        $result2 = mysqli_query($conn, $sql6);

                            while($row2 = mysqli_fetch_assoc($result2)) {
                            if($row2['position'] == "ADMIN"){
                                echo "<a href='add-admin.php''>Create New Account</a><div class='margin-a'></div>";
                                echo "<a href='account-list.php'' class='a-list'>Account List</a>";
                            }else {
                                echo "";
                            }
                        }
                    ?>
                    
                    <div class="info-line"></div>
                    
                </div>           
            </section>
                                <!--Display Popup Business Information when clicked-->
                                <div class="busi-info-popup" id="myBInfoForm">
                                    <div class="busi-info-popup-form">
                                        <div class="popup-header">
                                            <div class="exit-button">
                                                <button class="update-busi-info-close" onclick="closeBusinessInfo()" title="Close"><img src="../../../image/icon/arrow.png" alt="" width="17px" height="17px"></button>
                                                <h2>Update Information</h2>
                                            </div>
                                            <div class="busi-info-content">
                                                <img src="../../../image/logo.png" alt="" width="80px" height="80px">
                                                <button class="change-photo">Change Photo</button>
                                                <form action="../../php-database/businessinfo-update.php" method="post">
                                                        <input type="text" name="id" value="<?php echo $row["id"]; ?>" hidden>
                                                    <div>
                                                        <label for="">Name</label>
                                                        <input type="text" name="name" value="<?php echo $row["name"]; ?>">
                                                    </div>
                                                    <div>
                                                        <label for="">Address</label>
                                                        <input type="text" name="address" value="<?php echo $row["address"]; ?>">
                                                    </div>
                                                    <div>
                                                        <label for="">Contact No</label>
                                                        <input type="text" name="contact_no" value="<?php echo $row["contact_no"]; ?>">
                                                    </div>
                                                    <div>
                                                        <label for="">Email</label>
                                                        <input type="email" name="email" value="<?php echo $row["email"]; ?>">
                                                    </div>
                                                    <div>
                                                        <input type="submit" class="submit" value="Update">
                                                    </div>
                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

                                <!--Display Popup Business Information when clicked-->
                                <div class="account-popup" id="myAccountForm">
                                    <div class="account-popup-form">
                                        <div class="popup-header">
                                            <div class="exit-button">
                                                <button class="update-busi-info-close" onclick="closeAccountInfo()" title="Close"><img src="../../../image/icon/arrow.png" alt="" width="17px" height="17px"></button>
                                                <h2>Update Information</h2>
                                            </div>
                                            <div class="account-content">
                                                <form action="../../php-database/admin-account-update.php" method="POST">
                                                    <input type="hidden" name="id" value="<?php echo $loggedin_id; ?>">
                                                    <div>
                                                        <label for="">First Name</label>
                                                        <input type="text" name="first_name" value="<?php echo $loggedin_fname; ?>">
                                                    </div>
                                                    <div>
                                                        <label for="">Last Name</label>
                                                        <input type="text" name="last_name" value="<?php echo $loggedin_lname; ?>">
                                                    </div>
                                                    <div>
                                                        <label for="">Contact No</label>
                                                        <input type="text" name="contact_no" value="<?php echo $loggedin_cno; ?>">
                                                    </div>
                                                    <div>
                                                        <label for="">Email</label>
                                                        <input type="email" name="email" value="<?php echo $loggedin_session; ?>" readonly>
                                                    </div>
                                                    <div>
                                                        <label for="">Position</label>
                                                        <input type="text" name="position" value="<?php echo $loggedin_position; ?>" readonly>
                                                    </div>
                                                    <div>
                                                        <label for="">Password</label>
                                                        <input type="password" name="a_password" value="<?php echo $loggedin_psw; ?>">
                                                    </div>
                                                    <div>
                                                        <input type="submit" class="submit" value="Update">
                                                    </div>
                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        </div>
    </main>
    <script src="adminProfile.js"></script>
</body>
</html>