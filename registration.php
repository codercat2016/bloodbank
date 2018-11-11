<?php
require('db.php');
if (isset($_REQUEST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con, $username);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $bdate = $_REQUEST['bdate'];
    $ldate = $_REQUEST['ldate'];
    $bg = $_REQUEST['bloodgroup'];
    $query = "INSERT into `users` (username, password, email,bdate,ldate,bg)
VALUES ('$username', '" . md5($password) . "', '$email', '$bdate','$ldate','$bg')";
    $result = mysqli_query($con, $query);
    if ($result) {
        mysqli_close($con);
        header("Location: index.php");

    }
} else {
    header("Location: registrationPage.php?logerr=2");
}
?>