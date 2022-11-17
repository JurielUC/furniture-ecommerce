<!--session link-->
<?php include '../../php-database/admin-session.php'; ?>

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
    <link rel="stylesheet" href="../../sys-user/customization-page/userCustomization.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
        <!--Put your navigation here below-->
        <nav>
            <a class="a" href="../product-page/adminProduct.php">Product</a>
            <a class="a" href="adminProfile.php">Shop Feed</a>
            <a class="a" href="../../php-database/admin-logout.php">Logout</a>
        </nav>
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    <!------------------------------------------------>
    <main>
        <div class="container">
            <section class="custo-cont">
                <div class="customized-list">
                    <table>
                        <tr>
                            <th colspan="5"><h2>Account List</h2></th>
                        </tr>
                        <tr>
                            <th width="20%">Name</th>
                            <th width="20%">Email</th>
                            <th width="10%">Contact No.</th>
                            <th width="10%">Position</th>
                            <th width="5%"></th>
                        </tr>
                        <?php

                            $query = "SELECT * FROM tb_admin ORDER BY position AND id DESC";
                            $result = mysqli_query($conn, $query);
                        
                            while ($row = mysqli_fetch_assoc($result))
                            {
                        ?>
                        <tr>
                            <td><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['contact_no']; ?></td>
                            <td><?php echo $row['position']; ?></td>
                            <td>
                            <?php 
                                $id=$row['id'];
                                if($row['id'] == $loggedin_id) {
                                    echo "";
                                }
                                else {
                                    echo "<a title='Delete' class='delete' href='../../php-database/delete-admin-acc.php?id=$id'><img src='../../../image/icon/trash.png' width='15px' height='15px'></a>";
                                }
                            ?>
                        </td>
                        </tr>
                        <?php } ?>
                        
                    </table>
                </div>
            </section>
            <script src="userCustomization.js"></script>
        </div>
    </main>
</body>
</html>