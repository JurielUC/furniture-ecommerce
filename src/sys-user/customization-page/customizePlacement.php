<?php 
    require_once '../../php-database/user-session.php';

    $size=$_REQUEST['size'];
    $t=$_REQUEST['type'];
    $qty=$_REQUEST['qty'];
    $n=$_REQUEST['note'];
    $fr_img=$_REQUEST['img_front'];
    $bc_img=$_REQUEST['img_back'];

    //For DOOR===================================================================================================
    if($_REQUEST["type"]=="Single-Plywood")
        {
          $price = $qty*2200;
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
          $ran_id = rand(time(), 100000000);
      
          //insert data to tb_user table
          $sql = "INSERT INTO tb_customize(cust_id, user_id, size, type, qty, price, category, note, img_front, img_back) VALUES('$ran_id', '$loggedin_uid', '$size','$t', '$qty', '$price', '$ctgy', '$n', '$file1', '$file2')";
      
          if (mysqli_query($conn, $sql)) {
              $alert = "Product Posted!";
              header("location: customized-design.php?message=$alert");
                  exit;
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    elseif($_REQUEST["type"]=="Single-Solidwood")
        {
          $price = $qty*5800;
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
          $ran_id = rand(time(), 100000000);
      
          //insert data to tb_user table
          $sql = "INSERT INTO tb_customize(cust_id, user_id, size, type, qty, price, category, note, img_front, img_back) VALUES('$ran_id', '$loggedin_uid', '$size','$t', '$qty', '$price', '$ctgy', '$n', '$file1', '$file2')";
      
          if (mysqli_query($conn, $sql)) {
              $alert = "Product Posted!";
              header("location: customized-design.php?message=$alert");
                  exit;
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    elseif($_REQUEST["type"]=="Double-Plywood")
        {
          $price = $qty*4400;
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
          $ran_id = rand(time(), 100000000);
      
          //insert data to tb_user table
          $sql = "INSERT INTO tb_customize(cust_id, user_id, size, type, qty, price, category, note, img_front, img_back) VALUES('$ran_id', '$loggedin_uid', '$size','$t', '$qty', '$price', '$ctgy', '$n', '$file1', '$file2')";
      
          if (mysqli_query($conn, $sql)) {
              $alert = "Product Posted!";
              header("location: customized-design.php?message=$alert");
                  exit;
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    elseif($_REQUEST["type"]=="Double-Solidwood")
        {
          $price = $qty*9600;
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
          $ran_id = rand(time(), 100000000);
      
          //insert data to tb_user table
          $sql = "INSERT INTO tb_customize(cust_id, user_id, size, type, qty, price, category, note, img_front, img_back) VALUES('$ran_id', '$loggedin_uid', '$size','$t', '$qty', '$price', '$ctgy', '$n', '$file1', '$file2')";
      
          if (mysqli_query($conn, $sql)) {
              $alert = "Product Posted!";
              header("location: customized-design.php?message=$alert");
                  exit;
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

      //For Table=================================================================================================
      //Akasya Tree Type
      elseif($_REQUEST["type"]=="Akasya" && $_REQUEST["size"]=="2 Seater")
        {
          $par_price= 800+3600;
          $price = $qty*$par_price;
          $filename1 = $loggedin_uid."_".time()."_".uniqid()."_front";
          $folderPath = "uploads/table/";
          $image_parts = explode(";base64,", $fr_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file1 = $folderPath . $filename1 . '.png';
          file_put_contents($file1, $image_base64);
      
          $filename2 = $loggedin_uid."_".time()."_".uniqid()."_back";
          $folderPath = "uploads/table/";
          $image_parts = explode(";base64,", $bc_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file2 = $folderPath . $filename2 . '.png';
          file_put_contents($file2, $image_base64);

          //category
          $ctgy = 'Table and Chair';
          $ran_id = rand(time(), 100000000);
      
          //insert data to tb_user table
          $sql = "INSERT INTO tb_customize(cust_id, user_id, size, type, qty, price, category, note, img_front, img_back) VALUES('$ran_id', '$loggedin_uid', '$size','$t', '$qty', '$price', '$ctgy', '$n', '$file1', '$file2')";
      
          if (mysqli_query($conn, $sql)) {
              $alert = "Product Posted!";
              header("location: customized-design.php?message=$alert");
                  exit;
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

      elseif($_REQUEST["type"]=="Akasya" && $_REQUEST["size"]=="4 Seater")
        {
          $par_price= 800+5100;
          $price = $qty*$par_price;
          $filename1 = $loggedin_uid."_".time()."_".uniqid()."_front";
          $folderPath = "uploads/table/";
          $image_parts = explode(";base64,", $fr_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file1 = $folderPath . $filename1 . '.png';
          file_put_contents($file1, $image_base64);
      
          $filename2 = $loggedin_uid."_".time()."_".uniqid()."_back";
          $folderPath = "uploads/table/";
          $image_parts = explode(";base64,", $bc_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file2 = $folderPath . $filename2 . '.png';
          file_put_contents($file2, $image_base64);

          //category
          $ctgy = 'Table and Chair';
          $ran_id = rand(time(), 100000000);
      
          //insert data to tb_user table
          $sql = "INSERT INTO tb_customize(cust_id, user_id, size, type, qty, price, category, note, img_front, img_back) VALUES('$ran_id', '$loggedin_uid', '$size','$t', '$qty', '$price', '$ctgy', '$n', '$file1', '$file2')";
      
          if (mysqli_query($conn, $sql)) {
              $alert = "Product Posted!";
              header("location: customized-design.php?message=$alert");
                  exit;
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

      elseif($_REQUEST["type"]=="Akasya" && $_REQUEST["size"]=="6 Seater")
        {
          $par_price= 800+5800;
          $price = $qty*$par_price;
          $filename1 = $loggedin_uid."_".time()."_".uniqid()."_front";
          $folderPath = "uploads/table/";
          $image_parts = explode(";base64,", $fr_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file1 = $folderPath . $filename1 . '.png';
          file_put_contents($file1, $image_base64);
      
          $filename2 = $loggedin_uid."_".time()."_".uniqid()."_back";
          $folderPath = "uploads/table/";
          $image_parts = explode(";base64,", $bc_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file2 = $folderPath . $filename2 . '.png';
          file_put_contents($file2, $image_base64);

          //category
          $ctgy = 'Table and Chair';
          $ran_id = rand(time(), 100000000);
      
          //insert data to tb_user table
          $sql = "INSERT INTO tb_customize(cust_id, user_id, size, type, qty, price, category, note, img_front, img_back) VALUES('$ran_id', '$loggedin_uid', '$size','$t', '$qty', '$price', '$ctgy', '$n', '$file1', '$file2')";
      
          if (mysqli_query($conn, $sql)) {
              $alert = "Product Posted!";
              header("location: customized-design.php?message=$alert");
                  exit;
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

      elseif($_REQUEST["type"]=="Akasya" && $_REQUEST["size"]=="8 Seater")
        {
          $par_price= 800+6500;
          $price = $qty*$par_price;
          $filename1 = $loggedin_uid."_".time()."_".uniqid()."_front";
          $folderPath = "uploads/table/";
          $image_parts = explode(";base64,", $fr_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file1 = $folderPath . $filename1 . '.png';
          file_put_contents($file1, $image_base64);
      
          $filename2 = $loggedin_uid."_".time()."_".uniqid()."_back";
          $folderPath = "uploads/table/";
          $image_parts = explode(";base64,", $bc_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file2 = $folderPath . $filename2 . '.png';
          file_put_contents($file2, $image_base64);

          //category
          $ctgy = 'Table and Chair';
          $ran_id = rand(time(), 100000000);
      
          //insert data to tb_user table
          $sql = "INSERT INTO tb_customize(cust_id, user_id, size, type, qty, price, category, note, img_front, img_back) VALUES('$ran_id', '$loggedin_uid', '$size','$t', '$qty', '$price', '$ctgy', '$n', '$file1', '$file2')";
      
          if (mysqli_query($conn, $sql)) {
              $alert = "Product Posted!";
              header("location: customized-design.php?message=$alert");
                  exit;
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

      elseif($_REQUEST["type"]=="Akasya" && $_REQUEST["size"]=="10 Seater")
        {
          $par_price= 800+8100;
          $price = $qty*$par_price;
          $filename1 = $loggedin_uid."_".time()."_".uniqid()."_front";
          $folderPath = "uploads/table/";
          $image_parts = explode(";base64,", $fr_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file1 = $folderPath . $filename1 . '.png';
          file_put_contents($file1, $image_base64);
      
          $filename2 = $loggedin_uid."_".time()."_".uniqid()."_back";
          $folderPath = "uploads/table/";
          $image_parts = explode(";base64,", $bc_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file2 = $folderPath . $filename2 . '.png';
          file_put_contents($file2, $image_base64);

          //category
          $ctgy = 'Table and Chair';
          $ran_id = rand(time(), 100000000);
      
          //insert data to tb_user table
          $sql = "INSERT INTO tb_customize(cust_id, user_id, size, type, qty, price, category, note, img_front, img_back) VALUES('$ran_id', '$loggedin_uid', '$size','$t', '$qty', '$price', '$ctgy', '$n', '$file1', '$file2')";
      
          if (mysqli_query($conn, $sql)) {
              $alert = "Product Posted!";
              header("location: customized-design.php?message=$alert");
                  exit;
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

        elseif($_REQUEST["type"]=="Mahogany" && $_REQUEST["size"]=="2 Seater")
        {
          $par_price= 500+3600;
          $price = $qty*$par_price;
          $filename1 = $loggedin_uid."_".time()."_".uniqid()."_front";
          $folderPath = "uploads/table/";
          $image_parts = explode(";base64,", $fr_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file1 = $folderPath . $filename1 . '.png';
          file_put_contents($file1, $image_base64);
      
          $filename2 = $loggedin_uid."_".time()."_".uniqid()."_back";
          $folderPath = "uploads/table/";
          $image_parts = explode(";base64,", $bc_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file2 = $folderPath . $filename2 . '.png';
          file_put_contents($file2, $image_base64);

          //category
          $ctgy = 'Table and Chair';
          $ran_id = rand(time(), 100000000);
      
          //insert data to tb_user table
          $sql = "INSERT INTO tb_customize(cust_id, user_id, size, type, qty, price, category, note, img_front, img_back) VALUES('$ran_id', '$loggedin_uid', '$size','$t', '$qty', '$price', '$ctgy', '$n', '$file1', '$file2')";
      
          if (mysqli_query($conn, $sql)) {
              $alert = "Product Posted!";
              header("location: customized-design.php?message=$alert");
                  exit;
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

      elseif($_REQUEST["type"]=="Mahogany" && $_REQUEST["size"]=="4 Seater")
        {
          $par_price= 500+5100;
          $price = $qty*$par_price;
          $filename1 = $loggedin_uid."_".time()."_".uniqid()."_front";
          $folderPath = "uploads/table/";
          $image_parts = explode(";base64,", $fr_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file1 = $folderPath . $filename1 . '.png';
          file_put_contents($file1, $image_base64);
      
          $filename2 = $loggedin_uid."_".time()."_".uniqid()."_back";
          $folderPath = "uploads/table/";
          $image_parts = explode(";base64,", $bc_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file2 = $folderPath . $filename2 . '.png';
          file_put_contents($file2, $image_base64);

          //category
          $ctgy = 'Table and Chair';
          $ran_id = rand(time(), 100000000);
      
          //insert data to tb_user table
          $sql = "INSERT INTO tb_customize(cust_id, user_id, size, type, qty, price, category, note, img_front, img_back) VALUES('$ran_id', '$loggedin_uid', '$size','$t', '$qty', '$price', '$ctgy', '$n', '$file1', '$file2')";
      
          if (mysqli_query($conn, $sql)) {
              $alert = "Product Posted!";
              header("location: customized-design.php?message=$alert");
                  exit;
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

      elseif($_REQUEST["type"]=="Mahogany" && $_REQUEST["size"]=="6 Seater")
        {
          $par_price= 500+5800;
          $price = $qty*$par_price;
          $filename1 = $loggedin_uid."_".time()."_".uniqid()."_front";
          $folderPath = "uploads/table/";
          $image_parts = explode(";base64,", $fr_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file1 = $folderPath . $filename1 . '.png';
          file_put_contents($file1, $image_base64);
      
          $filename2 = $loggedin_uid."_".time()."_".uniqid()."_back";
          $folderPath = "uploads/table/";
          $image_parts = explode(";base64,", $bc_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file2 = $folderPath . $filename2 . '.png';
          file_put_contents($file2, $image_base64);

          //category
          $ctgy = 'Table and Chair';
          $ran_id = rand(time(), 100000000);
      
          //insert data to tb_user table
          $sql = "INSERT INTO tb_customize(cust_id, user_id, size, type, qty, price, category, note, img_front, img_back) VALUES('$ran_id', '$loggedin_uid', '$size','$t', '$qty', '$price', '$ctgy', '$n', '$file1', '$file2')";
      
          if (mysqli_query($conn, $sql)) {
              $alert = "Product Posted!";
              header("location: customized-design.php?message=$alert");
                  exit;
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

      elseif($_REQUEST["type"]=="Mahogany" && $_REQUEST["size"]=="8 Seater")
        {
          $par_price= 500+6500;
          $price = $qty*$par_price;
          $filename1 = $loggedin_uid."_".time()."_".uniqid()."_front";
          $folderPath = "uploads/table/";
          $image_parts = explode(";base64,", $fr_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file1 = $folderPath . $filename1 . '.png';
          file_put_contents($file1, $image_base64);
      
          $filename2 = $loggedin_uid."_".time()."_".uniqid()."_back";
          $folderPath = "uploads/table/";
          $image_parts = explode(";base64,", $bc_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file2 = $folderPath . $filename2 . '.png';
          file_put_contents($file2, $image_base64);

          //category
          $ctgy = 'Table and Chair';
          $ran_id = rand(time(), 100000000);
      
          //insert data to tb_user table
          $sql = "INSERT INTO tb_customize(cust_id, user_id, size, type, qty, price, category, note, img_front, img_back) VALUES('$ran_id', '$loggedin_uid', '$size','$t', '$qty', '$price', '$ctgy', '$n', '$file1', '$file2')";
      
          if (mysqli_query($conn, $sql)) {
              $alert = "Product Posted!";
              header("location: customized-design.php?message=$alert");
                  exit;
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

      elseif($_REQUEST["type"]=="Mahogany" && $_REQUEST["size"]=="10 Seater")
        {
          $par_price= 500+8100;
          $price = $qty*$par_price;
          $filename1 = $loggedin_uid."_".time()."_".uniqid()."_front";
          $folderPath = "uploads/table/";
          $image_parts = explode(";base64,", $fr_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file1 = $folderPath . $filename1 . '.png';
          file_put_contents($file1, $image_base64);
      
          $filename2 = $loggedin_uid."_".time()."_".uniqid()."_back";
          $folderPath = "uploads/table/";
          $image_parts = explode(";base64,", $bc_img);
          $image_type_aux = explode("image/", $image_parts[0]);
          $image_type = $image_type_aux[1];
          $image_base64 = base64_decode($image_parts[1]);
          $file2 = $folderPath . $filename2 . '.png';
          file_put_contents($file2, $image_base64);

          //category
          $ctgy = 'Table and Chair';
          $ran_id = rand(time(), 100000000);
      
          //insert data to tb_user table
          $sql = "INSERT INTO tb_customize(cust_id, user_id, size, type, qty, price, category, note, img_front, img_back) VALUES('$ran_id', '$loggedin_uid', '$size','$t', '$qty', '$price', '$ctgy', '$n', '$file1', '$file2')";
      
          if (mysqli_query($conn, $sql)) {
              $alert = "Product Posted!";
              header("location: customized-design.php?message=$alert");
                  exit;
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
?>