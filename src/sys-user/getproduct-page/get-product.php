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
    <link rel="stylesheet" href="get-product.css?v=<?php echo time(); ?>">
</head>
<body>
    <!--Header and divider-->
    <header>
        <div class="app-name">
            <a href="">
                <img src="../../../image/logo.jpg" alt="">
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
                <div class="prod-back">
                    <a href="../home-page/userhome.php"><img src="../../../image/icon/arrow.png" alt="" width="15px" height="15px"></a>
                    <p>Product Information</p>
                </div>
                <div class="product">
                    <?php 
                        require_once '../../php-database/dbconnect.php';

                        $id=$_GET['id'];
                        $product_name=$_GET['product_name'];
                        $price=$_GET['price'];
                        $size=$_GET['size'];
                        $p_description=$_GET['p_description'];
                        $category=$_GET['category'];
                        $product_img=$_GET['product_img'];
                        
                        $query = "SELECT * FROM tb_product WHERE id=$id";
                        $result = mysqli_query($conn, $query);
                    ?>

                    <div class="prod-img">
                        <img src="../../sys-admin/product-page/<?php echo $product_img; ?>" alt="" width="350px">
                    </div>
                    <div class="p-name-price">
                        <div class="pn">
                            <h3><?php echo $product_name; ?></h3>
                        </div>
                        <div class="p">
                            <p>PHP <?php echo $price;?>.00</p>
                        </div>
                    </div>
                    <div class="des-size">
                        <div class="descrip">
                            <h5>Description</h5>
                            <p><?php echo $p_description; ?></p>
                        </div>
                        <div class="size">
                            <h5>Size</h5>
                            <p><?php echo $size; ?></p>
                        </div>
                        <div class="category">
                            <h5>Category</h5>
                            <p><?php echo $category; ?></p>
                        </div>
                    </div>

                </div>
                <div class="checkout">
                    <button>Message Now</button>
                    <button>Order Now</button>
                </div>
            </section>
        </div>
    </main>
</body>
</html>