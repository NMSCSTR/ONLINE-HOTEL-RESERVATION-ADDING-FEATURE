<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us - Online Hotel Reservation</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/aboutus.css" />
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <h1><i class="fas fa-hotel"></i> Online Hotel Reservation</h1>
                </div>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+1 (555) 123-4567</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>reservations@bluehorizon.com</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-content">
                <ul class="nav-menu">
                    <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="aboutus.php" class="active"><i class="fas fa-info-circle"></i> About Us</a></li>
                    <li><a href="contactus.php"><i class="fas fa-phone-alt"></i> Contact Us</a></li>
                    <li><a href="gallery.php"><i class="fas fa-images"></i> Gallery</a></li>
                    <li><a href="dineandlounge.php"><i class="fas fa-utensils"></i> Dine & Lounge</a></li>
                    <li><a href="reservation.php" class="reservation-btn"><i class="fas fa-calendar-check"></i> Make Reservation</a></li>
                    <li><a href="rulesandregulation.php"><i class="fas fa-clipboard-list"></i> Hotel Policies</a></li>
                </ul>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>About Online Hotel Reservation</h1>
            <p>Discover our story, accommodations, and amenities</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <div class="about-content">
                <div class="about-story">
                    <div class="story-content">
                        <h2 class="section-title">Our Story</h2>
                        <p>Online Hotel Reservation unveils a celebrated balance of nostalgia and contemporary style, capturing its original Southern elegance, luxury, and decadence. Machuca tiles form cool geometric patterns in the hallways. Hotel hardwood floors contrast modern furnishings and amenities in the dramatic suites.</p>
                        <p>The Blue Horizon lifestyle offers guests the finest sensory indulgences: soothing organic toiletries, heirloom recipes, and unmatched privacy and tranquility. Our commitment to excellence has made us a preferred destination for travelers seeking both comfort and sophistication.</p>
                        <div class="story-stats">
                            <div class="stat-item">
                                <div class="stat-number">25+</div>
                                <div class="stat-label">Years of Excellence</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">150+</div>
                                <div class="stat-label">Luxury Rooms</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">98%</div>
                                <div class="stat-label">Guest Satisfaction</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">50+</div>
                                <div class="stat-label">Awards Received</div>
                            </div>
                        </div>
                    </div>
                    <div class="story-image">
                        <img src="images/about.jpg" alt="Online Hotel Reservation" />
                        <div class="image-overlay">
                            <h3>Since 1998</h3>
                            <p>Providing exceptional hospitality experiences</p>
                        </div>
                    </div>
                </div>
                
                <div class="section-divider"></div>
                
                <div class="room-options-section">
                    <h2 class="section-title text-center">Our Room Options</h2>
                    <p class="section-subtitle text-center">Choose from our variety of beautifully appointed accommodations</p>
                    
                    <div class="room-options">
                        <div class="room-item">
                            <div class="room-card">
                                <div class="room-image">
                                    <img src="images/1.jpg" alt="Standard Room" />
                                    <div class="room-price">Php 2,000.00</div>
                                    <div class="room-overlay">
                                        <a href="reservation.php" class="btn">Book Now</a>
                                    </div>
                                </div>
                                <div class="room-info">
                                    <h3>Standard Room</h3>
                                    <p class="room-feature">Small Size Bed</p>
                                    <p>Perfect for solo travelers or short stays</p>
                                    <div class="room-amenities">
                                        <span><i class="fas fa-wifi"></i> WiFi</span>
                                        <span><i class="fas fa-tv"></i> TV</span>
                                        <span><i class="fas fa-shower"></i> Shower</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="room-item">
                            <div class="room-card">
                                <div class="room-image">
                                    <img src="images/2.jpg" alt="Extra Bed" />
                                    <div class="room-price">Php 800.00</div>
                                    <div class="room-overlay">
                                        <a href="reservation.php" class="btn">Add to Booking</a>
                                    </div>
                                </div>
                                <div class="room-info">
                                    <h3>Extra Bed</h3>
                                    <p class="room-feature">Additional sleeping accommodation</p>
                                    <p>Ideal for families or groups</p>
                                    <div class="room-amenities">
                                        <span><i class="fas fa-bed"></i> Extra Bed</span>
                                        <span><i class="fas fa-blanket"></i> Linens</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="room-item">
                            <div class="room-card">
                                <div class="room-image">
                                    <img src="images/3.jpg" alt="Superior Room" />
                                    <div class="room-price">Php 2,400.00</div>
                                    <div class="room-overlay">
                                        <a href="reservation.php" class="btn">Book Now</a>
                                    </div>
                                </div>
                                <div class="room-info">
                                    <h3>Superior Room</h3>
                                    <p class="room-feature">1 Medium Size Bed</p>
                                    <p>Spacious comfort with enhanced amenities</p>
                                    <div class="room-amenities">
                                        <span><i class="fas fa-wifi"></i> WiFi</span>
                                        <span><i class="fas fa-tv"></i> TV</span>
                                        <span><i class="fas fa-coffee"></i> Coffee Set</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="room-item">
                            <div class="room-card">
                                <div class="room-image">
                                    <img src="images/4.jpg" alt="Super Deluxe Room" />
                                    <div class="room-price">Php 2,800.00</div>
                                    <div class="room-overlay">
                                        <a href="reservation.php" class="btn">Book Now</a>
                                    </div>
                                </div>
                                <div class="room-info">
                                    <h3>Super Deluxe</h3>
                                    <p class="room-feature">2 Medium Size Beds</p>
                                    <p>Ideal for families or longer stays</p>
                                    <div class="room-amenities">
                                        <span><i class="fas fa-wifi"></i> WiFi</span>
                                        <span><i class="fas fa-tv"></i> TV</span>
                                        <span><i class="fas fa-couch"></i> Seating Area</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="room-item">
                            <div class="room-card">
                                <div class="room-image">
                                    <img src="images/5.jpg" alt="Jr. Suite" />
                                    <div class="room-price">Php 3,800.00</div>
                                    <div class="room-overlay">
                                        <a href="reservation.php" class="btn">Book Now</a>
                                    </div>
                                </div>
                                <div class="room-info">
                                    <h3>Jr. Suite</h3>
                                    <p class="room-feature">Matrimonial Bed</p>
                                    <p>Luxurious space with separate seating area</p>
                                    <div class="room-amenities">
                                        <span><i class="fas fa-wifi"></i> WiFi</span>
                                        <span><i class="fas fa-tv"></i> TV</span>
                                        <span><i class="fas fa-wine-glass"></i> Mini Bar</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="room-item">
                            <div class="room-card">
                                <div class="room-image">
                                    <img src="images/6.jpg" alt="Executive Suite" />
                                    <div class="room-price">Php 4,000.00</div>
                                    <div class="room-overlay">
                                        <a href="reservation.php" class="btn">Book Now</a>
                                    </div>
                                </div>
                                <div class="room-info">
                                    <h3>Executive Suite</h3>
                                    <p class="room-feature">Matrimonial Bed</p>
                                    <p>Ultimate luxury with premium amenities</p>
                                    <div class="room-amenities">
                                        <span><i class="fas fa-wifi"></i> WiFi</span>
                                        <span><i class="fas fa-tv"></i> TV</span>
                                        <span><i class="fas fa-bath"></i> Jacuzzi</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="section-divider"></div>
                
                <div class="amenities-section">
                    <h2 class="section-title text-center">Amenities and Services</h2>
                    <p class="section-subtitle text-center">We provide exceptional facilities to ensure a memorable stay</p>
                    
                    <div class="amenities-grid">
                        <div class="amenity-category">
                            <h3><i class="fas fa-concierge-bell"></i> Room Services</h3>
                            <ul class="amenities-list">
                                <li><i class="fas fa-check-circle"></i> 24 Hour room service</li>
                                <li><i class="fas fa-check-circle"></i> 21" Flat screen TV with cable service</li>
                                <li><i class="fas fa-check-circle"></i> Hot & cold shower</li>
                                <li><i class="fas fa-check-circle"></i> Refrigerator and mini bar on demand in all suites and superior rooms</li>
                                <li><i class="fas fa-check-circle"></i> Coffee & tea set, bottled water, organic toiletries in suites and superior rooms</li>
                                <li><i class="fas fa-check-circle"></i> Hair dryer in suite rooms</li>
                                <li><i class="fas fa-check-circle"></i> Personal safety boxes in every room</li>
                                <li><i class="fas fa-check-circle"></i> Laundry & pressing</li>
                                <li><i class="fas fa-check-circle"></i> Free use Wifi</li>
                            </ul>
                        </div>
                        
                        <div class="amenity-category">
                            <h3><i class="fas fa-hotel"></i> Hotel Facilities</h3>
                            <ul class="amenities-list">
                                <li><i class="fas fa-check-circle"></i> In room massage services</li>
                                <li><i class="fas fa-check-circle"></i> Personal Safe in Every Room</li>
                                <li><i class="fas fa-check-circle"></i> Mini Bar</li>
                                <li><i class="fas fa-check-circle"></i> 7 Function & Meeting Rooms</li>
                                <li><i class="fas fa-check-circle"></i> Road Trip Airport Transfers & Special City Tour</li>
                                <li><i class="fas fa-check-circle"></i> Swimming Pool</li>
                                <li><i class="fas fa-check-circle"></i> Gift Shop</li>
                                <li><i class="fas fa-check-circle"></i> Business Center</li>
                                <li><i class="fas fa-check-circle"></i> Free Parking for Guest</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Online Hotel Reservation</h3>
                    <p>Experience luxury and comfort at our premier hotel destination. We're committed to providing exceptional service and unforgettable experiences.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="dineandlounge.php">Dine & Lounge</a></li>
                        <li><a href="reservation.php">Make Reservation</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt"></i> 123 Luxury Avenue, City Center</p>
                        <p><i class="fas fa-phone"></i> +1 (555) 123-4567</p>
                        <p><i class="fas fa-envelope"></i> reservations@bluehorizon.com</p>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Newsletter</h4>
                    <p>Subscribe to our newsletter for special offers and updates</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Your email address" required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Online Hotel Reservation. All Rights Reserved. | <a href="rulesandregulation.php">Hotel Policies</a> | <a href="privacy.php">Privacy Policy</a></p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.querySelector('.hamburger').addEventListener('click', function() {
            this.classList.toggle('active');
            document.querySelector('.nav-menu').classList.toggle('active');
        });
    </script>
</body>
</html>