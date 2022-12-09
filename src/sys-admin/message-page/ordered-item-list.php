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
                        <?php

                            $trans_id=$_REQUEST['trans_id'];
                            $uid=$_GET['unique_id'];
                            $status=$_GET['status'];
                            $fname=$_GET['first_name'];
                            $lname=$_GET['last_name'];
                            $ppic=$_GET['myfile'];

                            $query = "SELECT * FROM tb_customize WHERE user_id = '$uid' AND trans_id = '$trans_id' ORDER BY qty ASC";
                            $result = mysqli_query($conn, $query);
                        ?>
                        <tr>
                            <th><a href="adminMessage-inquiries.php?trans_id=<?php echo $trans_id; ?> & unique_id=<?php echo $uid; ?> & status=<?php echo $status; ?> & first_name=<?php echo $fname; ?> & last_name=<?php echo $lname; ?> & myfile=<?php echo $ppic; ?>" style="font-size: 30px; text-decoration: none; color: #a8896c;"><</a></th>
                            <th colspan="6" style="text-align: left;">Back</th>
                        </tr>
                        <tr>
                            <th width="5%">Qty</th>
                            <th width="10%">Type</th>
                            <th width="10%">Category</th>
                            <th width="20%">Note</th>
                            <th width="5%">Image</th>
                            <th width="10%">Price</th>
                        </tr>
                        <?php
                            while ($row = mysqli_fetch_assoc($result))
                            {
                                $custID = $row['cust_id'];
                        ?>
                        <tr>
                            <td><?php echo $row['qty']; ?></td>
                            <td><?php echo $row['type']; ?></td>
                            <td><?php echo $row['category']; ?></td>
                            <td><?php echo $row['note']; ?></td>
                            <td><button title="View Image" class="view" onclick="window.location.href='view-image.php?cust_id=<?php echo $row['cust_id']; ?> & trans_id=<?php echo $row['trans_id']; ?> & unique_id=<?php echo $uid; ?> & status=<?php echo $status; ?> & first_name=<?php echo $fname; ?> & last_name=<?php echo $lname; ?> & myfile=<?php echo $ppic; ?>'"><img src="../../../image/icon/image.png" width="15px" height="15px" alt=""></button></td>
                            <td>
                                PHP <?php echo $row['price']; ?>.00
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