<!--session link-->
<?php include '../../../php-database/admin-session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gil Reyes FRS</title>
    <link rel="icon" href="../../../../image/logo2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../adminProduct.css?v=<?php echo time(); ?>">
</head>
<body>
    <!--Header and divider-->
    <header>
        <div class="app-name">
            <a href="">
                <img src="../../../../image/logo.png" alt="">
                <h1>Gil Reyes FRS</h1>
            </a>
        </div>
        <!--Put your navigation here below-->
        <nav>
            <a class="a" href="" style="border-bottom: 3px solid white; padding-bottom: 5px;">Product</a>
            <a class="a" href="../../feed-profile-page/adminProfile.php">Shop Feed</a>
            <a class="a" href="../../../php-database/admin-logout.php">Logout</a>
        </nav>
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    <!------------------------------------------------>

    <main>
        <div class="container">
            <section class="product-cont">
                <h1 class="create-message"><?php if(!empty($_GET['message'])) {
                    $message = $_GET['message'];
                    echo $message; }?>
                </h1>
                <div class="addItem-cont">
                    <form action="../admin-addProduct.php" method="POST" enctype="multipart/form-data">
                        <div class="pps">
                            <div class="prod-input first">
                                <label for="product">Product</label>
                                <input type="text" name="product_name" id="product" required>
                            </div>
                            <div class="price-input first">
                                <label for="price">Price</label>
                                <input type="text" name="price" id="price" required>
                            </div>
                            <div class="size first">
                                <label for="size">Size</label>
                                <input type="text" name="size" id="size" required>
                            </div>
                        </div>
                        <div class="description">
                            <label for="description">Description</label>
                            <textarea name="p_description" id="description" cols="30" rows="3"></textarea>
                        </div>
                        <div class="sib">
                            <div class="sel-img"> <!--select, image input-->
                                <select name="category" class="select" required>
                                    <option value="" selected>Category...</option>
                                    <option value="Table">Table</option>
                                    <option value="Bed">Bed</option>
                                    <option value="Chair">Chair</option>
                                    <option value="Door">Door</option>
                                    <option value="Others">Others</option>
                                </select>
                                <input type="file" id="myfile" name="product_img" accept="image/*" style="color: #000000;" required>
                            </div>
                            <div class="submit">
                                <button type="submit">Post</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="category">
                    <button onclick="window.location.href='../adminProduct.php';">All</button>
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
                            echo "<div class='nodata' style='width: 690px; height: 50vh; display: flex; justify-content: center; align-items: center; flex-direction: column; text-align: center; opacity: 25%;'>
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
                                <div class="prod-display" onclick="window.location.href='../edit-product.php?id=<?php echo $row['id']; ?>';">
                                    <div class="prod-img">
                                        <!--put image here-->
                                        <img src="../<?php echo $row['product_img']; ?>" alt="" width="100px">
                                    </div>
                                    <div class="pname">
                                        <h4><?php echo $row['product_name']; ?></h3>
                                    </div>
                                    <p>PHP <?php echo $row['price']; ?>.00</p>
                                </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </section>
            <section class="inbox-cont">
                <div class="search-bar">
                    <form action="../../product-search/product-search.php" method=POST>
                        <input type="text" placeholder="Search.." name="product_name" required>
                        <button type="submit" name="search">Search</button>
                    </form>
                </div>  
                <div class="inbox">
                    <div class="inbox-header">
                        <h2>Inbox</h2>
                        <p>(2 message/s)</p>
                    </div>
                    <div class="inbox-message-cont">
                        <!--put php for message display here-->
                        <?php require_once '../../../php-database/dbconnect.php'; 
                            
                            $query = "SELECT * FROM tb_user WHERE all_msg > 0 ORDER BY unread_msg DESC";
                            $result = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_assoc($result))
                            {
                        ?>
                        <div class="inbox-message">
                            <img src="../../../sys-user/signup-page/<?php echo $row['myfile']; ?>" alt="" width="40px" height="40px">
                            <div class="name-addr">
                                <h4><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></h4>
                                <p><?php echo $row['status']; ?></p>
                            </div>
                            <p class="msg-num"><?php echo $row['unread_msg']; ?> message/s</p>
                        </div>
                        <?php 
                            }
                        ?>
                    </div>
                </div>              
            </section>
        </div>
    </main>
</body>
</html>