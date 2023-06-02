<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      padding: 20px;
    }

    .profile {
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 20px;
      margin-bottom: 20px;
    }

    .profile h2 {
      margin-top: 0;
    }

    .profile p {
      margin: 5px 0;
    }
  </style>
</head>
<body>
  <?php
  session_start();

  // Check if the user is logged in
  if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    // Database configuration
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "adh";

    // Create a database connection
    $conn = mysqli_connect($host, $username, $password, $database);

    // Check for connection errors
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $userId = $_SESSION['userId'];

    // Retrieve user data from the database
    $sql = "SELECT * FROM registrations WHERE user_id = '$userId'";
    $result = mysqli_query($conn, $sql);

    // Check if user data exists
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      echo "<div class='profile'>";
      echo "<h2>User Profile</h2>";
      echo "<p><strong>Full Name:</strong> " . $row['full_name'] . "</p>";
      echo "<p><strong>Father's Name:</strong> " . $row['father_name'] . "</p>";
      echo "<p><strong>Mother's Name:</strong> " . $row['mother_name'] . "</p>";
      echo "<p><strong>State:</strong> " . $row['state'] . "</p>";
      echo "<p><strong>City:</strong> " . $row['city'] . "</p>";
      echo "<p><strong>Date of Birth:</strong> " . $row['dob'] . "</p>";
      echo "<p><strong>Address:</strong> " . $row['address'] . "</p>";
      echo "</div>";
    } else {
      // Redirect to the registration page if user data doesn't exist
      header("Location: registration.php");
      exit;
    }

    // Close the database connection
    mysqli_close($conn);
  } else {
    // Redirect to the registration page if user is not logged in
    header("Location: loginpage.php");
    exit;
  }
  ?>
</body>
</html>
