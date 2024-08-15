<?php
session_start();

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learn_tube";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    // Prepare and execute the query to check if the email exists
    $stmt = $conn->prepare("SELECT first_name, email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($firstName, $email, $password);
    $stmt->fetch();
    $stmt->close();

    // Check if the email exists and the password matches
    if ($dbEmail && password_verify($password, $dbPassword)) {
        // Store user data in session
        $_SESSION['first-name'] = $firstName;
        $_SESSION['email'] = $dbEmail;

        // Redirect to profile page
        header("Location: profile.php");
        exit();
    } else {
        echo "Invalid email or password.";
    }
}

$conn->close();
?>
