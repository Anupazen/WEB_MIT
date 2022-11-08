<?php
	$con=new mysqli("localhost","root","","webmit");
	if($con->connect_error)
	{
		die("connection failed".$con->connect_error);
	}
	else{
        echo "Connected";	
	}
?>