<?php
// Check if the login form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the entered username and password
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Validate the credentials against the provided credentials
  if ($username === 'test@kennect.io' && $password === 'Qwerty@1234') {
    // Redirect the user to the home page
    header('Location: home.php');
    exit;
  } else {
    // Invalid credentials, display an error message
    echo 'Invalid username or password. Please try again.';
  }
}
?>
