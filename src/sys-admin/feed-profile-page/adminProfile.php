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
    <link rel="stylesheet" href="adminProfile.css?v=<?php echo time(); ?>">
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
            <a href="../product-page/adminProduct.php">Product</a>
            <a href="../message-page/adminMessage.php">Message</a>
            <a href="" style="border-bottom: 3px solid white; padding-bottom: 5px;">Shop Feed</a>
            <a href="../../php-database/admin-logout.php">Logout</a>
        </nav>
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    <!------------------------------------------------>

    <main>
        <div class="container">
            <section class="post-cont">
                <div class="form-cont">
                    <form action="" method="post">
                        <textarea name="post" id="" cols="95" rows="3" placeholder="Write something..."></textarea>
                        <div class="attach-submit">
                            <input type="submit" value="Post">
                        </div>
                    </form>
                </div>
                <div class="user-post-cont">
                    <div class="user-post">
                        <div class="pp-name-date">
                            <div class="pp-name">
                                <img src="../../../image/icon/account.png" alt="" width="35px" height="35px">
                                <h2>Juriel Comia</h2>
                            </div>
                            <p>02:05:00 - 10/10/22</p>
                        </div>
                        <div class="caption-attachment">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, sequi dolores! Debitis recusandae omnis repellat quas impedit officia, beatae pariatur! Autem voluptates at eveniet minus cumque similique facilis ullam id?</p>
                        </div>
                        <div class="comment-send">
                            <form action="" method="post">
                                <textarea name="comment" id="" cols="85" rows="2" placeholder="Comment..."></textarea>
                                <button type="submit"><img src="../../../image/icon/send.png" alt="" width="40px" height="40px"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section class="shopinfo-cont">
                <div class="search-bar">
                    <form action="">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit">Search</button>
                    </form>
                </div>  
                <div class="shopinfo">
                    <h1><u>Business Information</u></h1>
                    <h3><img src="../../../image/icon/placeholder.png" alt="" width="15" height="15">&nbsp&nbspLocation</h3>
                    <p>Barangay, Philippines</p>
                    <h3><img src="../../../image/icon/gmail.png" alt="" width="15" height="15">&nbsp&nbspEmail</h3>
                    <p>furniture@gmail.com</p>
                    <h3><img src="../../../image/icon/phone (1).png" alt="" width="15" height="15">&nbsp&nbspContact Number</h3>
                    <p>+63 905 581 1152</p>
                    <h3><img src="../../../image/icon/owner.png" alt="" width="15" height="15">&nbsp&nbspBusiness Owner</h3>
                    <p>Gil Reyes</p>
                </div>              
            </section>
        </div>
    </main>
</body>
</html>