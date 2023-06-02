<?php
session_start(); // Start the session

if (!isset($_SESSION['user_id'])) {
  // User is not logged in, redirect to login page
  header("Location: login.php");
  exit();
}

// Database connection
require_once 'dbconn.php';

// Handle search query
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $searchInput = $_POST['search_input'];
  
  // Divide the user input into words
  $keywords = explode(' ', $searchInput);
  
  // Build the SQL query
  $query = "SELECT p.first_name, p.last_name, p.profile_picture, po.post_date, po.massage, po.pic
            FROM profiles p
            JOIN posts po ON p.id = po.user_id
            WHERE ";
  
  $conditions = [];
  foreach ($keywords as $keyword) {
    $conditions[] = "(p.first_name LIKE '%$keyword%' OR p.last_name LIKE '%$keyword%')";
  }
  
  $query .= implode(' AND ', $conditions);
  $query .= " ORDER BY po.id DESC";
  
  // Perform the search query
  $searchResult = $conn->query($query);
  
  // Close the database connection
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search</title>
  <link rel="stylesheet" href="css/styles.css">
  <style>


  </style>
</head>
<body>
<body class="homepage-body">
  <!-- Navbar -->
  <div class="navbar">
    <div class="button-group">
      <button><a href="homepage.php">Home</a></button>
      <button><a href="profile.php">Profile</a></button>
      <button><a href="index.html">Log out</a></button>
    </div>
  </div>
   <!-- pic post -->
   <div class="upload-container-container">
      <div class="upload-container">
    <form action="post_photo.php" method="POST" enctype="multipart/form-data">
      <label for="pic">Add an image</label>
      <input type="file" name="pic" id="pic">
      <textarea name="message" rows="5" cols="30" placeholder="What's on your mind?"></textarea>
      <button type="submit">Post</button>
    </form>
  </div>
  </div>

<!--search Buttons -->
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

 <!-- search -->
  
  <?php if (isset($searchResult) && $searchResult->num_rows > 0): ?>
    <h2>Search Results</h2>
    
    <?php while ($row = $searchResult->fetch_assoc()): ?>
      <div class="post-container">
      <div class="profile-name-container">
          <img src="<?php echo $row['profile_picture']; ?>" alt="Profile Image" class="profile-image">
          <p class="post-name"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></p>
        </div>
        <p class="post-message"><?php echo $row['massage']; ?></p>
        <?php if (!empty($row['pic'])): ?>
          <img src="<?php echo $row['pic']; ?>" alt="Post Image" class="post-image">
        <?php endif; ?>
        <p class="post-date"><?php echo $row['post_date']; ?></p>
      </div>
    <?php endwhile; ?>
  
  <?php elseif (isset($searchResult) && $searchResult->num_rows === 0): ?>
    <p>No results found.</p>
  
  <?php endif; ?>
</body>
</html>
