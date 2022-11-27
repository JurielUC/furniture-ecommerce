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
    </header>
    <div class="divider">
        <p>Wood Furniture Design Customization and Ordering System</p>
    </div>
    <!------------------------------------------------>
    <main>
        <div class="help-cont">
            <h1>Customization Guide</h1>
            <table>
                <tr>
                    <th colspan="2"><h3></h3></th>
                </tr>
                <tr>
                    <td><img src="../../../image/help/selection-bar.png" alt="" width="50px"></td>
                    <td>
                        <h4>Selection Bar</h4>
                        <p>You can use this selection bar to select design, choose color, choose style, upload image, and put label to your furniture design canvas.</p>
                    </td>
                </tr>

                <tr>
                    <td><img src="../../../image/help/design-selection.png" alt="" width="140px"></td>
                    <td>
                        <h4>Design Selection</h4>
                        <p>You can select your furniture design here.</p>
                    </td>
                </tr>

                <tr>
                    <td><img src="../../../image/help/color-selection.png" alt="" width="140px"></td>
                    <td>
                        <h4>Color Selection</h4>
                        <p>You can change the color of your chosen furniture design using this color-picker.</p>
                    </td>
                </tr>

                <tr>
                    <td><img src="../../../image/help/upload-image.png" alt="" width="140px"></td>
                    <td>
                        <h4>Upload Image</h4>
                        <p>You can upload your own style like carve using this upload image.</p>
                    </td>
                </tr>

                <tr>
                    <td><img src="../../../image/help/put-label.png" alt="" width="140px"></td>
                    <td>
                        <h4>Label</h4>
                        <p>You can use this label, if you want to put sizes, note in the canvas.</p>
                    </td>
                </tr>

                <tr>
                    <td><img src="../../../image/help/canvas.png" alt="" width="140px"></td>
                    <td>
                        <h4>Canvas</h4>
                        <p>You can drag and drop your chosen style here.</p>
                    </td>
                </tr>

                <tr>
                    <td><img src="../../../image/help/preview.png" alt="" width="50px"></td>
                    <td>
                        <h4>Preview</h4>
                        <p>To view your overall design in the canvas, click this preview button.</p>
                    </td>
                </tr>

                <tr>
                    <td><img src="../../../image/help/price-list.png" alt="" width="100px"></td>
                    <td>
                        <h4>Price List</h4>
                        <p>These the list of prices of the furniture base on its is size or wood type.</p>
                        <p>The carve is not included in the price, because it will be given by the shop.</p>
                    </td>
                </tr>

                <tr>
                    <td><img src="../../../image/help/drag-and-drop.png" alt="" width="200px"></td>
                    <td>
                        <h4>Drag and Drop</h4>
                        <p>You can drag your style and drop it to the position.</p>
                    </td>
                </tr>

                <tr>
                    <td><img src="../../../image/help/submit-form.png" alt="" width="200px"></td>
                    <td>
                        <h4>Submit Form</h4>
                        <p>You can drag your style and drop it to the position you want.</p>
                    </td>
                </tr>

                <tr>
                    <td><img src="../../../image/help/form.png" alt="" width="200px"></td>
                    <td>
                        <h4>Form</h4>
                        <p>Fillup this form before submitting your design.</p>
                        <br>
                        <h4>Type</h4>
                        <p>Enter the size of your furniture.</p>
                        <br>
                        <h4>Size</h4>
                        <p>Enter the wood type of your furniture.</p>
                        <br>
                        <h4>QTY (Quantity)</h4>
                        <p>Enter the quantity of your furniture.</p>
                        <br>
                        <h4>Note</h4>
                        <p>You can leave a note about its size, design, due date and etc.</p>
                    </td>
                </tr>
            </table>
        </div>
    </main>
</body>
</html>