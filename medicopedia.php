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
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      


      
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
         /* Flipping Card Effect */
        
         /* Card Grid CSS */
        
         .row {
          display: flex;
          flex-wrap: wrap;
          padding: 0 2px;
        }
        
        /* Create two equal columns that sits next to each other */
        .column {
          flex: 50%;
          padding: 0 2px;
        }
        
        .column {
          margin-top: 8px;
          vertical-align: middle;
        }





      </style>
   </head>
   <body>
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
               <h1>Medicopedia</h1>
               <h3>The Complete Medicine Encyclopedia</h3>
               <br>
               <hr>

               <form action="search.php" method="POST" class="form-inline">
              <input type="text" class="form-control" placeholder="Search.." name="search" style="width:25%">
              <button type="submit" class="btn btn-success">Submit</button>
              </form>
              <br>
              <hr>
              <div class="row">
                  <div class="column">
                      <div class="w3-container">
                        <div class="w3-card-4 w3-hover-shadow w3-center" style="width:65%">
                            <header class="w3-container" style="background-color:rgb(6,80,115)">
                              <h3 style="color:white">Combiflam</h3>
                            </header>
                            <div class="w3-container">
                              <img src="./img/combiflam.jpg" alt="Avatar" class="w3-round" style="width:200px">
                              <hr>
                              <p>Used for : Fever, Cold, Headache</p>
                              <p>Contents:Paracetamol, Ibuprofen</p>
                              <p>Dosage:1 Tablet</p>
                              <p>Manufacturer:Sanofi Aventis</p>
                            </div>
                            <button class="w3-button w3-block w3-green">Buy Online</button>
                        </div>
                      </div>
                  </div>
                      <div class="column">
                        <div class="w3-container">
                           <div class="w3-card-4 w3-hover-shadow w3-center" style="width:65%">
                              <header class="w3-container" style="background-color:rgb(6,80,115)">
                                 <h3 style="color:white">Avomine</h3>
                              </header>
                              <div class="w3-container">
                                 <img src="./img/avomine.jpg" alt="Avatar" class="w3-round" style="width:200px">
                                 <hr>
                                 <p>Used for : Vomitting, Nausea, Motion Sickness</p>
                                 <p>Contents:Promethazine</p>
                                 <p>Dosage:1 Tablet</p>
                                 <p>Manufacturer:Abbott Health</p>
                              </div>
                              <button class="w3-button w3-block w3-green">Buy Online</button>
                           </div>
                        </div>
                      </div>
              </div>
          </div>
               <br>
            </div>
         </div>
      </div>
      <!-- <footer class="container-fluid text-center" style="background-color:rgb(6,80,115)">
         <p>The Complete Medical System Digitized</p>
      </footer> -->
      
   </body>
</html>