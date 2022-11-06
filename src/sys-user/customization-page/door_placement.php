<?php 
    require_once '../../php-database/user-session.php';

    $w=$_REQUEST['width'];
    $l=$_REQUEST['length'];
    $t=$_REQUEST['type'];
    $qty=$_REQUEST['qty'];
    $n=$_REQUEST['note'];
    $fr_img=$_REQUEST['img_front'];
    $bc_img=$_REQUEST['img_back'];
    
    //$fr_img=$_FILES['img_front']['name'];
    //$bc_img=$_FILES['img_back']['name'];

    //$data1 = base64_decode($fr_img);
    //$data2 = base64_decode($bc_img);

    $filename1 = time().uniqid();
    $folderPath = "uploads/door/";
    $image_parts = explode(";base64,", $fr_img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
    $file1 = $folderPath . $filename1 . '.png';
    file_put_contents($file1, $image_base64);

    $filename2 = time().uniqid();
    $folderPath = "uploads/door/";
    $image_parts = explode(";base64,", $bc_img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
    $file2 = $folderPath . $filename2 . '.png';
    file_put_contents($file2, $image_base64);

    //insert data to tb_user table
    $sql = "INSERT INTO tb_customize(user_id, width, length, type, qty, note, img_front, img_back) VALUES('$loggedin_uid', '$w','$l', '$t', '$qty', '$n', '$file1', '$file2')";

    if (mysqli_query($conn, $sql)) {
        $alert = "Product Posted!";
        header("location: userCustomization.php?message=$alert");
            exit;
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>