<!--session link-->
<?php include '../../../php-database/user-session.php'; ?>

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
    <link rel="stylesheet" href="../userhome.css?v=<?php echo time(); ?>">
</head>
<body>
    <!--Header and divider-->
    <header>
        <div class="app-name">
            <a href="">
                <img src="../../../../image/logo.jpg" alt="">
                <h1>Gil's Furniture Shop</h1>
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
                <div class="category">
                    <button onclick="window.location.href='../userhome.php';">All</button>
                    <button onclick="window.location.href='table.php';">Table</button>
                    <button class="active" onclick="window.location.href='bed.php';">Bed</button>
                    <button onclick="window.location.href='chair.php';">Chair</button>
                    <button onclick="window.location.href='door.php';">Door</button>
                    <button onclick="window.location.href='others.php';">Others</button>
                </div>
                <div class="product">
                    <?php 
                        include '../../../php-database/select-bed.php';

                        if (mysqli_num_rows($result) == 0) {
                            echo "<div class='nodata' style='width: 690px; height: 80vh; display: flex; justify-content: center; align-items: center; flex-direction: column; text-align: center; opacity: 25%;'>
                                <img src='../../../../image/icon/file.png' width='120px' height='120px'>
                                <p>No Post</p>
                                </div>";
                            }
                    ?>
                    <div class="display-div">
                        <!--Put php codes for product display here-->
                        <?php
                            while ($row = mysqli_fetch_assoc($result))
                            {

                                
                        ?>
                                <div class="prod-display" onclick="openProduct()">
                                    <div class="prod-img">
                                        <!--put image here-->
                                        <img src="../../../sys-admin/product-page/<?php echo $row['product_img']; ?>" alt="" width="100px">
                                    </div>
                                    <h3><?php echo $row['product_name']; ?></h3>
                                    <p>PHP <?php echo $row['price']; ?>.00</p>
                                </div>
                        <?php
                            }
                        ?>
                                <!--Display Specific Item when clicked-->
                                <div class="product-popup" id="myProductForm">
                                    <div class="product-popup-form">
                                        <div class="popup-header">
                                            <div class="exit-button">
                                                <button class="update-popup-close" onclick="closeProduct()" title="Close"><img src="../../../../image/icon/arrow.png" alt="" width="17px" height="17px"></button>
                                                <h2>Product Information</h2>
                                            </div>
                                            <div class="product-content">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </section>
            <section class="shopinfo-cont">
                <div class="search-bar">
                    <form action="../../product-search/product-search.php" method=POST>
                        <input type="text" placeholder="Search.." name="product_name" required>
                        <button type="submit" name="search">Search</button>
                    </form>
                </div>  
                <div class="shopinfo">
                    <?php include '../../../php-database/shopinfo.php'; 
                        while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <h1><u>Business Information</u></h1>
                    <div class="profile-pic">
                        <img src="../../../sys-admin/product-page/<?php echo $row["profile_pic"]; ?>" alt="" width="100px" height="100px">
                    </div>
                    <h3><img src="../../../../image/icon/placeholder.png" alt="" width="15" height="15">&nbsp&nbspLocation</h3>
                    <p><?php echo $row["address"]; ?></p>
                    <h3><img src="../../../../image/icon/gmail.png" alt="" width="15" height="15">&nbsp&nbspEmail</h3>
                    <p><?php echo $row["email"]; ?></p>
                    <h3><img src="../../../../image/icon/phone (1).png" alt="" width="15" height="15">&nbsp&nbspContact Number</h3>
                    <p><?php echo $row["contact_no"]; ?></p>
                    <h3><img src="../../../../image/icon/owner.png" alt="" width="15" height="15">&nbsp&nbspBusiness Owner</h3>
                    <p><?php echo $row["name"]; ?></p>
                    <?php } ?>
                </div>             
            </section>
        </div>
        <script src="../userhome.js"></script>
    </main>
</body>
</html>