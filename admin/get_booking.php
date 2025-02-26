<?php
// Database connection
require_once '../includes/db.php';

// Get booking ID from request
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id <= 0) {
    // Invalid ID
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Invalid booking ID']);
    exit;
}

// Fetch booking details
$sql = "SELECT * FROM bookings WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $booking = $result->fetch_assoc();
    
    // Calculate number of nights
    $arrival = new DateTime($booking["arrival_date"]);
    $departure = new DateTime($booking["departure_date"]);
    $nights = $departure->diff($arrival)->days;
    
    // Format dates for display
    $formatted_arrival = $arrival->format('M d, Y');
    $formatted_departure = $departure->format('M d, Y');
    
    // Add formatted dates to the booking array
    $booking['formatted_dates'] = $formatted_arrival . ' - ' . $formatted_departure . ' (' . $nights . ' nights)';
    
    // Return the booking details as JSON
    header('Content-Type: application/json');
    echo json_encode($booking);
} else {
    // Booking not found
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Booking not found']);
}

// Close database connection
$stmt->close();
$conn->close();
?>