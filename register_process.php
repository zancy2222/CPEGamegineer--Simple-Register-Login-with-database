<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    include "connection.php";
// Prepare and bind the SQL statement
$stmt = $con->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $first_name, $last_name, $email, $hashed_password);

// Get form data
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$password = $_POST["password"];

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Execute the prepared statement
if ($stmt->execute()) {
    echo "<script>alert('New User Added successfully');</script>";
    echo "<script>window.location.href = 'login-user.php';</script>"; // Redirect back to login page
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

// Close the statement
$stmt->close();
}
?>
