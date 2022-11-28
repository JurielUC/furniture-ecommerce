

<!--session link-->
<?php include '../../php-database/user-session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gil Reyes FRS</title>
    <link rel="icon" href="../../../image/logo2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="product-search.css?v=<?php echo time(); ?>">
</head>
<body>
    <!--Header and divider-->
    <header>
        <div class="app-name">
            <a href="">
                <img src="../../../image/logo.png" alt="">
                <h1>Gil Reyes FRS</h1>
            </a>
        </div>
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    <!------------------------------------------------>

    <main>
        <div class="container">
            <section class="product-cont">
                <div class="search-back">
                    <a href="../home-page/userhome.php"><img src="../../../image/icon/arrow.png" alt="" width="15px" height="15px"></a>
                    <p>Search result...</p>
                </div>
                <div class="product">
                    <?php 

                        if(isset($_POST['search']))
                        {
                            $valueToSearch = $_POST['valueToSearch'];
                            // search in all table columns
                            // using concat mysql function
                            $query = "SELECT * FROM tb_product WHERE quantity > 0 AND CONCAT(`id`, `product_name`) LIKE '%".$valueToSearch."%'";
                            $search_result = filterTable($query);
                            
                        }
                        else {
                            $query = "SELECT * FROM tb_product";
                            $search_result = filterTable($query);
                        }

                        // function to connect and execute the query
                        function filterTable($query)
                        {
                            include '../../php-database/dbconnect.php';
                            $filter_Result = mysqli_query($conn, $query);
                            return $filter_Result;
                        }
                        
                            if (mysqli_num_rows($search_result) == 0) {
                            echo "<div class='nodata' style='width: 100%; height: 80vh; display: flex; justify-content: center; align-items: center; flex-direction: column; text-align: center; opacity: 25%;'>
                                <img src='../../../image/icon/file.png' width='120px' height='120px'>
                                <p>No result</p>
                                </div>";
                            }
                    ?>
                    <div class="display-div">
                        <!--Put php codes for product display here-->
                        <?php
                            while ($row = mysqli_fetch_assoc($search_result))
                            {
                        ?>
                                <div class="prod-display" onclick="window.location.href='../getproduct-page/get-product.php?id=<?php echo $row['id']; ?> & product_name=<?php echo $row['product_name']; ?> & price=<?php echo $row['price']; ?> & size=<?php echo $row['size']; ?> & p_description=<?php echo $row['p_description']; ?> & category=<?php echo $row['category']; ?> & product_img=<?php echo $row['product_img']; ?>';"onclick="window.location.href='../getproduct-page/get-product.php?id=<?php echo $row['id']; ?> & product_name=<?php echo $row['product_name']; ?> & price=<?php echo $row['price']; ?> & size=<?php echo $row['size']; ?> & p_description=<?php echo $row['p_description']; ?> & category=<?php echo $row['category']; ?> & product_img=<?php echo $row['product_img']; ?>';">
                                    <div class="prod-img">
                                        <!--put image here-->
                                        <img src="../../sys-admin/product-page/<?php echo $row['product_img']; ?>" alt="" width="100px">
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
        </div>
    </main>
</body>
</html>