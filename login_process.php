<?php
// Include the database connection file
include "connection.php";

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Prepare and bind the SQL statement
$stmt = $con->prepare("SELECT id, password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);

// Get form data
$email = $_POST["email"];
$password = $_POST["password"];

// Execute the prepared statement
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // Bind the result variables
    $stmt->bind_result($id, $hashed_password);
    $stmt->fetch();

    // Verify the password
    if (password_verify($password, $hashed_password)) {
        echo "<script>alert('Login successful');</script>";
        echo "<script>window.location.href = 'login-user.php';</script>"; // Redirect to main page
        exit();
    } else {
        echo "<script>alert('Incorrect Password');</script>";
        echo "<script>window.location.href = 'login-user.php';</script>"; // Redirect back to login page
        exit();
    }
} else {
    // User not found
    echo "<script>alert('User not found');</script>";
    echo "<script>window.location.href = 'login-user.php';</script>"; // Redirect back to login page
    exit();
}

// Close the statement
$stmt->close();

}

// Close the database connection
$con->close();
?>
