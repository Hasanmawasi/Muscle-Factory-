
<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- <link rel="stylesheet" href="./css/bmi.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <title>Gym Website</title>
    <link rel="stylesheet" href="./css/style.css" />
    <!-- <script src="https://kit.fontawesome.com/3b161c540c.js" crossorigin="anonymous"></script> -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body>
    <?php include "nav.php"; ?>
    <div class="container-fluid p-0 ">
      <div
        id="carouselExampleSlidesOnly"
        class="carousel slide"
        data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="photos/anastase-maragos-4dlhin0ghOk-unsplash.jpg"
              class="d-block w-100"
              alt="..."/>
          </div>
          <div class="carousel-item">
            <img
              src="photos/anastase-maragos-9dzWZQWZMdE-unsplash.jpg"
              class="d-block w-100"
              alt="..."/>
          </div>
         
        </div>
      </div>


      <div class="join position-absolute top-0 mt-5 p-5  border-bottom border-end border-danger">
        <h1  >Muscle Factory</h1>
        <h2>
          "Transform your body, transform your life."
        </h2>
    
      </div >
       
    </div>
<!-- ----------------about---------------------- -->

<!-- page 2 -->
<section class="about-section py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Gym Details -->
      <div class="col-md-6">
        
        <h2 id="about">About Our Gym </h2>
        <p class="text-white about-gym">Welcome to <span class="text-black"> Muscle Factory</span>, where fitness meets community. Our modern facilities, expert trainers, and diverse classes cater to all fitness levels. Join us and experience the motivation and support you need to achieve your goals.</p>
        <button  id="contbtn" class="btn btn-light btn-lg btnContactUs" data-open>Contact Us</button>
        <!-- dialog -->
        <dialog id="modal" class="bg-black">
          <form class="form" action="contact.php" method="post">
            <input class="input" type="text" name="name" placeholder="Name">
            <input class="input" type="text" name="email" placeholder="E-Mail I.D.">
            <textarea class="textarea" name="text" placeholder="Enter message"></textarea> 
            <center><button type="submit" name="submit" class="button" data-close>Submit</button></center>
        </form>
        
        </dialog>



      </div>
      <!-- Gym Photo -->
      <div class="col-md-6">
        <img src="photos/pexels-dreamlensproduction-896058.jpg" class="img-fluid" alt="Gym Photo">
      </div>
    </div>
  </div>
</section>
<!-- ------------------ coaches ------------------- -->
<!-- <div class="p-3"> -->
  <h2 class="text-center p-1 " style="color: red; background-color: white;padding: 5px;" >Our Professional Coaches</h2>

 <section class="coaches">
<div class="container coachesCont my-5 p-3">
  <div class="card ">
    <img class="background imgc" src="./photos/coaches/c58b7aea-67ff-48af-8276-5ce021110f28.jpg" alt="coaches">

    <div class="card-content">
      

      <h3 class="title text-white">coach 1</h3>
    </div>
 
  </div>

  <div class="card ">
    <img class="background imgc" src="./photos/coaches/Build Your Back And Biceps The Smart Way.jpg" alt="">

    <div class="card-content">
     

      <h3 class="title text-white">coach 2</h3>
    </div>
   
  </div>

  <div class="card ">
    <img class="background imgc" src="./photos/coaches/Bylt Basics Fitness Shoot.jpg" alt="">

    <div class="card-content">
        
        <h3 class="title text-white">coach</h3>
        <p class="pcard">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quam voluptas repellendus, incidunt, mollitia voluptatem laborum sit ipsum suscipit dolores fuga! Praesentium vel similique porro earum impedit velit eveniet ex!</p>
    </div>
   
  </div>

  <div class="card">
    <img class="background imgc" src="./photos/coaches/ASRV Men's Gym Outfit.jpg" alt="">

    <div class="card-content">
      

      <h3 class="title text-white">coach</h3>
    </div>
    
  </div>

  <div class="card">
    <img class="background imgc" src="./photos/coaches/Boxing and Kickboxing Coach.jpg" alt="">

    <div class="card-content">
      

      <h3 class="title text-white">coach</h3>
    </div>
    
  </div>
</div></section>
<!-- ------------Prices------------------- -->

<h1 class="h1-prices ">
  Regular Membership Subscription
</h1>

<div class="container   prices-cards py-5">
  
  <div class="row ">  
    <div class="col-lg-4 col-md-6">
      <div class="cardp">
        <div class="headerp">
          <span class="titlep">1 MONTH</span>
          <span class="pricep">30 $</span>
        </div>
        <p class="descp">Etiam ac convallis enim, eget euismod dolor.</p>
        <ul class="listsp">
          <li class="listp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <span>Aenean quis</span>
          </li>
          <li class="listp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <span>Morbi semper</span>
          </li>
          <li class="listp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <span>Tristique enim nec</span>
          </li>
        </ul>
        <button type="buttonp" class="action">Get Started</button>
      </div>
    </div>

    <div class="col-lg-4 col-md-6">
      <div class="cardp">
        <div class="headerp">
          <span class="titlep">2 MONTHS</span>
          <span class="pricep">55 $</span>
        </div>
        <p class="descp">Etiam ac convallis enim, eget euismod dolor.</p>
        <ul class="listsp">
          <li class="listp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <span>Aenean quis</span>
          </li>
          <li class="listp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <span>Morbi semper</span>
</li>
          <li class="listp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <span>Tristique enim nec</span>
          </li>
        </ul>
        <button type="buttonp" class="action">Get Started</button>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 ">
      <div class="cardp">
        <div class="headerp">
          <span class="titlep">4 MONTHS</span>
          <span class="pricep">100 $</span>
        </div>
        <p class="descp">Etiam ac convallis enim, eget euismod dolor.</p>
        <ul class="listsp">
          <li class="listp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <span>Aenean quis</span>
          </li>
          <li class="listp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <span>Morbi semper</span>
          </li>
          <li class="listp">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <span>Tristique enim nec</span>
          </li>
        </ul>
        <button type="buttonp" class="action">Get Started</button>
      </div>
    </div>
  
  <!-- addd cardss -->
  <?php
   include "config.php";
$sql ="select * from pcard;";
$result=$con->query($sql) or die("error adding".$con->error);

if($result->num_rows >0){
  while($row = $result->fetch_assoc()){
   echo '<div class="col-lg-4 col-md-6">';
   echo '<div class="cardp">'; 
     echo'<div class="headerp">';
     echo'<span class="titlep">'.$row['month'].'</span>';
      echo'<span class="pricep">'.$row['price'].'</span>';
     echo"</div>" ;
     echo '<p class="descp">'.$row['descr'].'</p>
      <ul class="listsp">
        <li class="listp">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
          </svg>';
         echo' <span>'.$row['list1'].'</span>';
       echo' </li>
        <li class="listp">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
          </svg>';
      echo'    <span>'.$row['list2'].'</span>
        </li>';
      echo'  <li class="listp">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
          </svg>';
         echo' <span>'.$row['list3'].'</span>
        </li>
      </ul>';
      echo '<button type="buttonp" class="action" onclick="register('.($row['CardID']).')"">'.$row['btn'].'</button>
    </div>
  </div>';
 
  }
}
?>
</div>
<!-- ----------------------------- -->
</div>
</div>

<!-- bmi ------------------------------------------------------------------------------------------->
<!-- bmi ------------------------------------------------------------------------------------------->

<div class="container bmi-container">
    <div class="bmi-desc">
      <div class="desc-item">
        <img src="./photos/bmi.png" alt="bmi image" class="bmi-img">
      </div>

      <div class="desc-item">
        <h1 class="bmi-h1">BMI CALCULATOR</h1>

        <P class= "bmi-p">Use our BMI (Body Mass Index) Calculator to determine whether you're in a healthy weight range for your height. BMI is a useful tool to assess if you are underweight, normal 
            weight, overweight, or obese. Here's how it works:</P>
            <ol>
                <li class="bmi-li">Enter your weight and height: Provide your weight
                    in kilograms (kg) and height in meters (m).</li>
                <li class="bmi-li">Calculate your BMI: Click the calculate button to get 
                    your BMI value.</li>
            </ol>
        <h2 class="bmi-h2">BMI Ranges and Health States</h2>
        <ul>
            <li class="bmi-li">Underweight (BMI < 18.5): This range suggests that you may need to gain weight for better health</li>
            <li class="bmi-li">Normal weight (BMI 18.5 - 24.9): This range indicates a healthy weight.</li>
            <li class="bmi-li">Overweight (BMI 25 - 29.9): This range suggests that you may need to lose weight for better health.</li>
            <li class="bmi-li">Obesity (BMI ≥ 30): This range indicates a higher risk of health issues related to obesity.</li>
        </ul>
      </div>
    </div>

    <div class="calculator">
        <h1>BMI Calculator</h1>
        <select  id="gender">
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <div class="inputs-container">
        <input class="choose" type="text" id="name" placeholder="Name" required>
        
        
        <input class="choose" type="number" id="age" placeholder="Age (years)" required>
        <input class="choose" type="number" id="weight" placeholder="Weight (kg)" required>
        <input class="choose" type="number" id="height" placeholder="Height (cm)" required>
        <button id="calculate" class="choose btn" onclick="calculateBMI()">Calculate BMI</button>
        </div>
    </div>
  
    <div class="payment">
            <h1 class="payTitle"><?php echo $_SESSION['name']; ?>'s RESULTS</h1>
            <table  id="resultsTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Weight (kg)</th>
                    <th>Height (cm)</th>
                    <th>BMI</th>
                    <th>Category</th>
                    <!-- <th>Ranges</th> -->
                </tr>
            </thead>
            <tbody>
                <!-- Results will be inserted here -->
            </tbody>
        </table>

            <button onclick="downloadCSV()" class="payButton">Download!</button>
            <span class="close">X</span>
        </div>
    </div>


    
    </div>


  
<!-- cap ---------------------------------------------------------------------------------->



<!-- -------------------------footer ----------------------------------------------------------------------------------->
<div class="p-5" id="footer"></div>
<h2 class="container cap">Don't miss the chance to be one of our trainees!</h2>
<footer class="footer ">
  <div class="container row  ">
      <div class="footer-col col-md-3 ">
          <h4>company</h4>
          <ul>
              <li><a href="#">about us</a></li>
              <li><a href="#">our services</a></li>
              <li><a href="#">privacy policy</a></li>
              <li><a href="#">visit website</a></li>
          </ul>
      </div>
      <div class="footer-col col-md-3">
          <h4>get help</h4>
          <ul>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">shipping</a></li>
              <li><a href="#">returns</a></li>
              <li><a href="#">order status</a></li>
              <li><a href="#">payment options</a></li>
          </ul>
      </div>
      <div class="footer-col col-md-3">
          <h4>online shop</h4>
          <ul>
              <li><a href="#">download</a></li>
              <li><a href="#">changelog</a></li>
              <li><a href="#">github</a></li>
              <li><a href="#">all version</a></li>
          </ul>
      </div>
      <div class="footer-col col-md-3">
          <h4>follow us</h4>
          <div class="social-links">
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
          </div>
      </div>
  </div>
</footer>

  <!-- ---------------------------------- -->

    <script src="./js/main.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
    
  </body>
</html>



