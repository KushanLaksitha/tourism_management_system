<?php
header('Content-Type: application/json');
include("../includes//db.php"); // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = trim($_POST['firstName'] ?? '');
    $lastName = trim($_POST['lastName'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $tourPackage = $_POST['tourPackage'] ?? '';
    $guests = $_POST['guests'] ?? '';
    $arrivalDate = $_POST['arrivalDate'] ?? '';
    $departureDate = $_POST['departureDate'] ?? '';
    $accommodationType = $_POST['accommodationType'] ?? '';
    $specialRequests = $_POST['specialRequests'] ?? '';

    // Handling Special Interests (checkboxes)
    $specialInterests = [];
    if (isset($_POST['wildlife'])) $specialInterests[] = "Wildlife";
    if (isset($_POST['beaches'])) $specialInterests[] = "Beaches";
    if (isset($_POST['culture'])) $specialInterests[] = "Culture & History";
    if (isset($_POST['adventure'])) $specialInterests[] = "Adventure";
    if (isset($_POST['ayurveda'])) $specialInterests[] = "Ayurveda & Wellness";
    if (isset($_POST['food'])) $specialInterests[] = "Food & Cuisine";
    
    $specialInterestsStr = implode(", ", $specialInterests); // Convert array to string

    // Basic validation
    if (empty($firstName) || empty($lastName) || empty($email) || empty($phone) || empty($tourPackage) || empty($arrivalDate) || empty($departureDate) || empty($accommodationType)) {
        echo json_encode(["status" => "error", "message" => "Please fill all required fields."]);
        exit();
    }

    // Insert into database using prepared statements
    $stmt = $conn->prepare("INSERT INTO bookings (first_name, last_name, email, phone, tour_package, guests, arrival_date, departure_date, accommodation_type, special_interests, special_requests) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssss", $firstName, $lastName, $email, $phone, $tourPackage, $guests, $arrivalDate, $departureDate, $accommodationType, $specialInterestsStr, $specialRequests);

    if ($stmt->execute()) {
        echo json_encode([
            "status" => "success",
            "message" => "Booking successful!",
            "redirect" => "../index.php"
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Database error: " . $conn->error
        ]);
    }
    
    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request."]);
}
?>
