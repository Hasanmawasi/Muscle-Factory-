<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/admin.css">
    <title>Admin</title>
</head>
<body>
        <!-- nav-bar -->
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
                <a class="nav-link" href="admin.php"><span class="cred">EDIT</span></a>
                </li>
                <li class="nav-item px-3">
                <a class="nav-link " href="adminView.php"><span class="">VIEW</span></a>
                </li>
                <li class="nav-item px-3">
                <a id="admin" class="nav-link loginbt admin" href="admin.php" >ADMIN</a>
                </li>
                <li class="nav-item px-3">
                <a id="admin" class="nav-link loginbt admin" href="index.php" >HOME</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

        <!-- ------------------------------------------------------------------------ -->
    <div class="center">
        <!-- CONTACT US -->
        <div class="py-5"></div>
        <h1 class="title">CONTACT US RESPONSES</h1>
        <table class>
            <tr>
                <th>USERNAME</th>
                <th>EMAIL</th>
                <th>MESSAGES</th>
            </tr>
            <?php 
            include "config.php";
            $sql="SELECT * from contact";
           $result= $con->query($sql) ;           
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['contactus']."</td>";
                    echo "</tr>";
                }
            }
            ?>


        </table>
    </div>
<!-- ======================================= -->
<div class="center">
        <!-- CONTACT US -->
        <div class="py-5"></div>
        <h1 class="title">Regitered Card</h1>
        <table class>
            <tr>
                <th>USERId</th>
                <th>class Id</th>
                
            </tr>
            <?php 
            include "config.php";
            $sql="SELECT * from cardregister";
           $result= $con->query($sql) ;           
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row['cardid']."</td>";
                    echo "<td>".$row['userid']."</td>";
                    // echo "<td>".$row['pcard.month']."</td>";

         
                    echo "</tr>";
                }
            }
            ?>


        </table>
    </div>

<!-- ==================================== -->
<div class="center">
        <!-- CONTACT US -->
        <div class="py-5"></div>
        <h1 class="title">Regitered Members</h1>
        <table class>
            <tr>
                <th>USERname</th>
                <th>email</th>
                
            </tr>
            <?php 
            include "config.php";
            $sql="SELECT * from signup";
           $result= $con->query($sql) ;           
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row['username']."</td>";
                    echo "<td>".$row['email']."</td>";
                   
          echo "</tr>";
                }
            }
            ?>


        </table>
    </div>
</body>
</html>