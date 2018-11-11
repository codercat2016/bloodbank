<?php require("auth.php") ?>
<!DOCTYPE html>

<html lang='en'>
<head>
<meta charset='UTF-8'>
<title>Home</title>
<link rel="stylesheet" href="resources/css/homepage.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#search").click(function(event){
        event.preventDefault();
        // alert($('#username').val());
        var username  = $('#username').val() ;
        var userlocation  = $('#location').val() ;
        var userbg  = $('#bg').val() ;
        var userdate  = $('#date').val() ;
        $.get("./search.php",
        {
        name: username ,
        location: userlocation,
        bg: userbg,
        date: userdate 
    },
         function(data, status){
           $("tbody").html(data);
        });
    });
});
</script>
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
</head>
<body>
  
<div class="panel">
<p style="margin-left:5%;margin-top:1%;font-family: 'Gloria Hallelujah', cursive;font-size: 20;color: white; " >Blood|Bank.org</p>
<p style="margin-left:5%;margin-top:1%;font-family: 'Gloria Hallelujah', cursive;font-size: 20;color: white; " >logged in as : <?php echo $_SESSION['username']; ?></p> 
<!-- <input type="text"> -->
<div class="panel_buttons_box">
  

<div class="panel_button">
<p><a style="text-decoration: none;" href="adddetails.php">Add Details</a></p> 
</div>
<div class="panel_button">
<p id="notification" style="text-decoration: none;" href="logout.php"></p>  
</div>
<div class="panel_button">
<p><a style="text-decoration: none;" href="logout.php">LOG OUT</a></p> 
</div>
<!-- <div class="panel_button"></div>     -->
</div>
</div>
<div class="accordionbox">
<div id="accordion">
  <div class="card" style="background-color: crimson;>
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-primary" style="width:100%;background-color: crimson;" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          
        <h2 >Search For Blood<h2>
        <h1 style="font-size:40; " >+</h1>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      <div class="container" style="">
      <form action="#">
  <div class="form-row">
    <div class="col-7">
      <input type="text" id="username" name="username" class="form-control" placeholder="Name">
    </div>
    <div class="col-2">
      <input type="text"  id="location" name="location"class="form-control" placeholder="location">
    </div>
    <div class="col-1">
    <select name="bg" id="bg" class="custom-select" id="inputGroupSelect03" placeholder="BG">
    <option value=""></option>
  <option value="O+">O+</option>
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="AB+">AB+</option>
</select>
    </div>


    <div class="col-2">
      <input style="float:left;" type="date"id="date" name="date" class="form-control" placeholder="date">
    </div>
    <div class="col">
    <button type="" id="search" class="btn btn-success" style="float:right;margin-top:5px"> Search</button>
    </div>
  </div>
  
</form>
<table class="table table-hover" style="border:1px;border-style: solid;border-color: grey; margin:10px;  ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Contact</th>
      <th scope="col">Last Donation</th>
      <th scope="col">Status</th>
      <th scope="col">Notify</th>
    </tr>
  </thead>
  <tbody>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
</div>
      </div>
    </div>
  </div>
 
  
</div>   
</div>
</body>
</html>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>