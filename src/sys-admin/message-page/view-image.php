<!--session link-->
<?php include '../../php-database/admin-session.php'; ?>

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
    <link rel="stylesheet" href="../../sys-user/customization-page/userCustomization.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <?php
        $id=$_GET['id'];
        $uid=$_GET['unique_id'];
        $status=$_GET['status'];
        $fname=$_GET['first_name'];
        $lname=$_GET['last_name'];
        $ppic=$_GET['myfile'];

        $query = "SELECT * FROM tb_customize WHERE cust_id = '$id'";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result))
        {
    ?>
        <div class="image-cont">
            <button title="Exit" onclick="window.location.href='adminMessage-inquiries.php?unique_id=<?php echo $uid; ?> & status=<?php echo $status; ?> & first_name=<?php echo $fname; ?> & last_name=<?php echo $lname; ?> & myfile=<?php echo $ppic; ?>'"><p>x</p></button>
            <div class="front">
                <img src="../../sys-user/customization-page/<?php echo $row['img_front'] ?>" alt="">
            </div>
            <div class="back">
                <img src="../../sys-user/customization-page/<?php echo $row['img_back'] ?>" alt="">
            </div>
        </div>
    <?php
        }
    ?>
</body>
</html>