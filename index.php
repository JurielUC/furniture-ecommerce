<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gil Reyes Furniture and Repair Shop: The shop offers different kinds of wood furniture products like doors, tables, chairs, beds, etc. It's located at Barangay Mahayahay, Lemery, Batangas. Currently, its service and delivery are available in the Batangas area only.">
    <title>Welcome to Gil RFRS</title>
    <link rel="icon" href="image/logo2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/style/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <!--Header and divider-->
    <header>
        <div class="app-name">
            <a href="#landing-page">
                <img src="./image/logo.png" alt="">
                <h1>Gil Reyes FRS</h1>
            </a>
        </div>
        <!--Put your navigation here below-->
        <nav>
            <a class="a" href="./src/sys-user/login-page/userlogin.php">Login</a>
            <a class="a" href="./src/sys-user/signup-page/signup-page.php">Signup</a>
        </nav>
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    <!------------------------------------------------>

    <!--Main content-->
    <main>
        <section id="landing-page">
            <div class="landing-text">
                <h1>Gil Reyes Furniture and Repair Shop</h1>
                <p>The shop offers different kinds of wood furniture products like doors, tables, chairs, beds, etc. It's located at Barangay Mahayahay, Lemery, Batangas. Currently, its service and delivery are available in the Batangas area only.</p>
                <div>
                    <button onclick="window.location.href='#product-list'">PRODUCT</button>
                    <button onclick="window.location.href='./src/sys-user/login-page/userlogin.php'">LOGIN</button>
                </div>
            </div>
            <div class="image-slide">
                <img src="./image/bg-img.jpg" alt="">
            </div>
        </section>
        <?php 
            include 'src/php-database/dbconnect.php';

            $query = "SELECT * FROM tb_product ORDER BY id AND category DESC LIMIT 15";
            $result = mysqli_query($conn, $query);
        ?>
        <section id="product-list">
            <div class="product-cont">
                <h1>Our Product</h1>
                <br>
                <div class="prod-cont-parent">
                    <?php
                        $message='Login to see this furniture.';
                        while ($row = mysqli_fetch_assoc($result))
                        {
                    ?>
                    <div class="prod-content" onclick="window.location.href='./src/sys-user/login-page/userlogin.php?message=<?php echo $message; ?>'">
                        <div class="img">
                            <img src="src/sys-admin/product-page/<?php echo $row['product_img']; ?>" alt="">
                        </div>
                        <div class="pname">
                            <h3><?php echo $row['product_name']; ?></h3>
                        </div>
                        <p>PHP <?php echo $row['price']; ?>.00</p>
                    </div>
                    <?php 
                        }
                    ?>
                    <?php 
                        $message='Login to see more wood furniture.';
                    ?>
                    <div class="see-more" onclick="window.location.href='./src/sys-user/login-page/userlogin.php?message=<?php echo $message; ?>'">
                        <img src="image/icon/more.png" alt="" width="50px" height="50px">
                        <h3>See More</h3>
                    </div>
                </div>
            </div>
        </section>
        <section id="customization">
            <h1>Customization Feature</h1>
            <div class="custo-content">
                <div class="custo-img">
                    <img src="image/custo.gif" alt="" width="500px">
                </div>

                <div class="custo-desc">
                    <p>Create your own design by using this design customization feature.
                        Choose the type of furniture you want to customize.
                        This feature is limited to large screen devices.</p>
                </div>
            </div>
        </section>
        <section id="contact-us">
            <h1>Contact Us</h1>
            <div class="au-content">
                <div class="contact-info">
                    <div class="infor">
                        <img src="image/icon/address-loc.png" alt="" width="70px" >
                        <h4>ADDRESS</h4>
                        <p>Sitio Malaya, Mahayahay, Lemery, Batangas, 4209</p>
                    </div>
                    <div class="infor">
                        <img src="image/icon/email-loc.png" alt="" width="70px" >
                        <h4>EMAIL</h4>
                        <p>gil.reyes@gilreyesfurniture<br>.online</p>
                    </div>
                    <div class="infor">
                        <img src="image/icon/call-loc.png" alt="" width="70px" >
                        <h4>CALL US</h4>
                        <p>+63 915 584 2350</p>
                    </div>
                    <div class="infor">
                        <img src="image/icon/user-loc.png" alt="" width="70px" >
                        <h4>OWNER</h4>
                        <p>Gil Reyes</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <section>
            <div class="devs">
                <h4>Developers/Researchers</h4>
                <p><a class="ghub" href="https://github.com/JurielUC" target="_blank">Juriel Comia</a></p>
                <p>Glydel Ann Reyes</p>
                <p>John Kyle Ramos</p>
            </div>
        </section>
        <div class="line"></div>
        <section>
            <div>
                <p>© Gil Reyes Furniture and Repair Shop. All Rights Reserved.</p>
                <p><a href="src/sys-user/terms-and-policy/terms-and-conditions.php" target="_blank">Terms of Use</a> | <a href="src/sys-user/terms-and-policy/privacy-policy.php" target="_blank">Privacy Policy</a></p>
            </div>
        </section>
    </footer>
</body>
</html>