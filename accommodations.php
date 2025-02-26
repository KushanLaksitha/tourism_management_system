<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accommodations - CeylonExplorer</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/accommodation.css">
    
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
                        <a class="nav-link active" href="accommodations.php">Accommodations</a>
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

    <!-- Hero Section -->
    <section class="accommodation-hero">
        <div class="container">
            <div class="hero-text fade-in">
                <h1>Luxury Stays in Sri Lanka</h1>
                <p>From beachfront villas to mountain retreats, discover the perfect accommodation for your tropical getaway.</p>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="filter-section">
        <div class="container">
            <form action="#" method="get">
                <div class="row">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <select class="form-select" name="location">
                            <option value="">All Locations</option>
                            <option value="colombo">Colombo</option>
                            <option value="kandy">Kandy</option>
                            <option value="galle">Galle</option>
                            <option value="ella">Ella</option>
                            <option value="nuwara-eliya">Nuwara Eliya</option>
                            <option value="bentota">Bentota</option>
                            <option value="trincomalee">Trincomalee</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <select class="form-select" name="accommodation-type">
                            <option value="">All Types</option>
                            <option value="hotel">Hotels</option>
                            <option value="resort">Resorts</option>
                            <option value="villa">Villas</option>
                            <option value="boutique">Boutique Hotels</option>
                            <option value="homestay">Homestays</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <select class="form-select" name="price-range">
                            <option value="">All Prices</option>
                            <option value="budget">Budget (Under $50)</option>
                            <option value="mid-range">Mid Range ($50-$150)</option>
                            <option value="luxury">Luxury ($150-$300)</option>
                            <option value="ultra-luxury">Ultra Luxury ($300+)</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-custom-primary w-100">Filter Results</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Featured Accommodations -->
    <section class="featured-accommodations py-5">
        <div class="container">
            <div class="section-title slide-up">
                <h2>Featured Accommodations</h2>
                <p>Handpicked luxury stays for an unforgettable experience</p>
            </div>
            <div class="row">
                <!-- Featured Accommodation 1 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="accommodation-card">
                        <div class="accommodation-img">
                            <div class="featured-badge">Featured</div>
                            <span class="accommodation-type">Luxury Resort</span>
                            <img src="https://d19lgisewk9l6l.cloudfront.net/assetbank/Galle_Face_Hotel_Colombo_55513.jpg" alt="Galle Face Hotel">
                        </div>
                        <div class="accommodation-info">
                            <h3>Galle Face Hotel</h3>
                            <p>Indulge in urban luxury at Colombo's premier 5-star resort with panoramic ocean views.</p>
                            <div class="amenities">
                                <span class="amenity"><i class="fas fa-wifi"></i> Free WiFi</span>
                                <span class="amenity"><i class="fas fa-swimming-pool"></i> Pool</span>
                                <span class="amenity"><i class="fas fa-spa"></i> Spa</span>
                                <span class="amenity"><i class="fas fa-utensils"></i> Restaurant</span>
                                <span class="amenity"><i class="fas fa-concierge-bell"></i> Room Service</span>
                            </div>
                            <div class="accommodation-meta">
                                <div class="location">
                                    <i class="fas fa-map-marker-alt"></i> Colombo
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="price">
                                    $350 <span>/ night</span>
                                </div>
                                <a href="https://gallefacehotel.com/" class="btn btn-view-details">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Featured Accommodation 2 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="accommodation-card">
                        <div class="accommodation-img">
                            <div class="featured-badge">Featured</div>
                            <span class="accommodation-type">Boutique Villa</span>
                            <img src="https://media.cntraveler.com/photos/5acf9d75d5a7fd3385745a1e/16:9/w_2560,c_limit/Wild%20Coast%20Tented%20Lodge%20Exterior%20-%20Credit%20Nomadic%20Resorts%20(2).JPG" alt="Wild Coast Tented Lodge">
                        </div>
                        <div class="accommodation-info">
                            <h3>Wild Coast Tented Lodge</h3>
                            <p>Luxury safari camp with cocoon-like tents nestled between jungle and the Indian Ocean.</p>
                            <div class="amenities">
                                <span class="amenity"><i class="fas fa-wifi"></i> Free WiFi</span>
                                <span class="amenity"><i class="fas fa-swimming-pool"></i> Pool</span>
                                <span class="amenity"><i class="fas fa-paw"></i> Safari</span>
                                <span class="amenity"><i class="fas fa-utensils"></i> Restaurant</span>
                                <span class="amenity"><i class="fas fa-spa"></i> Spa</span>
                            </div>
                            <div class="accommodation-meta">
                                <div class="location">
                                    <i class="fas fa-map-marker-alt"></i> Yala
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="price">
                                    $420 <span>/ night</span>
                                </div>
                                <a href="https://www.resplendentceylon.com/resort/wild-coast-tented-lodge/" class="btn btn-view-details">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Featured Accommodation 3 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="accommodation-card">
                        <div class="accommodation-img">
                            <div class="featured-badge">Featured</div>
                            <span class="accommodation-type">Heritage Hotel</span>
                            <img src="https://ik.imgkit.net/3vlqs5axxjf/external/https://media.iceportal.com/127236/photos/71637534_XL.jpg?tr=w-1200%2Cfo-auto" alt="Amangalla">
                        </div>
                        <div class="accommodation-info">
                            <h3>Amangalla</h3>
                            <p>Colonial elegance in the heart of Galle Fort with antique-filled suites and tranquil gardens.</p>
                            <div class="amenities">
                                <span class="amenity"><i class="fas fa-wifi"></i> Free WiFi</span>
                                <span class="amenity"><i class="fas fa-swimming-pool"></i> Pool</span>
                                <span class="amenity"><i class="fas fa-spa"></i> Spa</span>
                                <span class="amenity"><i class="fas fa-utensils"></i> Restaurant</span>
                                <span class="amenity"><i class="fas fa-history"></i> Heritage</span>
                            </div>
                            <div class="accommodation-meta">
                                <div class="location">
                                    <i class="fas fa-map-marker-alt"></i> Galle Fort
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="price">
                                    $380 <span>/ night</span>
                                </div>
                                <a href="https://www.aman.com/resorts/amangalla?utm_source=google&utm_medium=cpc&utm_campaign=asmb_aman_ggl_sem_property_apac-lk_en_brand_amangalla_lk_pure_all_ex_conv&utm_term=Amangalla&utm_content=BAU-Amangalla-May24&gad_source=1&gclid=Cj0KCQiA8fW9BhC8ARIsACwHqYqvyTaU4NzDFaBhjciCpd5_8vkNmwggydIO7y_Ui-KsAHvBhX7JGUgaAgLwEALw_wcB&gclsrc=aw.ds" class="btn btn-view-details">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- All Accommodations -->
    <section class="all-accommodations py-5">
        <div class="container">
            <div class="section-title slide-up">
                <h2>Explore All Accommodations</h2>
                <p>Find your perfect stay from our curated collection</p>
            </div>
            <div class="row">
                <!-- Accommodation 1 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="accommodation-card">
                        <div class="accommodation-img">
                            <span class="accommodation-type">Beach Resort</span>
                            <img src="https://assets.anantara.com/image/upload/q_auto,f_auto/media/minor/anantara/images/anantara-kalutara-resort/the-resort/anantara_kalutara_header_banner_w1920xh1080.jpg" alt="Anantara Kalutara">
                        </div>
                        <div class="accommodation-info">
                            <h3>Anantara Kalutara</h3>
                            <p>Beachfront paradise with world-class amenities located between the Indian Ocean and Kalu River.</p>
                            <div class="amenities">
                                <span class="amenity"><i class="fas fa-wifi"></i> Free WiFi</span>
                                <span class="amenity"><i class="fas fa-swimming-pool"></i> Pool</span>
                                <span class="amenity"><i class="fas fa-spa"></i> Spa</span>
                                <span class="amenity"><i class="fas fa-umbrella-beach"></i> Beach</span>
                            </div>
                            <div class="accommodation-meta">
                                <div class="location">
                                    <i class="fas fa-map-marker-alt"></i> Kalutara
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="price">
                                    $250 <span>/ night</span>
                                </div>
                                <a href="https://www.anantara.com/en/kalutara/offers/festive-in-the-enchanted-tropics?gad_source=1&gclid=Cj0KCQiA8fW9BhC8ARIsACwHqYqcGuJfrd_KRQ0j3-haEjYKrAMOnu_blV-Buwu3N0MLFMIkmY1qHmkaAqqJEALw_wcB&gclsrc=aw.ds" class="btn btn-view-details">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Accommodation 2 -->
                <div class="col-md-6 col-lg-4 mb-4">
                <div class="accommodation-card">
                    <div class="accommodation-img">
                        <span class="accommodation-type">Tea Estate</span>
                        <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/403939488.jpg?k=bde509bb4d550b2c983a92a7d559b9fe8ce9f7716e52d8ea80f5225771be8209&o=&hp=1" alt="Ceylon Tea Trails">
                    </div>
                    <div class="accommodation-info">
                        <h3>Ceylon Tea Trails</h3>
                        <p>Luxurious colonial bungalows in the heart of Sri Lanka's scenic tea country offering unparalleled views.</p>
                        <div class="amenities">
                            <span class="amenity"><i class="fas fa-wifi"></i> Free WiFi</span>
                            <span class="amenity"><i class="fas fa-hiking"></i> Trails</span>
                            <span class="amenity"><i class="fas fa-utensils"></i> Gourmet Dining</span>
                            <span class="amenity"><i class="fas fa-spa"></i> Spa</span>
                        </div>
                        <div class="accommodation-meta">
                            <div class="location">
                                <i class="fas fa-map-marker-alt"></i> Hatton
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="price">
                                $300 <span>/ night</span>
                            </div>
                            <a href="https://www.resplendentceylon.com/resort/ceylon-tea-trails/" class="btn btn-view-details">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Accommodation 3 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="accommodation-card">
        <div class="accommodation-img">
            <span class="accommodation-type">Mountain Resort</span>
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/123777522.jpg?k=d68c52c58bdec8f871e51d89c80a0ac988559b40f89423842a52ea096e967d37&o=&hp=1" alt="98 Acres Resort">
        </div>
        <div class="accommodation-info">
            <h3>98 Acres Resort</h3>
            <p>Eco-luxury resort nestled among scenic tea plantations with breathtaking views of Ella Gap.</p>
            <div class="amenities">
                <span class="amenity"><i class="fas fa-wifi"></i> Free WiFi</span>
                <span class="amenity"><i class="fas fa-swimming-pool"></i> Infinity Pool</span>
                <span class="amenity"><i class="fas fa-utensils"></i> Restaurant</span>
                <span class="amenity"><i class="fas fa-mountain"></i> Views</span>
            </div>
            <div class="accommodation-meta">
                <div class="location">
                    <i class="fas fa-map-marker-alt"></i> Ella
                </div>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="price">
                    $180 <span>/ night</span>
                </div>
                <a href="https://www.resort98acres.com/" class="btn btn-view-details">View Details</a>
            </div>
        </div>
    </div>
</div>

<!-- Accommodation 4 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="accommodation-card">
        <div class="accommodation-img">
            <span class="accommodation-type">Boutique Hotel</span>
            <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/149023700.jpg?k=2a2a5d1a9d50bd2cccd17fe2f87e8eac7ee9eec8093f907de14fdab3ee66205c&o=&hp=1" alt="Fort Bazaar">
        </div>
        <div class="accommodation-info">
            <h3>Fort Bazaar</h3>
            <p>Contemporary boutique hotel in a renovated 17th-century townhouse in the heart of Galle Fort.</p>
            <div class="amenities">
                <span class="amenity"><i class="fas fa-wifi"></i> Free WiFi</span>
                <span class="amenity"><i class="fas fa-spa"></i> Spa</span>
                <span class="amenity"><i class="fas fa-utensils"></i> Gourmet Dining</span>
                <span class="amenity"><i class="fas fa-history"></i> Heritage</span>
            </div>
            <div class="accommodation-meta">
                <div class="location">
                    <i class="fas fa-map-marker-alt"></i> Galle Fort
                </div>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="price">
                    $155 <span>/ night</span>
                </div>
                <a href="https://www.teardrop-hotels.com/fort-bazaar/" class="btn btn-view-details">View Details</a>
            </div>
        </div>
    </div>
</div>

<!-- Accommodation 5 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="accommodation-card">
        <div class="accommodation-img">
            <span class="accommodation-type">Beach Villa</span>
            <img src="https://ik.imgkit.net/3vlqs5axxjf/external/https://media.iceportal.com/127236/photos/71637534_XL.jpg?tr=w-1200%2Cfo-auto" alt="Amanwella">
        </div>
        <div class="accommodation-info">
            <h3>Amanwella</h3>
            <p>Contemporary beachfront resort with private plunge pools and direct access to a pristine beach.</p>
            <div class="amenities">
                <span class="amenity"><i class="fas fa-wifi"></i> Free WiFi</span>
                <span class="amenity"><i class="fas fa-swimming-pool"></i> Private Pools</span>
                <span class="amenity"><i class="fas fa-umbrella-beach"></i> Beach</span>
                <span class="amenity"><i class="fas fa-utensils"></i> Restaurant</span>
            </div>
            <div class="accommodation-meta">
                <div class="location">
                    <i class="fas fa-map-marker-alt"></i> Tangalle
                </div>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="price">
                    $450 <span>/ night</span>
                </div>
                <a href="https://www.aman.com/resorts/amangalla?utm_source=google&utm_medium=cpc&utm_campaign=asmb_aman_ggl_sem_property_apac-lk_en_brand_amangalla_lk_pure_all_ex_conv&utm_term=Amangalla&utm_content=BAU-Amangalla-May24&gad_source=1&gclid=Cj0KCQiA8fW9BhC8ARIsACwHqYqvyTaU4NzDFaBhjciCpd5_8vkNmwggydIO7y_Ui-KsAHvBhX7JGUgaAgLwEALw_wcB&gclsrc=aw.ds" class="btn btn-view-details">View Details</a>
            </div>
        </div>
    </div>
</div>

<!-- Accommodation 6 -->
<div class="col-md-6 col-lg-4 mb-4">
    <div class="accommodation-card">
        <div class="accommodation-img">
            <span class="accommodation-type">Eco Resort</span>
            <img src="https://www.jetwinghotels.com/jetwingviluyana/wp-content/uploads/sites/2/2017/09/dambulla-luxury-accommodation.jpg" alt="Jetwing Vil Uyana">
        </div>
        <div class="accommodation-info">
            <h3>Jetwing Vil Uyana</h3>
            <p>Eco-luxury dwellings built over wetlands and paddy fields near the ancient rock fortress of Sigiriya.</p>
            <div class="amenities">
                <span class="amenity"><i class="fas fa-wifi"></i> Free WiFi</span>
                <span class="amenity"><i class="fas fa-swimming-pool"></i> Pool</span>
                <span class="amenity"><i class="fas fa-leaf"></i> Eco-friendly</span>
                <span class="amenity"><i class="fas fa-spa"></i> Spa</span>
            </div>
            <div class="accommodation-meta">
                <div class="location">
                    <i class="fas fa-map-marker-alt"></i> Sigiriya
                </div>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="price">
                    $220 <span>/ night</span>
                </div>
                <a href="https://www.jetwinghotels.com/jetwingviluyana/" class="btn btn-view-details">View Details</a>
            </div>
        </div>
    </div>
</div>
</div>
            
            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-5">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    

    <!-- Footer -->
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
                        <li><a href="destinations.php">Kandy</a></li>
                        <li><a href="destinations.php">Sigiriya</a></li>
                        <li><a href="destinations.php">Galle</a></li>
                        <li><a href="destinations.php">Ella</a></li>
                        <li><a href="destinations.php">Yala National Park</a></li>
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

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="js/accommodations.js"></script>
</body>
</html>