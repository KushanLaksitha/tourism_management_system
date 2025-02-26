<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Lankan Tours - Ceylon Explorer</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/tours.css">

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
                        <a class="nav-link active" href="tours.php">Tours</a>
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
            <h1>Explore Our Sri Lanka Tours</h1>
            <p>Discover carefully crafted tour packages designed to experience the best of Sri Lanka's natural wonders, cultural heritage, and warm hospitality.</p>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="filter-section">
        <div class="container">
            <h3 class="filter-title">Find Your Perfect Tour</h3>
            <form action="#" method="post" class="row g-3">
                <div class="col-md-3">
                    <select class="form-select" name="duration">
                        <option value="">Tour Duration</option>
                        <option value="1-3">1-3 Days</option>
                        <option value="4-7">4-7 Days</option>
                        <option value="8-14">8-14 Days</option>
                        <option value="15+">15+ Days</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select" name="destination">
                        <option value="">Destination</option>
                        <option value="cultural">Cultural Triangle</option>
                        <option value="hill-country">Hill Country</option>
                        <option value="wildlife">Wildlife & National Parks</option>
                        <option value="beaches">Beaches & Coastal</option>
                        <option value="all-island">All Island</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select" name="activity">
                        <option value="">Activity Type</option>
                        <option value="adventure">Adventure</option>
                        <option value="cultural">Cultural</option>
                        <option value="wildlife">Wildlife</option>
                        <option value="beach">Beach</option>
                        <option value="ayurveda">Ayurveda & Wellness</option>
                        <option value="honeymoon">Honeymoon</option>
                        <option value="family">Family</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select" name="price_range">
                        <option value="">Price Range</option>
                        <option value="budget">Budget (Under $500)</option>
                        <option value="standard">Standard ($500-$1000)</option>
                        <option value="luxury">Luxury ($1000+)</option>
                    </select>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-filter">Filter Results</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Featured Tours Section -->
<section class="featured-tours">
    <div class="container">
        <div class="section-title">
            <h2>Featured Tours</h2>
            <p>Our most popular and highly-rated Sri Lankan adventures</p>
        </div>
        
        <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
                    <div class="tour-card">
                        <div class="tour-img">
                            <img src="https://acuvrfkwen.cloudimg.io/width/1500/q35.foil1/https://voyageinstyle.net/wp-content/uploads/2020/01/sigiriya-pond6-scaled.jpg" alt="Cultural Triangle Explorer">
                            <div class="tour-badge">Bestseller</div>
                        </div>
                        <div class="tour-info">
                            <h3 class="tour-title">Cultural Triangle Explorer</h3>
                            <div class="tour-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(218 reviews)</span>
                            </div>
                            <div class="tour-highlights">
                                <div class="tour-highlight-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Sigiriya Rock Fortress</span>
                                </div>
                                <div class="tour-highlight-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Ancient city of Polonnaruwa</span>
                                </div>
                                <div class="tour-highlight-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Dambulla Cave Temple</span>
                                </div>
                            </div>
                            <div class="tour-footer">
                                <div class="tour-duration">
                                    <i class="far fa-clock"></i>
                                    <span>5 Days / 4 Nights</span>
                                </div>
                                <div class="tour-price">
                                    $699 <span>per person</span>
                                </div>
                            </div>
                            <a href="login.php" class="btn-view-details">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="tour-card">
                        <div class="tour-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKwg4jcZHftrX6yqKFCXwmeBKOG9b_4Ii5NA&s" alt="Hill Country Tea Trails">
                        </div>
                        <div class="tour-info">
                            <h3 class="tour-title">Hill Country Tea Trails</h3>
                            <div class="tour-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(175 reviews)</span>
                            </div>
                            <div class="tour-highlights">
                                <div class="tour-highlight-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Nuwara Eliya tea plantations</span>
                                </div>
                                <div class="tour-highlight-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Scenic train journey</span>
                                </div>
                                <div class="tour-highlight-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Horton Plains National Park</span>
                                </div>
                            </div>
                            <div class="tour-footer">
                                <div class="tour-duration">
                                    <i class="far fa-clock"></i>
                                    <span>4 Days / 3 Nights</span>
                                </div>
                                <div class="tour-price">
                                    $599 <span>per person</span>
                                </div>
                            </div>
                            <a href="login.php" class="btn-view-details">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="tour-card">
                        <div class="tour-img">
                            <img src="https://www.srilankadrivercarrent.com/wp-content/uploads/2021/02/Wildlife-Safari-Sri-Lanka.jpg" alt="Wildlife Safari Adventure">
                            <div class="tour-badge">Popular</div>
                        </div>
                        <div class="tour-info">
                            <h3 class="tour-title">Wildlife Safari Adventure</h3>
                            <div class="tour-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(142 reviews)</span>
                            </div>
                            <div class="tour-highlights">
                                <div class="tour-highlight-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Yala National Park</span>
                                </div>
                                <div class="tour-highlight-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Udawalawe Elephant Transit Home</span>
                                </div>
                                <div class="tour-highlight-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Bundala Bird Sanctuary</span>
                                </div>
                            </div>
                            <div class="tour-footer">
                                <div class="tour-duration">
                                    <i class="far fa-clock"></i>
                                    <span>6 Days / 5 Nights</span>
                                </div>
                                <div class="tour-price">
                                    $849 <span>per person</span>
                                </div>
                            </div>
                            <a href="login.php" class="btn-view-details">Book Now</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>

    <!-- Tour Listings -->
    <section class="tour-listings py-5">
        <div class="container">
            <div class="row">
                

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="tour-card">
                        <div class="tour-img">
                            <img src="https://www.lightfoottravel.com/cdn-cgi/image/width=,height=,quality=85/https://lft-dev-images.s3.eu-west-1.amazonaws.com/public/destination/WijayabeachSriLanka.jpg" alt="Southern Beaches Escape">
                        </div>
                        <div class="tour-info">
                            <h3 class="tour-title">Southern Beaches Escape</h3>
                            <div class="tour-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(189 reviews)</span>
                            </div>
                            <div class="tour-highlights">
                                <div class="tour-highlight-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Unawatuna & Mirissa beaches</span>
                                </div>
                                <div class="tour-highlight-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Whale watching excursion</span>
                                </div>
                                <div class="tour-highlight-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Galle Fort exploration</span>
                                </div>
                            </div>
                            <div class="tour-footer">
                                <div class="tour-duration">
                                    <i class="far fa-clock"></i>
                                    <span>7 Days / 6 Nights</span>
                                </div>
                                <div class="tour-price">
                                    $799 <span>per person</span>
                                </div>
                            </div>
                            <a href="login.php" class="btn-view-details">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
    <div class="tour-card">
        <div class="tour-img">
            <img src="https://www.onthegotours.com/repository/Boat-on-the-beach-in-Trincomalee--Sri-Lanka-Tours--On-The-Go-Tours-294591461670778.jpg" alt="Eastern Beaches Escape">
        </div>
        <div class="tour-info">
            <h3 class="tour-title">Eastern Beaches Escape</h3>
            <div class="tour-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>(189 reviews)</span>
            </div>
            <div class="tour-highlights">
                <div class="tour-highlight-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Marbel & Nilaveli beaches</span>
                </div>
                <div class="tour-highlight-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Whale watching excursion</span>
                </div>
                <div class="tour-highlight-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Trincomalee Fort exploration</span>
                </div>
            </div>
            <div class="tour-footer">
                <div class="tour-duration">
                    <i class="far fa-clock"></i>
                    <span>7 Days / 6 Nights</span>
                </div>
                <div class="tour-price">
                    $799 <span>per person</span>
                </div>
            </div>
            <a href="login.php" class="btn-view-details">Book Now</a>
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6 mb-4">
    <div class="tour-card">
        <div class="tour-img">
            <img src="https://images.travelandleisureasia.com/wp-content/uploads/sites/3/2024/02/26131023/sen-wellness-sanctuary.jpg" alt="Ayurveda & Wellness Retreat">
            <div class="tour-badge">New</div>
        </div>
        <div class="tour-info">
            <h3 class="tour-title">Ayurveda & Wellness Retreat</h3>
            <div class="tour-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span>(94 reviews)</span>
            </div>
            <div class="tour-highlights">
                <div class="tour-highlight-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Authentic Ayurvedic treatments</span>
                </div>
                <div class="tour-highlight-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Yoga and meditation sessions</span>
                </div>
                <div class="tour-highlight-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Herbal garden visits</span>
                </div>
            </div>
            <div class="tour-footer">
                <div class="tour-duration">
                    <i class="far fa-clock"></i>
                    <span>10 Days / 9 Nights</span>
                </div>
                <div class="tour-price">
                    $1,299 <span>per person</span>
                </div>
            </div>
            <a href="login.php" class="btn-view-details">Book Now</a>
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6 mb-4">
    <div class="tour-card">
        <div class="tour-img">
            <img src="https://www.maga.lk/wp-content/uploads/2018/04/DJI_0023.jpg" alt="Complete Sri Lanka Circuit">
            <div class="tour-badge">Bestseller</div>
        </div>
        <div class="tour-info">
            <h3 class="tour-title">Complete Sri Lanka Circuit</h3>
            <div class="tour-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>(245 reviews)</span>
            </div>
            <div class="tour-highlights">
                <div class="tour-highlight-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Cultural, wildlife & beach experiences</span>
                </div>
                <div class="tour-highlight-item">
                    <i class="fas fa-check-circle"></i>
                    <span>All major highlights of the island</span>
                </div>
                <div class="tour-highlight-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Authentic local encounters</span>
                </div>
            </div>
            <div class="tour-footer">
                <div class="tour-duration">
                    <i class="far fa-clock"></i>
                    <span>14 Days / 13 Nights</span>
                </div>
                <div class="tour-price">
                    $1,599 <span>per person</span>
                </div>
            </div>
            <a href="login.php" class="btn-view-details">Book Now</a>
        </div>
    </div>
    
</div>
<div class="col-lg-4 col-md-6 mb-4">
    <div class="tour-card">
        <div class="tour-img">
            <img src="https://www.ecoteam.lk/images/Hiking_New/Trekking20.jpg" alt="Ancient Ruins & Waterfall Trek">
        </div>
        <div class="tour-info">
            <h3 class="tour-title">Ancient Ruins & Waterfall Trek</h3>
            <div class="tour-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <span>(87 reviews)</span>
            </div>
            <div class="tour-highlights">
                <div class="tour-highlight-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Anuradhapura sacred city</span>
                </div>
                <div class="tour-highlight-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Ravana Falls hike</span>
                </div>
                <div class="tour-highlight-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Kandy Temple of the Tooth</span>
                </div>
            </div>
            <div class="tour-footer">
                <div class="tour-duration">
                    <i class="far fa-clock"></i>
                    <span>6 Days / 5 Nights</span>
                </div>
                <div class="tour-price">
                    $749 <span>per person</span>
                </div>
            </div>
            <a href="login.php" class="btn-view-details">Book Now</a>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
    <div class="tour-card">
        <div class="tour-img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSntc2ojABmJILeAryrcqB8gqfidHCxkAAA1g&s" alt="Coastal Paradise Getaway">
            <div class="tour-badge">New!</div>
        </div>
        <div class="tour-info">
            <h3 class="tour-title">Coastal Paradise Getaway</h3>
            <div class="tour-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span>(98 reviews)</span>
            </div>
            <div class="tour-highlights">
                <div class="tour-highlight-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Galle Fort UNESCO site</span>
                </div>
                <div class="tour-highlight-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Mirissa whale watching</span>
                </div>
                <div class="tour-highlight-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Bentota beach relaxation</span>
                </div>
            </div>
            <div class="tour-footer">
                <div class="tour-duration">
                    <i class="far fa-clock"></i>
                    <span>7 Days / 6 Nights</span>
                </div>
                <div class="tour-price">
                    $899 <span>per person</span>
                </div>
            </div>
            <a href="login.php" class="btn-view-details">Book Now</a>
        </div>
    </div>
</div>
</div>


<!-- Pagination -->
<nav aria-label="Page navigation">
    <ul class="pagination">
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
</section>



<!-- Call to Action -->
<section class="cta-section">
    <div class="container">
        <h2>Ready for an Unforgettable Sri Lankan Adventure?</h2>
        <p>Contact our travel experts today to plan your dream vacation in the Pearl of the Indian Ocean.</p>
        <a href="contact.php" class="btn btn-custom-primary">Get in Touch</a>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="footer-logo">Ceylon<span>Explorer</span></div>
                <p class="footer-text">Discover the beauty and rich culture of Sri Lanka with our expertly crafted tours and personalized travel experiences. Your journey to paradise begins with us.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-tripadvisor"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
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
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                <h4 class="footer-title">Popular Tours</h4>
                <ul class="footer-links">
                    <li><a href="#">Cultural Triangle Explorer</a></li>
                    <li><a href="#">Hill Country Tea Trails</a></li>
                    <li><a href="#">Wildlife Safari Adventure</a></li>
                    <li><a href="#">Southern Beaches Escape</a></li>
                    <li><a href="#">Complete Sri Lanka Circuit</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="footer-title">Contact Info</h4>
                <ul class="footer-links">
                    <li><i class="fas fa-map-marker-alt mr-2"></i> 123 Temple Road, Colombo 3, Sri Lanka</li>
                    <li><i class="fas fa-phone-alt mr-2"></i> +94 11 234 5678</li>
                    <li><i class="fas fa-envelope mr-2"></i> info@ceylonexplorer.com</li>
                    <li><i class="fas fa-clock mr-2"></i> Mon-Sat: 9:00 AM - 6:00 PM</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p class="mb-0">&copy; 2025 CeylonExplorer. All rights reserved. | Designed with <i class="fas fa-heart text-danger"></i> for Sri Lanka</p>
        </div>
    </div>
</footer>

<!-- Toast container -->
<div class="toast-container"></div>

<!-- Back to top button -->
<div class="back-to-top">
    <i class="fas fa-arrow-up"></i>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="js/tours.js"></script>
</body>
</html>