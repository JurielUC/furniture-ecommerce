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

    if(isset($_REQUEST["zero"]))
        {
            $query = "UPDATE tb_progress SET zero='$done', two_five='$process' WHERE trans_id='$trans_id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                header("location: ../sys-admin/message-page/adminMessage.php?unique_id=$uid & status=$status & first_name=$fname & last_name=$lname & myfile=$ppic");
                    exit;
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
              }
        }
?>