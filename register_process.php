<?php
// Start session
session_start();

// Include database connection
require_once 'includes/db.php';

// Function to sanitize input data
function sanitize_input($data) {
    global $conn; // Assuming $conn is defined in includes/db.php as mysqli connection
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $conn->real_escape_string($data); // Use mysqli's real_escape_string
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Initialize error array
    $errors = [];
    
    // Validate and sanitize form inputs
    global $conn;
    $firstName = isset($_POST['firstName']) ? sanitize_input($_POST['firstName']) : '';
    $lastName = isset($_POST['lastName']) ? sanitize_input($_POST['lastName']) : '';
    $email = isset($_POST['email']) ? sanitize_input($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? sanitize_input($_POST['phone']) : '';
    $country = isset($_POST['country']) ? sanitize_input($_POST['country']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '';
    $termsAgree = isset($_POST['termsAgree']) ? 1 : 0;
    
    // Validation checks
    if (empty($firstName)) {
        $errors[] = "First name is required";
    }
    
    if (empty($lastName)) {
        $errors[] = "Last name is required";
    }
    
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { // Use original email for validation
        $errors[] = "Invalid email format";
    }
    
    if (empty($country)) {
        $errors[] = "Country is required";
    }
    
    // Password validation
    if (empty($password)) {
        $errors[] = "Password is required";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long";
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $password)) {
        $errors[] = "Password must include at least one uppercase letter, one lowercase letter, one number, and one special character";
    }
    
    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match";
    }
    
    if (!$termsAgree) {
        $errors[] = "You must agree to the Terms and Conditions";
    }
    
    // If there are no errors, proceed with registration
    if (empty($errors)) {
        // Check if email already exists - using mysqli syntax
        $check_email = "SELECT id FROM users WHERE email = '$email'";
        $result = $conn->query($check_email);
        
        if ($result && $result->num_rows > 0) {
            $_SESSION['register_error'] = "Email already registered. Please use a different email or login.";
            header("Location: register.php");
            exit();
        }
        
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Insert new user - using mysqli syntax, without the newsletter column
        $insert_query = "INSERT INTO users (first_name, last_name, email, phone, country, password, created_at) 
                         VALUES ('$firstName', '$lastName', '$email', '$phone', '$country', '$hashed_password', NOW())";
        
        if ($conn->query($insert_query) === TRUE) {
            // Registration successful
            $_SESSION['user_id'] = $conn->insert_id;
            $_SESSION['user_name'] = $firstName;
            $_SESSION['success_message'] = "Registration successful! Welcome to our travel community.";
            
            // Redirect to dashboard or login page
            header("Location: login.php");
            exit();
        } else {
            $_SESSION['register_error'] = "Registration failed: " . $conn->error;
            header("Location: register.php");
            exit();
        }
    } else {
        // Store errors in session and redirect back to form
        $_SESSION['register_errors'] = $errors;
        $_SESSION['form_data'] = $_POST; // To repopulate the form
        header("Location: register.php");
        exit();
    }
} else {
    // If someone tries to access this page directly
    header("Location: register.php");
    exit();
}
?>