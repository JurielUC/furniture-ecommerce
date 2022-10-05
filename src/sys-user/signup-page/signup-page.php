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
    <link rel="stylesheet" href="signup-page.css?v=<?php echo time(); ?>">
</head>
<body>
    <!--Header and divider-->
    <header>
        <div class="app-name">
            <a href="../../../index.php">
                <img src="../../../image/logo.png" alt="">
                <h1>Gil's Furniture Shop</h1>
            </a>
        </div>
        <!--Put your navigation here below-->
        <nav>
            <a href="../login-page/userlogin.php">Login</a>
            <a href="" style="border-bottom: 3px solid white; padding-bottom: 5px;">Signup</a>
        </nav>
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
        <div id="message">
            <h5>Password must contain the following:</h5>
            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
            <p id="number" class="invalid">A <b>number</b></p>
            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
        </div>
        <section>
            <h1>Create Account</h1>
            <form action="signup-create.php" method="POST" enctype="multipart/form-data">
                <div class="profile-photo">
                    <label for="myfile">Profile Picture</label>
                    <input type="file" id="myfile" name="myfile" accept="image/*">
                </div>
                <div class="container">
                    <label for="fname">First Name</label>
                    <input type="text" placeholder="First Name" name="first_name" required>

                    <label for="lname">Last Name</label>
                    <input type="text" placeholder="Last Name" name="last_name" required>

                    <label for="address">Address</label>
                    <input type="text" placeholder="Address" name="u_address" required>

                    <label for="cnumber">Contact No.</label>
                    <input type="text" placeholder="Contact Number" name="contact_no" required>

                    <label for="email">Email</label>
                    <input type="email" placeholder="Email" name="email" required>

                    <label for="psw">Password</label>
                    <input type="password" placeholder="Password" name="u_password" autocomplete="off" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    
                    <div class="check-box" style="width: 170px; text-align: left;">
                        <input type="checkbox" id="showpass" onclick="myFunction()">
                        <label class="checkbox" for="showpass" style="font-size: .9rem;">Show Password</label><br>

                        <input type="checkbox" id="checkme"/>
                        <label class="checkbox" for="checkme" style="font-size: .9rem;">I hereby certify that all information above are true.</label><br>
                    </div>
                    
                    <button type="submit" name='submit' disabled="disabled" id="sendNewSms">Submit</button>
                </div>
            </form>
            <p>Already have Account? <a href="../login-page/userlogin.php"><b>LOGIN</b></a></p>
        </section>
    </main>
    <script src="signup-page.js"></script>
</body>
</html>