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
    <link rel="stylesheet" href="adminLogin.css">
    <script src="adminLogin.js"></script>
</head>
<body>
    <!--Header and divider-->
    <header>
        <div class="app-name">
            <a href="../../../index.php">
                <img src="../../../image/logo.png" alt="">
                <h1>Gil Reyes FRS</h1>
            </a>
        </div>
        <!--Put your navigation here below-->
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    <!------------------------------------------------>

    <main>
        <h1 class="create-message"><?php if(!empty($_GET['message'])) {
            $message = $_GET['message'];
            echo $message; }?>
        </h1>

        <?php
            $remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
            if ($remarks=='failed') {
                echo ' <div style="color: #a8896c; margin-bottom: 20px; font-size: 16px; text-align: center;" class="headrg">Login Failed!<br>Invalid Credentials.</div> ';
            }
        ?>
        
        <section>
            <img src="../../../image/icon/account.png" alt="">
            <h1>Admin Login</h1>
            <form action="adminLogin-con.php" method="POST">
                <div class="container">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Email" name="email" required>

                    <label for="psw">Password</label>
                    <input type="password" placeholder="Password" name="a_password" required>

                    <button type="submit">Login</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>