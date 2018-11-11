<?php require("auth.php") ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Add info</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
<style>
label {
    color: white;
}


</style>
</head>
<body style="display:flex;">

<div style="background-color: crimson ; padding:5%; width:100%  ; flex-direction:column; justify-self: center; ">    
<!-- <p style="float:left;margin-left:27%;font-family: 'Gloria Hallelujah', cursive;font-size: 20;color: white; " >Blood|Bank.org</p> -->
<a style="text-decoration: none;" href="homepage.php"><p style="font-family: 'Gloria Hallelujah', cursive;font-size: 20;color: white; "><-Back</p></a>

<div class="container">
    <form class="form-horizontal" role="form" method="POST" action="registerdetails.php">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">
            
           <center>
                        <p style="float:left;margin-left:5%;font-family: 'Gloria Hallelujah', cursive;font-size: 20;color: white; "> |.. Please Add Remaining details to be an Active Donor ..| </p>
                   </center>
                <!-- <h3>Please Register to Blood Bank </h3> -->
                <hr>
            </div>
        </div>
        <div class="row">
        
            <div class="col-md-6" style="float:left;margin-left:27%;">
           <p style="font-family: 'Gloria Hallelujah', cursive;font-size: 20;color: white; ">Location:</p>
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="location" class="form-control" id="location"
                               placeholder="location" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        
            <div class="col-md-6" style="float:left;margin-left:27%;">
           <p style="font-family: 'Gloria Hallelujah', cursive;font-size: 20;color: white; ">Last donated on:</p>
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="date" name="ldate" class="form-control" id="ldate"
                               placeholder="ldate" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        
        <div class="col-md-6" style="float:left;margin-left:27%;">
       <p style="font-family: 'Gloria Hallelujah', cursive;font-size: 20;color: white; ">I am fit to donate:</p>
            <div class="form-group">
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon" style="width: 2.6rem"></div>
                    <input  style="height:20px;width: 20px;" type="checkbox" name="ft" class="form-control" id="location"
                           placeholder="ft"  >
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        
        <div class="col-md-6" style="float:left;margin-left:27%;">
       <p style="font-family: 'Gloria Hallelujah', cursive;font-size: 20;color: white; ">I want to donate:</p>
            <div class="form-group">
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon" style="width: 2.6rem"></div>
                    <input style="height:20px;width: 20px;" type="checkbox" name="wtd" class="form-control" id="wtd
                    "
                           placeholder="wtd"  >
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        
        <div class="col-md-6" style="float:left;margin-left:27%;">
       <p style="font-family: 'Gloria Hallelujah', cursive;font-size: 20;color: white; ">Contact Details:</p>
            <div class="form-group">
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon" style="width: 2.6rem"></div>
                    <input type="text" name="contact" class="form-control" id="location"
                           placeholder="contact" required autofocus>
                </div>
            </div>
        </div>
    </div>
        
        <div class="row">
            <div class="col-sm-5" ></div>
            <div class="col-md-6">
                <button style="margin-left:15%;" type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Change</button>
            </div>
        </div>
    </form>

</div>

</div>

</body>
