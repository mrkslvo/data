<?php

   $servername = "localhost";
   $username = "root"; // Replace 'your_username' with your actual username
   $password = ""; // Replace 'your_password' with your actual password
   $database = "gcc";
   // Create connection
   $conn = mysqli_connect($servername, $username, $password, $database, 3306);
   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
   } else {
      echo "";
}
?>