<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="../Css/style.css" type="text/css">
<link rel="stylesheet" href="../Css/slider.css" type="text/css">
  <?php
  include("../html/header.html");
  ?>




</div>

<div class="slideshow-container">
  <div class="mySlides">
      <img src="../images/1.png" alt="" width="100%">
  </div>
  <div class="mySlides">
      <img src="../images/img-3.jpg" alt="" width="100%">
  </div>

</div>


<script>
  var slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
  }
  </script>
<style>
    .text{
        font-family:Verdana;
        font-size: 15px;
        font-weight:normal;
        text-decoration:none;
    }
    </style>

</div>
<br>
</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
</div>

</div>



<div class="section">
 <div class ="box">
  <a href=../php/blackhoodie.php><img src="../images/Vintage.webp" alt="" width="300" height="400"></a>
     <div class="text">
         <p>White Hoodie</p>
         <p>90 $ </p>
     </div>
 </div>
 <div class ="box">
  <a href=../php/bluehoodie.php> <img src="../images/img06.webp" alt="" width="300" height="400"></a>
     <div class="text">
         <p>Resident Hoodie</p>
         <p>90 $</p>
     </div>
 </div>
 <div class ="box">
  <a href=../php/casualblack.php> <img src="../images/PieceZipperHoodie.webp" alt="" width="300" height="400"></a>
  <div class="text">
      <p>Piece Zipper Hoodie</p>
      <p>90 $</p>
     </div>
 </div>
 <div class ="box">
  <a href=../php/starwars.php> <img src="../images/EncoreHoodie.webp" alt="" width="300" height="400"></a>
    <div class="text">
      <p>Encore Hoodie </p>
      <p>90 $</p>
     </div>
 </div>
 <div class ="box">
  <a href=../html/whitehoodie.html><img src="../images/LDHoodie.webp" alt="" width="300" height="400"></a>
  <div class="text">
      <p>Blue UA Hoodie</p>
      <p>50.00$</p>
     </div>
 </div>
 <div class ="box" >
  <a href=../html/santa.html><img src="../images/BallierTrackPants.webp" alt="" width="300" height="400"></a>
  <div class="text">
      <p>Ballier Track Pants </p>
      <p>99.99$</p>
     </div>

    </div>
    
 <div class ="box">

  <a href=../html/polo.html><img src="../images/DiegoBeigeSweatpants.webp" alt="" width="300" height="400"></a>
  <div class="text">
      <p>DiegoBeigeSweatpants </p>
      <p>85$</p>
     </div>
 </div>
 <div class ="box">
  <a href=../html/chshirt.html> <img src="../images/DiegoBlueSweatpants.webp" alt="" width="300" height="400"></a>
  <div class="text">
      <p>Diego BlueSweat pants</p>
      <p>80.00$</p>
     </div>
 </div>
 <div class ="box">
  <a href=../html/sweatshirt.html><img src="../images/DiegoSweatpants.webp" alt="" width="300" height="400"></a>
  <div class="text">
      <p>Diego Sweat pants</p>
      <p>100.00$</p>
     </div>
 </div>
 <div class ="box">
  <a href=../html/bluejacket.html><img src="../images/LensSweatpants.webp" alt="" width="300" height="400"></a>
  <div class="text">
      <p>LensSweatpants</p>
      <p>64.99$</p>
     </div>
 </div>
 <div class ="box">
  <a href=../html/jacket.html><img src="../images/ThomasClassicSuede.webp" alt="" width="300" height="400"></a>
  <div class="text">
      <p>Thomas Classic Suede</p>
      <p>70.00$</p>
     </div>
 </div>
 <div class ="box">
  <a href=../html/fashion.html><img src="../images/ThomasClassic.webp" alt="" width="300" height="400"></a>
  <div class="text">
      <p>Thomas Classic</p>
      <p>99.99$</p>
     </div>
 </div>
 <div class ="box">
  <a href=../html/nikelow.html><img src="../images/img16.jpg" alt="" width="300" height="400"></a>
  <div class="text">
      <p>Nike Air Force 1 Low</p>
      <p>140.00$</p>
     </div>
 </div>
 <div class ="box">
  <a href=../html/nikeaf1.html><img src="../images/img17.jpg" alt="" width="300" height="400"></a>
  <div class="text">
      <p>Nike AF1 x Valentine Day</p>
      <p>140$</p>
     </div>
 </div>
 <div class ="box">
  <a href=../html/airjordan.html><img src="../images/img17.png" alt="" width="300" height="400"></a>
  <div class="text">
      <p>Air Jordan 4 retro</p>
      <p>300$</p>
     </div>
 </div>
</div>
<?php
include("../html/footer.html");
?>





</body>
