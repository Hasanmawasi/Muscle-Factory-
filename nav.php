<?php 
     echo' 
        <nav class="navbar navbar-expand-lg navbar-light bg-body-tranparent fixed-top ">
          <div class="container">
            <a class="navbar-brand" href="#">
              <img src="photos/dumblelogo.png" alt="Logo" style="width: 100px; height: 40px;"> 
            </a>
            <a class="navbar-brand " href="#"><span class="cred">Muscle Factory</span></a>
            <button
              class="navbar-toggler  bg-light"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav "
              aria-expanded="false"
              aria-label="Toggle navigation ">
              <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
              <ul class="navbar-nav  ">
                <li class="nav-item px-3">
                  <a class="nav-link active cred" aria-current="page" href="#"><span class="cred">Home</span></a>
                </li>
                <li class="nav-item px-3">
                  <a class="nav-link " href="#footer"><span class="">About US</span></a>
                </li>
                <li class="nav-item px-3">
                  <a class="nav-link" href="classes.php">Classes</a>
                </li>
                <li class="nav-item px-3">
                  <a  class="nav-link" href="shop.php">Shop</a>
                </li>
                <li class="nav-item px-3">
                  <a class="nav-link" href="#" data-open>Contact Us</a>
                </li>
                <li class="nav-item px-3">';
                 include "config.php";
                if(isset($_SESSION['user'])){
                 echo' <a class="nav-link loginbt" href="logout.php"  >logout</a>';
                  
                }else{
              echo ' <a class="nav-link loginbt" href="loginSignup.php"  >login</a>';
                }
              echo '  </li>
                <li class="nav-item px-3">';
                      include "config.php";
                      if(isset($_SESSION['user'])){  
                      $user=$_SESSION['user'];
                      $sql = "select role from signup where email = '$user'";
                      $result=$con->query($sql);
                      if($result-> num_rows >0){
                        while($row= $result->fetch_assoc())
                        if($row['role'] == 2){
                          echo'<a id="admin" class="nav-link loginbt" href="admin.php" >Admin</a>';
                        }else{
                          echo '';
                        }
                      }}
              echo'  </li>
              </ul>
            </div>
          </div>
        </nav>';
        ?>