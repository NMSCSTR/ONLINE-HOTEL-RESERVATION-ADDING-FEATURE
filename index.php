<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotel Online Reservation</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/index.css" />
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <h1><i class="fas fa-hotel"></i> Hotel Online Reservation</h1>
                </div>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+1 (555) 123-4567</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>reservations@grandhorizon.com</span>
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
                    <li><a href="index.php" class="active"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="aboutus.php"><i class="fas fa-info-circle"></i> About Us</a></li>
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

    <!-- Hero Section with Carousel -->
    <section class="hero">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
                <li data-target="#myCarousel" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="images/a.jpg" alt="Luxury Hotel Room" />
                    <div class="carousel-caption">
                        <h2>Luxury Redefined</h2>
                        <p>Experience unparalleled comfort in our premium suites</p>
                        <a href="reservation.php" class="btn">Book Now</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/b.jpg" alt="Hotel Pool" />
                    <div class="carousel-caption">
                        <h2>Relax & Unwind</h2>
                        <p>Enjoy our world-class amenities and breathtaking views</p>
                        <a href="gallery.php" class="btn">View Gallery</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/c.jpg" alt="Hotel Dining" />
                    <div class="carousel-caption">
                        <h2>Culinary Excellence</h2>
                        <p>Indulge in gourmet dining experiences</p>
                        <a href="dineandlounge.php" class="btn">Explore Dining</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/d.jpg" alt="Hotel Lobby" />
                    <div class="carousel-caption">
                        <h2>Elegant Spaces</h2>
                        <p>Our stunning interiors create the perfect ambiance</p>
                        <a href="aboutus.php" class="btn">Learn More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/e.jpg" alt="Hotel Exterior" />
                    <div class="carousel-caption">
                        <h2>Prime Location</h2>
                        <p>Located in the heart of the city with easy access to attractions</p>
                        <a href="contactus.php" class="btn">Get Directions</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/f.jpeg" alt="Hotel Spa" />
                    <div class="carousel-caption">
                        <h2>Wellness & Spa</h2>
                        <p>Rejuvenate your mind and body at our luxury spa</p>
                        <a href="gallery.php" class="btn">View Amenities</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/g.png" alt="Hotel Event Space" />
                    <div class="carousel-caption">
                        <h2>Events & Meetings</h2>
                        <p>Host your next event in our sophisticated venues</p>
                        <a href="contactus.php" class="btn">Plan Event</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2 class="section-title">Why Choose Hotel Online Reservation</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <h3>Free Wi-Fi</h3>
                    <p>Stay connected with high-speed internet access throughout the hotel</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-swimming-pool"></i>
                    </div>
                    <h3>Infinity Pool</h3>
                    <p>Relax in our stunning infinity pool with panoramic city views</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Fine Dining</h3>
                    <p>Experience culinary excellence at our award-winning restaurants</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h3>Luxury Spa</h3>
                    <p>Rejuvenate with our premium spa treatments and wellness services</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <h3>Fitness Center</h3>
                    <p>Maintain your workout routine in our state-of-the-art gym</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-concierge-bell"></i>
                    </div>
                    <h3>24/7 Service</h3>
                    <p>Our dedicated staff is available round the clock to assist you</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Offers -->
    <section class="offers">
        <div class="container">
            <h2 class="section-title">Special Offers</h2>
            <div class="offers-grid">
                <div class="offer-card">
                    <div class="offer-badge">Limited Time</div>
                    <div class="offer-content">
                        <h3>Weekend Getaway</h3>
                        <p>Enjoy 30% off on weekend stays with complimentary breakfast</p>
                        <div class="offer-price">
                            <span class="old-price">$299</span>
                            <span class="new-price">$209</span>
                            <span class="per-night">per night</span>
                        </div>
                        <a href="reservation.php" class="btn">Book Now</a>
                    </div>
                </div>
                <div class="offer-card">
                    <div class="offer-badge">Popular</div>
                    <div class="offer-content">
                        <h3>Extended Stay</h3>
                        <p>Stay 5 nights or more and get 25% discount plus late checkout</p>
                        <div class="offer-price">
                            <span class="old-price">$1599</span>
                            <span class="new-price">$1199</span>
                            <span class="per-night">for 5 nights</span>
                        </div>
                        <a href="reservation.php" class="btn">Book Now</a>
                    </div>
                </div>
                <div class="offer-card">
                    <div class="offer-badge">New</div>
                    <div class="offer-content">
                        <h3>Romance Package</h3>
                        <p>Perfect for couples with champagne, roses and spa treatment</p>
                        <div class="offer-price">
                            <span class="old-price">$499</span>
                            <span class="new-price">$399</span>
                            <span class="per-night">per night</span>
                        </div>
                        <a href="reservation.php" class="btn">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <h2 class="section-title">What Our Guests Say</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"The Hotel Online Reservation exceeded all our expectations. The staff was incredibly attentive, and our suite was breathtaking. We'll definitely be returning!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Sarah Johnson</h4>
                            <span>Business Traveler</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p>"Our anniversary celebration was made perfect by the wonderful team at Grand Horizon. The romance package was worth every penny!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Michael & Emily Roberts</h4>
                            <span>Anniversary Celebration</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"I've stayed in many hotels around the world, but the service and attention to detail at Grand Horizon is truly exceptional. Highly recommended!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>David Chen</h4>
                            <span>Frequent Traveler</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Hotel Online Reservation</h3>
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
                        <p><i class="fas fa-envelope"></i> reservations@grandhorizon.com</p>
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
                <p>&copy; <?php echo date('Y'); ?> Hotel Online Reservation. All Rights Reserved. | <a href="rulesandregulation.php">Hotel Policies</a> | <a href="privacy.php">Privacy Policy</a></p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.querySelector('.hamburger').addEventListener('click', function() {
            this.classList.toggle('active');
            document.querySelector('.nav-menu').classList.toggle('active');
        });

        // Simple carousel functionality (would normally use Bootstrap JS)
        document.addEventListener('DOMContentLoaded', function() {
            const carouselItems = document.querySelectorAll('.carousel-item');
            const indicators = document.querySelectorAll('.carousel-indicators li');
            
            // Set first item as active
            if (carouselItems.length > 0) {
                setInterval(function() {
                    const activeItem = document.querySelector('.carousel-item.active');
                    const activeIndicator = document.querySelector('.carousel-indicators li.active');
                    
                    let nextIndex = Array.from(carouselItems).indexOf(activeItem) + 1;
                    if (nextIndex >= carouselItems.length) nextIndex = 0;
                    
                    activeItem.classList.remove('active');
                    activeIndicator.classList.remove('active');
                    
                    carouselItems[nextIndex].classList.add('active');
                    indicators[nextIndex].classList.add('active');
                }, 5000);
            }
        });
    </script>
</body>
</html>