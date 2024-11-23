<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<form action="upload-image.php" method="post" enctype="multipart/form-data">

<input type="file" name="image">
<button type="submit" name="sub">add</button>
<?php 
include "config.php";
if(isset($_POST['sub'])){
    $fileName=random_int(10,100).$_FILES['image']['name'];
    $ext= pathinfo($fileName,PATHINFO_EXTENSION);
    $allowedType=['jpg','gif','png','jpeg'];
    $tempName=$_FILES['image']['tmp_name'];
    $targetPath="photos/shop-img/".$fileName;

    if(in_array($ext,$allowedType)){
        if(move_uploaded_file($tempName,$targetPath)){
            $sql="INSERT INTO products(image_url) values('$targetPath')";
            if($con->query($sql)){
                echo "iserted successfully";
                }else {
                    echo "failed to insert";
                }
        }else {
            echo "failed to move";
        }
    }

}
?>

</form>


</body>
</html>