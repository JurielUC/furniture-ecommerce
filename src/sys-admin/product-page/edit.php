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
                $qty=$row['quantity'];
                $pd=$row['p_description'];

    ?>
    <main>
        <div class="container">
            <div class="sml-cont">

                <div class="back-btn">
                    <button class="bck" onclick="window.location.href='adminProduct.php'"><img src="../../../image/icon/arrow.png" alt="" width="15px" height="11px"></button>
                    <h4>Product Information</h4>

                    <div class="upd-del-btn">
                        <button class="upd" onclick="window.location.href='edit-product.php?id=<?php echo $id; ?>'">Update</button>
                        <button class="del" onclick="openAlert()">Delete</button>
                    </div>
                        <!--Alert-->
                        <div class="alert" id="alert">
                            <div class="alert-cont">
                                <div class="alert-content">
                                    <img src="../../../image/icon/remove.png" alt="" width="70px" height="70px">
                                    <h1>Are you sure?</h1>
                                    <p>Do you really want to delete this product? This process cannot be undone.</p>
                                    <div class="alert-btn">
                                        <button class="btn-secondary" onclick="closeAlert()">Cancel</button>
                                        <button class="btn-danger" onclick="window.location.href='../../php-database/delete-product.php?id=<?php echo $id; ?>'">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                    <!--Display Popup Profile when clicked-->
                    <div class="image-popup" id="prodPic">
                        <div class="image-popup-form">
                            <div class="popup-header">
                                <div class="exit-button">
                                    <button class="update-popup-close" onclick="closeImage()" title="Close"><img src="../../../image/icon/close.png" alt="" width="50px" height="50px"></button>
                                </div>
                            </div>
                            <img class="display-image" src="../../sys-admin/product-page/<?php echo $pi; ?>" alt="">
                        </div>
                    </div>
                <div class="content-cont">
                    <div class="ed-prod">
                        <div class="ep-image">
                            <img src="<?php echo $pi; ?>" alt="" width="230px"  onclick="openImage()">
                            <button class="edit-btn" onclick="window.location.href='update-image.php?id=<?php echo $id; ?>'">Edit Image</button>
                        </div>
                        <div class="ep-size-price">

                            <div>
                                <h5>Size:</h5>
                                <p><?php echo $sz; ?> <button class="edit-btn" onclick="window.location.href='product-edit/size.php?id=<?php echo $id; ?>'">Edit</button></p>
                            </div>
                                

                            <div>
                                <h5>Category:</h5>
                                <p><?php echo $ctgry; ?> <button class="edit-btn" onclick="window.location.href='product-edit/category.php?id=<?php echo $id; ?>'">Edit</button></p>
                            </div>
                                
                                
                            <div>
                                <h5>Price:</h5>
                                <p>PHP <?php echo $pr; ?>.00 <button class="edit-btn" onclick="window.location.href='product-edit/price.php?id=<?php echo $id; ?>'">Edit</button></p>
                            </div>

                            <div>
                                <h5>Quantity:</h5>
                                <p><?php echo $qty; ?> <button class="edit-btn" onclick="window.location.href='product-edit/quantity.php?id=<?php echo $id; ?>'">Edit</button></p>
                            </div>
                                
                        </div>
                    </div>
                    <div class="ep-name-desc">
                        <div>
                            <h5>Product Name:</h5>
                            <p><?php echo $pn; ?> <button onclick="window.location.href='product-edit/name.php?id=<?php echo $id; ?>'" class="edit-btn">Edit</button></p>
                        </div>
                                
                        <div>
                            <h5>Description:</h5>
                            <p><?php echo $pd; ?> <button onclick="window.location.href='product-edit/description.php?id=<?php echo $id; ?>'" class="edit-btn">Edit</button></p>
                        </div>
                                
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php } ?>
    <script type="text/javascript" src="adminProduct.js"></script>
    <script type="text/javascript" src="../../js/alert.js"></script>
</body>
</html>