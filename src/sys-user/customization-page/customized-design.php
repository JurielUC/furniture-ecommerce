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
    <link rel="stylesheet" href="userCustomization.css?v=<?php echo time(); ?>">
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
        <!--Auto reload script-->
        <script>
            function ajaxCall() {
                $.ajax({
                    url: "refresh.php",
                    success: (function (result) {
                        $(".your_div").html(result);
                    })
                })
            };

            ajaxCall(); // To output when the page loads
            setInterval(ajaxCall, (2 * 1000)); // x * 1000 to get it in seconds
        </script>
        <!--Put your navigation here below-->
        <nav class="block"> 
            <a href="../home-page/userhome.php" class="a">Your Feed</a>
            <a href="../message-page/userMessage.php" class="a"><span class="your_div"></span>Message</a>
            <div class="dropdown" style="float:right;">
                <a class="dropbtn"><img src="../../../image/icon/down-chevron.png" alt="" width="13px" height="13px"> More</a>
                <div class="dropdown-content">
                    <a href="userCustomization.php" style="background-color: #d9e2ef; border-bottom: 3px solid white; padding-bottom: 5px;">Designs</a>
                    <a href="../myprofile-page/userProfile.php">Profile</a>
                    <a href="../terms-and-policy/privacy-policy.php" target="_blank">Privacy Policy</a>
                    <a href="../terms-and-policy/terms-and-conditions.php" target="_blank">Terms of Use</a>
                    <a href="../../php-database/user-logout.php">Logout</a>
                </div>
            </div>
        </nav>
        <div class="nav-phone">
            <div class="dropdown" style="float:right;">
                <a class="dropbtn"><img src="../../../image/icon/down-chevron.png" alt="" width="13px" height="13px"> Menu</a>
                <div class="dropdown-content">
                    <a href="../home-page/userhome.php" class="a">Your Feed</a>
                    <a href="../message-page/userMessage.php" class="a"><span class="your_div"></span>Message</a>
                    <a href="userCustomization.php" style="border-bottom: 3px solid white; padding-bottom: 5px;">Designs</a>
                    <a href="../myprofile-page/userProfile.php">Profile</a>
                    <a href="../terms-and-policy/privacy-policy.php" target="_blank">Privacy Policy</a>
                    <a href="../terms-and-policy/terms-and-conditions.php" target="_blank">Terms of Use</a>
                    <a href="../../php-database/user-logout.php">Logout</a>
                </div>
            </div>
        </div>
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
                            <th colspan="7"><h2>Design List</h2></th>
                        </tr>
                        <tr>
                            <th width="5%">Qty</th>
                            <th width="10%">Type</th>
                            <th width="10%">Category</th>
                            <th width="15%">Price</th>
                            <th width="10%">Image</th>
                            <th width="5%">Delete</th>
                            <th width="5%">Select</th>
                        </tr>
                        <?php

                            $query = "SELECT * FROM tb_customize WHERE user_id = '$loggedin_uid' AND selected <= '1' ORDER BY sent AND id DESC";
                            $result = mysqli_query($conn, $query);
                        
                            while ($row = mysqli_fetch_assoc($result))
                            {
                                $custID = $row['cust_id'];
                                $id = $row['id'];
                        ?>
                        <tr>
                            <td><?php echo $row['qty']; ?></td>
                            <td><?php echo $row['type']; ?></td>
                            <td><?php echo $row['category']; ?></td>
                            <td>PHP <?php echo $row['price']; ?>.00</td>
                            <td><button title="View Image" class="view" onclick="window.location.href='view-image.php?id=<?php echo $row['id']; ?>'"><img src="../../../image/icon/image.png" width="15px" height="15px" alt=""></button></td>
                            <td><?php 
                                    $id=$row['id'];
                                    if($row['sent'] == "0") {
                                        echo "<a title='Delete' class='delete' href='../../php-database/delete-customized.php?id=$id;'><img src='../../../image/icon/trash.png' width='15px' height='15px'></a>";
                                    }
                                    else {
                                        echo '<a title="Currently in Order" class="delete del-block"><img src="../../../image/icon/trash.png" width="15px" height="15px" alt=""></a>';
                                    }
                                ?>
                            </td>
                            <td>
                            <!--<a title='Send to Shop' class='success' href='userOrder.php?cust_id=<?php echo $custID ?>'><img src='../../../image/icon/send-message.png' width='15px' height='15px'></a>-->
                                <?php 
                                    $id=$row['id'];
                                    if($row['selected'] == "0") {
                                        echo "<a title='Select' class='delete' href='../../php-database/select-custo.php?cust_id=$custID'><img src='../../../image/icon/add.png' width='15px' height='15px'></a>";
                                    }
                                    else {
                                        echo "<a title='Unselect' class='success' href='../../php-database/unselect-custo.php?cust_id=$custID'><img src='../../../image/icon/check-mark.png' width='15px' height='15px' alt=''></a>";
                                    }
                                ?>
                            </td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td colspan="3"><p><b>Total Amount</b></p></td>
                            <td><b>PHP 
                                <?php 
                                    $query2 = "SELECT SUM(price) AS total_amount FROM tb_customize WHERE user_id = '$loggedin_uid' AND selected = '1'";
                                    $result2 = mysqli_query($conn, $query2);

                                    while ($row = mysqli_fetch_assoc($result2))
                                        {       
                                            echo $row['total_amount'];
                                        }
                                ?></b>
                            </td>
                            <td></td>
                            <td colspan="2">
                                <?php 
                                    $query3 = "SELECT COUNT(selected) AS total_selected FROM tb_customize WHERE user_id = '$loggedin_uid' AND selected = '1'";
                                    $result3 = mysqli_query($conn, $query3);

                                    $trans_id = rand(time(), 100000000);

                                    while ($row = mysqli_fetch_assoc($result3))
                                        {     
                                            $ts = $row['total_selected'];
                                            if($row['total_selected'] == '0') {
                                                echo "<a title='$ts product selected.' class='success place-order' href=''>Check Out(0)</a>";
                                            } 
                                            else {
                                                echo "<a title='$ts product selected.' class='success place-order' href='../../php-database/multiple-order.php?trans_id=$trans_id & user_id=$loggedin_uid'>Check Out($ts)</a>";
                                            }
                                        } 
                                ?>
                                <!--<a title='<?php echo $row['total_selected']; ?> product selected.' class='success place-order' href='../../php-database/multiple-order.php?trans_id=<?php echo $trans_id ?> & user_id=<?php echo $loggedin_uid ?>'>Check Out(<?php echo $row['total_selected']; ?>)</a>
                                 } ?>-->
                            </td>
                        </tr>
                        
                    </table>
                </div>
            </section>
            <script src="userCustomization.js"></script>
        </div>
    </main>
</body>
</html>