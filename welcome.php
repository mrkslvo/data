<?php
   session_start(); // Start the session
   include("loginconnect.php");

   if (!isset($_SESSION['username'])) { // Redirect if not logged in
      header("Location: loginpage.php");
      exit();
   }

   $session_username = $_SESSION['username']; // Get the username from the session

   $sql = "SELECT lastname, firstname FROM login_table WHERE username='$session_username'";
   $result = $conn->query($sql);
   
   if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $lastname = $row["lastname"];
      $firstname = $row["firstname"];
   } else {
      // Handle error if user details are not found
      $lastname = "Unknown";
      $firstname = "Unknown";
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>WELCOME</title>
   <link rel="stylesheet" href="./styles/welcome.css">
</head>
<body>
   <header>
      <h1 class="head">Welcome <?php echo $firstname  . ", " . $lastname; ?></h1>
      <button><a href="loginpage.php">Logout</a></button>
   </header>
</body>
</html>