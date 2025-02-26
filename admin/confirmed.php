<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Explorer - Confirmed Bookings</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <?php
    
    // Include database connection
    require_once '../includes/db.php';

    // Fetch only confirmed bookings from database
    $sql = "SELECT * FROM bookings WHERE status = 'confirmed' ORDER BY arrival_date ASC";
    $result = $conn->query($sql);
    ?>

    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column flex-shrink-0 p-3 text-white" style="width: 250px;">
        <a href="../index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-4">Ceylon Explorer</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="dashboard.php" class="nav-link text-white">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="confirmed.php" class="nav-link active" aria-current="page">
                    <i class="fas fa-calendar-check"></i>
                    Confirmed Bookings
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <strong>Admin User</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="signout.php">Sign out</a></li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Confirmed Bookings</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                
                <div class="btn-group">
                    <a href="dashboard.php">
                    <button type="button" class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-arrow-left"></i> Back to Dashboard
                    </button>
                    </a>
                </div>
            </div>
        </div>

        

        <!-- Bookings List -->
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Confirmed Bookings</h5>
                <span class="badge bg-primary" id="bookingCount">
                    <?php echo $result->num_rows; ?> booking<?php echo $result->num_rows != 1 ? 's' : ''; ?>
                </span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="confirmedBookingsTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Guest</th>
                                <th>Package</th>
                                <th>Dates</th>
                                <th>Guests</th>
                                <th>Accommodation</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    // Calculate number of nights
                                    $arrival = new DateTime($row["arrival_date"]);
                                    $departure = new DateTime($row["departure_date"]);
                                    $nights = $departure->diff($arrival)->days;
                                    
                                    // Format dates for display
                                    $formatted_arrival = $arrival->format('M d, Y');
                                    $formatted_departure = $departure->format('M d, Y');
                                    
                                    // Data attribute for filtering
                                    $arrival_month_year = $arrival->format('Y-m');
                                    
                                    echo "<tr data-month='" . $arrival_month_year . "' data-package='" . htmlspecialchars($row["tour_package"]) . "' data-accommodation='" . htmlspecialchars($row["accommodation_type"]) . "'>
                                        <td>#" . $row["id"] . "</td>
                                        <td>
                                            <div>" . htmlspecialchars($row["first_name"] . " " . $row["last_name"]) . "</div>
                                            <small class='text-muted'>" . htmlspecialchars($row["email"]) . "</small>
                                        </td>
                                        <td>" . htmlspecialchars($row["tour_package"]) . "</td>
                                        <td>
                                            <div>" . $formatted_arrival . " - " . $formatted_departure . "</div>
                                            <small class='text-muted'>" . $nights . " nights</small>
                                        </td>
                                        <td>" . $row["guests"] . "</td>
                                        <td>" . htmlspecialchars($row["accommodation_type"]) . "</td>
                                        <td>
                                            <div class='btn-group'>
                                                <button type='button' class='btn btn-sm btn-outline-primary view-booking' data-id='" . $row["id"] . "'>
                                                    <i class='fas fa-eye'></i>
                                                </button>
                                                
                                            </div>
                                        </td>
                                    </tr>";
                                }
                            } else {
                                echo "<tr><td colspan='7' class='text-center'>No confirmed bookings found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- View Booking Modal -->
    <div class="modal fade" id="viewBookingModal" tabindex="-1" aria-labelledby="viewBookingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewBookingModalLabel">Booking Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="bookingDetailsContent">
                    <!-- Content will be loaded via JavaScript -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" onclick="printBookingDetails()">
                        <i class="fas fa-print"></i> Print Details
                    </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Current booking ID being viewed
        let currentBookingId = null;
        
        // Event handlers for view booking buttons
        document.querySelectorAll('.view-booking').forEach(button => {
            button.addEventListener('click', function() {
                const bookingId = this.getAttribute('data-id');
                currentBookingId = bookingId;
                
                // Fetch booking details via AJAX
                fetchBookingDetails(bookingId);
                
                // Show the modal
                const viewModal = new bootstrap.Modal(document.getElementById('viewBookingModal'));
                viewModal.show();
            });
        });
        
        // Function to fetch booking details
        function fetchBookingDetails(bookingId) {
            // Show loading state
            const bookingDetailsContent = document.getElementById('bookingDetailsContent');
            bookingDetailsContent.innerHTML = `
                <div class="text-center py-4">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="mt-2">Loading booking details...</p>
                </div>
            `;
            
            // Fetch the booking details via AJAX
            fetch('get_booking.php?id=' + bookingId)
                .then(response => response.json())
                .then(data => {
                    // Update the modal with real data
                    bookingDetailsContent.innerHTML = `
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-muted mb-3">Guest Information</h6>
                                <p><strong>Booking ID:</strong> #${data.id}</p>
                                <p><strong>Name:</strong> ${data.first_name} ${data.last_name}</p>
                                <p><strong>Email:</strong> ${data.email}</p>
                                <p><strong>Phone:</strong> ${data.phone}</p>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-muted mb-3">Booking Information</h6>
                                <p><strong>Tour Package:</strong> ${data.tour_package}</p>
                                <p><strong>Dates:</strong> ${data.formatted_dates}</p>
                                <p><strong>Guests:</strong> ${data.guests}</p>
                                <p><strong>Accommodation:</strong> ${data.accommodation_type}</p>
                                <p><strong>Status:</strong> 
                                    <span class="badge status-${data.status} px-3 py-2">${data.status.charAt(0).toUpperCase() + data.status.slice(1)}</span>
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <h6 class="text-muted mb-3">Special Interests</h6>
                                <div class="d-flex flex-wrap" id="specialInterests">
                                    ${renderSpecialInterests(data.special_interests)}
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <h6 class="text-muted mb-3">Special Requests</h6>
                                <p>${data.special_requests ? data.special_requests : 'None'}</p>
                            </div>
                        </div>
                    `;
                })
                .catch(error => {
                    console.error('Error fetching booking details:', error);
                    // Show error message in modal
                    bookingDetailsContent.innerHTML = `
                        <div class="alert alert-danger">
                            Error loading booking details. Please try again.
                        </div>
                    `;
                });
        }
        
        // Helper function to render special interests
        function renderSpecialInterests(interests) {
            if (!interests) {
                return '<span class="text-muted">None specified</span>';
            }
            
            const interestsList = interests.split(',');
            let html = '';
            
            interestsList.forEach(interest => {
                html += `<span class="badge bg-info me-2 mb-2 p-2">${interest.trim()}</span>`;
            });
            
            return html;
        }
        
        // Filter functionality
        document.getElementById('applyFilters').addEventListener('click', function() {
            applyFilters();
        });
        
        document.getElementById('resetFilters').addEventListener('click', function() {
            // Reset all filter inputs
            document.getElementById('dateFilter').value = '';
            document.getElementById('packageFilter').value = '';
            document.getElementById('accommodationFilter').value = '';
            
            // Show all rows
            applyFilters();
        });
        
        function applyFilters() {
            const dateFilter = document.getElementById('dateFilter').value;
            const packageFilter = document.getElementById('packageFilter').value;
            const accommodationFilter = document.getElementById('accommodationFilter').value;
            
            const rows = document.querySelectorAll('#confirmedBookingsTable tbody tr');
            let visibleCount = 0;
            
            rows.forEach(row => {
                const rowMonth = row.getAttribute('data-month');
                const rowPackage = row.getAttribute('data-package');
                const rowAccommodation = row.getAttribute('data-accommodation');
                
                // Check if row matches all active filters
                const matchesDate = !dateFilter || rowMonth === dateFilter;
                const matchesPackage = !packageFilter || rowPackage === packageFilter;
                const matchesAccommodation = !accommodationFilter || rowAccommodation === accommodationFilter;
                
                // Show or hide row based on filter matches
                if (matchesDate && matchesPackage && matchesAccommodation) {
                    row.style.display = '';
                    visibleCount++;
                } else {
                    row.style.display = 'none';
                }
            });
            
            // Update booking count badge
            document.getElementById('bookingCount').textContent = visibleCount + ' booking' + (visibleCount !== 1 ? 's' : '');
        }
        
        // Export functionality
        document.getElementById('exportBtn').addEventListener('click', function() {
            exportToCSV('ceylon-explorer-confirmed-bookings.csv');
        });
        
        function exportToCSV(filename) {
            const table = document.getElementById('confirmedBookingsTable');
            const rows = Array.from(table.querySelectorAll('tr:not([style*="display: none"])'));
            
            // Get headers, excluding the Actions column
            const headers = Array.from(rows[0].querySelectorAll('th'))
                .slice(0, -1) // Remove the Actions column
                .map(header => header.textContent.trim());
            
            // Get data
            const data = rows.slice(1).map(row => {
                // Get all cells except the last one (Actions)
                return Array.from(row.querySelectorAll('td'))
                    .slice(0, -1) // Remove the Actions column
                    .map(cell => {
                        // Get just the text content without formatting
                        return '"' + cell.textContent.trim().replace(/"/g, '""') + '"';
                    })
                    .join(',');
            });
            
            // Combine headers and data
            const csv = [
                headers.join(','),
                ...data
            ].join('\n');
            
            // Create download link
            const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
            const url = URL.createObjectURL(blob);
            const link = document.createElement('a');
            link.setAttribute('href', url);
            link.setAttribute('download', filename);
            link.style.visibility = 'hidden';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
        
        // Print booking details
        function printBookingDetails() {
            const detailsContent = document.getElementById('bookingDetailsContent').innerHTML;
            const printWindow = window.open('', '_blank');
            
            printWindow.document.write(`
                <!DOCTYPE html>
                <html>
                <head>
                    <title>Booking Details - Ceylon Explorer</title>
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
                    <style>
                        body { padding: 20px; }
                        @media print {
                            .no-print { display: none; }
                        }
                    </style>
                </head>
                <body>
                    <div class="container">
                        <div class="row mb-4">
                            <div class="col-12 text-center">
                                <h2>Ceylon Explorer</h2>
                                <h4>Booking Details</h4>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                ${detailsContent}
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 text-center">
                                <button class="btn btn-primary no-print" onclick="window.print()">Print Now</button>
                                <button class="btn btn-secondary no-print" onclick="window.close()">Close</button>
                            </div>
                        </div>
                    </div>
                </body>
                </html>
            `);
            
            printWindow.document.close();
        }
        
        // Function to generate and print itinerary
        function printItinerary(bookingId) {
            // Fetch booking details first
            fetch('get_booking.php?id=' + bookingId)
                .then(response => response.json())
                .then(data => {
                    // Create a new window for printing
                    const printWindow = window.open('', '_blank');
                    
                    // Generate itinerary based on package type
                    let itineraryHtml = generateItinerary(data);
                    
                    printWindow.document.write(`
                        <!DOCTYPE html>
                        <html>
                        <head>
                            <title>Travel Itinerary - Ceylon Explorer</title>
                            <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
                            <style>
                                body { padding: 20px; }
                                .itinerary-day { margin-bottom: 30px; }
                                .day-title { background-color: #f8f9fa; padding: 10px; border-radius: 5px; }
                                @media print {
                                    .no-print { display: none; }
                                }
                            </style>
                        </head>
                        <body>
                            <div class="container">
                                <div class="row mb-4">
                                    <div class="col-12 text-center">
                                        <h2>Ceylon Explorer</h2>
                                        <h4>Travel Itinerary</h4>
                                    </div>
                                </div>
                                
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <h5>Guest Information</h5>
                                        <p><strong>Name:</strong> ${data.first_name} ${data.last_name}</p>
                                        <p><strong>Booking ID:</strong> #${data.id}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Trip Details</h5>
                                        <p><strong>Package:</strong> ${data.tour_package}</p>
                                        <p><strong>Dates:</strong> ${data.formatted_dates}</p>
                                        <p><strong>Guests:</strong> ${data.guests}</p>
                                        <p><strong>Accommodation:</strong> ${data.accommodation_type}</p>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="mb-3">Daily Itinerary</h5>
                                        ${itineraryHtml}
                                    </div>
                                </div>
                                
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <h5>Special Notes</h5>
                                        <ul>
                                            <li>Please be ready 15 minutes before each scheduled departure</li>
                                            <li>All activities are weather-dependent and subject to change</li>
                                            <li>Your tour guide will provide daily briefings each evening</li>
                                            <li>Emergency contact: +94 11 234 5678</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="row mt-4">
                                    <div class="col-12 text-center">
                                        <p>We look forward to providing you with an unforgettable experience in Sri Lanka!</p>
                                        <button class="btn btn-primary no-print" onclick="window.print()">Print Itinerary</button>
                                        <button class="btn btn-secondary no-print" onclick="window.close()">Close</button>
                                    </div>
                                </div>
                            </div>
                        </body>
                        </html>
                    `);
                    
                    printWindow.document.close();
                })
                .catch(error => {
                    console.error('Error fetching booking details:', error);
                    alert('Error generating itinerary. Please try again.');
                });
        }
        
    </script>
</body>
</html>
        
        