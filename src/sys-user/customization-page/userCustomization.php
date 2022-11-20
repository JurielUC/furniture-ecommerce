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
    <main class="svg">
        <div class="container">
            <section class="custo-cont">
                <h1>Choose Furniture to Customize</h1><br>
                <p>Create your own design by using this design customization feature.<br>Choose the type of furniture you want to customize.<br>This feature is limited to large screen devices.</p>

                <div class="choices">
                    <div class="choice-child" onclick="myDoor()">
                        <h1>Door</h1>
                        <img src="../../../image/door.png" alt="Door" width="180px">
                    </div>
                    <div class="choice-child" onclick="myTableandChair()">
                        <h1>Table & Chair</h1>
                        <img src="../../../image/tableandchair.png" alt="Chair" width="180px">
                    </div>
                    <div class="choice-child" onclick="myBed()">
                        <h1>Bed</h1>
                        <img src="../../../image/bed.png" alt="Bed" width="180px">
                    </div>
                </div>
            </section>
            <script>
                function myDoor() {
                    window.open("door-custom/designer.php");
                }

                function myTableandChair() {
                    window.open("table-custom/table-designer.php");
                }

                function myBed() {
                    window.open("bed-custom/bed-designer.php");
                }
            </script>
        </div>
    </main>
</body>
</html>