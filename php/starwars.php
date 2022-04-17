<!DOCTYPE html>
<html>

<body>
  <link rel="stylesheet" href="../css/slider.css">
  <div class="header">
    <a href="index.php" class="logo">ONLINE SHOP - DG</a>
    <div class="header-right">
      
      <a href="index.php">Home</a> 
      <a href="account.php">Account</a></li>

     
      <a href="about.php">About</a> 
     
       <a href="Kontakti.php">Contact</a>
      
    </div>
  </div>

<div style="padding-left:20px">



</div>

<link rel="stylesheet" href="../css/bhoodie.css">

<?php
$conn = mysqli_connect("localhost","root","","db");
$query = mysqli_query($conn,"SELECT * FROM produkte WHERE id=18");
while($row=mysqli_fetch_array($query))
{
  ?>
<div class = "boxi">
  <div class = "foto">
    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['picture']).'"width="100%" height="500px"/>'; ?>
    </div>
 

  <div class ="text">
   <h2><?php echo $row['name']; ?></h2>
   <hr>
   <h2>- Condition new -</h2>
   <hr>
  <div class = "text2">
    <h2>Price : <?php echo $row['price']; ?>$</h2>
    <hr>
    <h2 class="size">Size:<select class="select">
     <option value="Choose a size">Choose a size</option>
   <option value="S">S</option>
   <option value="M">M</option>
   <option value="L">L</option> 
   <option value="XL">XL</option>
   <option value="XXL">XXL</option>
   </select>

  </div>
  </div>
  <div style=" margin-left:75%;">
    <a href="../html/billing.html">
    <input type="button" value="Buy now" class="button1"> </a>
   </div> 
    </div>
<?php
}
?>
  <div class="footer2">
    <div class = "contact">
      <h1>Follow us on : Facebook  & Twitter & Instagram</h1>
    </div>
     <br>
  
     <div class="images">
        <a href="https://www.facebook.com/drin.mehmeti.79" target ="_blank">
          <img src="../images/facebook1.png" alt="" width="100px"; height="100px">
        </a>
        <a href="https://www.twitter.com/GranitDemirii" target ="_blank">
          <img src="../images/twitter1.png" alt="" width="90px"; height="90px">
        </a>
        <a href="https://www.instagram.com/granitdemiri" target ="_blank">
          <img src="../images/instagram1.png" alt="" width="100px"; height="100px"> 
        </a>
       </div>
   </div>
  
   
  </div>
  
  
  
  </div>
  </body>
  