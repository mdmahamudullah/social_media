<?php
function registration(){
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $profilePicture = $_FILES['profile_picture']['name'];
  $firstName = $_POST['first_name'];
  $lastName = $_POST['last_name'];
  $dateOfBirth = $_POST['date_of_birth'];
  $address = $_POST['address'];
  $mobileNumber = $_POST['mobile_number'];
  $email = $_POST['email'];
  $passwords = $_POST['passwords'];
  
  require_once 'dbconn.php';
 
// Create a new user in the database
$sql = "INSERT INTO profiles (passwords, first_name, last_name, date_of_birth, address, mobile_number, email,profile_picture) VALUES ('$passwords', '$firstName', '$lastName', '$dateOfBirth', '$address', '$mobileNumber', '$email', '$profile_picture')";

if(mysqli_query($conn,$sql)){
  header("location: index.html");
}else{
  echo "error";
}
    
}
}












?>
