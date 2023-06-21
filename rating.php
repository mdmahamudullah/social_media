<?php
session_start(); // Start the session

if (!isset($_SESSION['user_id'])) {
  // User is not logged in, redirect to login page
  header("Location: login.php");
  exit();
}

// Database connection
require_once 'dbconn.php';

// Retrieve the rating from the POST data
$rating = $_POST['rating'];
$post_id = $_POST['post_id'];

// Get the user ID from the session
$user_id = $_SESSION['user_id'];

// Check if the user has already rated the post
$checkSql = "SELECT * FROM ratings WHERE user_id = '$user_id' AND post_id = '$post_id'";
$checkResult = $conn->query($checkSql);

if ($checkResult->num_rows > 0) {
  // User has already rated the post, update the rating
  $row = $checkResult->fetch_assoc();
  $existingRating = $row['rate'];
  
  if ($rating == $existingRating) {
    // User clicked the rating button again, subtract the rating
    $newRating = -$rating;
  } else {
    // User clicked a different rating button, update the rating
    $newRating = $rating;
  }

  $updateSql = "UPDATE ratings SET rate = rate + $newRating WHERE user_id = '$user_id' AND post_id = '$post_id'";
  if ($conn->query($updateSql) === TRUE) {
    echo "Rating successfully updated in the database";
    header("Location: homepage.php");
    // Rating successfully updated in the database
    // ...
  } else {
    echo "Error updating rating: " . $conn->error;
    // Error updating rating, handle error
    // ...
  }
} else {
  // User has not rated the post, insert the rating
  $insertSql = "INSERT INTO ratings (user_id, post_id, rate) VALUES ('$user_id', '$post_id', '$rating')";
  if ($conn->query($insertSql) === TRUE) {
    echo "Rating successfully stored in the database";
    header("Location: homepage.php");
    // Rating successfully stored in the database
    // ...
  } else {
    echo "Error storing rating: " . $conn->error;
    // Error storing rating, handle error
    // ...
  }
}

// Close the database connection
$conn->close();
?>
