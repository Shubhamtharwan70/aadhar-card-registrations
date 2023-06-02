<?php
if(isset($_POST['login'])) {
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
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the SQL query to retrieve signup data
    $sql = "SELECT * FROM `sign_up` WHERE `email` = '$email' AND `password` = '$password'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) == 1) {
        // Signup data matched, redirect to the chat.php page
        header("Location: chat.php");
        exit();
    } else {
        echo "Invalid login credentials";
    }

    // Close the database connection
    mysqli_close($con);
}
?>
