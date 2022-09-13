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
            <a href="" style="border-bottom: 3px solid white; padding-bottom: 5px;">Product</a>
            <a href="">Message</a>
            <a href="">Shop Feed</a>
            <a href="../../php-database/admin-logout.php">Logout</a>
        </nav>
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    <!------------------------------------------------>

    <main>
        <div class="container">
            <section class="product-cont">
                <div class="addItem-cont">
                    <form action="" method="post">
                        <div class="pps">
                            <div class="prod-input first">
                                <label for="product">Product</label>
                                <input type="text" name="product" id="product">
                            </div>
                            <div class="price-input first">
                                <label for="price">Price</label>
                                <input type="text" name="price" id="price">
                            </div>
                            <div class="size first">
                                <label for="size">Product</label>
                                <input type="text" name="size" id="size">
                            </div>
                        </div>
                        <div class="description">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="4"></textarea>
                        </div>
                    </form>
                </div>
                <div class="category">
                    <button class="active">All</button>
                    <button>Table</button>
                    <button>Bed</button>
                    <button>Chair</button>
                    <button>Door</button>
                    <button>Others</button>
                </div>
                <div class="product">
                    <div class="display-div">
                        <!--Put php codes for product display here-->
                        <div class="prod-display">
                            <div class="prod-img">

                            </div>
                            <h3>Name</h3>
                            <p>PHP 10000</p>
                        </div>
                    </div>
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
                    
                </div>              
            </section>
        </div>
    </main>
</body>
</html>