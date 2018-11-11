<?php
require('auth.php');
require('db.php');

if (isset($_REQUEST['location'])) {
    $userlocation = stripslashes($_REQUEST['location']);
    $userlocation = mysqli_real_escape_string($con, $userlocation);

    $contact = stripslashes($_REQUEST['contact']);
    $contact = mysqli_real_escape_string($con, $contact);
    $userid = $_SESSION['userid'];
    // echo "user id ::" . $_SESSION['userid'];
    $ldate = $_REQUEST['ldate'];
    $ldate = $ldate . " 00:00:00";
    // echo $ldate;
    $ft = $_REQUEST['ft'];
    if ($ft == 'on') {
        $ft = 1;
    } else {
        $ft = 0;
    }
    $wtd = $_REQUEST['wtd'];
    if ($wtd == 'on') {
        $wtd = 1;
    } else {
        $wtd = 0;
    }
    // echo $ldate;
    // echo $userlocation;
    if (true) {
    // if (0) {
        $query = "UPDATE `users` SET location='$userlocation' , contact='$contact' , ldate='$ldate' , ft=$ft , wtd=$wtd where id = $userid ";
        // echo $query;
        $result = mysqli_query($con, $query);
        if ($result) {
            header("Location: homepage.php");
        }
    } else {
        echo "result:" . $result;
    }
} else {
    header("Location: adddetails.php");
}
?>