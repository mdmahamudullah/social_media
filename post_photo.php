<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $message = $_POST['message'];

  // Database connection
  require_once 'dbconn.php';

  // Retrieve user ID from session
  $user_id = $_SESSION['user_id'];

  // Get the current date in the desired format
  $postDate = date('d F, Y'); // Example: 18 May, 2023

  // Handle image upload
  $targetDir = "photos/"; // Directory to store uploaded images
  $targetFile = null; // Initialize target file variable

  if (isset($_FILES['pic']) && $_FILES['pic']['error'] === UPLOAD_ERR_OK) {
    $randomName = generateRandomName(8); // Generate a random name for the image
    $targetFile = $targetDir . $randomName . '.jpg'; // Construct the target file path

    // Move the uploaded image to the target directory
    move_uploaded_file($_FILES['pic']['tmp_name'], $targetFile);
  }

  // Insert the post into the database
  $sql = "INSERT INTO posts (user_id, massage, pic, post_date) VALUES ('$user_id', '$message', '$targetFile', '$postDate')";
  if ($conn->query($sql) === TRUE) {
    // Post inserted successfully, redirect to the profile page or any other appropriate page
    header("Location: profile.php"); 
    exit();
  } else {
    header("Location: profile.php");
  }

  // Close the database connection
  $conn->close();
}

// Function to generate a random name
function generateRandomName($length) {
  $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $randomName = '';
  for ($i = 0; $i < $length; $i++) {
    $randomName .= $characters[rand(0, strlen($characters) - 1)];
  }
  return $randomName;
}
?>

