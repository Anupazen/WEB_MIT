<html>

<?php
	require 'DB.php';
	$sql="SELECT *
		  FROM Products p";
		   
	$result=$con->query($sql);	
?>	

    <head>
    <link rel="stylesheet" href="CSS/bootstrap.css" media="screen">
    <link rel="stylesheet" href="CSS/Products.css">
    </head>
    <body>
                            <?php
									while($rows=$result->fetch_assoc())
									{	
							?>                                             
                                        <div class="card" style="width: 18rem; margin-left:30px">
                                        
                                        <img class="card-img-top" src=<?php echo $rows["img"] ?> alt="Card image cap">
                                        <div class="card-body">
                                            <center>
                                            <h5 class="card-title"><?php echo $rows["Name"] ?></h5>
                                            <p class="card-text"><?php echo $rows["Size"] ?> / Unit</p>
                                            <p style="color:green" class="card-text">Rs. <?php echo $rows["Price"] ?>/=</p>

                                            <div class="cont">
   <div class="crtdiv">
      <span class="qty">
      <span class="dec">
      <i class="fa fa-minus-square" aria-hidden="true"></i>
      </span>
      <span class="num">
      1
      </span>
      <span class="inc">
      <i class="fa fa-plus-square" aria-hidden="true"></i>
      </span>
      </span>
      <button id="btn" type="button" class="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart</button>
   </div>
</div>
                                            
                                            </center>
                                        </div>
                                        </div>
                                        <br><br>

                                     <script>
                                        $(document).ready(function() {
    $('#btn').click(function() {
        $('#btn').toggleClass("cart_clk");

    });
    $("#btn").one("click", function() {
        $('.cart .fa').attr('data-before', '1');
    });

    var prnum = $('.num').text();
    $('.inc').click(function() {
        if (prnum > 0) {
            prnum++;
            $('.num').text(prnum);
            $('.cart .fa').attr('data-before', prnum);
        }

    });
    $('.dec').click(function() {
        if (prnum > 1) {
            prnum--;
            $('.num').text(prnum);
            $('.cart .fa').attr('data-before', prnum);
        }

    });

});
                                     </script>   
                            <?php
									}
							?>
    </body>
</html>

