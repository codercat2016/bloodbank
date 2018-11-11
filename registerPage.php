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
    <title>Register</title>

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

<div style="background-color: crimson ; padding:5%; width:80%  ; flex-direction:column; justify-self: center; ">    
<!-- <p style="float:left;margin-left:27%;font-family: 'Gloria Hallelujah', cursive;font-size: 20;color: white; " >Blood|Bank.org</p> -->

<div class="container">
<a style="float:left ;text-decoration: none;" href="index.php"><p style="font-family: 'Gloria Hallelujah', cursive;font-size: 20;color: white; "><-Back</p></a>
    <form class="form-horizontal" role="form" method="POST" action="registration.php">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">
            
           <center><?php if ($_GET['logerr'] == 2) {
                        echo '<p style="float:left;margin-left:27%;font-family: "Gloria Hallelujah", cursive;font-size: 40;color: white; "> Registration Error </p>';
                    } else {
                        echo '<img style="height:20%; width:20%; right:200px;" src="resources/img/blood-type.svg" />';
                    } ?></center>
                <!-- <h3>Please Register to Blood Bank </h3> -->
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Name</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="username" class="form-control" id="name"
                               placeholder="John Doe" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">E-Mail Address</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               placeholder="you@example.com" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Password</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                        <input type="password" name="password" class="form-control" id="password"
                               placeholder="Password" required>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <!-- <span class="text-danger align-middle">
                            <i class="fa fa-close"> Example Error Message</i>
                        </span> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Confirm Password</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem">
                            <i class="fa fa-repeat"></i>
                        </div>
                        <input type="password" name="password-confirmation" class="form-control"
                               id="password-confirm" placeholder="Password" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Birth Date</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem">
                            <i class="fa fa-star"></i>
                        </div>
                        
                        <input type="date" name="bdate" class="form-control"
                               id="bdate" placeholder="00/00/00" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Last gave blood:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem">
                            <i class="fa fa-star"></i>
                        </div>
                        <input type="date" name="ldate" class="form-control"
                               id="ldate" placeholder="00/00/00" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Blood Group</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem">
                            <i class="fa fa-star"></i>
                        </div>
                        <select name="bloodgroup" class="custom-select" id="inputGroupSelect03" placeholder="BG">
    <option value=""></option>
  <option value="O+">O+</option>
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="AB+">AB+</option>
</select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5"></div>
            <div class="col-md-6">
                <button type="submit" style="margin-left:5%;" class="btn btn-success"><i class="fa fa-user-plus"></i> Register</button>
            </div>
        </div>
    </form>
</div>

</div>
<div style=" border-left: 5px solid firebrick; padding: 2%; padding-top: 10%; color: white;width:20%;  flex-direction:row;justify-self: flex-end;background-color: darkred">
<h1>Be there for someone else</h1></br>
<h2>Give blood</h2></br>
<h1 style="font-style:italic "> Share life</h1>
<img src="resources/img/smartphone-with-a-smile.svg" alt="" style="height:20%;width:60%;margin-top:30%;margin-left:10%">
</div>
</body>
