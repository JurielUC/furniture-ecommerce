<!--session link-->
<?php include '../../php-database/user-session.php'; ?>

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
                <h1>Gil's Furniture Shop</h1>
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
        <nav>
            <a href="../home-page/userhome.php">Your Feed</a>
            <a href="../message-page/userMessage.php"><span class="your_div"></span>Message</a>
            <a style="border-bottom: 3px solid white; padding-bottom: 5px;" href="userCustomization.php">Create Design</a>
            <a href="../myprofile-page/userProfile.php">Profile</a>
            <a href="../../php-database/user-logout.php">Logout</a>
        </nav>
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    <!------------------------------------------------>
    <main class="svg">
        <div class="container">
            <section class="custo-cont">
                <h1>Choose Furniture to Customize</h1><br>
                <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem<br>accusantium doloremque laudantium, totam rem aperiam,<br>eaque ipsa quae ab illo inventore veritatis et quasi.</p>

                <div class="choices">
                    <div class="choice-child" onclick="myDoor()">
                        <h1>Door</h1>
                        <img src="../../../image/door.png" alt="Door" width="180px">
                    </div>
                    <div class="choice-child">
                        <h1>Chair</h1>
                        <img src="../../../image/chair.png" alt="Chair" width="180px">
                    </div>
                    <div class="choice-child">
                        <h1>Bed</h1>
                        <img src="../../../image/bed.png" alt="Bed" width="180px">
                    </div>
                </div>
            </section>
            <script src="userCustomization.js"></script>
        </div>
    </main>
</body>
</html>