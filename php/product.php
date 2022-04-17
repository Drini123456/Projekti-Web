<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="../Css/style.css" type="text/css">
<link rel="stylesheet" href="../Css/slider.css" type="text/css">
  <?php
  include("../html/header.html");
  include("server.php");
ini_set('error_reporting', 0);
ini_set('display_errors', 0);

  ?>
<style>
    h2{
        text-align:center;
    }
    .text{
        font-family:Verdana;
        font-size: 15px;
        font-weight:normal;
        text-decoration:none;
    }
    </style>
<h2>Welcome user <?php echo $_SESSION["username"] ?></h2>
<div class="section">
<?php
 include("dbconnection.php");
$ret=mysqli_query($con,"select * from produktet");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>
 <div class ="box">

  <a href=#><img src="Image/<?php  echo $row['Image'];?>" width="300" height="400"></a>
     <div class="text">
         <p><?php  echo $row['Name'];?></p>
         <p><?php  echo $row['Quantity'];?> $ </p>
     </div>
 </div>
 <?php 
$cnt=$cnt+1;
} } else {?>
<tr>
    <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
</tr>
<?php } ?>                 
           
</div>
<h3><a href="logout.php">Logout</a></h3>
<?php
include("../html/footer.html");
?>
</body>
