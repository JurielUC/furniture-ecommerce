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
    <link rel="stylesheet" href="userOrder.css?v=<?php echo time(); ?>">
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
                    <?php 
                        require_once '../../php-database/dbconnect.php';

                        $id=$_GET['id'];
                        
                        $query = "SELECT * FROM tb_product WHERE id=$id";
                        $result = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                <div class="prod-back">
                    <a href="../getproduct-page/get-product.php?id=<?php echo $row['id']; ?>"><img src="../../../image/icon/arrow.png" alt="" width="15px" height="15px"></a>
                    <p>Checkout</p>
                </div>
                <div class="product">
                    <form action="" method="post">

                    
                </div>
                <div class="checkout">
                    <button>Place Order</button>
                    </form>
                </div>
                <?php } ?>
            </section>
        </div>
    </main>
</body>
</html>