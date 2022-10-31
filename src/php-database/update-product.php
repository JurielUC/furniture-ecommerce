<?php
    include 'dbconnect.php';

    $uid=$_REQUEST['uid'];
    $id=$_REQUEST['id'];
    $sz=$_REQUEST['size'];
    $pn=$_REQUEST['product_name'];
    $pr=$_REQUEST['price'];
    $ctgry=$_REQUEST['category'];
    $qty=$_REQUEST['quantity'];
    $pd=$_REQUEST['p_description'];
    $prod_img=$_FILES['product_img']['name'];

    if(isset($_REQUEST["size-btn"]))
        {
            $query = "UPDATE tb_product SET size='$sz' WHERE id='$id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $alert = "Size Updated!";
                header("location: ../sys-admin/product-page/edit.php?message=$alert & unique_id=$uid & id=$id");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }

    elseif(isset($_REQUEST["category-btn"]))
        {
            $query = "UPDATE tb_product SET category='$ctgry' WHERE id='$id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $alert = "Size Updated!";
                header("location: ../sys-admin/product-page/edit.php?message=$alert & unique_id=$uid & id=$id");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }

    elseif(isset($_REQUEST["price-btn"]))
        {
            $query = "UPDATE tb_product SET price='$pr' WHERE id='$id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $alert = "Price Updated!";
                header("location: ../sys-admin/product-page/edit.php?message=$alert & unique_id=$uid & id=$id");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }

    elseif(isset($_REQUEST["pn-btn"]))
        {
            $query = "UPDATE tb_product SET product_name='$pn' WHERE id='$id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $alert = "Price Updated!";
                header("location: ../sys-admin/product-page/edit.php?message=$alert & unique_id=$uid & id=$id");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }

    elseif(isset($_REQUEST["pd-btn"]))
        {
            $query = "UPDATE tb_product SET p_description='$pd' WHERE id='$id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $alert = "Price Updated!";
                header("location: ../sys-admin/product-page/edit.php?message=$alert & unique_id=$uid & id=$id");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }

    elseif(isset($_REQUEST["qty-btn"]))
        {
            $query = "UPDATE tb_product SET quantity='$qty' WHERE id='$id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $alert = "Quantity Updated!";
                header("location: ../sys-admin/product-page/edit.php?message=$alert & unique_id=$uid & id=$id");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }

    elseif(isset($_REQUEST["prodImg-btn"]))
        {
            $var1 = rand(1111,9999);  // generate random number in $var1 variable
            $var2 = rand(1111,9999);  // generate random number in $var2 variable

            $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
            $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

            $dst = "../sys-admin/product-page/product_image/".$var3.$prod_img;  // storing image path into the {all_images} folder with 32 characters hex number and file name
            $dst_db = "product_image/".$var3.$prod_img; // storing image path into the database with 32 characters hex number and file name

            move_uploaded_file($_FILES["product_img"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
            
            $query = "UPDATE tb_product SET product_img='$dst_db' WHERE id='$id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $alert = "Price Updated!";
                header("location: ../sys-admin/product-page/edit.php?message=$alert & unique_id=$uid & id=$id");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }
?>