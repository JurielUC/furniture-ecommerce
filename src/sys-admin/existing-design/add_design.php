<?php 
    require_once '../../php-database/dbconnect.php';

    $price=$_REQUEST['price'];
    $type=$_REQUEST['type'];
    $category=$_REQUEST['category'];
    $prod_img=$_FILES['ed_img']['name'];

    $var1 = rand(1111,9999);  // generate random number in $var1 variable
    $var2 = rand(1111,9999);  // generate random number in $var2 variable

    $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
    $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

    $dst = "../../sys-user/customization-page/uploads/existing-design/".$var3.$prod_img;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "uploads/existing-design/".$var3.$prod_img; // storing image path into the database with 32 characters hex number and file name

    move_uploaded_file($_FILES["ed_img"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name

    //insert data to tb_user table
    $sql = "INSERT INTO tb_designs(price, type, category, ed_img) VALUES('$price', '$type', '$category', '$dst_db')";

    if (mysqli_query($conn, $sql)) {
        $alert = "Design Added!";
        header("location: existing-design.php?message=$alert");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>