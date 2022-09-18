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
            <a href="" style="border-bottom: 3px solid white; padding-bottom: 5px;">Message</a>
            <a href="../feed-profile-page/adminProfile.php">Shop Feed</a>
            <a href="../../php-database/admin-logout.php">Logout</a>
        </nav>
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    <!------------------------------------------------>

    <main>
        <div class="container">
            <section class="message-cont">
                <div class="message-head">
                    <img src="../../../image/icon/account.png" alt="" width="30px" height="30px">
                    <a href="">Juriel Comia</a>

                </div>
                <div class="message-box">
                    
                </div>
                <div class="message-input">
                    <form action="" method="post">
                        <div class="file">
                            <label for="file_upload" title="Attach File"><img src="../../../image/icon/attach-paperclip-symbol.png" alt="" width="30px" height="30px"></label>
                            <input type="file" name="file_upload" id="file_upload">
                        </div>

                        <textarea name="" id="" cols="82" rows="1" placeholder="Write someting..."></textarea>
                        <button title="Send"><img src="../../../image/icon/send.png" alt="" width="30px" height="30px"></button>
                    </form>
                </div>
            </section>
            <section class="inbox-cont">
                <div class="search-bar">
                    <form action="">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit">Search</button>
                    </form>
                </div>  
                <div class="inbox">
                    <div class="inbox-header">
                        <h2>Inbox</h2>
                        <p>(2 message/s)</p>
                    </div>
                    <div class="inbox-message-cont">
                        <!--put php for message display here-->
                        <div class="inbox-message">
                            <img src="../../../image/logo.jpg" alt="" width="40px" height="40px">
                            <div class="name-addr">
                                <h4>Juriel Comia</h4>
                                <p>Lemery, Batangas</p>
                            </div>
                        </div>
                    </div>
                </div>              
            </section>
        </div>
    </main>
</body>
</html>