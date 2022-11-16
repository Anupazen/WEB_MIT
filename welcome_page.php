<!DOCTYPE html>
<html lan="en">
<head>
	<title>Yasiru Traders</title>
  <link rel="stylesheet" href="CSS/slideshow.css">
  <link rel="stylesheet" href="CSS/menubar.css">
  <link rel="stylesheet" href="CSS/wcfooter.css">
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

<!-- FOOTER -->
<div class="dummy_page">
  Mobile responsive footer
</div>
<!-- FOOTER START -->
<div class="footer">
  <div class="contain">
  <div class="col">
    <h1>Company</h1>
    <ul>
      <li>About</li>
      <li>Mission</li>
      <li>Services</li>
      <li>Social</li>
      <li>Get in touch</li>
    </ul>
  </div>
  <div class="col">
    <h1>Products</h1>
    <ul>
      <li>About</li>
      <li>Mission</li>
      <li>Services</li>
      <li>Social</li>
      <li>Get in touch</li>
    </ul>
  </div>
  <div class="col">
    <h1>Accounts</h1>
    <ul>
      <li>About</li>
      <li>Mission</li>
      <li>Services</li>
      <li>Social</li>
      <li>Get in touch</li>
    </ul>
  </div>
  <div class="col">
    <h1>Resources</h1>
    <ul>
      <li>Webmail</li>
      <li>Redeem code</li>
      <li>WHOIS lookup</li>
      <li>Site map</li>
      <li>Web templates</li>
      <li>Email templates</li>
    </ul>
  </div>
  <div class="col">
    <h1>Support</h1>
    <ul>
      <li>Contact us</li>
      <li>Web chat</li>
      <li>Open ticket</li>
    </ul>
  </div>
  <div class="col social">
    <h1>Social</h1>
    <ul>
      <li><img src="https://svgshare.com/i/5fq.svg" width="32" style="width: 32px;"></li>
      <li><img src="https://svgshare.com/i/5eA.svg" width="32" style="width: 32px;"></li>
      <li><img src="https://svgshare.com/i/5f_.svg" width="32" style="width: 32px;"></li>
    </ul>
  </div>
<div class="clearfix"></div>
</div>
</div>
<!-- END OF FOOTER -->

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