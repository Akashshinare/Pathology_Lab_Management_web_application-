<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the selected tests
  $selectedTests = $_POST['tests'];

  // Calculate the total cost based on the selected tests
  $totalCost = 0;
  foreach ($selectedTests as $test) {
    // Add the cost of each selected test
    // You can implement your own logic to fetch test costs from the database
    // For example, assuming test costs are stored in the database
    $conn = new mysqli('localhost', 'username', 'password', 'database_name');
    $sql = "SELECT cost FROM tests WHERE name='$test'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $totalCost += $row['cost'];
    }
    $conn->close();
  }

  // Apply discounts if applicable
  // You can implement your own logic to determine and apply discounts

 
