<html>
<!-- <?php
// Start the session
//session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
//$_SESSION["favcolor"] = "green";
//$_SESSION["favanimal"] = "cat";
//echo "Session variables are set.";
?> -->

<?php
	require 'DB.php';
	$sql="SELECT *
		  FROM Products p";
		   
	$result=$con->query($sql);	
?>	

    <head>
    <link rel="stylesheet" href="CSS/bootstrap.css" media="screen">
    
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
                                            <button>Add To Cart</button>                                        
                                            </center>
                                        </div>
                                        </div>
                                        <br><br>
                            <?php
									}
							?>
    </body>
</html>

