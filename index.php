<?php
   session_start();
   require 'vendor/autoload.php';
   require 'css/css.php';
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Medico</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="./js/jquery.smoothwheel.js"></script>
      <script>
        // document.getElementById("page").style.display = "none";
        var myVar;

        function myFunction() {
            myVar = setTimeout(showPage, 4000);
        }

        function showPage() {
          document.getElementById("loader").style.display = "none";
          document.getElementById("page").style.display = "block";
        }
      </script>
      <script>
         $(document).ready(function(){
             // $("#wrapper1").smoothWheel()
             //  $("#loader").show().delay(5000).fadeOut();;
         
               $("#cover123").fadeIn(7000);
              //  $("#cover123").slideDown("7000");
         });
         
      </script>
      <style>
         /* Remove the navbar's default margin-bottom and rounded borders */
         /* #wrapper1{
         overflow:auto;
         -webkit-overflow-scrolling: touch;
         position:relative;
         } */
         .navbar {
         margin-bottom: 0;
         border-radius: 5px;
         }
         /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
         .row.content {height: 450px}
         /* Set gray background color and 100% height */
         .sidenav {
         padding-top: 20px;
         background-color: #f1f1f1;
         height: 100%;
         }
         /* Set black background color, white text and some padding */
         footer {
         background-color: #555;
         color: white;
         padding: 15px;
         }
         /* On small screens, set height to 'auto' for sidenav and grid */
         @media screen and (max-width: 767px) {
         .sidenav {
         height: auto;
         padding: 15px;
         }
         .row.content {height:auto;}
         }
         #loader {
         /* position: absolute; */
         margin: 0 auto;
         width:300px;
         height:300px;
         margin-top:10%;
         /* max-width:50%;
         max-height:50%; */
         /* vertical-align:middle; */
         background: url('./img/giphy2.gif') no-repeat center center;
         background-size:250px;
         }
      </style>
   </head>
   <body onload="myFunction()">
      <!-- <div id="wrapper1"> -->

      <div id="loader"> 
         
      </div>
      <div id="page" style="display:none">
         <div id="mydiv">
            <img src="./img/cover2.jpg" id="cover123" alt="Cover Image" class="img-responsive" style="display:none">
         </div>
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
                     <li><a href="nutrition.php">Nutrition</a></li>
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
                  <h1>Medico</h1>
                  <h3>The Complete Medical Solutions</h3>
                  <br>
                  <img src="./img/main_img1.jpg" class="img-rounded img-responsive" alt="Main Image">
                  <hr>
                  <div class="text-left">
                     <p style="font-size:200%">The Medico System focuses on the complete digitalization of the Medical Solutions.Thus,
                        it provides a ton of resources to use for all users with extremely easy to use interface.
                     </p>
                  </div>
                  <br>
               </div>
            </div>
         </div>
         <footer class="container-fluid text-center" style="background-color:rgb(6,80,115)">
            <p>The Complete Medical System Digitized</p>
         </footer>
      </div>
      <!-- </div> -->
   </body>
</html>