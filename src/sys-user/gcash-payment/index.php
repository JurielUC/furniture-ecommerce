<!--session link-->
<?php include '../../php-database/user-session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCash Payment - Gil Reyes FRS</title>
    <link rel="icon" href="../../../image/logo2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="gcash.css?v=<?php echo time(); ?>">
</head>
<body>
    <!--Header and divider-->
    <header>
        <div class="app-name">
            <a>
                <img src="../../../image/logo.png" alt="">
                <h1>Gil Reyes FRS</h1>
            </a>
        </div>
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    <!------------------------------------------------>
    <?php
        include '../../php-database/dbconnect.php';

        $trans_id=$_GET['trans_id'];

        $query = "SELECT * FROM tb_orderprocess WHERE trans_id = '$trans_id'";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result))
            { 
    ?>
    <main>
        <div class="container">
            <section class="product-cont">
                <div class="prod-back">
                    <a href="../message-page/userMessage.php"><img src="../../../image/icon/arrow.png" alt="" width="15px" height="15px"></a>
                    <p>GCash Payment</p>
                </div>
                <div class="gcash-cont">
                    <h1>Send Payment</h1>
                    <img src="../../../image/gcash.png" alt="" height="100">
                    <div class="g-content">
                        <p><b>Transaction ID:</b>&nbsp <span><?php echo $row['trans_id']; ?></span></p>
                        <p><b>Amount:</b>&nbsp PHP <span><?php echo $row['total_price']; ?></span></p>
                    </div>
                    <div class="g-form">
                        <form action='' method='GET'>
                            <input name='amount' type='hidden' value='<?php echo $row['total_price']; ?>'>
                            <input type='submit' value='GCash Payment' disabled>
                        </form>
                    </div>
                    <div class="g-btn">
                        <p>You can use this QR Code to send your online payment</p>
                        <a class="open" href="gcash-qr/" target="_blank">QR Code</a><br>
                    </div>
                    <div class="g-dl">
                        <a class="download" href="gcash-qr/qr-code.jpg" download>Download QR Code</a>
                    </div>
                    <div class="g-dl">
                        <p>Send your payment reciept after paying for <br>shop confirmation.</p>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php } ?>
</body>
<script>
    document.addEventListener('keydown', function() {
    if (event.keyCode == 123) {
      alert("You Can not Do This!");
      return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
      alert("You Can not Do This!");
       event.preventDefault();
      return false;
    } else if (event.ctrlKey && event.keyCode == 85) {
      alert("You Can not Do This!");
      return false;
    }
  }, false);
  
  if (document.addEventListener) {
    document.addEventListener('contextmenu', function(e) {
      alert("You Can not Do This!");
      e.preventDefault();
    }, false);
  } else {
    document.attachEvent('oncontextmenu', function() {
      alert("You Can not Do This!");
      window.event.returnValue = false;
    });
  }
</script>
</html>