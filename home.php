<?php
session_start();
if(isset($_SESSION['id'])&& ($_SESSION['username'])){


?>
<!DOCTYPE html>
<html>
 <head>
<title>Home</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <style >
  body{



}  
   
</style>
 <body>

<h1>Welcome,<?php echo $_SESSION['username'];?>!!<h1><br><br><br><br>

<form action='update.php' class="form1">
            <button >Update Your Profile</button>
        </form>
</body>
</html>

<?php

}else{

header("Location:staff.php");
exit();
}

?>