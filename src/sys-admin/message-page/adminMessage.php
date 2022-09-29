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
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
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
                    <?php 
                        require_once '../../php-database/dbconnect.php';

                        $uid=$_GET['unique_id'];
                        $status=$_GET['status'];
                        $fname=$_GET['first_name'];
                        $lname=$_GET['last_name'];
                        $ppic=$_GET['myfile'];
                        
                        $query = "SELECT * FROM tb_user WHERE unique_id=$uid";
                        $result = mysqli_query($conn, $query);
                    ?>
                    <!--Auto reload script-->
                    <script>
                        function ajaxCall() {
                            $.ajax({
                                url: "message.php?unique_id=<?php echo $uid; ?>",
                                success: (function (result) {
                                    $("#your_div").html(result);
                                })
                            })
                        };

                        ajaxCall(); // To output when the page loads
                        setInterval(ajaxCall, (2 * 1000)); // x * 1000 to get it in seconds
                    </script>
                    <img src="../../sys-user/signup-page/<?php echo $ppic; ?>" alt="" width="50px" height="50px">
                    <div class="status">
                        <a href=""><?php echo $fname; ?> <?php echo $lname; ?></a>
                        <p><?php echo $status; ?></p>
                    </div>
                    

                </div>
                <div class="message-box" id="your_div">
                    
                </div>
                <div class="message-input">
                    <form action="adminSend.php" method="post" enctype="multipart/form-data">
                        <div class="file">
                            <label for="file_upload" title="Attach File"><img src="../../../image/icon/attach-paperclip-symbol.png" alt="" width="30px" height="30px"></label>
                            <input type="file" name="msg_file" id="file_upload">
                            <input type="text" name="user_id" value="<?php echo $uid; ?>" hidden>
                        </div>

                        <textarea name="message_content" id="" cols="82" rows="1" placeholder="Write someting..."></textarea>
                        <button title="Send"><img src="../../../image/icon/send.png" alt="" width="30px" height="30px"></button>
                    </form>
                </div>
            </section>
            <section class="progress-cont"> 
                <div class="progress">
                    <div class="progress-header">
                        <h2>Project Progress</h2>
                    </div>
                    <div class="progress-bar-cont">
                        <!--put php for message display here-->
                        
                    </div>
                </div>              
            </section>
        </div>
    </main>
    <script src="adminMessage.js"></script>
</body>
</html>