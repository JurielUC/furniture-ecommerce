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
    <link rel="stylesheet" href="src/style/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <!--Header and divider-->
    <header>
        <div class="app-name">
            <a href="">
                <img src="./image/logo.png" alt="">
                <h1>Gil's Furniture Shop</h1>
            </a>
        </div>
        <!--Put your navigation here below-->
        <nav>
            <a class="a" href="./src/sys-user/login-page/userlogin.php">Login</a>
            <a class="a" href="./src/sys-user/signup-page/signup-page.php">Signup</a>
        </nav>
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    <!------------------------------------------------>

    <!--Main content-->
    <main>
        <section id="landing-page">
            <div class="landing-text">
                <h1>Lorem Ipsum Shop</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, dolore cumque optio eum facilis tenetur ipsam voluptates enim mollitia aut, iure illum odit dolor suscipit perferendis saepe, repudiandae accusamus dolores.</p>
                <div>
                    <button onclick="window.location.href='#product-list'">PRODUCT</button>
                    <button onclick="window.location.href='./src/sys-user/login-page/userlogin.php'">LOGIN</button>
                </div>
            </div>
            <div class="image-slide">
                <img src="./image/bg-img.jpg" alt="">
            </div>
        </section>
        <!--<section id="product-list">
            <div class="product-cont">
                <h1>PRODUCT</h1>
                <br>
                <div class="prod-cont-parent">
                    <div class="prod-child">
                        <div class="prod-content">
                            <div class="prod-img">

                            </div>
                            <h2>Lorem Ipsum</h2>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="prod-content">
                            <div class="prod-img">
                                
                            </div>
                            <h2>Lorem Ipsum</h2>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="prod-content">
                            <div class="prod-img">
                                
                            </div>
                            <h2>Lorem Ipsum</h2>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <button title="See more"><img src="./image/icon/more.png" alt=""></button>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="profile">
                <div class="prof-cont">
                    <img src="./image/icon/account.png" alt="">
                    <br>
                    <h1>Lorem Ipsum</h1>
                    <p>Shop Owner</p>

                    <div class="location">
                        <p><img src="./image/icon/phone.png" alt="">&nbsp09123456789</p>
                        <p class="loc"><img src="./image/icon/gps.png" alt="">&nbspBrgy. Mahayahay, Lemery, Batangas</p>
                    </div>
                    <div class="google-map">
                        <img src="./image/map.png" alt="">
                    </div>
                    
                </div>
            </div>
            <div class="contact-form">
                <div class="contact-cont">
                    <h1>Contact Us</h1>
                    <p>Let's get this conversation started. Tell us a bit about yourself, and we'll get in touch as soon as we can.</p>
                    <form action="">
                        <div class="form-inputs">
                            <div class="input">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" placeholder="Name">
                            </div>
                            <div class="input">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="input">
                                <label for="number">Phone Number</label>
                                <input type="text" name="number" id="number" placeholder="Phone Number">
                            </div>
                            <div class="input">
                                <label for="message">Message</label>
                                <textarea name="message" id="" cols="30" rows="10" placeholder="Write your message here..."></textarea>
                            </div>

                            <div class="button">
                                <input class="submit" type="submit" value="Submit">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </section>-->
    </main>
</body>
</html>