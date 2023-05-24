

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Random Posts</title>
  <link rel="stylesheet" href="css/styles.css">
  <style>
    /* Add your CSS styles here */


    .container {
      max-width: 1000px;
      margin: 0 auto;
      padding: 20px;
    }

    .post-container {
      background-color: #0891b2;
      padding: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      border-radius: 5px;
    }
    .profile-name-container {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }
    .profile-image {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
      margin-right: 10px;
    }
    .post-name {
      font-weight: bold;
      margin: 0;
    }
    .post-date {
      font-weight: bold;
      margin: 0;
      color: #777777;
      text-align:right;
    }
    .post-message {
      margin-bottom: 10px;
    }
    .post-image {
      max-width: 100%;
      max-height: 300px;
      object-fit: cover;
    }
    
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
  <div class="fix-width-container"> 
  <div class="container">
      <div class="button-container ">
          <!-- <input type="text" name="search_input" placeholder="Enter a name">
          <button type="submit"><a href="temp.php">search</a></button> -->
          <form action="search.php" method="POST">
    <input type="text" name="search_input" placeholder="Enter a name" required>
    <button type="submit">Search</button>
    </form>

      </div>

    <!-- Random Posts -->
   

    <?php
      // Database connection
      require_once 'dbconn.php';

      // Fetch 20 random posts from the database
      $randomPostsSql = "SELECT p.first_name, p.last_name, p.profile_picture, po.post_date, po.massage, po.pic
                         FROM posts po
                         JOIN profiles p ON p.id = po.user_id
                         ORDER BY RAND()
                         LIMIT 20";
      $randomPostsResult = $conn->query($randomPostsSql);

      while ($postRow = $randomPostsResult->fetch_assoc()) {
        $profile_picture = $postRow['profile_picture'];
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
        
        <p class="post-message"><?php echo $message; ?></p>
        <?php if ($pic): ?>
          <img src="<?php echo $pic; ?>" alt="Post Image" class="post-image">
        <?php endif; ?>
        <p class="post-date"><?php echo $postDate; ?></p>
      </div>
    <?php
      }

      // Close the database connection
      $conn->close();
    ?>
  </div>
  </div>
</body>
</html>
