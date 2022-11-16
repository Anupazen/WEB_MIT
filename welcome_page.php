<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM Products WHERE PID='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["PID"]=>array('name'=>$productByCode[0]["Name"], 'code'=>$productByCode[0]["PID"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["Price"], 'image'=>$productByCode[0]["img"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["PID"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["PID"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
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
  <li><a href="login.php">Log-in</a></li>
  <li><a href="signup.php">Sign-up</a></li>
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
      <li><img src="Images/fb.png" width="32" style="width: 32px;"></li>
      <li><img src="Images/insta.jpeg" width="32" style="width: 32px;"></li>
      <li><img src="Images/gmail.png" width="32" style="width: 32px;"></li>
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