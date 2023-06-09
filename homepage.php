<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home|SobujPoth</title>
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://kit.fontawesome.com/c69a874bba.js" crossorigin="anonymous"></script>

  <style>
    /* Add your CSS styles here */
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
    <div class="upload-container update-width">
      <form action="post_photo.php" method="POST" enctype="multipart/form-data">
        <label for="pic">Add an image</label>
        <input type="file" name="pic" id="pic">
        <textarea name="message" rows="5" cols="30" placeholder="What's on your mind?"></textarea>
        <button type="submit">Post</button>
      </form>
      <img src="../social_media/design-photo/bg12.jpg" alt="no"style=" width: 100%;margin-top:550px;">
    </div>
  </div>

  <!--search Buttons -->
  <div class="style"></div>
  <div class="post-background"></div>
  <div class="fix-width-container"> 
    <div class="container">
      <div class="button-container ">
        <form action="search.php" method="POST" class="search-form">
          <input type="text" name="search_input" placeholder="Enter a name" required>
          <button type="submit">Search</button>
        </form>
      </div>

      <div class="search-under-space"></div>

      <!-- Random Posts -->
      <?php
        // Database connection
        require_once 'dbconn.php';

        // Fetch random posts with total rating from the database
        $randomPostsSql = "SELECT p.first_name, p.last_name, p.profile_picture, po.id, po.post_date, po.massage, po.pic, SUM(r.rate) AS total_rate
                           FROM posts po
                           JOIN profiles p ON p.id = po.user_id
                           LEFT JOIN ratings r ON po.id = r.post_id
                           GROUP BY po.id
                           ORDER BY RAND()
                           LIMIT 50";
        $randomPostsResult = $conn->query($randomPostsSql);

        while ($postRow = $randomPostsResult->fetch_assoc()) {
          $profile_picture = $postRow['profile_picture'];
          $firstName = $postRow['first_name'];
          $lastName = $postRow['last_name'];
          $postDate = $postRow['post_date'];
          $message = $postRow['massage'];
          $pic = $postRow['pic'];
          $postId = $postRow['id'];
          $totalRate = $postRow['total_rate'];
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
          <!-- Rating button and date  -->
          <div style="display: flex; justify-content:space-between; align-items: center;">
            <!-- Rating button form -->

            <div style="display: flex;  align-items: center;">
              <form action="rating.php" method="POST">
                <input type="hidden" name="post_id" value="<?php echo $postId; ?>">
                <input type="hidden" name="rating" value="1">
                <button type="submit" style="color: #fb972b; background: transparent; padding-left:0px;font-size: 20px;"><i class="fa-solid fa-star "></i></button>
              </form>
              <p class="total-rate">star : <?php if ($totalRate === null) {
                                              echo 0;
                                            } else {
                                              echo $totalRate;
                                            }  ?>
              </p>
            </div>
            <p class="post-date"><?php echo $postDate; ?></p>
          </div>

          
          
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
