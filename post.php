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

  // Insert the post into the database
  $sql = "INSERT INTO posts (user_id, massage, post_date) VALUES ('$user_id', '$message', '$postDate')";
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
  <form action="" method="POST">
    <textarea name="message" rows="5" cols="30" placeholder="Write your message here"></textarea>
    <button type="submit">Post</button>
  </form>
</body>
</html>
