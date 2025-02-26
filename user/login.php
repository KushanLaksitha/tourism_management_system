<?php
session_start(); // Start session

require_once '../includes/db.php'; // Include database connection

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Prevent SQL Injection
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $hashed_password);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['email'] = $username;
            header("Location: ../booking.php"); 
            exit();
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "User not found!";
    }

    $stmt->close();
}

$conn->close();
?>