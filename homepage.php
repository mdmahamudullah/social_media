<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Random Posts</title>
  <style>
    /* Add your CSS styles here */
    .post-container {
      margin-bottom: 20px;
    }
    .post-name {
      font-weight: bold;
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

    .profile-image {
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

    .navbar {
      background-color: #f1f1f1;
      overflow: hidden;
      position: fixed;
      top: 0;
      width: 100%;
    }
    .navbar a {
      float: left;
      display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }
    .navbar a:hover {
      background-color: #ddd;
    }
    .button-group {
      margin-top: 50px;
      display: flex;
      justify-content: center;
    }
    .button-group button {
      margin-right: 10px;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <div class="navbar">
    <a href="homepage.php">Home</a>
    <a href="profile.php">Profile</a>
  </div>

  <!-- Buttons -->
  <div class="button-group">
    <button onclick="window.location.href='post.php'">Post</button>
    <button onclick="window.location.href='post_photo.php'">Image</button>
    <button onclick="window.location.href='search.php'">Search</button>
  </div>

  <!-- Random Posts -->
  <h1>Random Posts</h1>

  <?php
    // Database connection
    require_once 'dbconn.php';

    // Fetch 20 random posts from the database
    $randomPostsSql = "SELECT p.first_name, p.last_name, p.profile_picture, po.post_date, po.massage, po.pic
                       FROM posts po
                       JOIN profiles p ON p.id = po.user_id
                       ORDER BY RAND()
                       LIMIT 50";
    $randomPostsResult = $conn->query($randomPostsSql);

    while ($postRow = $randomPostsResult->fetch_assoc()) {
      $profile_picture=$postRow['profile_picture'];
      $firstName = $postRow['first_name'];
      $lastName = $postRow['last_name'];
      $postDate = $postRow['post_date'];
      $message = $postRow['massage'];
      $pic = $postRow['pic'];
  ?>
    <div class="post-container">
      <div class="profile-name-container">
       <img src="<?php echo $profile_picture; ?>" alt="profile_picture" class="profile-image">
       <p class="post-name"><?php echo $firstName . ' ' . $lastName; ?></p>
      </div>
      <p class="post-date"><?php echo $postDate; ?></p>
      <p class="post-message"><?php echo $message; ?></p>
      <?php if ($pic): ?>
        <img src="<?php echo $pic; ?>" alt="Post Image" class="post-image">
      <?php endif; ?>
    </div>
  <?php
    }

    // Close the database connection
    $conn->close();
  ?>
</body>
</html>
