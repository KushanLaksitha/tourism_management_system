<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Explorer - Admin Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <?php
    
    // Include database connection
    require_once '../includes/db.php';

    // Fetch bookings from database
    $sql = "SELECT * FROM bookings ORDER BY created_at DESC";
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
                <a href="dashboard.php" class="nav-link active" aria-current="page">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="confirmed.php" class="nav-link text-white">
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
            <h1 class="h2">Bookings Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                
                <div class="btn-group">
                    <a href="../booking.php">
                    <button type="button" class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-download"></i> Add New Booking
                    </button>
                    </a>
                </div>

            </div>
        </div>

        <!-- Bookings List -->
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Recent Bookings</h5>
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Guest</th>
                                <th>Package</th>
                                <th>Dates</th>
                                <th>Guests</th>
                                <th>Status</th>
                                <th>Actions</th>
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
                                    
                                    // Get status from database
                                    $status = isset($row["status"]) ? $row["status"] : "pending";
                                    
                                    // Set status class based on status value
                                    $status_class = "status-pending";
                                    if($status == "confirmed") {
                                        $status_class = "status-confirmed"; 
                                    } else if($status == "cancelled") {
                                        $status_class = "status-cancelled";
                                    }
                                    
                                    // Determine if action buttons should be shown (hide for confirmed/cancelled)
                                    $show_actions = $status !== "confirmed" && $status !== "cancelled";
                                    
                                    echo "<tr>
                                        <td>#" . $row["id"] . "</td>
                                        <td>
                                            <div>" . $row["first_name"] . " " . $row["last_name"] . "</div>
                                            <small class='text-muted'>" . $row["email"] . "</small>
                                        </td>
                                        <td>" . $row["tour_package"] . "</td>
                                        <td>
                                            <div>" . $formatted_arrival . " - " . $formatted_departure . "</div>
                                            <small class='text-muted'>" . $nights . " nights</small>
                                        </td>
                                        <td>" . $row["guests"] . "</td>
                                        <td><span class='badge " . $status_class . " px-3 py-2'>" . ucfirst($status) . "</span></td>
                                        <td>
                                            <div class='btn-group'>";
                                    
                                    // Always show view button regardless of status
                                    echo "<button type='button' class='btn btn-sm btn-outline-primary view-booking' data-id='" . $row["id"] . "'>
                                                <i class='fas fa-eye'></i>
                                            </button>";
                                            
                                    // Only show confirm and delete buttons if the booking is not confirmed or cancelled
                                    if($show_actions) {
                                        echo "<button type='button' class='btn btn-sm btn-success confirm-booking' data-id='" . $row["id"] . "' data-status='" . $status . "'>
                                                <i class='fas fa-check'></i>
                                            </button>
                                            <button type='button' class='btn btn-sm btn-danger delete-booking' data-id='" . $row["id"] . "'>
                                                <i class='fas fa-trash'></i>
                                            </button>";
                                    }
                                            
                                    echo "</div>
                                        </td>
                                    </tr>";
                                }
                            } else {
                                echo "<tr><td colspan='7' class='text-center'>No bookings found</td></tr>";
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
                    <button type="button" class="btn btn-success confirm-from-details" id="confirmFromDetailsBtn">Confirm Booking</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirm Booking Modal -->
    <div class="modal fade" id="confirmBookingModal" tabindex="-1" aria-labelledby="confirmBookingModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmBookingModalLabel">Confirm Booking</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to confirm this booking?</p>
                    <p>An email notification will be sent to the guest.</p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="sendConfirmationEmail" checked>
                        <label class="form-check-label" for="sendConfirmationEmail">
                            Send confirmation email to guest
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="confirmBookingBtn">Confirm Booking</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Booking Modal -->
    <div class="modal fade" id="deleteBookingModal" tabindex="-1" aria-labelledby="deleteBookingModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteBookingModalLabel">Delete Booking</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-triangle me-2"></i> Warning: This action cannot be undone.
                    </div>
                    <p>Are you sure you want to delete this booking?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="sendCancellationEmail">
                        <label class="form-check-label" for="sendCancellationEmail">
                            Send cancellation email to guest
                        </label>
                    </div>
                    <div class="mt-3">
                        <label for="cancellationReason" class="form-label">Reason for cancellation (optional):</label>
                        <textarea class="form-control" id="cancellationReason" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="deleteBookingBtn">Delete Booking</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Current booking ID being operated on
        let currentBookingId = null;
        let currentBookingStatus = null;
        
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
        
        // Event handlers for confirm booking buttons
        document.querySelectorAll('.confirm-booking').forEach(button => {
            button.addEventListener('click', function() {
                const bookingId = this.getAttribute('data-id');
                const status = this.getAttribute('data-status');
                currentBookingId = bookingId;
                currentBookingStatus = status;
                
                // Don't allow confirming if already confirmed
                if (status === 'confirmed') {
                    alert('This booking is already confirmed.');
                    return;
                }
                
                // Update modal title
                document.getElementById('confirmBookingModalLabel').innerText = 'Confirm Booking #' + bookingId;
                
                // Show the modal
                const confirmModal = new bootstrap.Modal(document.getElementById('confirmBookingModal'));
                confirmModal.show();
            });
        });
        
        // Event handler for confirm from details button
        document.querySelector('.confirm-from-details').addEventListener('click', function() {
            // Fetch the current status from the booking details
            fetch('get_booking.php?id=' + currentBookingId)
                .then(response => response.json())
                .then(data => {
                    // Check if booking is already confirmed
                    if (data.status === 'confirmed') {
                        alert('This booking is already confirmed.');
                        bootstrap.Modal.getInstance(document.getElementById('viewBookingModal')).hide();
                        return;
                    }

                    // Hide the details modal
                    bootstrap.Modal.getInstance(document.getElementById('viewBookingModal')).hide();
                    
                    // Update modal title
                    document.getElementById('confirmBookingModalLabel').innerText = 'Confirm Booking #' + currentBookingId;
                    
                    // Show the confirm modal
                    const confirmModal = new bootstrap.Modal(document.getElementById('confirmBookingModal'));
                    confirmModal.show();
                })
                .catch(error => {
                    console.error('Error fetching booking status:', error);
                    alert('Error checking booking status. Please try again.');
                });
        });
        
        // Event handlers for delete booking buttons
        document.querySelectorAll('.delete-booking').forEach(button => {
            button.addEventListener('click', function() {
                const bookingId = this.getAttribute('data-id');
                currentBookingId = bookingId;
                
                // Update modal title
                document.getElementById('deleteBookingModalLabel').innerText = 'Delete Booking #' + bookingId;
                
                // Show the modal
                const deleteModal = new bootstrap.Modal(document.getElementById('deleteBookingModal'));
                deleteModal.show();
            });
        });
    

        // Confirm booking functionality
document.getElementById('confirmBookingBtn').addEventListener('click', function() {
    const bookingId = currentBookingId;
    const sendEmail = document.getElementById('sendConfirmationEmail').checked;
    
    // Create form data to send to the server
    const formData = new FormData();
    formData.append('booking_id', bookingId);
    formData.append('send_email', sendEmail);
    
    // Show loading state
    this.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Confirming...';
    this.disabled = true;
    
    // Send confirmation request to the server
    fetch('confirm_booking.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Show success message
            alert('Booking #' + bookingId + ' has been successfully confirmed' + 
                (data.email_sent ? ' and confirmation email sent.' : '.'));
            
            // Hide the modal
            bootstrap.Modal.getInstance(document.getElementById('confirmBookingModal')).hide();
            
            // Auto reload the page
            setTimeout(function() {
                location.reload();
            }, 1000); // 1 second delay before reload
        } else {
            // Show error message
            alert('Error: ' + data.message);
            
            // Reset button state
            this.innerHTML = 'Confirm Booking';
            this.disabled = false;
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while confirming the booking. Please try again.');
        
        // Reset button state
        this.innerHTML = 'Confirm Booking';
        this.disabled = false;
    });
});

// Delete booking functionality
document.getElementById('deleteBookingBtn').addEventListener('click', function() {
    const bookingId = currentBookingId;
    const sendEmail = document.getElementById('sendCancellationEmail').checked;
    const cancellationReason = document.getElementById('cancellationReason').value;
    
    // Create form data to send to the server
    const formData = new FormData();
    formData.append('booking_id', bookingId);
    formData.append('send_email', sendEmail);
    formData.append('cancellation_reason', cancellationReason);
    
    // Show loading state
    this.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Deleting...';
    this.disabled = true;
    
    // Send delete request to the server
    fetch('delete_booking.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Show success message
            alert('Booking #' + bookingId + ' has been successfully deleted' + 
                (data.email_sent ? ' and notification email sent.' : '.'));
            
            // Hide the modal
            bootstrap.Modal.getInstance(document.getElementById('deleteBookingModal')).hide();
            
            // Auto reload the page
            setTimeout(function() {
                location.reload();
            }, 1000); // 1 second delay before reload
        } else {
            // Show error message
            alert('Error: ' + data.message);
            
            // Reset button state
            this.innerHTML = 'Delete Booking';
            this.disabled = false;
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while deleting the booking. Please try again.');
        
        // Reset button state
        this.innerHTML = 'Delete Booking';
        this.disabled = false;
    });
});

        // Function to update booking row status without page reload
function updateBookingRowStatus(bookingId, newStatus) {
    // Find the row with the booking ID
    const rows = document.querySelectorAll('table tbody tr');
    for (let row of rows) {
        const idCell = row.querySelector('td:first-child');
        if (idCell && idCell.textContent === '#' + bookingId) {
            // Update the status cell
            const statusCell = row.querySelector('td:nth-child(6)');
            if (statusCell) {
                let statusClass = 'status-pending';
                if (newStatus === 'confirmed') {
                    statusClass = 'status-confirmed';
                } else if (newStatus === 'cancelled') {
                    statusClass = 'status-cancelled';
                }
                
                statusCell.innerHTML = `<span class="badge ${statusClass} px-3 py-2">${newStatus.charAt(0).toUpperCase() + newStatus.slice(1)}</span>`;
            }
            
            // Update the actions cell - keep view button, remove others
            const actionsCell = row.querySelector('td:last-child');
            if (actionsCell) {
                const viewButton = actionsCell.querySelector('.view-booking');
                if (viewButton) {
                    // For cancelled bookings, only show the view button
                    if (newStatus === 'cancelled' || newStatus === 'confirmed') {
                        actionsCell.innerHTML = '<div class="btn-group"></div>';
                        actionsCell.querySelector('.btn-group').appendChild(viewButton.cloneNode(true));
                        
                        // Re-attach event listener to the cloned button
                        actionsCell.querySelector('.view-booking').addEventListener('click', function() {
                            currentBookingId = this.getAttribute('data-id');
                            fetchBookingDetails(currentBookingId);
                            const viewModal = new bootstrap.Modal(document.getElementById('viewBookingModal'));
                            viewModal.show();
                        });
                    }
                }
            }
            
            break;
        }
    }
    
    // Also update the buttons in the booking details modal if it's open
    if (currentBookingId === bookingId) {
        // Hide confirm button if the booking is confirmed or cancelled
        const confirmFromDetailsBtn = document.getElementById('confirmFromDetailsBtn');
        if (confirmFromDetailsBtn) {
            if (newStatus === 'confirmed' || newStatus === 'cancelled') {
                confirmFromDetailsBtn.style.display = 'none';
            }
        }
        
        // Hide delete/cancel button if the booking is already cancelled
        const deleteFromDetailsBtn = document.getElementById('deleteFromDetailsBtn');
        if (deleteFromDetailsBtn) {
            if (newStatus === 'cancelled') {
                deleteFromDetailsBtn.style.display = 'none';
            }
        }
    }
}
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
                    // Check if the confirm button should be shown based on booking status
                    const confirmFromDetailsBtn = document.getElementById('confirmFromDetailsBtn');
                    if (data.status === 'confirmed' || data.status === 'cancelled') {
                        confirmFromDetailsBtn.style.display = 'none';
                    } else {
                        confirmFromDetailsBtn.style.display = 'block';
                    }
                    
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
        
        
    </script>
</body>
</html>