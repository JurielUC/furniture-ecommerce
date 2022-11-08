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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

                        $sql2 = mysqli_query($conn, "UPDATE tb_user SET unread_msg = unread_msg - unread_msg WHERE unique_id = '$uid'");
                        
                        $query = "SELECT * FROM tb_user WHERE unique_id=$uid";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($result))
                        {
                            $user_id=$row['unique_id'];
                        }
                    ?>
                    <!--Auto reload script-->
                    <script>
                        function ajaxCall() {
                            $.ajax({
                                url: "refresh.php?unique_id=<?php echo $uid; ?>",
                                success: (function (result) {
                                    $(".your_div").html(result);
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
                    <div class="refresh-btn">
                        <span class="your_div"></span>
                        <a href="read-message.php?unique_id=<?php echo $uid; ?> & status=<?php echo $status; ?> & first_name=<?php echo $fname; ?> & last_name=<?php echo $lname; ?> & myfile=<?php echo $ppic; ?>'">&nbsp|&nbspRefresh</a>
                    </div>

                </div>
                <div class="message-box" id="your_div">
                    <?php
                        $sql = "SELECT * FROM tb_pointmessage WHERE message_to = $user_id
                        AND message_from = $loggedin_uid OR message_to = $loggedin_uid
                        AND message_from = $user_id ORDER BY msg_timestamp ASC";

                        $res = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($res) > 0){
                                while ($row = mysqli_fetch_assoc($res))
                                    {
                                        if($row['message_from'] === $user_id){
                                            if($row['message_content'] == NULL) {
                                                echo '  <p class="time-s">'. $row['msg_timestamp'] .'</p>
                                                <div class="message-me message">
                                                    <div class="message-one">
                                                        <img src=../../sys-user/message-page/'. $row['msg_file'] .' width="360px">
                                                    </div>
                                                </div>';
                                            } else {
                                                echo '  <p class="time-s">'. $row['msg_timestamp'] .'</p>
                                                <div class="message-me message">
                                                    <div class="message-one">
                                                        <p>'. $row['message_content'] .'</p>
                                                    </div>
                                                </div>';
                                            }
                                            
                                        }
                                        elseif($row['message_from'] === $loggedin_uid) {
                                            if($row['message_content'] == NULL) {
                                                echo  '<p class="time-s">'. $row['msg_timestamp'] .'</p>
                                                    <div class="message-admin">
                                                        <div class="message-two message">
                                                            <img src='. $row['msg_file'] .' width="360px">
                                                        </div>
                                                    </div>';
                                            } else {
                                                echo  '<p class="time-s">'. $row['msg_timestamp'] .'</p>
                                                    <div class="message-admin">
                                                        <div class="message-two message">
                                                            <p>'. $row['message_content'] .'</p>
                                                        </div>
                                                    </div>';
                                            }
                                        }
                                    }
                                }else
                                    {
                                        echo '<p class="nm">No Message</p>';
                                    }
                    ?>
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
                        <h2>Order Progress</h2>
                        <button onclick="window.location.href='adminMessage.php?unique_id=<?php echo $uid; ?> & status=<?php echo $status; ?> & first_name=<?php echo $fname; ?> & last_name=<?php echo $lname; ?> & myfile=<?php echo $ppic; ?>';">Progress</button>
                    </div>
                    <div class="progress-bar-cont">
                        <!--put php for message display here-->
                        <?php 
                            include '../../php-database/dbconnect.php';

                            $query = "SELECT * FROM tb_customize WHERE sent = '1' ORDER BY id ASC";
                            $result = mysqli_query($conn, $query);
                        ?>
                        <div class="canvas">
                            <div class="tran-cont">
                            <?php
                                if (mysqli_num_rows($result) == 0) {
                                    echo "<div class='nodata' style='height: 50vh; display: flex; justify-content: center; align-items: center; flex-direction: column; text-align: center; opacity: 25%;'>
                                        <img src='../../../image/icon/file.png' width='120px' height='120px'>
                                        <p>Empty</p>
                                        </div>";
                                    }

                                while ($row = mysqli_fetch_assoc($result))
                                {     
                                    $custoID=$row['id'];
                                    
                            ?>
                                <div class="p-s">
                                    <p class="title">QTY:</p>
                                    <p>&nbsp<?php echo $row['qty']; ?></p>
                                </div>
                                <div class="d-t">
                                    <p class="title">TYPE:</p>
                                    <p>&nbsp<?php echo $row['type']; ?></p>
                                </div>
                                <div class="d-t">
                                    <p class="title">CATEGORY:</p>
                                    <p>&nbsp<?php echo $row['category']; ?> pc/s</p>
                                </div>
                                <div class="d-t">
                                    <p class="title">NOTE/QUESTION:</p>
                                    <p>&nbsp<?php echo $row['note']; ?></p>
                                </div>
                                <div class="d-t">
                                    <button title="View Image" class="view" onclick="window.location.href='view-image.php?id=<?php echo $custoID; ?> & unique_id=<?php echo $uid; ?> & status=<?php echo $status; ?> & first_name=<?php echo $fname; ?> & last_name=<?php echo $lname; ?> & myfile=<?php echo $ppic; ?>'"><img src="../../../image/icon/image.png" width="15px" height="15px" alt=""></button>
                                </div>
                                <div class="d-t">
                                    <button title="Confirm" class="view" onclick="window.location.href='view-image.php?id=<?php echo $custoID; ?> & unique_id=<?php echo $uid; ?> & status=<?php echo $status; ?> & first_name=<?php echo $fname; ?> & last_name=<?php echo $lname; ?> & myfile=<?php echo $ppic; ?>'">Send Form</button>
                                </div>
                                <div class="d-t">
                                    <button title="Cancel" class="cancel" onclick="window.location.href='cancel.php?id=<?php echo $custoID; ?> & unique_id=<?php echo $uid; ?> & status=<?php echo $status; ?> & first_name=<?php echo $fname; ?> & last_name=<?php echo $lname; ?> & myfile=<?php echo $ppic; ?>'">Cancel</button>
                                </div>
                                    <div style="border: 1px dotted #ffffff; margin: 3px;"></div>
                            <?php 
                                } 
                            ?>
                        </div>
                    </div>
                </div>              
            </section>
        </div>
    </main>
    <script src="adminMessage.js"></script>
</body>
</html>