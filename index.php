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
    <title>Login</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
</head>
<body style="display:flex;">
<div style="background-color: crimson ; padding:5%; width:80%  ; flex-direction:column; justify-self: center; ">    
<div class="container">
    <form class="form-horizontal" role="form" method="POST" action="login.php">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">
           <center> <img style="height:25%; width:25%; right:200px;" src="resources/img/blood-type.svg" /></center>
                <!-- <h3>Please Register to Blood Bank </h3> -->
                <hr>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-md-3 field-label-responsive">
                <label for="email">Email</label>
            </div> -->
            <div class="col-md-3 field-label-responsive"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="email" class="form-control" id="email"
                               placeholder="you@example.com" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <?php if ($_GET['logerr'] == 1) {
                            echo '   
                        <span class="text-danger align-middle">
                            <i class="fa fa-close" style="color:white;"> Wrong Username OR</i>
                        </span> ';
                        }
                        ?>
                        
                </div>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-md-3 field-label-responsive">
                <label for="password">Password</label>
            </div> -->
            <div class="col-md-3 field-label-responsive"></div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></i></div>
                        <input type="password" name="password" class="form-control" id="password"
                               placeholder="Password" required>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <?php if ($_GET['logerr'] == 1) {
                            echo '   
                        <span class="text-danger align-middle">
                            <i class="fa fa-close" style="color:white;"> Wrong Password</i>
                        </span> ';
                        }
                        ?>
                        
                </div>
            </div>
        </div>
        <div class="row">
        
                <p style=" margin-left:34%;color: white; font-size:20 ">Login to your Blood|bank profile</p>
               
                <button type="submit" class="btn btn-success" style="margin-left:2%; border: none; background-color:deepskyblue;font-weight: bold; "> Log In</button>
                
        </div>
      <div style="float: left; margin-left:45%" > <p style="color: white; float:left; "> Click here to</p> <a style="margin-left: 3px; float:left;color:blue;font-style:italic;" href='registerPage.php'>Register</a> </div>
    </form>
   
</div>
<p style="margin-left:27%;font-family: 'Gloria Hallelujah', cursive;font-size: 70;color: white; " >Blood|Bank.org</p>
</div>
<div style=" border-left: 5px solid firebrick; padding: 2%; padding-top: 10%; color: white; height: 100%;width:20%;  flex-direction:row;justify-self: flex-end;background-color: darkred">
<h1>Be there for someone else</h1></br>
<h2>Give blood</h2></br>
<h1 style="font-style:italic "> Share life</h1>
<img src="resources/img/smartphone-with-a-smile.svg" alt="" style="height:20%;width:60%;margin-top:30%;margin-left:10%">
</div>

</body>