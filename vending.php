<?php
require 'vendor/autoload.php';
require 'css/css.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vending Machines</title>
    <!-- <script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpO5IzmLGBhkP6CKAlxSMDJvkESOmCw6w&callback=myMap"></script> -->
<!-- <script src="javascripts/jquery.js"></script> -->

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyD0tMC-iu9jnPrOSTjeW50doQIl-o2XgKM"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery.googlemap.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>


  </head>
  <body>
<!-- Heading NavBar -->
    <nav class="navbar navbar-inverse" style="background-color:rgb(6,80,115)">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Home</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="medicopedia.php">Medicopedia</a></li>
            <li><a href="vending.php">Vending Machines</a></li>
            <li><a href="doctor.php">Doctor's Hub</a></li>
            <li><a href="details.php">About us</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <?php
          if (isset($_SESSION['username'])) {
                                  
            echo "<li><a href='./login/index1.php'><span></span>Welcome" . " " . $_SESSION['username'] . "</a></li>";
            echo "<li><a href='./login/mongologout.php'><span class='glyphicon glyphicon-log-in'></span>Logout</a></li>";
           } else {
            echo "<li><a href='./login/index1.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
           }

           ?>
          </ul>
        </div>
      </div>
    </nav>

<!-- Side bar navigation -->
    <div class="container-fluid text-center">
      <div class="row content">
        <div class="col-sm-2 sidenav">
          <div class="thumbnail">
          <a href="medicopedia.php">
            <img src="./img/left_thumb1.jpg" alt="Encyclopedia" style="width:100%">
            <div class="caption">
              <p>Search through our medical Encyclopedia</p>
            </div>
          </a>
        </div>
        <div class="thumbnail">
        <a href="vending.php">
          <img src="./img/left_thumb2.jpg" alt="Vending Machine" style="width:100%">
          <div class="caption">
            <p>Get your medicines anywhere with just a click of button</p>
          </div>
        </a>
      </div>
      <div class="thumbnail">
      <a href="doctor.php">
        <img src="./img/left_thumb3.jpg" alt="Doctor's Hub" style="width:100%">
        <div class="caption">
          <p>Connect with the best doctors available in your area</p>
        </div>
      </a>
    </div>
        </div>
        <div class="col-sm-8 text-center">
          <h1>Vending Machines Locations</h1>

<!-- Maps API  -->

          <div id="map" style="border:2px solid black;width:100%;height:400px;box-shadow:2px 2px 5px white,-2px -2px 5px white;"></div>
          <!-- <div id="map1" style="width:100%;padding:2%;opacity:0.95;border:1px solid white;border-radius:1em;box-shadow:2px 2px 5px white,-2px -2px 5px white;></div> -->
          <!-- <iframe
    width="100%"
    height="400px"
    frameborder="0" style="border:0"
    src="https://www.google.com/maps/embed/v1/search?key=AIzaSyDpO5IzmLGBhkP6CKAlxSMDJvkESOmCw6w&q=record+stores+in+Seattle" allowfullscreen>
  </iframe> -->
          <!-- <script>
  $(function() {
    $("#map").googleMap()({
      zoom:7,
      coords: [22.4688358, 73.07623439999999],
      type:"ROADMAP"
    });
  })
</script> -->
          <script>
            $(function() {
              $("#map").googleMap({
                zoom: 7, // Initial zoom level (optional)
                coords: [22.4688358, 73.07623439999999], // Map center (optional)
                type: "ROADMAP" // Map type (optional)
              });
              // $("#map").addMarker({
              //   coords: [22.4688358, 73.07623439999999], // GPS coords
              //   url: 'http://www.tiloweb.com', // Link to redirect onclick (optional)
              //   id: 'marker1' ,// Unique ID for your marker
              // });
            })
          </script>
          <br>
    <div class="container">
  <h2 class="text-left">List of Vending Machines</h2>
  <p class="text-left">Below is the list of all Vending Machines available throughout the City.</p>            
<br>
  <table class="table table-responsive table-hover">
    <thead>
      <tr>
        <th>Location</th>
        <th>Status</th>
        <th>Medicines Available</th>  
        <th>Details</th>
      </tr>
    </thead>
    <tbody class="text-left">
      <tr>
        <td>SVIT,Vasad</td>
        <td class="success">Online</td>
        <td class="success">Yes</td>
        <td><a href="#" title="Details" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Perfect Working Condition">View Details</a></td>       
      </tr>
      <tr>
        <td>Rajupura</td>
        <td class="success">Online</td>
        <td class="danger">No</td>
        <td><a href="#" title="Details" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Medicine No. : 8(Out Of Stock)">View Details</a></td>
      </tr>
      <tr>
        <td>Vadodara Railway Station</td>
        <td class="danger">Offline</td>
        <td class="success">Yes</td>
        <td><a href="#" title="Details" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="No Electricity">View Details</a></td>
      </tr>
    </tbody>
  </table>
</div>



  </body>
</html>
