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
            <a href="../home-page/userhome.php">Your Feed</a>
            <a href="../message-page/userMessage.php">Message</a>
            <a href="../myprofile-page/userProfile.php">Profile</a>
            <a href="../../php-database/user-logout.php">Logout</a>
        </nav>
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    <!------------------------------------------------>

    <main>
        <div class="container">
            <section class="custo-cont">
                <div class="custo-header">
                    <div class="custo-nav">

                    </div>
                </div>
                <div class="custo-canvas">
                    <div class="custo-paper">

                    </div>
                </div>
            </section>
            <section class="progress-cont">
                <div class="custo-picker">
                    <div class="custo-title">
                        <h1>Create your own design</h1>
                    </div>
                    <div class="custo-category">
                        <h5>Select category</h5>
                        <div class="choices-cont">
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                        </div>
                    </div>
                    <div class="custo-color">
                        <h5>Select color</h5>
                        <div class="choices-cont">
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                        </div>
                    </div>
                    <div class="custo-design">
                        <h5>Select Design</h5>
                        <div class="choices-cont">
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                            <div class="choices">

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <script src="userMessage.js"></script>
        </div>
    </main>
</body>
</html>