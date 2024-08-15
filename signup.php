<?php
// Start session at the beginning
session_start();

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learn_tube";

// Start output buffering
ob_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $firstName = $conn->real_escape_string($_POST['first-name']);
    $lastName = $conn->real_escape_string($_POST['last-name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $confirmPassword = $conn->real_escape_string($_POST['confirm-password']);

    // Check if passwords match
    if ($password !== $confirmPassword) {
        echo "Passwords do not match.";
        exit();
    }

    // Hash the password
    // $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstName, $lastName, $email, $password);

    // Execute the query
    if ($stmt->execute()) {
        // Store user data in session
        $_SESSION['first-name'] = $firstName;
        $_SESSION['last-name'] = $lastName;
        $_SESSION['email'] = $email;

        // Redirect to profile page
        header("Location: profile.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}

// Flush output buffer
ob_end_flush();
?>
