<?php
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

// Check if the form is submitted
if (isset($_POST['submit'])) {
  // Collect form data
  $full_name = $_POST['full-name'];
  $father_name = $_POST["Father's Name"];
  $mother_name = $_POST["Mother's Name"];
  $state = $_POST['State'];
  $city = $_POST['City'];
  $dob = $_POST['dob'];
  $address = $_POST['address'];

  // Prepare and execute the SQL query
  $sql = "INSERT INTO `registrations` (full_name, father_name, mother_name, state, city, dob, address) 
          VALUES ('$full_name', '$father_name', '$mother_name', '$state', '$city', '$dob', '$address')";

  if (mysqli_query($conn, $sql)) {
    echo "<p>Registration successful! Your Aadhaar Card will be processed.</p>";
    header("Location: chat.php");
    exit;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aadhaar Card Registration</title>
  <link rel="stylesheet" href="css/chat.css">
</head>
<body>

  <header>
    <h1>Aadhaar Card Registration</h1>
  </header>

  <main>
    <section id="registration-form">
      <h2>Registration Form</h2>
      <form method="POST" action="">
        <div class="form-group">
          <label for="full-name">Full Name:</label>
          <input type="text" id="full-name" name="full-name" required>
        </div>
        <div class="form-group">
          <label for="Father's Name">Father's Name:</label>
          <input type="text" id="Father's Name" name="Father's Name" required>
        </div>
        <div>
          <label for="Mother's Name">Mother's Name:</label>
          <input type="text" id="Mother's Name" name="Mother's Name" required>
        </div>
        <div>
          <label for="State">State:</label>
          <input type="text" id="State" name="State" required>
        </div>
        <div>
          <label for="City">City:</label>
          <input type="text" id="City" name="City" required>
        </div>
        <div class="form-group">
          <label for="dob">Date of Birth:</label>
          <input type="date" id="dob" name="dob" required>
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <textarea id="address" name="address" rows="3" required></textarea>
        </div>
        <button type="submit" name="submit">Submit</button>
      </form>
    </section
