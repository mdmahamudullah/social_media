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
  $randomName = generateRandomName(8); // Generate a random name for the image
  $targetFile = $targetDir . $randomName . '.jpg'; // Construct the target file path

  if (isset($_FILES['pic']) && $_FILES['pic']['error'] === UPLOAD_ERR_OK) {
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
    // Error inserting post, handle error
    // ...
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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post Message</title>
</head>
<body>
  <h1>Post Message</h1>
  <form action="" method="POST" enctype="multipart/form-data">
    <label for="pic">Upload Picture:</label>
    <input type="file" name="pic" id="pic">
    <textarea name="message" rows="5" cols="30" placeholder="Write your message here"></textarea>
    <button type="submit">Post</button>
  </form>
</body>
</html>
