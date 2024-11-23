<?php include "config.php";
          if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $text=$_POST['text'];
            $sql="INSERT into contact(name,email,contactus) values('$name',' $email','$text');";
            $result=$con->query($sql);
            if($result){
                ECHO '<script type="text/javascript" >alert("added")</script>';
                header('location: index.php');

            }else{
                ECHO '<script type="text/javascript" >alert("failed")</script>';

            }
             }
          
          
          
          ?>