<?php
// File: confirm_booking.php

// Include database connection
require_once '../includes/db.php';

// Set content type to JSON
header('Content-Type: application/json');

// Initialize response array
$response = [
    'success' => false,
    'message' => '',
    'email_sent' => false
];

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $response['message'] = 'Invalid request method';
    echo json_encode($response);
    exit;
}

// Validate booking ID
if (!isset($_POST['booking_id']) || empty($_POST['booking_id'])) {
    $response['message'] = 'Booking ID is required';
    echo json_encode($response);
    exit;
}

// Get booking ID and sanitize
$bookingId = intval($_POST['booking_id']);
$sendEmail = isset($_POST['send_email']) && $_POST['send_email'] === 'true';

// Get booking details from database to send in email
$bookingQuery = "SELECT * FROM bookings WHERE id = ?";
$stmt = $conn->prepare($bookingQuery);
$stmt->bind_param("i", $bookingId);
$stmt->execute();
$bookingResult = $stmt->get_result();

if ($bookingResult->num_rows === 0) {
    $response['message'] = 'Booking not found';
    echo json_encode($response);
    exit;
}

$bookingData = $bookingResult->fetch_assoc();

// Start transaction
$conn->begin_transaction();

try {
    // Update booking status to confirmed
    $updateQuery = "UPDATE bookings SET status = 'confirmed', updated_at = NOW() WHERE id = ?";
    $updateStmt = $conn->prepare($updateQuery);
    $updateStmt->bind_param("i", $bookingId);
    $updateResult = $updateStmt->execute();

    if (!$updateResult) {
        throw new Exception("Failed to update booking status");
    }

    // Log the confirmation in booking_history table
    $logQuery = "INSERT INTO booking_history (booking_id, action, performed_by, details) VALUES (?, 'confirmed', ?, 'Booking confirmed by admin')";
    $logStmt = $conn->prepare($logQuery);
    $adminUser = "Admin"; // In a real app, get from session
    $logStmt->bind_param("is", $bookingId, $adminUser);
    $logResult = $logStmt->execute();

    if (!$logResult) {
        throw new Exception("Failed to log booking confirmation");
    }

    // Send confirmation email if requested
    if ($sendEmail) {
        // Format dates for email
        $arrivalDate = new DateTime($bookingData['arrival_date']);
        $departureDate = new DateTime($bookingData['departure_date']);
        $formattedArrival = $arrivalDate->format('M d, Y');
        $formattedDeparture = $departureDate->format('M d, Y');
        
        $to = $bookingData['email'];
        $subject = "Ceylon Explorer: Your Booking #" . $bookingId . " is Confirmed";
        
        // Email body
        $message = "
        <html>
        <head>
            <title>Booking Confirmation</title>
        </head>
        <body>
            <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;'>
                <div style='background-color: #4CAF50; color: white; padding: 20px; text-align: center;'>
                    <h1>Ceylon Explorer</h1>
                    <h2>Your booking is confirmed!</h2>
                </div>
                <div style='padding: 20px;'>
                    <p>Dear " . htmlspecialchars($bookingData['first_name']) . " " . htmlspecialchars($bookingData['last_name']) . ",</p>
                    <p>We're excited to confirm your booking with Ceylon Explorer! Below are your booking details:</p>
                    
                    <div style='background-color: #f9f9f9; padding: 15px; margin: 15px 0; border-left: 4px solid #4CAF50;'>
                        <p><strong>Booking Reference:</strong> #" . $bookingId . "</p>
                        <p><strong>Tour Package:</strong> " . htmlspecialchars($bookingData['tour_package']) . "</p>
                        <p><strong>Dates:</strong> " . $formattedArrival . " to " . $formattedDeparture . "</p>
                        <p><strong>Number of Guests:</strong> " . $bookingData['guests'] . "</p>
                    </div>
                    
                    <p>We will be in touch shortly with more details about your upcoming tour. If you have any questions in the meantime, please don't hesitate to contact us.</p>
                    
                    <p>Thank you for choosing Ceylon Explorer for your Sri Lankan adventure!</p>
                    
                    <p>Best regards,<br>The Ceylon Explorer Team</p>
                </div>
                <div style='background-color: #f1f1f1; padding: 10px; text-align: center; font-size: 12px;'>
                    <p>Ceylon Explorer | info@ceylonexplorer.com | +94 11 234 5678</p>
                </div>
            </div>
        </body>
        </html>
        ";
        
        // Headers for HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: Ceylon Explorer <booking@ceylonexplorer.com>" . "\r\n";
        
        // Send email
        $mailSent = mail($to, $subject, $message, $headers);
        
        if ($mailSent) {
            $response['email_sent'] = true;
        } else {
            // Log email failure but don't roll back transaction
            error_log("Failed to send confirmation email to " . $to);
        }
    }

    // Commit transaction
    $conn->commit();
    
    // Success response
    $response['success'] = true;
    $response['message'] = 'Booking confirmed successfully';
    
} catch (Exception $e) {
    // Rollback transaction on error
    $conn->rollback();
    $response['message'] = $e->getMessage();
}

// Return JSON response
echo json_encode($response);
?>