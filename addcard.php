<?php 
    include 'config.php';
    
    if(isset($_POST['registration-sub'])){
        if(empty($_POST['month']) || empty($_POST['price']) || empty($_POST['decs']) || empty($_POST['l1']) || empty($_POST['l2']) ||empty($_POST['l3']) || empty($_POST['btn'])){
            ECHO '<script type="text/javascript" >alert("fill card blank blank")</script>';
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
        }
    }    
    ?>