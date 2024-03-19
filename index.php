<?php
   include("registerconnect.php");

   if(isset($_POST['submit'])){
      $lastname = $_POST['lastname'];
      $firstname = $_POST['firstname'];
      $age = $_POST['age'];
      $gender = $_POST['gender'];
      $username = $_POST['username'];
      $password = $_POST['password'];

      $query = " SELECT * FROM login_table WHERE username = '{$username}' OR password = '{$password}'";
      $dub = mysqli_query($conn, $query) or die("Connection Failed");
      if(mysqli_num_rows($dub) > 0){
         echo '<script>
         alert("username already taken!.");
         window.location.href = "index.php";
         </script>';
      }else{
         $query1 = " INSERT INTO login_table ( lastname, firstname, age, gender, username, password)
         VALUES ('{$firstname}', '{$lastname}', '{$age}', '{$gender}', '{$username}', '{$password}')";
         $result = mysqli_query($conn, $query1) or die("Connection Failed");
         echo '<script>
         alert("Registered!");
         window.location.href = "loginpage.php";
         </script>';
      }
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>DATABASE</title>
   <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
   <form name="form" action="index.php" method="post">
      <h1>REGISTER</h1>
      <div class="data">
         <label for="">Lastname : </label>
         <input type="text" name="lastname" id="lastname" autocomplete="off" required>
      </div>
      <div class="data">
         <label for="">Firstname : </label>
         <input type="text" name="firstname" id="firstname" autocomplete="off" required>
      </div>
      <div class="data">
         <label for="">Age : </label>
         <input type="text" name="age" id="age" autocomplete="off" required>
      </div>
      <div class="data">
         <label for="geder">Gender : </label>
         <input type="text" name="gender" id="gender" autocomplete="off" required>
      </div>
      <div class="data">
         <label for="">Username : </label>
         <input type="text" name="username" id="username" autocomplete="off" required>
      </div>
      <div class="data">
         <label for="">Password : </label>
         <input type="password" name="password" id="pass" required>
      </div>
      <div class="btns">
         <input type="submit" class="sbmt" name="submit">
         <button class="log"><a href="loginpage.php">Log in</a></button>
      </div>
   </form>
</body>
</html>