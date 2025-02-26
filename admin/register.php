<?php

require_once '../includes/db.php';

$error_message = "";
$success_message = "";
$first_name = $last_name = $email = $phone = "";

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    
    // Validate form data
    if (empty($first_name) || empty($last_name) || empty($email) || empty($phone) || empty($password) || empty($confirm_password)) {
        $error_message = "All fields are required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid email format";
    } elseif ($password !== $confirm_password) {
        $error_message = "Passwords do not match";
    } else {
        // Check if email already exists
        $stmt = $conn->prepare("SELECT id FROM admins WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $error_message = "Email already in use";
        } else {
            // Hash password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            // Insert new admin
            $stmt = $conn->prepare("INSERT INTO admins (first_name, last_name, email, phone, password) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $first_name, $last_name, $email, $phone, $hashed_password);
            
            if ($stmt->execute()) {
                header("Location: login.php");
            } else {
                $error_message = "Registration failed: " . $conn->error;
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <style>
        :root {
            --primary-color: #4a6fdc;
            --secondary-color: #6c42d1;
            --accent-color: #ff6b6b;
            --success-color: #42d167;
            --error-color: #ff4b4b;
            --bg-color: #f9f9fb;
            --card-bg: #ffffff;
            --text-color: #333333;
            --border-radius: 8px;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: var(--bg-color);
            color: var(--text-color);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .container {
            width: 100%;
            max-width: 500px;
            background: var(--card-bg);
            border-radius: var(--border-radius);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 25px;
            text-align: center;
        }
        
        .header h1 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .header p {
            opacity: 0.9;
            font-size: 14px;
        }
        
        .form-container {
            padding: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 16px;
            font-size: 15px;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(74, 111, 220, 0.2);
            outline: none;
        }
        
        .btn {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            padding: 14px 24px;
            font-size: 16px;
            font-weight: 600;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            width: 100%;
            text-align: center;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(74, 111, 220, 0.3);
        }
        
        .btn:active {
            transform: translateY(0);
        }
        
        .alert {
            padding: 12px 16px;
            border-radius: var(--border-radius);
            margin-bottom: 20px;
            font-size: 14px;
            font-weight: 500;
        }
        
        .alert-error {
            background-color: rgba(255, 75, 75, 0.15);
            color: var(--error-color);
            border: 1px solid rgba(255, 75, 75, 0.3);
        }
        
        .alert-success {
            background-color: rgba(66, 209, 103, 0.15);
            color: var(--success-color);
            border: 1px solid rgba(66, 209, 103, 0.3);
        }
        
        .password-container {
            position: relative;
        }
        
        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #555;
            font-size: 14px;
        }
        
        .form-row {
            display: flex;
            gap: 15px;
        }
        
        .form-row .form-group {
            flex: 1;
        }
        
        @media (max-width: 550px) {
            .form-row {
                flex-direction: column;
                gap: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Admin Registration</h1>
            <p>Create a new administrator account</p>
        </div>
        
        <div class="form-container">
            <?php if (!empty($error_message)): ?>
                <div class="alert alert-error"><?php echo $error_message; ?></div>
            <?php endif; ?>
            
            <?php if (!empty($success_message)): ?>
                <div class="alert alert-success"><?php echo $success_message; ?></div>
            <?php endif; ?>
            
            <form id="adminForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-row">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" class="form-control" value="<?php echo isset($first_name) ? htmlspecialchars($first_name) : ''; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" value="<?php echo isset($last_name) ? htmlspecialchars($last_name) : ''; ?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="form-control" value="<?php echo isset($phone) ? htmlspecialchars($phone) : ''; ?>">
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="password-container">
                        <input type="password" id="password" name="password" class="form-control">
                        <span class="toggle-password" onclick="togglePassword('password')">Show</span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <div class="password-container">
                        <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                        <span class="toggle-password" onclick="togglePassword('confirm_password')">Show</span>
                    </div>
                </div>
                
                <button type="submit" class="btn" id="submitBtn">Register Admin</button>
            </form>
        </div>
    </div>
    
    <script>
        // Toggle password visibility
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            const toggleBtn = input.nextElementSibling;
            
            if (input.type === "password") {
                input.type = "text";
                toggleBtn.textContent = "Hide";
            } else {
                input.type = "password";
                toggleBtn.textContent = "Show";
            }
        }
        
        // Client-side form validation
        document.getElementById('adminForm').addEventListener('submit', function(event) {
            const firstName = document.getElementById('first_name').value.trim();
            const lastName = document.getElementById('last_name').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            
            let isValid = true;
            let errorMessage = '';
            
            // Remove any existing error alert
            const existingAlert = document.querySelector('.alert-error');
            if (existingAlert) {
                existingAlert.remove();
            }
            
            if (!firstName || !lastName || !email || !phone || !password || !confirmPassword) {
                errorMessage = 'All fields are required';
                isValid = false;
            } else if (!isValidEmail(email)) {
                errorMessage = 'Please enter a valid email address';
                isValid = false;
            } else if (password !== confirmPassword) {
                errorMessage = 'Passwords do not match';
                isValid = false;
            } else if (password.length < 8) {
                errorMessage = 'Password must be at least 8 characters long';
                isValid = false;
            }
            
            if (!isValid) {
                event.preventDefault();
                
                // Create and show error message
                const alertDiv = document.createElement('div');
                alertDiv.className = 'alert alert-error';
                alertDiv.textContent = errorMessage;
                
                const formContainer = document.querySelector('.form-container');
                formContainer.insertBefore(alertDiv, document.getElementById('adminForm'));
            }
        });
        
        // Email validation helper
        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
    </script>
</body>
</html>