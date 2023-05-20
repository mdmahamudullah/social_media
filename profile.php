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

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <style>
    .profile-picture {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
    }
  </style>
</head>
<body>
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
  
  <!-- Add update form fields here -->
</body>
</html>
