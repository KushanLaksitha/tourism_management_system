<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sri Lankan Tourism</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/register.css">
    
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
                        <a class="nav-link" href="destinations.php">Destinations</a>
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
                        <a class="nav-link active btn btn-sm btn-outline-light rounded-pill px-3 py-1 mt-1" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="page-header">
        <div class="container">
            <h1 class="fade-in">Join Ceylon Explorer</h1>
            <p class="fade-in">Create an account to unlock exclusive benefits and personalized travel experiences</p>
        </div>
    </header>

    <!-- Registration Section -->
    <section class="registration-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="row">
                        <!-- Registration Form -->
                        <div class="col-lg-7">
                            <div class="registration-card slide-up">
                                <h2>Create Your Account</h2>
                                <form action="register_process.php" method="POST" class="needs-validation" novalidate>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="firstName" name="firstName" required>
                                            <div class="invalid-feedback">
                                                Please enter your first name.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="lastName" name="lastName" required>
                                            <div class="invalid-feedback">
                                                Please enter your last name.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                        <div class="invalid-feedback">
                                            Please enter a valid email address.
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="e.g. +94 71 234 5678">
                                        <div class="form-text">Optional, but recommended for trip-related communications</div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="country" class="form-label">Country</label>
                                        <select class="form-select" id="country" name="country" required>
                                            <option value="" selected disabled>Select your country</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AX">Åland Islands</option>
                                            <option value="AL">Albania</option>
                                            <!-- Add more countries as needed -->
                                            <option value="US">United States</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="CA">Canada</option>
                                            <option value="AU">Australia</option>
                                            <option value="IN">India</option>
                                            <option value="LK">Sri Lanka</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select your country.
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                        <div class="form-text">Must be at least 8 characters with letters, numbers, and special characters</div>
                                        <div class="invalid-feedback">
                                            Please create a password.
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                                        <div class="invalid-feedback">
                                            Passwords must match.
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="newsletter" name="newsletter" checked>
                                            <label class="form-check-label" for="newsletter">
                                                Subscribe to our newsletter for travel tips and exclusive offers
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="termsAgree" name="termsAgree" required>
                                            <label class="form-check-label" for="termsAgree">
                                                I agree to the <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
                                            </label>
                                            <div class="invalid-feedback">
                                                You must agree to the terms to proceed.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-custom-primary">Create Account</button>
                                    </div>
                                    
                                    <div class="login-link">
                                        Already have an account? <a href="login.php">Sign in</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <!-- Benefits Box -->
                        <div class="col-lg-5">
                            <div class="benefits-box slide-up">
                                <h3>Member Benefits</h3>
                                <ul class="benefits-list">
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <div>Save your favorite destinations and create travel wishlists</div>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <div>Receive personalized trip recommendations based on your preferences</div>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <div>Access exclusive member-only discounts and special offers</div>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <div>Book and manage your tours and accommodations in one place</div>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <div>Fast checkout with saved payment methods and travel preferences</div>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        <div>Earn loyalty points for future discounts on Sri Lankan experiences</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="footer-logo">Ceylon<span>Explorer</span></div>
                    <p class="footer-text">We are dedicated to providing unforgettable experiences for travelers exploring the beauty and culture of Sri Lanka.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-5 mb-md-0">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Tours</a></li>
                        <li><a href="#">Destinations</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 mb-5 mb-md-0">
                    <h3 class="footer-title">Popular Destinations</h3>
                    <ul class="footer-links">
                        <li><a href="#">Kandy</a></li>
                        <li><a href="#">Sigiriya</a></li>
                        <li><a href="#">Galle</a></li>
                        <li><a href="#">Ella</a></li>
                        <li><a href="#">Yala National Park</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h3 class="footer-title">Contact Information</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt me-2"></i> 123 Temple Road, Colombo, Sri Lanka</li>
                        <li><i class="fas fa-phone-alt me-2"></i> +94 11 234 5678</li>
                        <li><i class="fas fa-envelope me-2"></i> info@ceylonexplorer.com</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p class="mb-0">&copy; 2025 CeylonExplorer. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <div class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="js/register.js"></script>
</body>
</html>