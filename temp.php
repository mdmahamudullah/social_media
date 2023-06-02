<?php
session_start(); // Start the session

if (!isset($_SESSION['user_id'])) {
  // User is not logged in, redirect to login page
  header("Location: login.php");
  exit();
}

// Database connection
require_once 'dbconn.php';

// Retrieve user information from the database
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM profiles WHERE id = '$user_id'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
  $row = $result->fetch_assoc();
  $first_name = $row['first_name'];
  $last_name = $row['last_name'];
  $date_of_birth = $row['date_of_birth'];
  $address = $row['address'];
  $mobile_number = $row['mobile_number'];
  $email = $row['email'];
  $profile_picture = $row['profile_picture'];
} else {
  // User not found, handle error
  // ...
}

// Handle profile picture update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_FILES['profile_picture'])) {
    // Process the uploaded profile picture
    $targetDir = "profile/";
    $targetFile = $targetDir . basename($_FILES["profile_picture"]["name"]);
    move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $targetFile);

    // Update the profile picture in the database
    $sql = "UPDATE profiles SET profile_picture = '$targetFile' WHERE id = '$user_id'";
    if ($conn->query($sql) === TRUE) {
      $profile_picture = $targetFile; // Update the profile picture variable
    } else {
      // Error updating profile picture, handle error
      // ...
    }
  }
}
// Fetch user's first name from profiles table
$profileSql = "SELECT first_name FROM profiles WHERE id = '$user_id'";
$profileResult = $conn->query($profileSql);
$profileRow = $profileResult->fetch_assoc();
$firstName = $profileRow['first_name'];

// Fetch all posts of the user from posts table
$postSql = "SELECT post_date, massage, pic FROM posts WHERE user_id = '$user_id' ORDER BY id DESC";
$postResult = $conn->query($postSql);
// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="css/styles.css">
  <style>
   
    .profile-picture {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
    }
    .post-container {
      margin-bottom: 20px;
      padding-left:200px
    }

    .post-date {
      font-weight: bold;
    }

    .post-message {
      margin-bottom: 10px;
    }

    .post-image {
      max-width: 300px;
      max-height: 300px;
    }

    .post-profile-image{
      width: 25px;
    height: 25px;
    border-radius: 50%;
    object-fit: cover;
  }
  .profile-name-container{
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }
  </style>
</head>
<body>
  <!-- Navbar -->
  <div class="navbar">
    <div class="button-group">
      <button><a href="homepage.php">Home</a></button>
      <button><a href="profile.php">Profile</a></button>
      <button><a href="index.html">Log out</a></button>
    </div>
  </div>
  <!-- profile -->

  <h1>Profile</h1>
  <img class="profile-picture" src="<?php echo $profile_picture; ?>" alt="<?php echo $profile_picture; ?>">
  <form action="" method="POST" enctype="multipart/form-data">
    <label for="profile_picture">Update Profile Picture:</label>
    <input type="file" name="profile_picture" id="profile_picture">
    <button type="submit">Upload</button>
  </form>
  
  <h2>User Information</h2>
  <p>First Name: <?php echo $first_name; ?></p>
  <p>Last Name: <?php echo $last_name; ?></p>
  <p>Date of Birth: <?php echo $date_of_birth; ?></p>
  <p>Address: <?php echo $address; ?></p>
  <p>Mobile Number: <?php echo $mobile_number; ?></p>
  <p>Email: <?php echo $email; ?></p>
  <a href="editProfile.php">Edit your profile</a>
  <!-- Add post buttons here -->
  
    <button  type="submit"><a href="post.php">post</a></button>
  
  
    <button type="submit"><a href="post_photo.php">Post Photo</a></button>

    <button type="submit"><a href="search.php">search</a></button>
  
  
  <!-- Add update form fields here -->
  <h1>User Posts</h1>
  
  
  <?php
  // Display user's posts
  while ($postRow = $postResult->fetch_assoc()) {
    $postDate = $postRow['post_date'];
    $message = $postRow['massage'];
    $pic = $postRow['pic'];
  ?>
  <div class="post-container">
    <div class="profile-name-container">
      <img src="<?php echo $row['profile_picture']; ?>" alt="Profile Image" class="post-profile-image">
      <h2><?php echo $firstName; ?> <?php echo $last_name; ?></h2>
    </div>
    
    <p class="post-date"><?php echo $postDate; ?></p>
    <p class="post-message"><?php echo $message; ?></p>
    <?php if ($pic): ?>
      <img src="<?php echo $pic; ?>" alt="Post Image" class="post-image">
    <?php endif; ?>
  </div>
  <?php
  }
  ?>
</body>
</html>
 