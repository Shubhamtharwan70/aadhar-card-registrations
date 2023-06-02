<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Professional Login Page</title>
 <link rel="stylesheet" href="css\login.css">
</head>
<body>
  <?php include "connection.php" ?>
<?php
error_reporting(E_ERROR | E_PARSE);
$insert = false;
if(isset($_POST['login'])) {
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "adh";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("Connection to this database failed due to" . mysqli_connect_error());
    }

    // Collect post variables
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `adh`.`login` (`email`,`password`) VALUES ('$email','$password');";
    if($con->query($sql) == true){
        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> " . $con->error;
    }

    // Close the database connection
    $con->close();
}


?>

  <!--<img src="C:\Users\DELL\OneDrive\Desktop\html\New folder\images\h.jpg">-->
  <div class="container">
    <h1>Welcome Back!</h1>
    <form method="POST">
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <button type="submit" value="login" name="login">Log In</button>
      <p class="signup-link">Don't have an account? <a href="signup.php">Sign up</a></p>
    </form>
  </div>

 
</body>
</html>