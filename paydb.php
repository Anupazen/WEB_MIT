<?php 

$host="localhost";
$user="root";
$pass="";
$db="webmit";

$con = new mysqli($host,$user,$pass,$db);

if(!$con)
    {
        echo "There are some problem while connecting the database";
    }

$customer_id = $_POST['cid'];
$price = $_POST['ta'];
$email = $_POST['mail'];
$address = $_POST['address'];
$city = $_POST['city'];
$telephonenumber = $_POST['tnumber'];

$qry = "INSERT INTO `cart`(`customer_id`, `price`, `email`, `address`, `city`, `telephone number`)
 VALUES ($customer_id,$price,'$email','$address','$city',$telephonenumber)";

$insert = mysqli_query($con,$qry);

if(!insert)
    {
        echo "There are some problems while inserting data";
    }

    else
    {
        echo "data inserted";
    }


?>