<!DOCTYPE html>
<html>
 <head>
<title>staff</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 
 </head>
 <body>


<form action="staffLogin.php" method="POST">
  <h2>LOGIN</h2>
  <?php if (isset($_GET['error'])){?>
    <p class="error"><?php echo $_GET['error'];?></p>
    <?php }?> 
  <label>User Name</label>
  <input type="text" name="uname" placeholder="User Name">
  <label>Password</label>
  <input type="password" name="password" placeholder="Password">
  <button type="submit">Login</button>
  <button>Reset</button>
</form>
</body>
</html>