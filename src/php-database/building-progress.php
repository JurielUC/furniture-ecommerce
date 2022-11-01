<?php
    include 'dbconnect.php';

    $trans_id=$_REQUEST['trans_id'];
    $uid=$_REQUEST['unique_id'];
    $status=$_REQUEST['status'];
    $fname=$_REQUEST['first_name'];
    $lname=$_REQUEST['last_name'];
    $ppic=$_REQUEST['myfile'];
    $done = 'DONE';
    $process = 'Processing';
    $empty="----------";

    if(isset($_REQUEST["zero"]))
        {
            $query = "UPDATE tb_progress SET zero='$done', two_five='$process', fifty='$empty', seven_five='$empty', hundred='$empty' WHERE trans_id='$trans_id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                header("location: ../sys-admin/message-page/adminMessage.php?unique_id=$uid & status=$status & first_name=$fname & last_name=$lname & myfile=$ppic");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }

    elseif(isset($_REQUEST["two_five"]))
        {
            $query = "UPDATE tb_progress SET two_five='$done', fifty='$process', seven_five='$empty', hundred='$empty' WHERE trans_id='$trans_id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                header("location: ../sys-admin/message-page/adminMessage.php?unique_id=$uid & status=$status & first_name=$fname & last_name=$lname & myfile=$ppic");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }

    elseif(isset($_REQUEST["fifty"]))
        {
            $query = "UPDATE tb_progress SET fifty='$done', seven_five='$process', hundred='$empty' WHERE trans_id='$trans_id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                header("location: ../sys-admin/message-page/adminMessage.php?unique_id=$uid & status=$status & first_name=$fname & last_name=$lname & myfile=$ppic");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }

    elseif(isset($_REQUEST["seven_five"]))
        {
            $query = "UPDATE tb_progress SET seven_five='$done', hundred='$process' WHERE trans_id='$trans_id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                header("location: ../sys-admin/message-page/adminMessage.php?unique_id=$uid & status=$status & first_name=$fname & last_name=$lname & myfile=$ppic");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }

    elseif(isset($_REQUEST["hundred"]))
        {
            $query = "UPDATE tb_progress SET hundred='$done' WHERE trans_id='$trans_id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $sql4 = mysqli_query($conn, "UPDATE tb_user SET recieved_msg = recieved_msg + 1 WHERE unique_id = '$uid'");
                header("location: ../sys-admin/message-page/adminMessage.php?unique_id=$uid & status=$status & first_name=$fname & last_name=$lname & myfile=$ppic");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }

    elseif(isset($_REQUEST["reset"]))
        {
            $query = "UPDATE tb_progress SET zero='$process', two_five='$empty', fifty='$empty', seven_five='$empty', hundred='$empty' WHERE trans_id='$trans_id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                header("location: ../sys-admin/message-page/adminMessage.php?unique_id=$uid & status=$status & first_name=$fname & last_name=$lname & myfile=$ppic");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }
?>