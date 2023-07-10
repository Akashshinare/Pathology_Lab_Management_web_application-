<!DOCTYPE html>
<html>
<head>
  <title>Pathology Lab Management - Home</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div id="home-container">
    <h1>Welcome to the Home Page</h1>
    <div id="todo-list">
      <!-- Display the list of todos dynamically using PHP and MySQL -->
      <?php
      // Connect to the MySQL database
      $conn = new mysqli('localhost', 'username', 'password', 'database_name');

      // Check the database connection
      if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
      }

      // Query the todos from the database
      $sql = 'SELECT * FROM todos';
      $result = $conn->query($sql);

      // Display the todos
      if ($result->num_rows > 0) {
        echo '<ul>';
        while ($row = $result->fetch_assoc()) {
          echo '<li>' . $row['todo'] . '</li>';
        }
        echo '</ul>';
      } else {
        echo 'No todos found.';
      }

      // Close the database connection
      $conn->close();
      ?>
    </div>
    <div id="cost-calculator">
      <!-- Include the cost calculator form -->
      <form action="calculate.php" method="post">
        <!-- Add the cost calculator form elements -->
        <input type="checkbox" name="tests[]" value="Test 1"> Test 1<br>
        <input type="checkbox" name="tests[]" value="Test 2"> Test 2<br>
        <input type="checkbox" name="tests[]" value="Test 3"> Test 3<br>
        <input type="submit" value="Calculate">
      </form>
    </div>
    <div id="add-patient">
      <!-- Include the form to add patient details and create tests -->
      <form action="create_test.php" method="post">
        <!-- Add patient details and create tests form elements -->
        <input type="text" name="patient_name" placeholder="Patient Name" required><br>
        <input type="text" name="test_name" placeholder="Test Name" required><br>
        <input type="submit" value="Create Test">
      </form>
    </div>
  </div>
</body>
</html>
