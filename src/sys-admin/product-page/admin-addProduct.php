<?php 
    require_once '../../php-database/dbconnect.php';

    $prodname=$_REQUEST['product_name'];
    $price=$_REQUEST['price'];
    $size=$_REQUEST['size'];
    $description=$_REQUEST['p_description'];
    $category=$_REQUEST['category'];
    $prod_img=$_FILES['product_img']['name'];

    $var1 = rand(1111,9999);  // generate random number in $var1 variable
    $var2 = rand(1111,9999);  // generate random number in $var2 variable

    $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
    $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

    $dst = "./product_image/".$var3.$prod_img;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "product_image/".$var3.$prod_img; // storing image path into the database with 32 characters hex number and file name

    move_uploaded_file($_FILES["product_img"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name

    $trim_pn = trim($prodname);
    $trim_price = trim($price);
    $trim_size = trim($size);

    //insert data to tb_user table
    $sql = "INSERT INTO tb_product(product_name, price, size, p_description, category, product_img) VALUES('$trim_pn','$trim_price', '$trim_size', '$description', '$category', '$dst_db')";

    if (mysqli_query($conn, $sql)) {
        $alert = "Product Posted!";
        header("location: adminProduct.php?message=$alert");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>