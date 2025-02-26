
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Sri Lankan Adventure - Ceylon Explorer</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Flatpickr for date picker -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    
    <link rel="stylesheet" href="css/booking.css">


</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Ceylon<span>Explorer</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="destinations.php">Destinations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tours.php">Tours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="accommodations.php">Accommodations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-outline-light rounded-pill px-3 py-1 mt-1" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1 class="fade-in">Book Your Sri Lankan Adventure</h1>
            <p class="fade-in">Fill out the form below to start your journey to paradise</p>
        </div>
    </section>


    <!-- Booking Form Section -->
    <!-- Booking Form Section - Updated with name attributes -->
<section class="booking-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="booking-container slide-up">
                    <div class="booking-header">
                        <h2>Booking Form</h2>
                        <p>Please fill all required fields marked with *</p>
                    </div>
                    <div class="booking-form">
                        <form id="bookingForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstName" class="form-label required-field">First Name</label>
                                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                                        <div class="invalid-feedback">Please enter your first name.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastName" class="form-label required-field">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                                        <div class="invalid-feedback">Please enter your last name.</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label required-field">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                        <div class="invalid-feedback">Please enter a valid email address.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="form-label required-field">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" required>
                                        <div class="invalid-feedback">Please enter your phone number.</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tourPackage" class="form-label required-field">Tour Package</label>
                                        <select class="form-select" id="tourPackage" name="tourPackage" required>
                                            <option value="" selected disabled>Select a tour package</option>
                                            <option value="cultural-heritage">Cultural Heritage Tour - 7 Days</option>
                                            <option value="beach-retreat">Beach Retreat - 5 Days</option>
                                            <option value="wildlife-safari">Wildlife Safari - 4 Days</option>
                                            <option value="tea-country">Tea Country Adventure - 6 Days</option>
                                            <option value="island-explorer">Island Explorer - 10 Days</option>
                                            <option value="custom">Custom Package</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a tour package.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="guests" class="form-label required-field">Number of Guests</label>
                                        <select class="form-select" id="guests" name="guests" required>
                                            <option value="" selected disabled>Select number of guests</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10+">10+</option>
                                        </select>
                                        <div class="invalid-feedback">Please select the number of guests.</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="arrivalDate" class="form-label required-field">Arrival Date</label>
                                        <div class="date-input-group">
                                            <input type="text" class="form-control datepicker" id="arrivalDate" name="arrivalDate" placeholder="Select date" required>
                                            <i class="far fa-calendar"></i>
                                            <div class="invalid-feedback">Please select an arrival date.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="departureDate" class="form-label required-field">Departure Date</label>
                                        <div class="date-input-group">
                                            <input type="text" class="form-control datepicker" id="departureDate" name="departureDate" placeholder="Select date" required>
                                            <i class="far fa-calendar"></i>
                                            <div class="invalid-feedback">Please select a departure date.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="accommodationType" class="form-label required-field">Accommodation Preference</label>
                                <select class="form-select" id="accommodationType" name="accommodationType" required>
                                    <option value="" selected disabled>Select accommodation type</option>
                                    <option value="luxury">Luxury (5-Star Hotels)</option>
                                    <option value="mid-range">Mid-Range (3-4 Star Hotels)</option>
                                    <option value="budget">Budget-Friendly</option>
                                    <option value="boutique">Boutique Hotels</option>
                                    <option value="eco">Eco-Friendly Lodges</option>
                                </select>
                                <div class="invalid-feedback">Please select your accommodation preference.</div>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Special Interests (Optional)</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="wildlife" name="wildlife" value="1">
                                            <label class="form-check-label" for="wildlife">Wildlife</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="beaches" name="beaches" value="1">
                                            <label class="form-check-label" for="beaches">Beaches</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="culture" name="culture" value="1">
                                            <label class="form-check-label" for="culture">Culture & History</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="adventure" name="adventure" value="1">
                                            <label class="form-check-label" for="adventure">Adventure</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="ayurveda" name="ayurveda" value="1">
                                            <label class="form-check-label" for="ayurveda">Ayurveda & Wellness</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="food" name="food" value="1">
                                            <label class="form-check-label" for="food">Food & Cuisine</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="specialRequests" class="form-label">Special Requests (Optional)</label>
                                <textarea class="form-control" id="specialRequests" name="specialRequests" rows="4" placeholder="Please let us know if you have any special requirements..."></textarea>
                            </div>
                            
                            
                            
                            <button type="submit" class="btn btn-book-now">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Rest of your booking section code remains the same -->
        </div>
    </div>
</section>


    <!-- Why Book With Us Section -->
    <section class="why-book-section">
        <div class="container">
            <div class="section-title slide-up">
                <h2>Why Book With Us</h2>
                <p>Experience the Ceylon Explorer difference</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <h3>Best Price Guarantee</h3>
                        <p>We match or beat any legitimate price for the same itinerary.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Secure Booking</h3>
                        <p>Your personal information and payments are securely processed.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-medal"></i>
                        </div>
                        <h3>Local Expertise</h3>
                        <p>Knowledgeable local guides with years of experience.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3>Personalized Service</h3>
                        <p>We tailor your trip to match your preferences.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Footer -->
   <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5">
                    <h3 class="footer-logo">Ceylon<span>Explorer</span></h3>
                    <p class="footer-text">We are a premium travel agency specialized in creating unforgettable experiences across Sri Lanka. From pristine beaches to ancient ruins, let us guide you through paradise.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-5">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="destinations.php">Destinations</a></li>
                        <li><a href="tours.php">Tours</a></li>
                        <li><a href="accommodations.php">Accommodations</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h4 class="footer-title">Explore</h4>
                    <ul class="footer-links">
                        <li><a href="#">Beach Holidays</a></li>
                        <li><a href="#">Wildlife Safari</a></li>
                        <li><a href="#">Heritage Tours</a></li>
                        <li><a href="#">Ayurveda & Wellness</a></li>
                        <li><a href="#">Adventure Activities</a></li>
                        <li><a href="#">Honeymoon Packages</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h4 class="footer-title">Contact Info</h4>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt me-2"></i> 123 Galle Road, Colombo 03, Sri Lanka</li>
                        <li><i class="fas fa-phone me-2"></i> +94 11 234 5678</li>
                        <li><i class="fas fa-envelope me-2"></i> info@ceylonexplorer.com</li>
                        <li><i class="fas fa-clock me-2"></i> Monday-Friday: 9am to 6pm</li>
                        <li><i class="fas fa-clock me-2"></i> Saturday: 9am to 1pm</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; 2025 Ceylon Explorer. All Rights Reserved. | Designed by YourName</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    
    
    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    

    <script>
        
        
        // Initialize date pickers
        document.addEventListener('DOMContentLoaded', function() {
            // Date picker initialization for arrival and departure dates
            flatpickr(".datepicker", {
                altInput: true,
                altFormat: "F j, Y",
                dateFormat: "Y-m-d",
                minDate: "today"
            });
            
            // Ensure departure date is after arrival date
            const arrivalDatePicker = flatpickr("#arrivalDate", {
                altInput: true,
                altFormat: "F j, Y",
                dateFormat: "Y-m-d",
                minDate: "today",
                onChange: function(selectedDates, dateStr) {
                    departureDatePicker.set("minDate", dateStr);
                }
            });
            
            const departureDatePicker = flatpickr("#departureDate", {
                altInput: true,
                altFormat: "F j, Y",
                dateFormat: "Y-m-d",
                minDate: new Date().fp_incr(1) // Minimum departure date is the next day
            });
        
            // Rest of your form validation code...
        });
        

        document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("bookingForm").addEventListener("submit", function (event) {
            event.preventDefault(); // Prevent default form submission

            let form = this;
            if (!form.checkValidity()) {
                form.classList.add("was-validated"); // Bootstrap validation styling
                return;
            }

            let formData = new FormData(form);

            fetch("booking/booking.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message); // Show success/error message
                if (data.status === "success") {
                    form.reset();
                    form.classList.remove("was-validated");
                }
            })
            .catch(error => {
                console.error("Error:", error);
                alert("An error occurred. Please try again.");
            });
        });
    });


    </script>
</body>
</html>
