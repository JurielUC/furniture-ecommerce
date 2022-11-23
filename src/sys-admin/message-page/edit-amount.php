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
    <link rel="stylesheet" href="../product-page/adminProduct.css?v=<?php echo time(); ?>">
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
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    <!------------------------------------------------>
    <?php
        include '../../php-database/dbconnect.php';

        $id=$_GET['id'];
        $uid=$_GET['unique_id'];
        $status=$_GET['status'];
        $fname=$_GET['first_name'];
        $lname=$_GET['last_name'];
        $ppic=$_GET['myfile'];
        
        $query = "SELECT * FROM tb_orderprocess WHERE trans_id = '$id'";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result))
            {  

                $tpr=$row['total_price'];
    ?>
    <main>
        <div class="container">
            <div class="update-cont">
                <div class="back-btn">
                    <button class="bck" onclick="window.location.href='adminMessage-inquiries.php?unique_id=<?php echo $uid; ?> & status=<?php echo $status; ?> & first_name=<?php echo $fname; ?> & last_name=<?php echo $lname; ?> & myfile=<?php echo $ppic; ?>'"><img src="../../../image/icon/arrow.png" alt="" width="15px" height="11px"></button>
                    <h4>Update Size</h4>
                </div>
                <div class="content-cont">
                    <form action="../../php-database/update-tprice.php" method="post">
                        <div class="input">
                            <input type="text" name="id" value="<?php echo $id; ?>" hidden>
                            <input type="text" name="unique_id" value="<?php echo $uid; ?>" hidden>
                            <input type="text" name="status" value="<?php echo $status; ?>" hidden>
                            <input type="text" name="first_name" value="<?php echo $fname; ?>" hidden>
                            <input type="text" name="last_name" value="<?php echo $lname; ?>" hidden>
                            <input type="text" name="myfile" value="<?php echo $ppic; ?>" hidden>


                            <label for="pr">Current Amount</label>
                            <input type="text" name="ct_amount" id="pr" value="<?php echo $tpr; ?>" readonly>

                            <label for="pr">New Amount</label>
                            <input type="text" name="nt_amount" id="pr" value="">
                            <input type="submit" name="price-btn" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php } ?>
    <script type="text/javascript" src="../adminProduct.js"></script>
    <script type="text/javascript" src="../../../js/alert.js"></script>
</body>
</html>