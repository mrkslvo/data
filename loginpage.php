<?php
   include("loginconnect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Log In</title>
   <link rel="stylesheet" href="./styles/loginpage.css">
</head>
<body>
   <form name="login" action="loginpage.php" method="post">
      <h1>Log In</h1>
      <div class="inpts">
         <div class="data">
            <label for="user">Username : </label>
            <input type="text" name="username" id="user" autocomplete="off">
         </div>
         <div class="data">
            <label for="pass">Password : </label>
            <input type="password" name="password" id="pass" autocomplete="off">
         </div>
      </div>
      <div class="btns">
               <button class="register"><a href="index.php">Register</a></button>
               <input type="submit" class="sbmt" name="submit" value="Login">
      </div>
   </form>
</body>
</html>