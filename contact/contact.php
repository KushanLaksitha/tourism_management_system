<?php
// Define variables and set to empty values
$name = $email = $subject = $phone = $inquiryType = $message = "";
$errors = [];

// Function to sanitize form data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Validate and sanitize name
    if (empty($_POST["name"])) {
        $errors[] = "Name is required";
    } else {
        $name = sanitize_input($_POST["name"]);
        // Check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $errors[] = "Only letters and white space allowed in name";
        }
    }
    
    // Validate and sanitize email
    if (empty($_POST["email"])) {
        $errors[] = "Email is required";
    } else {
        $email = sanitize_input($_POST["email"]);
        // Check if email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format";
        }
    }
    
    // Validate and sanitize subject
    if (empty($_POST["subject"])) {
        $errors[] = "Subject is required";
    } else {
        $subject = sanitize_input($_POST["subject"]);
    }
    
    // Sanitize phone (optional)
    if (!empty($_POST["phone"])) {
        $phone = sanitize_input($_POST["phone"]);
        // Check if phone number is valid (simple check)
        if (!preg_match("/^[0-9+\-\s()]*$/", $phone)) {
            $errors[] = "Invalid phone number format";
        }
    }
    
    // Validate and sanitize inquiry type
    if (empty($_POST["inquiryType"])) {
        $errors[] = "Inquiry type is required";
    } else {
        $inquiryType = sanitize_input($_POST["inquiryType"]);
        // Validate that inquiry type is one of the expected values
        $validInquiryTypes = ["general", "booking", "packages", "feedback", "other"];
        if (!in_array($inquiryType, $validInquiryTypes)) {
            $errors[] = "Invalid inquiry type";
        }
    }
    
    // Validate and sanitize message
    if (empty($_POST["message"])) {
        $errors[] = "Message is required";
    } else {
        $message = sanitize_input($_POST["message"]);
    }
    
    // If no errors, proceed with sending email
    if (empty($errors)) {
        // Recipient email address
        $to = "info@ceylonexplorer.com";
        
        // Email subject
        $email_subject = "Ceylon Explorer Contact Form: " . $subject;
        
        // Email headers
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        // Email content
        $email_body = "You have received a new message from the Ceylon Explorer contact form.\n\n";
        $email_body .= "Name: " . $name . "\n";
        $email_body .= "Email: " . $email . "\n";
        if (!empty($phone)) {
            $email_body .= "Phone: " . $phone . "\n";
        }
        $email_body .= "Inquiry Type: " . $inquiryType . "\n";
        $email_body .= "Message:\n" . $message . "\n";
        
        // Send email
        $mail_success = mail($to, $email_subject, $email_body, $headers);
        
        // Store in database (optional - you would need to set up a database connection)
        // This section is commented out. If you want to store submissions in a database, you'll need to configure it
        /*
        $conn = new mysqli("hostname", "username", "password", "database_name");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "INSERT INTO contact_submissions (name, email, subject, phone, inquiry_type, message, submission_date)
                VALUES (?, ?, ?, ?, ?, ?, NOW())";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $name, $email, $subject, $phone, $inquiryType, $message);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        */
        
        // Set success message and redirect
        if ($mail_success) {
            // Store success message in session
            session_start();
            $_SESSION['contact_success'] = "Thank you for your message! We will get back to you shortly.";
            
            // Redirect back to contact page
            header("Location: ../contact.php");
            exit();
        } else {
            $errors[] = "Sorry, there was an error sending your message. Please try again later.";
        }
    }
}

// If there are errors, store them in session and redirect back to form
if (!empty($errors)) {
    session_start();
    $_SESSION['contact_errors'] = $errors;
    $_SESSION['contact_form_data'] = [
        'name' => $name,
        'email' => $email,
        'subject' => $subject,
        'phone' => $phone,
        'inquiryType' => $inquiryType,
        'message' => $message
    ];
    
    // Redirect back to contact page
    header("Location: ../contact.php");
    exit();
}
?>