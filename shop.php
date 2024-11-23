<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/shop.css">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Muscle Factory Store</title>
</head>
<body>

    <nav>
        <div class="navTop">
            <div class="navItem">


            <h2 class="addtobag">.SHOP</h2>
            </div>
            <div class="navItem">
                <div class="search">
                    <input type="text" placeholder="search..." class="searchInput">
                    <img src="./photos/shop-img/search.png" alt="" class="searchIcon" width="20" height="20">
                </div>
            </div>
            <div class="navItem">
                <a class="home" href="./index.php">HOME</a>
                <span class="home productButton" >bag</span>
            </div>
        </div>
        <div class="navBottom">
            <h3 class="menuItem" data-company="company1"> SUPPLEMENTS</h3>
            <h3 class="menuItem" data-company="company2"> CLOTHES</h3>
            <h3 class="menuItem" data-company="company3"> EQUIPMENTS</h3> 
           
        </div>
    </nav>

    <div class="slider">
        <div class="sliderWrapper">
            <div class="sliderItem">
                <img src="./photos/shop-img/kisspng-dietary-supplement-whey-protein-isolate-gold-stand-nutrition-5ac369a53ba6f5.4256194415227560052443.png" alt="" class="sliderImg" width="800px" height="800px">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">OUR <br> BEST <br> SELLER</h1>
                <h2 class="sliderPrice">$119</h2>
                <button class="buyButton">BUY NOW!</button>
            </div>
            <div class="sliderItem">
                <img src="./photos/shop-img/pngegg.png" alt="" class="sliderImg" width="800px" height="800px">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">OUR <br> BEST <br> SELLER</h1>
                <h2 class="sliderPrice">$119</h2>
                <button class="buyButton">BUY NOW!</button>
            </div>
            <div class="sliderItem">
                <img src="./photos/shop-img/dumble.png" alt="" class="sliderImg" width="800px" height="800px">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">OUR <br> BEST <br> SELLER</h1>
                <h2 class="sliderPrice">$119</h2>
                <button class="buyButton">BUY NOW!</button>
            </div>
        </div>
    </div>

    <div class="features">
        <div class="feature">
            <img src="./photos/shop-img/shipping.png" alt="" class="featureImg">
            <span class="featureTitle">FREE SHIPPING</span>
            <span class="featureDescription">Free worldwide shipping on all orders.</span>
        </div>
        <div class="feature">
            <img src="./photos/shop-img/return.png" alt="" class="featureImg">
            <span class="featureTitle">30 DAYS RETURN</span>
            <span class="featureDescription">No question return and easy refund in 14 days.</span>
        </div>
        <div class="feature">
            <img src="./photos/shop-img/gift.png" alt="" class="featureImg">
            <span class="featureTitle">GIFT CARDS</span>
            <span class="featureDescription">Buy gift cards and use coupon codes easily.</span>
        </div>
        <div class="feature">
            <img src="./photos/shop-img/contact.png" alt="" class="featureImg">
            <span class="featureTitle">CONTACT US</span>
            <span class="featureDescription">Keep in touch via email and support system.</span>
        </div>
    </div>
    
    
    <div class="container product">
        <div class="cards">
            <div class="ml-sm-5">
                <div id="cards-container" class="bodyCon  " id="supp">
                
                </div>
            </div>
            
        </div>
    <img src="" alt="">
    <a href="shopbag.php"></a>
   <!-- ----------------------------------------- -->
   <div class="payment">
            <h1 class="payTitle"><?php echo $_SESSION['name']; ?>'s SHOP BAG  </h1>
            
            <?php 
include "config.php";

if(isset($_GET['id'])){
    $email=$_SESSION['user'];
    $id=$_GET['id'];
    $sql="INSERT INTO shopbag(productId,useremail) values('$id','$email')";
    $result = $con->query($sql);

}

?>
    
    <table>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>price</td>
        </tr>
<?php 
if($_SESSION['user']){   
$user=$_SESSION['user'];

$sql="SELECT 
    products.id,
    products.name,
    products.price
FROM 
    shopbag
INNER JOIN 
    products 
ON 
    shopbag.productid = products.id and useremail='$user';";
$result=$con->query($sql);
if($result->num_rows >0){
    while($row=$result->fetch_assoc()){
        echo "<tr>";
        echo"<td>".$row['id']."</td>";
        echo"<td>".$row['name']."</td>";
        echo"<td class='price'>".$row['price']."</td>";
        echo "</tr>";
    }
}



?>
<tr>
    <td>total</td>
    <td id='addtotal' colspan="2">
        <script>
        let sum=0;
         let total= document.querySelectorAll(".price");
         console.log(total);
        total.forEach((e)=>{
            sum+=parseFloat(e.innerText);
            return sum;
        });
        
        document.querySelector("#addtotal").innerText=sum.toFixed(2)+"$";
        </script>
    </td>
    
</tr>
</table>
<?php }else {  ECHO '<script type="text/javascript" >window.location.href="loginsignup.php"</script>';} ?>
            <button class="payButton">Checkout!</button>
            <span class="close">X</span>
        </div>
    </div>
    </div>

    <!-- ------------------------------------ -->
    <footer class="footer">
        <div class="social-media">
            <img src="./photos/shop-img/facebook.png" alt="" class="icons">
            <img src="./photos/shop-img/twitter.png" alt="" class="icons">
            <img src="./photos/shop-img/whatsapp.png" alt="" class="icons">
            <img src="./photos/shop-img/instagram.png" alt="" class="icons">
        </div>
        <p>&copy; 2024 MUSCLE FACTORY. All rights reserved.</p>
    </footer>
    <script src="./js/shop.js"></script>
</body>
</html>