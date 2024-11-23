<?php 
session_start();
define('SALT','H#123Sdf');
$_SESSION['user'];
include "config.php";
$username=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['pass'];


if(isset($_POST['signup'])){ 
if(empty($username) || empty($email) || empty($pass)){
    ECHO '<script type="text/javascript" >alert("fill all the blank")</script>';
} else {
    if(strongPass($pass)){
    $_SESSION['user']=$username;
    
    $hashedPAss=md5(SALT.$pass);

    $sql="insert into signup(username,email,password) values('$username','$email','$hashedPAss');";
    $query=$con->query($sql);

    header("location: index.php");
    }else {
        echo '<script type="text/javascript">alert("your password is not strong!!")</script>';
        header("location: loginsignup.php");

    }
}

}




function strongPass($pass){
    $result=0;
    $uppercase=preg_match("/[A-Z]/",$pass);
    $lowercase=preg_match("/[a-z]/",$pass);
    $special=preg_match("/[^\w]/",$pass);
    $number=preg_match("/[0-9]/",$pass);

    if( $uppercase && $lowercase && $special && $number && strlen($pass) >8 ){
        $result=1;
    } else {
        $result = 0;
    }
return $result;

}
?>
