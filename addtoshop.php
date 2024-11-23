<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="card-form"  method="post" action="addtoshop.php" enctype="multipart/form-data">
        <p>product name <input type="text" name="product-name"></p>
        <p>price <input type="text" name="price"></p>
        <p>desc <input type="text" name="desc"></p>
        <p>type <input type="text" name="type"></p>
        <p>image <input type="file" name="image"></p>
        <button type="submit" name="add">addd </button>
</form> -->
        <?php
        include "config.php";
        if(isset($_POST['add'])){
        if(empty($_POST['product-name']) || empty($_POST['price']) || empty($_POST['desc']) || empty($_POST['type']) || empty($_FILES['image'])){
            ECHO '<script type="text/javascript" >alert("fill   shop  blank")</script>';
        }else{ 
        $product=$_POST['product-name'];
        $price=$_POST['price'];
        $desc=$_POST['desc'];
        $type=$_POST['type'];
        
        $image=$_FILES['image']['name'];
            // add randome number to image name 
        $newImageName=random_int(10,1000).strtolower($image);
        $imageLoc=$_FILES['image']['tmp_name'];
            // extenions of image
        $ext=pathinfo($image,PATHINFO_EXTENSION);
        $allowedExt=['jpg','gif','png','jpeg'];
            // path to where the image saved
            $targetPath="photos/shop-img/".$newImageName;

        if(in_array($ext,$allowedExt)){
           if( move_uploaded_file($imageLoc,$targetPath)){
            $sql="INSERT INTO products(name,description,price,image_url,company) 
                            values('$product','$desc',' $price','$targetPath','$type')";
            $result=$con->query($sql);
            if($result){
                ECHO '<script type="text/javascript" >alert("added successfully")</script>';
                echo '<script type="text/javascript">window.location.href = "admin.php";
                        
                </script>';

            }else{
                ECHO '<script type="text/javascript" >alert("failed to add")</script>';
                echo '<script type="text/javascript">window.location.href = "admin.php";
                        
                </script>';

            }

           }
        }else{
            ECHO '<script type="text/javascript" >alert("add image the file added is not image")</script>';

            }




        }

         }
        


?>

<!-- =========================== -->


<!-- </body>
</html> -->