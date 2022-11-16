<!DOCTYPE html>
<html lan="en">
<head>
	<title>Yasiru Traders</title>
  <link rel="stylesheet" href="CSS/slideshow.css">
  <link rel="stylesheet" href="CSS/menubar.css">
<style>


</style>
</head>
<body>
	<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">Goods</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="#login">Log-in</a></li>
  <li><a href="#signup">Sign-up</a></li>
	</ul><hr>

	<img src="Images/yasiru logo.jpg" style="width: 200px;height: 100px;"><br><br>

<div class="mySlides fade">
  <img src="Images/wc 1.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="Images/wc 2.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="Images/wc 3.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="Images/wc 4.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="Images/wc 5.png" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>



</body>
</html>