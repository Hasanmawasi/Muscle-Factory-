<?php 
session_start();
include "config.php";
if(isset($_SESSION['id'])){ 
if($_POST['id']){
    $cardid=$_POST['id'];
    $id=$_SESSION['id'];
    $sql="INSERT  into cardRegister(cardid,userid) values('$cardid','$id');";
    $result=$con->query($sql);
    if($result){
        ECHO '<script type="text/javascript" >alert("registered successfully")</script>';

    }else{
        ECHO '<script type="text/javascript" >alert("failed to add")</script>';
    
    }
}
}else{
            ECHO '<script type="text/javascript" >alert("Please login")</script>';
    
}


?>