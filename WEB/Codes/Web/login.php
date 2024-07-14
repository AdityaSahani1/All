<?php
$servername = "localhost";
$username = "your_database_username";
$password = "your_database_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  $sql = "SELECT id FROM users WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    // Login success
    // Start the session and set session variables
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    // Redirect to user dashboard or home page
    header("location: welcome.php");
  } else {
    // Login failed
    echo "Invalid username or password.";
  }
}

$conn->close();
?>
