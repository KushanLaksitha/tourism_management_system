<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Ceylon Explorer</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/contact.css">

    
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
                        <a class="nav-link active" href="contact.php">Contact</a>
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
    <header class="page-header">
        <div class="container">
            <h1 class="fade-in">Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </header>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="section-title slide-up">
                <h2>Get in Touch</h2>
                <p>We'd love to hear from you. Reach out to us with any questions or inquiries.</p>
            </div>
            <div class="row">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="contact-info">
                        <h3>Contact Information</h3>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-info-text">
                                <h4>Our Location</h4>
                                <p>123 Temple Road, Colombo 00300, Sri Lanka</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="contact-info-text">
                                <h4>Call Us</h4>
                                <p>+94 11 234 5678</p>
                                <p>+94 77 890 1234</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-info-text">
                                <h4>Email Us</h4>
                                <p>info@ceylonexplorer.com</p>
                                <p>bookings@ceylonexplorer.com</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-info-text">
                                <h4>Office Hours</h4>
                                <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
                                <p>Saturday: 9:00 AM - 1:00 PM</p>
                                <p>Sunday: Closed</p>
                            </div>
                        </div>
                        <div class="social-links">
                            <h4>Connect With Us</h4>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form">
                        <h3>Send Us a Message</h3>
                        <form id="contactForm" action="contact/contact.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number (Optional)">
                            <select class="form-control" id="inquiryType" name="inquiryType">
                                <option value="" selected disabled>Type of Inquiry</option>
                                <option value="general">General Information</option>
                                <option value="booking">Booking Inquiry</option>
                                <option value="packages">Custom Tour Packages</option>
                                <option value="feedback">Feedback</option>
                                <option value="other">Other</option>
                            </select>
                            <textarea class="form-control" id="message" name="message" placeholder="Your Message" required></textarea>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="privacy" required>
                                <label class="form-check-label" for="privacy">
                                    I agree to the <a href="#">privacy policy</a> and consent to having my data processed
                                </label>
                            </div>
                            <button type="submit" class="btn btn-custom-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="section-title slide-up">
                <h2>Find Us</h2>
                <p>Visit our office in the heart of Colombo</p>
            </div>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63371.80385896985!2d79.82118697346425!3d6.921833369686875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo%2C%20Sri%20Lanka!5e0!3m2!1sen!2sus!4v1627397471087!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-title slide-up">
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to the most common questions about traveling in Sri Lanka</p>
            </div>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            What is the best time to visit Sri Lanka?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Sri Lanka has a tropical climate with distinct dry and wet seasons that vary by region. The best time to visit depends on which part of the island you plan to explore. Generally, December to March is ideal for the west and south coasts and the hill country, while April to September is better for the east coast. The cultural triangle in the center can be visited year-round.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Do I need a visa to visit Sri Lanka?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Most visitors to Sri Lanka require an Electronic Travel Authorization (ETA) before arrival. This can be obtained online through the official Sri Lanka ETA website. The ETA is valid for 30 days and can be extended for up to 6 months after arrival. Some nationalities may be eligible for visa-free entry or visa on arrival, but it's always best to check the current requirements before traveling.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How many days do I need to explore Sri Lanka?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            While you could see the highlights in a week, we recommend at least 10-14 days to truly experience Sri Lanka's diversity. This allows time to explore the cultural triangle, hill country, wildlife parks, and beaches without rushing. For those wanting a more comprehensive experience, 2-3 weeks would be ideal. We offer customized itineraries for any duration to maximize your experience.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            What is the currency in Sri Lanka and can I use credit cards?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            The currency of Sri Lanka is the Sri Lankan Rupee (LKR). Major credit cards are accepted in hotels, larger restaurants, and established shops in urban areas. However, it's advisable to carry cash for smaller establishments, local markets, and rural areas. ATMs are widely available in cities and tourist destinations. We recommend exchanging some currency upon arrival at the airport for immediate expenses.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Is it safe to travel in Sri Lanka?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Sri Lanka is generally a safe destination for travelers with low crime rates against tourists. The civil war ended in 2009, and the country has been peaceful since then. As with any destination, normal precautions should be taken, especially in crowded places. The Sri Lankan people are known for their hospitality and friendliness toward visitors. Our guides are experienced in ensuring your safety and comfort throughout your journey.
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="tours.php">Tours</a></li>
                        <li><a href="destinations.php">Destinations</a></li>
                        <li><a href="contact.php">Contact</a></li>
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
                    <h4 class="footer-title">Contact Info</h4>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt me-2"></i> 42 Temple Road, Colombo 03, Sri Lanka</li>
                        <li><i class="fas fa-phone-alt me-2"></i> +94 11 234 5678</li>
                        <li><i class="fas fa-envelope me-2"></i> info@ceylonexplorer.com</li>
                        <li><i class="fas fa-clock me-2"></i> Mon-Fri: 9AM - 6PM</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p class="mb-0">© 2024 CeylonExplorer. All rights reserved. | Designed with <i class="fas fa-heart text-danger"></i> for Sri Lankan Tourism</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <div class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="js/contact.js"></script>
</body>
</html>