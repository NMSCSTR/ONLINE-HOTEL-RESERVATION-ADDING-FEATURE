<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us - Hotel Online Reservation</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/contactus.css" />
</head>
<body>
    <!-- Header -->
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
                        <span>reservations@online.com</span>
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
                    <li><a href="aboutus.php"><i class="fas fa-info-circle"></i> About Us</a></li>
                    <li><a href="contactus.php" class="active"><i class="fas fa-phone-alt"></i> Contact Us</a></li>
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
            <h1>Contact Hotel Online Reservation</h1>
            <p>We're here to assist you with any inquiries or reservations</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <div class="contact-content">
                <div class="contact-info-section">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Our Location</h3>
                            <p>123 Luxury Avenue, City Center<br>Metro Manila, Philippines 1000</p>
                            <a href="#" class="btn-link">Get Directions <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Phone Numbers</h3>
                            <p>Main: +63 (2) 8123-4567<br>Reservations: +63 (917) 123-4567</p>
                            <a href="tel:+63281234567" class="btn-link">Call Now <i class="fas fa-phone"></i></a>
                        </div>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Email Addresses</h3>
                            <p>Reservations: reservations@bluehorizon.com<br>General: info@bluehorizon.com</p>
                            <a href="mailto:reservations@bluehorizon.com" class="btn-link">Send Email <i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Operating Hours</h3>
                            <p>Front Desk: 24/7<br>Reservations: 6:00 AM - 12:00 MN<br>Management: 9:00 AM - 6:00 PM</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form-section">
                    <div class="form-container">
                        <h2>Send Us a Message</h2>
                        <p>Have questions or special requests? Fill out the form below and we'll get back to you within 24 hours.</p>
                        
                        <form class="contact-form">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name">Full Name *</label>
                                    <input type="text" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address *</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" id="phone" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="subject">Subject *</label>
                                    <select id="subject" name="subject" required>
                                        <option value="">Select a subject</option>
                                        <option value="reservation">Room Reservation</option>
                                        <option value="inquiry">General Inquiry</option>
                                        <option value="feedback">Feedback</option>
                                        <option value="complaint">Complaint</option>
                                        <option value="event">Event Planning</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" name="message" rows="5" required></textarea>
                            </div>
                            
                            <div class="form-group checkbox-group">
                                <input type="checkbox" id="newsletter" name="newsletter">
                                <label for="newsletter">Subscribe to our newsletter for special offers and updates</label>
                            </div>
                            
                            <button type="submit" class="btn btn-submit">Send Message <i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="map-section">
                <h2 class="section-title">Find Us</h2>
                <div class="map-container">
                    <div class="map-placeholder">
                        <i class="fas fa-map-marked-alt"></i>
                        <h3>Interactive Map</h3>
                        <p>Our location in the heart of the city</p>
                        <button class="btn">View Larger Map</button>
                    </div>
                </div>
                
                <div class="transportation-info">
                    <div class="transport-option">
                        <div class="transport-icon">
                            <i class="fas fa-subway"></i>
                        </div>
                        <div class="transport-details">
                            <h4>By Metro</h4>
                            <p>Nearest station: City Center Station (5-minute walk)</p>
                        </div>
                    </div>
                    
                    <div class="transport-option">
                        <div class="transport-icon">
                            <i class="fas fa-bus"></i>
                        </div>
                        <div class="transport-details">
                            <h4>By Bus</h4>
                            <p>Multiple bus routes stop within 200m of the hotel</p>
                        </div>
                    </div>
                    
                    <div class="transport-option">
                        <div class="transport-icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <div class="transport-details">
                            <h4>By Car</h4>
                            <p>Complimentary valet parking available for guests</p>
                        </div>
                    </div>
                    
                    <div class="transport-option">
                        <div class="transport-icon">
                            <i class="fas fa-plane"></i>
                        </div>
                        <div class="transport-details">
                            <h4>From Airport</h4>
                            <p>20-minute drive from Ninoy Aquino International Airport</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="faq-section">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <div class="faq-container">
                    <div class="faq-item">
                        <div class="faq-question">
                            <h4>What is your cancellation policy?</h4>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>We offer free cancellation up to 48 hours before your scheduled arrival. Cancellations made within 48 hours may be subject to a fee equivalent to one night's stay.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h4>Do you offer airport transportation?</h4>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we provide airport transfer services for our guests. Please contact our concierge at least 24 hours in advance to arrange pickup. Additional charges may apply.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h4>What time is check-in and check-out?</h4>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Check-in time is 3:00 PM and check-out is 12:00 PM. Early check-in and late check-out may be available upon request and subject to availability.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h4>Do you have facilities for events and meetings?</h4>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we have 7 fully-equipped function rooms that can accommodate from 10 to 300 guests. Contact our events team for customized packages.</p>
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
                        <p><i class="fas fa-phone"></i> +63 (2) 8123-4567</p>
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

        // FAQ accordion functionality
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const faqItem = question.parentElement;
                const answer = faqItem.querySelector('.faq-answer');
                const icon = question.querySelector('i');
                
                // Toggle active class on FAQ item
                faqItem.classList.toggle('active');
                
                // Toggle icon rotation
                if (faqItem.classList.contains('active')) {
                    icon.style.transform = 'rotate(180deg)';
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                } else {
                    icon.style.transform = 'rotate(0deg)';
                    answer.style.maxHeight = '0';
                }
                
                // Close other FAQ items
                document.querySelectorAll('.faq-item').forEach(item => {
                    if (item !== faqItem && item.classList.contains('active')) {
                        item.classList.remove('active');
                        item.querySelector('.faq-question i').style.transform = 'rotate(0deg)';
                        item.querySelector('.faq-answer').style.maxHeight = '0';
                    }
                });
            });
        });

        // Form submission handling
        document.querySelector('.contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            // In a real application, you would send the form data to a server here
            alert('Thank you for your message! We will get back to you within 24 hours.');
            this.reset();
        });
    </script>
</body>
</html>