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
       $(document).ready(function(){
           // $("#wrapper1").smoothWheel()
           $('.collapse').on('show.bs.collapse', function () {
 var groupId = $('#expander').attr('data-group-id');
 if (groupId) {
   $('#grandparentIcon').html('Details');
 }
});

$('.collapse').on('hide.bs.collapse', function () {
 var groupId = $('#expander').attr('data-group-id');
 if (groupId) {
   $('#' + groupId + 'Icon').html('Details');
 }
});

            // $("#cover123").slideDown("1000");
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
        <h1>Nutritionist Opinions</h1>
        <!-- <h3>The Complete Medical Encyclopedia</h3> -->
        <br>
        <hr>
        <p class="text-left"><b>Nutrition</b>
          is the science that interprets the interaction of nutrients and other substances in food in relation to maintenance, growth, reproduction, health and disease of an organism. It includes food intake, absorption, assimilation, biosynthesis, catabolism, and excretion.
        </p>
        <p class="text-left">The diet of an organism is what it eats, which is largely determined by the availability and palatability of foods. For humans, a healthy diet includes preparation of food and storage methods that preserve nutrients from oxidation, heat or leaching, and that reduce risk of foodborne illness.</p>
        <p class="text-left"> Nutrition, nourishment, or aliment, is the supply of materials - food - required by organisms and cells to stay alive. In science and human medicine, nutrition is the science or practice of consuming and utilizing foods.</p>
        <h3 class="text-left">Fast facts on nutrition</h3>
        <div class="text-left">
        <ul>
          <li>The human body requires seven major types of nutrients.</li>
          <br>
          <li>Not all nutrients provide energy but are still important, such as water and fiber.</li>
          <br>
          <li>Micronutrients are important but required in smaller amounts.</li>
          <br>
          <li>Micronutrients are important but required in smaller amounts.</li>
          <br>
        </ul>
        <h3>What is nutrition?</h3>
        <br>
        <img src="./img/nutrition.jpg" id="nutrition" alt="Nutrition1" class="img-responsive">
        <br>
        <p>As molecular biology, biochemistry, and genetics advance, nutrition has become more focused on metabolism and metabolic pathways - biochemical steps through which substances inside us are transformed from one form to another.
          <br>
          <br>
          Nutrition also focuses on how diseases, conditions, and problems can be prevented or reduced with a healthy diet.
          <br>
          <br>
          Similarly, nutrition involves identifying how certain diseases and conditions may be caused by dietary factors, such as poor diet (malnutrition), food allergies, and food intolerances.
      </p>
      <br>
      <br>
      <h3>Understanding Nutrition Terms and Types</h3>
      <p>A nutrient is a source of nourishment, a component of food, for instance, protein, carbohydrate, fat, vitamin, mineral, fiber, and water.</p>
      <br>
      <ul>
        <li>
          <h4>Energy Macronutrients</h4>
        </li>
        <p>Energy macronutrients provide energy, which is measured either in kilocalories (kcal or calories) or Joules. 1 kilocalorie (calorie) = 4185.8 joules. Energy macronutrients include:</p>
      
          <ul>
            <li>
                <h4>Carbohydrates</h4>
                <p>Carbohydrate molecules include monosaccharides (glucose, fructose, galactose), disaccharides, and polysaccharides (starch).</p>
                <br>
                <p>Nutritionally, polysaccharides are favored over monosaccharides because they are more complex and therefore take longer to break down and be absorbed into the bloodstream; this means that they do not cause major spikes in blood sugar levels, which are linked to heart and vascular diseases.</p>
            </li>
            <li>
                <h4>Proteins</h4>
                <p>There are 20 amino acids - organic compounds found in nature that combine to form proteins. Some amino acids are essential, meaning they need to be consumed. Other amino acids are non-essential because the body can make them.</p>
                <br>
            </li>
            <li>
                <h4>Fats</h4>
                <p>Fats are triglycerides - three molecules of fatty acid combined with a molecule of the alcohol glycerol. Fatty acids are simple compounds (monomers) while triglycerides are complex molecules (polymers).</p>
                <br>
                <p>Fats are required in the diet for health as they serve many functions, including lubricating joints, helping organs produce hormones, assisting in absorption of certain vitamins, reducing inflammation, and preserving brain health.</p>
            </li>
          </ul>
      <br>

      <li>
        <h4>Non-Energy Macronutrients</h4>
      </li>
      <p>These macronutrients do not provide energy, but are still important:</p>
      <ul>
        <li>
          <h4>Fiber</h4>
        </li>
        <p>Fiber consists mostly of carbohydrates. However, because it is not easily absorbed by the body, not much of the sugars and starches get into the blood stream. Fiber is a crucial part of nutrition, health, and fuel for gut bacteria.</p>

        <li>
           <h4>Water</h4>
        </li>
        <p>About 70 percent of the non-fat mass of the human body is water. It is vital for many processes in the human body.</p>
        <p>Nobody is completely sure how much water the human body needs - claims vary from 1-7 liters per day to avoid dehydration. We do know that water requirements are very closely linked to body size, age, environmental temperatures, physical activity, different states of health, and dietary habits; for instance, somebody who consumes a lot of salt will require more water than another similar person.</p>      
      </ul>

      <br>
      <li>
        <h4>Micronutrients</h4>
      </li>
      <p>Micronutrients are required in smaller quantities:</p>

      <ul>
        <li>
           <h4>Minerals</h4>
        </li>
        <p>Minerals are found in a range of food types.
          Dietary minerals are the other chemical elements our bodies need, other than carbon, hydrogen, oxygen, and nitrogen.
          People with a well-balanced diet will, in most cases, obtain all the minerals they need from what they eat.
        </p>
        <p>
          Minerals are sometimes added to certain foods to make up for any shortages.
          The best example of this is iodized salt - iodine is added to prevent iodine deficiency, which affects about 2 billion people, globally; it causes mental retardation and thyroid gland problems. Iodine deficiency remains a serious public health problem in over half the planet.
        </p>

      
      </ul>


      </ul>








      </div>

        </div>






          <br>
      </div>
   </div>
 </div>
 <footer class="container-fluid text-center" style="background-color:rgb(6,80,115)">
    <p>The Complete Medical System Digitized</p>
 </footer>
            <!-- </div> -->
</body>
</html>
