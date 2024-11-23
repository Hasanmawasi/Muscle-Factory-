<?php
session_start();
include "config.php";
define('SALT','H#123Sdf');
$email=$_POST['emailg'];
$pass=$_POST['passg'];
if(isset($_POST['login'])){ 
    if(empty($email) || empty($pass)){
        ECHO '<script type="text/javascript" >alert("fill all the blank")</script>';
    } else {

        $sql1="SELECT password,username, ID,email,role from signup where email='$email';";
        $result=$con->query($sql1)  or die("error in getting pass".$con->error);
        $row=$result->fetch_assoc();
            if($row['email'] === $email){  

                   

                if($row) { 
                        //sesion assignment
                    $_SESSION['user']=$row['email'];
                    $_SESSION['name']=$row['username'];
                    $_SESSION['id']=$row['ID'];
                    $hashedPass=$row['password'];

                    }
                    $pass=md5(SALT.$pass);
                    
                    }    
                    if($pass === $hashedPass){
                     
                        if($row['role'] == 2){
                            // header('location: index.php');
                            
                            echo '<script type="text/javascript">
                            window.location.href = "index.php";                              
                                
                            </script>';
                        
                    }else {
                        echo '<script type="text/javascript">window.location.href = "index.php";
                        
                        </script>';
                                    
                }
                }else{
                    echo '<script type="text/javascript">
                    alert("Incorrect password. Please try again.");
                    window.location.href = "loginsignup.php";
                    </script>';
                }
    }
    
    }

    



?>

