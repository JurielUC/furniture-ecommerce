<?php 
    require_once '../../php-database/user-session.php';

    $size=$_REQUEST['size'];
    $t=$_REQUEST['type'];
    $qty=$_REQUEST['qty'];
    $n=$_REQUEST['note'];
    $fr_img=$_REQUEST['img_front'];
    $bc_img=$_REQUEST['img_back'];

    if(isset($_REQUEST["door"]))
        {
          $filename1 = $loggedin_uid."_".time()."_".uniqid()."_front";
          $folderPath = "uploads/door/";
          $image_parts = explode(";base64,", $fr_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file1 = $folderPath . $filename1 . '.png';
          file_put_contents($file1, $image_base64);
      
          $filename2 = $loggedin_uid."_".time()."_".uniqid()."_back";
          $folderPath = "uploads/door/";
          $image_parts = explode(";base64,", $bc_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file2 = $folderPath . $filename2 . '.png';
          file_put_contents($file2, $image_base64);

          //category
          $ctgy = 'Door';
      
          //insert data to tb_user table
          $sql = "INSERT INTO tb_customize(user_id, size, type, qty, category, note, img_front, img_back) VALUES('$loggedin_uid', '$size','$t', '$qty', '$ctgy', '$n', '$file1', '$file2')";
      
          if (mysqli_query($conn, $sql)) {
              $alert = "Product Posted!";
              header("location: customized-design.php?message=$alert");
                  exit;
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
?>