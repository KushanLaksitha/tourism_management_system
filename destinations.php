<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations - Ceylon Explorer</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    
    <link href="css/destinations.css" rel="stylesheet">   
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
    <header class="page-header">
        <div class="container">
            <h1 class="fade-in">Explore Sri Lanka's Destinations</h1>
            <p class="fade-in">Discover ancient cities, golden beaches, misty mountains, and lush wildlife</p>
        </div>
    </header>

    

    <!-- Filter Section -->
    <section class="filter-section">
        <div class="container">
            <form class="filter-form row g-3">
                <div class="col-md-3">
                    <label for="regionFilter" class="form-label">Region</label>
                    <select class="form-select" id="regionFilter">
                        <option value="" selected>All Regions</option>
                        <option value="central">Central Province</option>
                        <option value="southern">Southern Province</option>
                        <option value="northern">Northern Province</option>
                        <option value="eastern">Eastern Province</option>
                        <option value="western">Western Province</option>
                        <option value="north-central">North Central Province</option>
                        <option value="north-western">North Western Province</option>
                        <option value="uva">Uva Province</option>
                        <option value="sabaragamuwa">Sabaragamuwa Province</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="categoryFilter" class="form-label">Category</label>
                    <select class="form-select" id="categoryFilter">
                        <option value="" selected>All Categories</option>
                        <option value="beaches">Beaches</option>
                        <option value="mountains">Mountains & Hills</option>
                        <option value="wildlife">Wildlife & Nature</option>
                        <option value="heritage">Heritage & Culture</option>
                        <option value="pilgrimage">Pilgrimage</option>
                        <option value="adventure">Adventure</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="searchFilter" class="form-label">Search</label>
                    <input type="text" class="form-control" id="searchFilter" placeholder="Search destinations...">
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button type="submit" class="btn w-100">Apply Filters</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Popular Destinations -->
    <section class="destination-section">
        <div class="container">
            <div class="section-title slide-up">
                <h2>Popular Destinations</h2>
                <p>Explore the most loved places in Sri Lanka</p>
            </div>
            <div class="row">
                <!-- Destination 1 - Sigiriya -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-card">
                        <div class="destination-img">
                            <img src="https://www.biofin.org/sites/default/files/content/news_media/Screenshot%202564-08-02%20at%2010.14.55.png" alt="Sigiriya">
                            <span class="destination-category">Heritage</span>
                        </div>
                        <div class="destination-info">
                            <h3>Sigiriya</h3>
                            <p>Ancient rock fortress with frescoes, water gardens and the famous Lion's Paw entrance.</p>
                            <div class="destination-meta">
                                <div class="destination-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>(4.5)</span>
                                </div>
                                <div class="destination-location">
                                    <i class="fas fa-map-marker-alt"></i> North Central
                                </div>
                            </div>
                            <div class="destination-action">
                                <a href="https://en.wikipedia.org/wiki/Sigiriya" class="btn-view-details">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Destination 2 - Kandy -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-card">
                        <div class="destination-img">
                            <img src="https://www.ceylonexpeditions.com/medias/destination_places/big/130/kandy-1.jpg" alt="Kandy">
                            <span class="destination-category">Cultural</span>
                        </div>
                        <div class="destination-info">
                            <h3>Kandy</h3>
                            <p>The cultural capital with the Temple of the Tooth Relic, surrounded by hills and a scenic lake.</p>
                            <div class="destination-meta">
                                <div class="destination-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(4.8)</span>
                                </div>
                                <div class="destination-location">
                                    <i class="fas fa-map-marker-alt"></i> Central
                                </div>
                            </div>
                            <div class="destination-action">
                                <a href="https://en.wikipedia.org/wiki/Kandy" class="btn-view-details">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Destination 3 - Galle -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-card">
                        <div class="destination-img">
                            <img src="https://cdn.audleytravel.com/1050/749/79/15978821-galle-fort-lighthouse-sri-lanka.webp" alt="Galle">
                            <span class="destination-category">Colonial</span>
                        </div>
                        <div class="destination-info">
                            <h3>Galle Fort</h3>
                            <p>A UNESCO World Heritage site with colonial architecture, narrow streets, and ocean views.</p>
                            <div class="destination-meta">
                                <div class="destination-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>(4.0)</span>
                                </div>
                                <div class="destination-location">
                                    <i class="fas fa-map-marker-alt"></i> Southern
                                </div>
                            </div>
                            <div class="destination-action">
                                <a href="https://en.wikipedia.org/wiki/Galle_Fort" class="btn-view-details">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Destination 4 - Ella -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-card">
                        <div class="destination-img">
                            <img src="https://www.travelwithachila.com/wp-content/uploads/2023/06/Ella-Sri-Lanka.jpg" alt="Ella">
                            <span class="destination-category">Nature</span>
                        </div>
                        <div class="destination-info">
                            <h3>Ella</h3>
                            <p>A picturesque mountain village with stunning hiking trails, waterfalls and the famous Nine Arch Bridge.</p>
                            <div class="destination-meta">
                                <div class="destination-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>(4.6)</span>
                                </div>
                                <div class="destination-location">
                                    <i class="fas fa-map-marker-alt"></i> Uva
                                </div>
                            </div>
                            <div class="destination-action">
                                <a href="https://en.wikipedia.org/wiki/Ella,_Sri_Lanka" class="btn-view-details">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Destination 5 - Yala National Park -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-card">
                        <div class="destination-img">
                            <img src="https://www.sankileisure.com/wp-content/uploads/2019/06/yala-main-entrance-1024x683.jpg" alt="Yala">
                            <span class="destination-category">Wildlife</span>
                        </div>
                        <div class="destination-info">
                            <h3>Yala National Park</h3>
                            <p>Sri Lanka's most famous wildlife park known for its leopard population and diverse ecosystems.</p>
                            <div class="destination-meta">
                                <div class="destination-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>(4.2)</span>
                                </div>
                                <div class="destination-location">
                                    <i class="fas fa-map-marker-alt"></i> Southern
                                </div>
                            </div>
                            <div class="destination-action">
                                <a href="https://en.wikipedia.org/wiki/Yala_National_Park" class="btn-view-details">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Destination 6 - Mirissa -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-card">
                    <div class="destination-img">
                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/17/64/74/78/mirissa-beach.jpg?w=1100&h=1100&s=1" alt="Mirissa">
                            <span class="destination-category">Beach</span>
                        </div>
                        <div class="destination-info">
                            <h3>Mirissa</h3>
                            <p>A paradise beach known for whale watching, surfing and its laid-back atmosphere with golden sands.</p>
                            <div class="destination-meta">
                                <div class="destination-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>(4.4)</span>
                                </div>
                                <div class="destination-location">
                                    <i class="fas fa-map-marker-alt"></i> Southern
                                </div>
                            </div>
                            <div class="destination-action">
                                <a href="https://en.wikipedia.org/wiki/Mirissa" class="btn-view-details">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Explore by Region -->
    <section class="region-section">
        <div class="container">
            <div class="section-title slide-up">
                <h2>Explore by Region</h2>
                <p>Discover the diverse landscapes and attractions across different regions</p>
            </div>
            <div class="row">
                <!-- Region 1 - Central Province -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="region-card">
                        <img src="https://media.istockphoto.com/id/579253918/photo/female-worker-in-tea-plantations-of-sri-lanka.jpg?s=612x612&w=0&k=20&c=TH20917YspP0nXSvdP78hl7wA4UD9h6cV6SrxCcyBcE=" alt="Central Province" class="region-img">
                        <div class="region-overlay">
                            <h3 class="region-name">Central Province</h3>
                            <p class="region-count">15 Destinations</p>
                            <a href="#" class="region-link">Explore Region <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Region 2 - Southern Province -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="region-card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Galle_Fort.jpg/1200px-Galle_Fort.jpg" alt="Southern Province" class="region-img">
                        <div class="region-overlay">
                            <h3 class="region-name">Southern Province</h3>
                            <p class="region-count">18 Destinations</p>
                            <a href="#" class="region-link">Explore Region <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Region 3 - Northern Province -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="region-card">
                        <img src="https://media.istockphoto.com/id/1197155454/photo/nallur-kovil-jaffna.jpg?s=612x612&w=0&k=20&c=yXzVrH9HwxML5IPLgrsr4MRXgkl1Q2toWYrky8jfFKA=" alt="Northern Province" class="region-img">
                        <div class="region-overlay">
                            <h3 class="region-name">Northern Province</h3>
                            <p class="region-count">12 Destinations</p>
                            <a href="#" class="region-link">Explore Region <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Region 4 - Eastern Province -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="region-card">
                        <img src="https://media.istockphoto.com/id/1559912861/photo/nilaveli-beach-sri-lanka.jpg?s=612x612&w=0&k=20&c=TU-yysGdg42wJJoInkfw1EbyVPKSOqjdb4Ty3BP4p3Y=" alt="Eastern Province" class="region-img">
                        <div class="region-overlay">
                            <h3 class="region-name">Eastern Province</h3>
                            <p class="region-count">10 Destinations</p>
                            <a href="#" class="region-link">Explore Region <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Region 5 - Western Province -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="region-card">
                        <img src="https://media.istockphoto.com/id/1251580617/photo/background-view-of-the-colombo-city-skyline-with-modern-architecture-buildi.jpg?s=612x612&w=0&k=20&c=dYuA923PJPoIf4YEQgBSlEEMkK-HP6Sxj5Ty0DMX7KE=" alt="Western Province" class="region-img">
                        <div class="region-overlay">
                            <h3 class="region-name">Western Province</h3>
                            <p class="region-count">14 Destinations</p>
                            <a href="#" class="region-link">Explore Region <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Region 6 - North Central Province -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="region-card">
                        <img src="https://www.antiquitysl.com/assets/images/destinations/sl/Anuradhapura/anuradha-1.jpg" alt="North Central Province" class="region-img">
                        <div class="region-overlay">
                            <h3 class="region-name">North Central Province</h3>
                            <p class="region-count">8 Destinations</p>
                            <a href="#" class="region-link">Explore Region <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pagination -->
    <div class="container pagination-container">
        <nav aria-label="Destinations pagination">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Call to Action -->
    <section class="cta-section">
        <div class="container">
            <h2>Ready to Explore Paradise?</h2>
            <p>Book your personalized Sri Lanka tour with us and experience the beauty, culture, and adventure this tropical island has to offer.</p>
            <a href="contact.php" class="btn btn-custom-primary">Plan Your Trip Now</a>
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
                        <li><a href="accommodations.php">Beach Holidays</a></li>
                        <li><a href="accommodations.php">Wildlife Safari</a></li>
                        <li><a href="accommodations.php">Heritage Tours</a></li>
                        <li><a href="accommodations.php">Ayurveda & Wellness</a></li>
                        <li><a href="accommodations.php">Adventure Activities</a></li>
                        <li><a href="accommodations.php">Honeymoon Packages</a></li>
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

    <!-- Back to top button -->
    <div class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="js/destinations.js"></script>
</body>
</html>