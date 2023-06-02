<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body class="create-account-body">
  <div class="create-account-container">

    <div class="create-logo-container">
      <h1>Sobuj<span>Poth</span></h1>
      <p>Place of your memories...</p>
    </div>
    <div class="create-login-container">
      <h1>Create a New Account</h1>
      <form action="oldindex.php" method="POST">
        <div class="form-group">
          <label for="first_name">First Name:</label>
          <input type="text" name="first_name" id="first_name" required>
        </div>
        <div class="form-group">
          <label for="last_name">Last Name:</label>
          <input type="text" name="last_name" id="last_name" required>
        </div>
        <div class="form-group">
          <label for="date_of_birth">Date of Birth:</label>
          <input type="date" name="date_of_birth" id="date_of_birth" required>
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" name="address" id="address" required>
        </div>
        <div class="form-group">
          <label for="mobile_number">Mobile Number:</label>
          <input type="tel" name="mobile_number" id="mobile_number" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" name="passwords" id="password" required>
        </div>
        <button type="submit">Create Account</button>
      </form>
    </div>
  </div>
</body>
</html>
