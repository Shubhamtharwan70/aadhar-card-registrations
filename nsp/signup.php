<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Professional Signup Page</title>
  <link rel="stylesheet" href="css/stylesignup.css">
</head>
<body>
<?php
if(isset($_POST['signup'])) {
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "adh";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password, $database);

    // Check for connection success
    if(!$con){
        die("Connection to the database failed due to: " . mysqli_connect_error());
    }

    // Collect post variables
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];

    // Prepare and execute the SQL query
    $sql = "INSERT INTO `sign_up` (`fullName`, `email`, `phoneNumber`, `password`) VALUES ('$fullName', '$email', '$phoneNumber', '$password')";

    if(mysqli_query($con, $sql)) {
        echo "Sign-up successful!";
        // Redirect to the login page
        header("Location: loginpage.php");
        exit(); // Make sure to exit after redirection
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
}
?>


  <div class="container">
    <h1>Create an Account</h1>
    <form id="signup-form" method="POST">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="fullName" placeholder="Enter your full name" required>
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
      </div>
      <div class="form-group">
        <label for="phoneNumber">Phone number</label>
        <input type="text" id="phoneNumber" name="phoneNumber" maxlength="10" placeholder="Enter your phone number" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter a password" required>
      </div>
      <button type="submit" name="signup">Sign Up</button>
      <p class="login-link">Already have an account? <a href="loginpage.php">Log in</a></p>
    </form>
  </div>

  
</body>
</html>
