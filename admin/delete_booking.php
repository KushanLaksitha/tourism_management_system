<?php
// Database connection
require_once '../includes/db.php';

// Check if it's a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get booking ID from request
    $booking_id = isset($_POST['booking_id']) ? intval($_POST['booking_id']) : 0;
    $send_email = isset($_POST['send_email']) ? filter_var($_POST['send_email'], FILTER_VALIDATE_BOOLEAN) : false;
    $cancellation_reason = isset($_POST['cancellation_reason']) ? trim($_POST['cancellation_reason']) : '';
    
    // Validate booking ID
    if ($booking_id <= 0) {
        // Return error response
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'message' => 'Invalid booking ID'
        ]);
        exit;
    }
    
    // Check if booking exists before deleting
    $check_sql = "SELECT id, first_name, last_name, email FROM bookings WHERE id = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("i", $booking_id);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();
    
    if ($check_result->num_rows === 0) {
        // Booking not found
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'message' => 'Booking not found'
        ]);
        $check_stmt->close();
        $conn->close();
        exit;
    }
    
    // Get booking details for email notification
    $booking = $check_result->fetch_assoc();
    $check_stmt->close();
    
    // Delete the booking
    $delete_sql = "DELETE FROM bookings WHERE id = ?";
    $delete_stmt = $conn->prepare($delete_sql);
    $delete_stmt->bind_param("i", $booking_id);
    
    if ($delete_stmt->execute()) {
        // Deletion successful
        
        // Send email notification if requested
        if ($send_email && !empty($booking['email'])) {
            // In a real application, you would implement proper email sending
            // This is just a placeholder for demonstration purposes
            $to = $booking['email'];
            $subject = "Ceylon Explorer - Booking Cancellation";
            
            $message = "Dear " . $booking['first_name'] . " " . $booking['last_name'] . ",\n\n";
            $message .= "We regret to inform you that your booking (ID: #" . $booking_id . ") has been cancelled.\n\n";
            
            if (!empty($cancellation_reason)) {
                $message .= "Reason for cancellation: " . $cancellation_reason . "\n\n";
            }
            
            $message .= "If you have any questions, please contact our customer service.\n\n";
            $message .= "Best regards,\nCeylon Explorer Team";
            
            $headers = "From: noreply@ceylonexplorer.com";
            
            // Uncomment the line below in a production environment to actually send the email
            // mail($to, $subject, $message, $headers);
            
            // Log email details for debugging
            error_log("Email would be sent to: $to with subject: $subject");
            error_log("Email message: $message");
        }
        
        // Return success response
        header('Content-Type: application/json');
        echo json_encode([
            'success' => true,
            'message' => 'Booking successfully deleted',
            'booking_id' => $booking_id,
            'email_sent' => $send_email
        ]);
    } else {
        // Deletion failed
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'message' => 'Error deleting booking: ' . $delete_stmt->error
        ]);
    }
    
    $delete_stmt->close();
} else {
    // Not a POST request
    header('Content-Type: application/json');
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method'
    ]);
}

// Close database connection
$conn->close();
?>