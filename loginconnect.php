<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $db_name = "gcc";

   $conn = new mysqli($servername, $username, $password, $db_name, 3306);
   if ($conn->connect_error) {
      die("Connection Failed" . $conn->connect_error);
   }

   if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      
      // Using prepared statements to prevent SQL injection
      $stmt = $conn->prepare("SELECT * FROM login_table WHERE username = ? AND password = ?");
      $stmt->bind_param("ss", $username, $password);
      $stmt->execute();
      $result = $stmt->get_result();

      $count = $result->num_rows;
      if ($count == 1) {
         session_start();
         $_SESSION['username'] = $username; // Store the username in the session
         header("Location: welcome.php");
         exit();
      } else {
            echo '<script>
            alert("Login Failed. Invalid username or password");
            window.location.href = "loginpage.php";
            </script>';
         exit();
      }
   }
?>
