<?php
//session_start();
include"DB.php";
if(isset($_POST['uname'])&& isset($_POST['password'])){

function validate($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;

}

$uname = validate($_POST['uname']);
$pass =validate($_POST['password']); 

if (empty($uname)) {
header("Location: staff.php?error=User Name is required"); 
exit();

 }else if (empty($pass)){
  header("Location: staff.php?error=Password is required");
   exit();


}else{

$sql="SELECT* FROM employee WHERE username='$uname' AND password='$pass'";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)==1){
$row=mysqli_fetch_assoc($result);
if($row['username']==$uname && $row['password']==$pass){
    $_SESSION['username']=$row['username'];
    $_SESSION['id']=$row['id'];

    header("Location: home.php");
exit();

}else{
    header("Location:staff.php?error=Incorrect User name or password");
    exit();
}
}else{
   header("Location:staff.php?error=Incorrect User name or password");
    exit(); 
}
}
}
?>