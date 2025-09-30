<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gallery - Hotel Online Reservation</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        /* Minimal Gallery-specific CSS */
        .gallery-page {
            padding: 60px 0;
            background-color: #f8f9fa;
        }
        
        .gallery-header {
            background: linear-gradient(rgba(1, 31, 75, 0.9), rgba(1, 31, 75, 0.9));
            color: white;
            padding: 80px 0;
            margin-bottom: 40px;
        }
        
        .gallery-filter {
            margin-bottom: 30px;
        }
        
        .gallery-item {
            margin-bottom: 30px;
            transition: transform 0.3s ease;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .gallery-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover .gallery-img {
            transform: scale(1.05);
        }
        
        .gallery-caption {
            padding: 15px;
            background: white;
        }
        
        .gallery-caption h4 {
            color: #011f4b;
            margin-bottom: 5px;
            font-family: 'Playfair Display', serif;
        }
        
        .gallery-caption p {
            color: #666;
            margin: 0;
            font-size: 0.9rem;
        }
        
        /* Modal Styles */
        .modal-gallery-img {
            width: 100%;
            border-radius: 8px;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .gallery-header {
                padding: 60px 0;
            }
            
            .gallery-header h1 {
                font-size: 2.5rem;
            }
        }
        
        @media (max-width: 576px) {
            .gallery-header h1 {
                font-size: 2rem;
            }
            
            .gallery-img {
                height: 200px;
            }
        }
    </style>
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
                    <li><a href="contactus.php"><i class="fas fa-phone-alt"></i> Contact Us</a></li>
                    <li><a href="gallery.php" class="active"><i class="fas fa-images"></i> Gallery</a></li>
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

    <!-- Gallery Header -->
    <section class="gallery-header text-center">
        <div class="container">
            <h1 class="mb-3">Our Gallery</h1>
            <p class="lead">Discover the beauty and elegance of Hotel Online Reservation through our photo collection</p>
        </div>
    </section>

    <!-- Gallery Content -->
    <section class="gallery-page">
        <div class="container">
            <!-- Filter Buttons -->
            <div class="gallery-filter text-center">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary active" data-filter="all">All</button>
                    <button type="button" class="btn btn-primary" data-filter="rooms">Rooms & Suites</button>
                    <button type="button" class="btn btn-primary" data-filter="dining">Dining</button>
                    <button type="button" class="btn btn-primary" data-filter="amenities">Amenities</button>
                    <button type="button" class="btn btn-primary" data-filter="events">Events</button>
                </div>
            </div>

            <!-- Gallery Grid -->
            <div class="row" id="gallery-grid">
                <!-- Room 1 -->
                <div class="col-md-4 col-sm-6 gallery-item" data-category="rooms">
                    <a href="#" data-toggle="modal" data-target="#imageModal" data-image="images/gallery/1.jpg" data-title="Luxury Suite" data-description="Our premium luxury suite with panoramic city views">
                        <img src="images/gallery/1.jpg" alt="Luxury Suite" class="gallery-img">
                    </a>
                    <div class="gallery-caption">
                        <h4>Luxury Suite</h4>
                        <p>Premium accommodation with panoramic city views</p>
                    </div>
                </div>
                
                <!-- Room 2 -->
                <div class="col-md-4 col-sm-6 gallery-item" data-category="rooms">
                    <a href="#" data-toggle="modal" data-target="#imageModal" data-image="images/gallery/2.jpg" data-title="Executive Room" data-description="Spacious executive room with modern amenities">
                        <img src="images/gallery/2.jpg" alt="Executive Room" class="gallery-img">
                    </a>
                    <div class="gallery-caption">
                        <h4>Executive Room</h4>
                        <p>Spacious room with modern amenities</p>
                    </div>
                </div>
                
                <!-- Dining 1 -->
                <div class="col-md-4 col-sm-6 gallery-item" data-category="dining">
                    <a href="#" data-toggle="modal" data-target="#imageModal" data-image="images/gallery/3.jpg" data-title="Main Restaurant" data-description="Our elegant main restaurant serving international cuisine">
                        <img src="images/gallery/3.jpg" alt="Main Restaurant" class="gallery-img">
                    </a>
                    <div class="gallery-caption">
                        <h4>Main Restaurant</h4>
                        <p>Elegant dining with international cuisine</p>
                    </div>
                </div>
                
                <!-- Amenity 1 -->
                <div class="col-md-4 col-sm-6 gallery-item" data-category="amenities">
                    <a href="#" data-toggle="modal" data-target="#imageModal" data-image="images/gallery/4.jpg" data-title="Infinity Pool" data-description="Stunning infinity pool with city skyline views">
                        <img src="images/gallery/4.jpg" alt="Infinity Pool" class="gallery-img">
                    </a>
                    <div class="gallery-caption">
                        <h4>Infinity Pool</h4>
                        <p>Stunning pool with city skyline views</p>
                    </div>
                </div>
                
                <!-- Room 3 -->
                <div class="col-md-4 col-sm-6 gallery-item" data-category="rooms">
                    <a href="#" data-toggle="modal" data-target="#imageModal" data-image="images/gallery/5.jpg" data-title="Deluxe Room" data-description="Comfortable deluxe room with premium bedding">
                        <img src="images/gallery/5.jpg" alt="Deluxe Room" class="gallery-img">
                    </a>
                    <div class="gallery-caption">
                        <h4>Deluxe Room</h4>
                        <p>Comfortable room with premium bedding</p>
                    </div>
                </div>
                
                <!-- Dining 2 -->
                <div class="col-md-4 col-sm-6 gallery-item" data-category="dining">
                    <a href="#" data-toggle="modal" data-target="#imageModal" data-image="images/gallery/6.jpg" data-title="Sky Lounge" data-description="Rooftop lounge with signature cocktails">
                        <img src="images/gallery/6.jpg" alt="Sky Lounge" class="gallery-img">
                    </a>
                    <div class="gallery-caption">
                        <h4>Sky Lounge</h4>
                        <p>Rooftop lounge with signature cocktails</p>
                    </div>
                </div>
                
                <!-- Event 1 -->
                <div class="col-md-4 col-sm-6 gallery-item" data-category="events">
                    <a href="#" data-toggle="modal" data-target="#imageModal" data-image="images/gallery/7.jpg" data-title="Grand Ballroom" data-description="Elegant ballroom for weddings and events">
                        <img src="images/gallery/7.jpg" alt="Grand Ballroom" class="gallery-img">
                    </a>
                    <div class="gallery-caption">
                        <h4>Grand Ballroom</h4>
                        <p>Elegant venue for weddings and events</p>
                    </div>
                </div>
                
                <!-- Amenity 2 -->
                <div class="col-md-4 col-sm-6 gallery-item" data-category="amenities">
                    <a href="#" data-toggle="modal" data-target="#imageModal" data-image="images/gallery/8.jpg" data-title="Wellness Spa" data-description="Relaxing spa with professional treatments">
                        <img src="images/gallery/8.jpg" alt="Wellness Spa" class="gallery-img">
                    </a>
                    <div class="gallery-caption">
                        <h4>Wellness Spa</h4>
                        <p>Relaxing spa with professional treatments</p>
                    </div>
                </div>
                
                <!-- Room 4 -->
                <div class="col-md-4 col-sm-6 gallery-item" data-category="rooms">
                    <a href="#" data-toggle="modal" data-target="#imageModal" data-image="images/gallery/9.jpg" data-title="Family Suite" data-description="Spacious suite perfect for families">
                        <img src="images/gallery/9.jpg" alt="Family Suite" class="gallery-img">
                    </a>
                    <div class="gallery-caption">
                        <h4>Family Suite</h4>
                        <p>Spacious suite perfect for families</p>
                    </div>
                </div>
                
                <!-- Dining 3 -->
                <div class="col-md-4 col-sm-6 gallery-item" data-category="dining">
                    <a href="#" data-toggle="modal" data-target="#imageModal" data-image="images/gallery/10.jpg" data-title="Poolside Bar" data-description="Casual dining by the pool">
                        <img src="images/gallery/10.jpg" alt="Poolside Bar" class="gallery-img">
                    </a>
                    <div class="gallery-caption">
                        <h4>Poolside Bar</h4>
                        <p>Casual dining by the pool</p>
                    </div>
                </div>
                
                <!-- Amenity 3 -->
                <div class="col-md-4 col-sm-6 gallery-item" data-category="amenities">
                    <a href="#" data-toggle="modal" data-target="#imageModal" data-image="images/gallery/11.jpg" data-title="Fitness Center" data-description="State-of-the-art fitness facility">
                        <img src="images/gallery/11.jpg" alt="Fitness Center" class="gallery-img">
                    </a>
                    <div class="gallery-caption">
                        <h4>Fitness Center</h4>
                        <p>State-of-the-art fitness facility</p>
                    </div>
                </div>
                
                <!-- Event 2 -->
                <div class="col-md-4 col-sm-6 gallery-item" data-category="events">
                    <a href="#" data-toggle="modal" data-target="#imageModal" data-image="images/gallery/12.jpg" data-title="Conference Room" data-description="Modern meeting and conference facilities">
                        <img src="images/gallery/12.jpg" alt="Conference Room" class="gallery-img">
                    </a>
                    <div class="gallery-caption">
                        <h4>Conference Room</h4>
                        <p>Modern meeting and conference facilities</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="imageModalLabel">Image Title</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" alt="" class="modal-gallery-img">
                    <p id="modalDescription" class="mt-3"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

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
                        <p><i class="fas fa-envelope"></i> reservations@online.com</p>
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
                <p>&copy; 2023 Hotel Online Reservation. All Rights Reserved. | <a href="rulesandregulation.php">Hotel Policies</a> | <a href="privacy.php">Privacy Policy</a></p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"></script>
    
    <script>
        // Mobile menu toggle
        document.querySelector('.hamburger').addEventListener('click', function() {
            this.classList.toggle('active');
            document.querySelector('.nav-menu').classList.toggle('active');
        });

        // Gallery Filter Functionality
        $(document).ready(function() {
            // Filter button click event
            $('.gallery-filter .btn').click(function() {
                // Remove active class from all buttons
                $('.gallery-filter .btn').removeClass('active');
                // Add active class to clicked button
                $(this).addClass('active');
                
                var filterValue = $(this).attr('data-filter');
                
                if (filterValue === 'all') {
                    // Show all items
                    $('.gallery-item').fadeIn(400);
                } else {
                    // Hide all items
                    $('.gallery-item').hide();
                    // Show items with matching category
                    $('.gallery-item[data-category="' + filterValue + '"]').fadeIn(400);
                }
            });
            
            // Image Modal Functionality
            $('#imageModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var imageSrc = button.data('image'); // Extract info from data-* attributes
                var title = button.data('title');
                var description = button.data('description');
                
                var modal = $(this);
                modal.find('.modal-title').text(title);
                modal.find('#modalImage').attr('src', imageSrc);
                modal.find('#modalDescription').text(description);
            });
        });
    </script>
</body>
</html>