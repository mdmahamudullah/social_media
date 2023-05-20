<?php
session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $email = $_POST['email'];
  $passwords = $_POST['passwords'];
  
  // Database connection
  require_once 'dbconn.php';
  
  // Prepare and execute the SQL query
  $sql = "SELECT * FROM profiles WHERE email = '$email' AND passwords = '$passwords'";
  $result = $conn->query($sql);

  if ($result->num_rows === 1) {
    // User found, set session variables
    $row = $result->fetch_assoc();
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['email'] = $row['email'];
    
    // Redirect to homepage.html
    header("Location: profile.php");
    exit();
  } else {
    // Invalid credentials, show error message
    header("Location: index.html");
  }

  // Close the database connection
  $conn->close();
}
?>

