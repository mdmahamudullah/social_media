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
  <style>
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
  </style>
</head>
<body>
  <h1>Search</h1>
  
  <form action="" method="POST">
    <input type="text" name="search_input" placeholder="Enter a name">
    <button type="submit">Search</button>
  </form>
  
  <?php if (isset($searchResult) && $searchResult->num_rows > 0): ?>
    <h2>Search Results</h2>
    
    <?php while ($row = $searchResult->fetch_assoc()): ?>
      <div class="post-container">
      <div class="profile-name-container">
          <img src="<?php echo $row['profile_picture']; ?>" alt="Profile Image" class="profile-image">
          <p class="post-name"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></p>
        </div>
        <p class="post-date"><?php echo $row['post_date']; ?></p>
        <p class="post-message"><?php echo $row['massage']; ?></p>
        <?php if (!empty($row['pic'])): ?>
          <img src="<?php echo $row['pic']; ?>" alt="Post Image" class="post-image">
        <?php endif; ?>
      </div>
    <?php endwhile; ?>
  
  <?php elseif (isset($searchResult) && $searchResult->num_rows === 0): ?>
    <p>No results found.</p>
  
  <?php endif; ?>
</body>
</html>
