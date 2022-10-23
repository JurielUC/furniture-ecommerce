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
    <link rel="stylesheet" href="adminProduct.css?v=<?php echo time(); ?>">
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

        $id=$_GET['id'];
        
        $query = "SELECT * FROM tb_product WHERE id = '$id'";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result))
            {  
                $sz=$row['size'];
                $pn=$row['product_name'];
                $pr=$row['price'];
                $pi=$row['product_img'];
                $ctgry=$row['category'];
                $pd=$row['p_description'];

    ?>
    <main>
        <div class="container">
            <div class="sml-cont">
                <div class="back-btn">
                    <button class="bck" onclick="window.location.href='adminProduct.php'"><img src="../../../image/icon/arrow.png" alt="" width="15px" height="11px"></button>
                    <h4>Product Information</h4>

                    <div class="upd-del-btn">
                        <button class="upd">Update</button>
                        <button class="del" onclick="window.location.href='../../php-database/delete-product.php?id=<?php echo $id; ?>'">Delete</button>
                    </div>
                </div>
                <div class="content-cont">
                    <div class="ed-prod">
                        <div class="ep-image">
                            <img src="<?php echo $pi; ?>" alt="" width="230px">
                        </div>
                        <div class="ep-size-price">
                            <div>
                                <h5>Size:</h5>
                                <p><?php echo $sz; ?></p>
                            </div>
                            <div>
                                <h5>Category:</h5>
                                <p><?php echo $ctgry; ?></p>
                            </div>
                            <div>
                                <h5>Price:</h5>
                                <p>PHP <?php echo $pr; ?>.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ep-name-desc">
                        <div>
                            <h5>Product Name:</h5>
                            <p><?php echo $pn; ?></p>
                        </div>
                        <div>
                            <h5>Description:</h5>
                            <p><?php echo $pd; ?></p>
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