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

  </style>
</head>

<body class="homepage-body">
  <!-- Navbar -->
  <div class="navbar">
    <div class="button-group">
      <button><a href="homepage.php">Home</a></button>
      <button><a href="profile.php">Profile</a></button>
      <button><a href="index.html">Log out</a></button>
    </div>
  </div>
  <!-- profile -->

  <!-- pic post -->
  <div class="upload-container-container">
    <div class="upload-container">
      <!-- profile start -->
      <div style="display: flex; gap:150px;">
        <div>
          <h1>Profile</h1>
          <img class="profile-picture" src="<?php echo $profile_picture; ?>" alt="<?php echo $profile_picture; ?>">
        </div>
        <div style="margin-top: 50px;">
          <form action="" method="POST" enctype="multipart/form-data">
            <label for="profile_picture">Update Profile Picture:</label>
            <input type="file" name="profile_picture" id="profile_picture">
            <button type="submit">Upload</button>
          </form>
        </div>
      </div>


      <!-- profile end -->
      <!-- user information start -->

      <h2><?php echo $first_name; ?> <?php echo $last_name; ?></h2>
      <!-- <p>First Name: <?php echo $first_name; ?></p>
  <p>Last Name: <?php echo $last_name; ?></p> -->
      <p>Date of Birth&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo $date_of_birth; ?></p>
      <p>Address&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo $address; ?></p>
      <p>Mobile Number&nbsp&nbsp: 0<?php echo $mobile_number; ?></p>
      <p>Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo $email; ?></p>
      <a href="editProfile.php">Edit your profile</a>
      <!-- user information end -->

      <form action="post_photo.php" method="POST" enctype="multipart/form-data">
        <label for="pic">Add an image</label>
        <input type="file" name="pic" id="pic">
        <textarea name="message" rows="5" cols="30" placeholder="What's on your mind?"></textarea>
        <button type="submit">Post</button>
      </form>
    </div>
  </div>


  <!-- search  start -->

  <div class="style">

</div>
<div class="post-background">

</div>
  <div class="fix-width-container">
    <div class="container">
    <div class="button-container ">
          <!-- <input type="text" name="search_input" placeholder="Enter a name">
          <button type="submit"><a href="temp.php">search</a></button> -->
          <form action="search.php" method="POST" class="search-form">
            <input type="text" name="search_input" placeholder="Enter a name" required>
            <button type="submit">Search</button>
          </form>

      </div>

      <div class="search-under-space">

      </div>
      <!-- search  end -->






      <!-- Add post buttons here -->



      <!-- Add update form fields here -->



      <?php
      // Display user's posts
      while ($postRow = $postResult->fetch_assoc()) {
        $postDate = $postRow['post_date'];
        $message = $postRow['massage'];
        $pic = $postRow['pic'];
      ?>

        <div class="post-container">
          <div class="profile-name-container">
            <img src="<?php echo $row['profile_picture']; ?>" alt="Profile Image" class="profile-image">
            <p class="post-name"><?php echo $firstName; ?> <?php echo $last_name; ?></p>
          </div>


          <p class="post-message"><?php echo $message; ?></p>
          <?php if ($pic) : ?>
            <img src="<?php echo $pic; ?>" alt="Post Image" class="post-image">
          <?php endif; ?>

          <p class="post-date"><?php echo $postDate; ?></p>
        </div>
      <?php
      }
      ?>
    </div>
  </div>




  <!-- ............. -->

</body>

</html>