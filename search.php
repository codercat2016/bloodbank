<?php 

require('db.php');

if (1) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con, $username);
    $userlocation = stripslashes($_REQUEST['userlocation']);
    $userlocation = mysqli_real_escape_string($con, $userlocation);
    $date = $_REQUEST['date'];
    $bg = $_REQUEST['bg'];
    // if ($username != "" || $userlocation != "") {
    $query = " SELECT * FROM users WHERE (username ='$username') or (location = '$userlocation') or (bg = '$bg')  ";
    // } else {
        // $query = " SELECT * FROM users WHERE (username like '%1%') or (location like '%1%') or (bg = '$bg') ";
    // }


    echo $query; 
    //  ";
// echo $query; 
    $result = mysqli_query($con, $query);
    if ($result) {
        $array = mysqli_fetch_array($result);
        // echo $array;
        // echo $array['username'];
        // echo json_encode($array);
        // echo 'in';
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
            echo ' <tr> ';
            echo ' <th scope="row">' . $i . '</th>';
            echo '<td>' . $row['username'] . '</td>';
            echo '<td>' . $row['bg'] . '</td>';
            echo '<td>' . $row['contact'] . '</td>';
            echo '<td>' . $row['ldate'] . '</td>';
            if ($row['ft'] == 1 && $row['wtd'] == 1) {
                echo '<td>okay</td>';
            } else {
                echo '<td>not okay</td>';
            }
            echo '<td><a href="message.php?id=' . $row['id'] . '>select</a></td>';
            echo ' </tr>';
            $i++;
        }
        // echo 'no results to display';
        mysqli_close($con);
    }
} else {
    // header("Location: registrationPage.php?logerr=2");
    echo 'error';
}

?>












?>