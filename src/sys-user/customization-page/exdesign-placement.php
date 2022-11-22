<?php 
    require_once '../../php-database/user-session.php';

    $size=$_REQUEST['size'];
    $t=$_REQUEST['type'];
    $qty=$_REQUEST['quantity'];
    $n=$_REQUEST['note'];
    $ctgy=$_REQUEST['category'];
    $price=$_REQUEST['price'];
    $fr_img=$_REQUEST['img_front'];
    $bc_img= "uploads/existing-design/1a03bf1f2137c4292628200746d266b7no-pictures.png";

          //time
          $ran_id = rand(time(), 100000000);

          $t_price=$price*$qty;
      
          //insert data to tb_user table
          $sql = "INSERT INTO tb_customize(cust_id, user_id, size, type, qty, price, category, note, img_front, img_back, sent) VALUES('$ran_id', '$loggedin_uid', '$size','$t', '$qty', '$t_price', '$ctgy', '$n', '$fr_img', '$bc_img', '0')";
      
          if (mysqli_query($conn, $sql)) {
              $alert = "Product Posted!";
              header("location: customized-design.php?message=$alert");
                  exit;
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
?>