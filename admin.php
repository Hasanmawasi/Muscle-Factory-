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
                <a class="nav-link" aria-current="page" href="#"><span class="cred">EDIT</span></a>
                </li>
                <li class="nav-item px-3">
                <a class="nav-link " href="adminView.php"><span class="adminview.php">VIEW</span></a>
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
    

        <!-- REGISTARTION CARD INSERTION -->
        <div class="py-5"></div>
        
        
    <div class="center">
    <h1 class="title">REGISTRATIONS</h1>
    <form class="admin-form" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        <h4>REGISTARTION CARD</h4>
        <input class="form-input" type="text" name="month" placeholder="month">
        <input class="form-input" type="text" name="price" placeholder="price">
        <input class="form-input" type="text" name="desc" placeholder="desc">
        <input class="form-input" type="text" name="l1" placeholder="list1">
        <input class="form-input" type="text" name="l2" placeholder="list2">
        <input class="form-input" type="text" name="l3" placeholder="list3">
        <input class="form-input" type="text" name="btn" placeholder="btn">
        <button class="form-btn" type="submit" name="registration-sub">ADD</button>
    
    <?php 
    include 'config.php';
    
    if(isset($_POST['registration-sub'])){
        if(empty($_POST['month']) || empty($_POST['price']) || empty($_POST['desc']) || empty($_POST['l1']) || empty($_POST['l2']) ||empty($_POST['l3']) || empty($_POST['btn'])){
            ECHO '<script type="text/javascript" >alert("fill all the blank")</script>';
        }else{ 
            $month=$_POST['month'];
            $price=$_POST['price'];
            $desc=$_POST['desc'];
            $l1=$_POST['l1'];
            $l2=$_POST['l2'];
            $l3=$_POST['l3'];
            $btn=$_POST['btn'];
            $sql="INSERT INTO pcard(month,price,descr,list1,list2,list3,btn) 
            values('$month','$price','$desc','$l1','$l1','$l1','$btn');";
            $query=$con->query($sql) or die("sql error".$con->error);
            if($query){
                ECHO '<script type="text/javascript" >alert("added succesfully")</script>';
            }else{
                ECHO '<script type="text/javascript" >alert("Failed to add")</script>';

            }
        }
    }    
    ?>
    </form>
    <!-- REGISTRATION CARD DELETION -->
    
    <hr>
    <form  method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        <label for="del">choose the card to delete</label>
        <input type="number" name="delete" >
        <button type="submit" name="registration-del">delete card</button>
    </form>
    <?php
    include 'config.php';

    if(isset($_POST['registration-del'])){
        $num=$_POST['delete'];
        if($num ===''){
            ECHO '<script type="text/javascript" >alert("choose card number")</script>';
        }else{
            $sql="delete from pcard where CardID='$num';";
            $result=$con->query($sql);
            if($result){
                ECHO '<script type="text/javascript" >alert("delete successfully")</script>';
            }else{
                ECHO '<script type="text/javascript" >alert("the card number incorrect")</script>';
            }
        }
    }
    ?>
<!-- ----------------------------------------------------------------------------------------------------------------------- -->

<!-- COACHES CARDS -->

    <div class="py-5"></div>
    <h1 class="title">COACHES</h1>
    <form class="admin-form" method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
        <h4>COACHES CARD</h4>
        <input class="form-input" type="file" name="coachImage" placeholder="Image">
        <input class="form-input" type="text" name="coachName" placeholder="name">
        <input class="form-input" type="text" name="coachDesc" placeholder="desc">
        <button class="form-btn" type="submit" name="addcoach">ADD</button>
        
        <?php 
include "config.php";
        if(isset($_POST['addcoach'])){
        if(empty($_POST['coachName']) || empty($_POST['coachDesc']) ||  empty($_FILES['coachImage'])){
            ECHO '<script type="text/javascript" >alert("fill  coaches blank")</script>';
        }else{ 
        $namec=$_POST['coachName'];
       
        $desc=$_POST['coachDesc'];
       
        
        $image=$_FILES['coachImage']['name'];
            // add randome number to image name 
        $newImageName=random_int(10,1000).strtolower($image);
        $imageLoc=$_FILES['coachImage']['tmp_name'];
            // extenions of image
        $ext=pathinfo($image,PATHINFO_EXTENSION);
        $allowedExt=['jpg','gif','png','jpeg'];
            // path to where the image saved
            $targetPath="photos/coaches/".$newImageName;

        if(in_array($ext,$allowedExt)){
        if( move_uploaded_file($imageLoc,$targetPath)){
            $sql="INSERT INTO coaches(coachName,coachdesc,coachImage) 
                            values('$namec','$desc','$targetPath')";
            $result=$con->query($sql);
            if($result){
                ECHO '<script type="text/javascript" >alert("addes succesfuly")</script>';
            }else{
                ECHO '<script type="text/javascript" >alert("fialed to add")</script>';
            }

    }
        }else{
            ECHO '<script type="text/javascript" >alert("add image the file added is not image")</script>';

            }

        }

}
?>
</form>
<!-- ----------------------------------------------------------------------------------------------------------------------- -->

<!-- SHOP CARDS -->

    <div class="py-5"></div>
    <h1 class="title">SHOP</h1>
        <form class="admin-form" method="post" action="addtoshop.php" enctype="multipart/form-data">
            <h4>SHOP PRODUCTS</h4>
            <input class="form-input" type="file" name="image" placeholder="image">
            <input class="form-input" type="text" name="product-name" placeholder="name">
            <input class="form-input" type="text" name="desc" placeholder="desc">
            <input class="form-input" type="text" name="type" placeholder="company name">

            <input class="form-input" type="text" name="price" placeholder="price">
            <button class="form-btn" type="submit" name="add">ADD</button>

           
        </form>

<!-- ----------------------------------------------------------------------------------------------------------------------- -->

<!-- CLASSES CARDS -->

    <div class="py-5"></div>
    <h1 class="title">CLASSES</h1>
        <form class="admin-form" method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
            <h4>CLASSES CARDS</h4>
            <input class="form-input" type="file" name="classImage" placeholder="image">
            <input class="form-input" type="text" name="title" placeholder="name">
            <input class="form-input" type="text" name="class-desc" placeholder="desc">
            <input class="form-input" type="text" name="class-cat" placeholder="class Category">
            <button class="form-btn" type="submit" name="addclass">ADD</button>

            <?php 

include "config.php";
        if(isset($_POST['addclass'])){
        if(empty($_POST['title']) || empty($_POST['class-desc']) ||empty($_POST['class-cat']) ||  empty($_FILES['classImage'])){
            ECHO '<script type="text/javascript" >alert("fill the classes blank")</script>';
        }else{ 
        $title=$_POST['title'];
       
        $desc=$_POST['class-desc'];
       
        $category=$_POST['class-cat'];
        $image=$_FILES['classImage']['name'];
            // add randome number to image name 
        $newImageName=random_int(10,1000).strtolower($image);
        $imageLoc=$_FILES['classImage']['tmp_name'];
            // extenions of image
        $ext=pathinfo($image,PATHINFO_EXTENSION);
        $allowedExt=['jpg','gif','png','jpeg'];
            // path to where the image saved
            $targetPath="photos/classes-img/".$newImageName;

        if(in_array($ext,$allowedExt)){
        if( move_uploaded_file($imageLoc,$targetPath)){
            $sql="INSERT INTO classes(className,classDesc,classImage,classCat) 
                            values('$title','$desc','$targetPath','$category')";
            $result=$con->query($sql);
            if($result){
            ECHO '<script type="text/javascript" >alert("addes succesfuly")</script>';
            }else{
            ECHO '<script type="text/javascript" >alert("failed to add")</script>';
                
            

     }
        }

        }else{
            ECHO '<script type="text/javascript" >alert("add image the file added is not image")</script>';

            }

}}
?>
        </form>
    </div>

<!-- ----------------------------------------------------------------------------------------------------------------------- -->
<div class="center">
    <h1 class="title">Add Admins</h1>
    <form class="admin-form" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        <h4>Add Admin cards</h4>
        
        <input class="form-input" type="text" name="email" placeholder="Add Email">
        
        <button class="form-btn" type="submit" name="registration-sub">ADD</button>
    
    <?php 
    include 'config.php';
    if(!empty($_POST['email'])){
        $email=$_POST['email'];
        $sql="UPDATE signup SET role='2' WHERE email='$email'";
        $result=$con->query($sql);
        if($result){
            ECHO '<script type="text/javascript" >alert("admin added")</script>';
        }else{
            ECHO '<script type="text/javascript" >alert("failed to add")</script>';

        }
    }
   
    ?>
    </form>
<!-- FOOTER -->
    <div class="py-3"></div>
    <footer class="footer">
        <p>&copy; 2024 MUSCLE FACTORY. All rights reserved.</p>
    </footer>
</body>
</html>