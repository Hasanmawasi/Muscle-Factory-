<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php 
include "config.php";
session_start();
if(isset($_SESSION['user'])){  
if(isset($_GET['id'])){
       
    $email=$_SESSION['user'];
    $id=$_GET['id'];
    $sql="INSERT INTO shopbag(productId,useremail) values('$id','$email')";
    $result = $con->query($sql);

}  

?>
    <h1>shopbag of <?php echo $_SESSION['name']; ?></h1>
    <table border='2px' width="50%">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>price</td>
        </tr>
<?php 
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
<?php }else{
    
} ?>
</body>
</html>
