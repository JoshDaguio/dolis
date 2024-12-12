<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dolis</title>
    <?php include 'head.php'; ?>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* Base Styles & Variables */
        :root {
            --primary: #bb3b47;
            --secondary: #60aba7;
            --background: #fffcf3;
            --text-dark: #2d3436;
            --text-light: #636e72;
        }
  

        /* Hero Section Styles */
        .hero-section {
    position: relative;
    height: 100vh;
    overflow: hidden;
}

.hero-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent dark overlay */
    z-index: 2;
}

.hero-content {
    position: relative;
    z-index: 3;
    color: #fff;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7); /* Dark shadow for better visibility */
}

.hero-title {
    font-size: 4rem;
    line-height: 1.2;
    font-weight: bold;
}

.hero-title,
.lead {
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.8); /* Enhanced shadow for text */
}


        /* Product Card Styles */
        .product-card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: white;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-image {
            transform: scale(1.05);
        }

        /* Enhanced Testimonials Section */
        .testimonials-section {
            background: linear-gradient(to bottom, #fff8f5, #ffece8); /* Subtle gradient background */
            padding: 80px 20px;
            position: relative;
            overflow: hidden;
        }

        /* Section Title */
        .testimonials-section .section-title {
            font-size: 2.5rem;
            color: #bb3b47;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .testimonials-section p.lead {
            font-size: 1.2rem;
            color: #636e72;
        }

        .testimonials-section .section-subtitle {
            font-size: 1rem; /* Reduced font size for a sleeker look */
            color: #2d2d2d; /* Dark gray for strong contrast */
            font-family: 'Montserrat', sans-serif; /* Clean, modern font */
            font-weight: 600; /* Medium boldness for emphasis */
            letter-spacing: 0.3px; /* Subtle spacing for readability */
            margin-bottom: 20px; /* Consistent spacing below */
            text-align: center; /* Center alignment for balance */
            text-transform: capitalize; /* Capitalize each word for style */
        }


        .testimonial-card {
            background: #ffffff;
            border-radius: 15px;
            padding: 30px 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .testimonial-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .testimonial-image-wrapper {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto 20px;
            overflow: hidden;
            border: 4px solid #bb3b47;
            background: #ffece8;
        }

        .testimonial-quote {
            font-size: 1.1rem;
            color: #2d3436;
            line-height: 1.8;
            font-style: italic;
            margin-bottom: 20px;
            position: relative;
        }

        .testimonial-quote i {
            font-size: 1.5rem;
            color: #bb3b47;
            margin-right: 8px;
        }

        .testimonial-author {
            font-size: 1.2rem;
            font-weight: bold;
            color: #bb3b47;
        }

        .testimonial-role {
            font-size: 0.9rem;
            color: #636e72;
        }

        /* Enhanced Social Media Section */
        .social-media-section {
            background: linear-gradient(135deg, #fff5f3 0%, #fff 100%);
            position: relative;
            overflow: hidden;
        }

        .badge.bg-soft-primary {
            background-color: rgba(96, 171, 167, 0.1); 
            color: #60aba7;
        }

        .social-media-title {
            color: #2d3436;
            font-weight: 700;
        }

        .platform-link {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px 25px;
            border-radius: 16px;
            text-decoration: none;
            color: #2d3436;
            background: white;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .platform-link:hover {
            transform: translateY(-5px);
            color: white;
        }

        .facebook-link:hover {
            background: #1877f2;
        }

        .tiktok-link:hover {
            background: #000;
        }

        .platform-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .platform-info {
            display: flex;
            flex-direction: column;
        }

        .platform-name {
            font-weight: 600;
            font-size: 1rem;
        }

        .platform-handle {
            font-size: 0.85rem;
            opacity: 0.8;
        }

        .social-feed-container {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            height: 100%;
            transition: transform 0.3s ease;
        }

        .social-feed-container:hover {
            transform: translateY(-10px);
        }

        .feed-header {
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .feed-header.facebook {
            background: rgba(24, 119, 242, 0.05);
        }

        .feed-header.tiktok {
            background: rgba(0, 0, 0, 0.05);
        }

        .feed-content {
            padding: 20px;
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .facebook-embed {
            width: 100%;
            height: 600px;
            border: none;
        }

        @media (max-width: 768px) {
            .social-platform-links {
                flex-direction: column;
                align-items: stretch;
            }

            .platform-link {
                width: 100%;
            }

            .feed-content {
                min-height: 400px;
            }
        }

.btn-custom {
    display: inline-block;
    padding: 12px 24px;
    font-size: 1rem;
    color: #ffffff;
    background-color: #bb3b47;
    border-radius: 50px;
    text-decoration: none;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
}


.btn-custom span {
    display: inline-block;
    position: relative;
    transition: transform 0.3s ease;
}

.btn-custom:hover span {
    transform: translateX(5px);
}

.feature-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 70px;
    height: 70px;
    margin: 0 auto 15px; 
    background-color: #fff5f3; 
    border-radius: 50%; 
}

.feature-icon i {
    font-size: 2rem;
    color: #bb3b47;
}

.feature-card {
    text-align: center; /* Ensures the text is centered */
    padding: 20px;
    background-color: transparent; /* Optional: Keeps the card background clean */
}

.newsletter-form .btn-primary {
    background-color: #bb3b47;
    border-color: #bb3b47;
    color: white;
    transition: all 0.3s ease;
}

.newsletter-form .btn-primary:hover {
    background-color: #a33239; /* Darker shade for hover */
    border-color: #a33239;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(187, 59, 71, 0.2);
}

.btn-outline-primary {
    color: #bb3b47 !important;
    border-color: #bb3b47 !important;
}

.btn-outline-primary:hover {
    color: #ffffff !important;
    background-color: #bb3b47 !important;
    border-color: #bb3b47 !important;
}

/* Update view all button color as well for consistency */
.btn-view-all {
    background-color: #60aba7 !important;
    border: none !important;
}

.btn-view-all:hover {
    background-color: #549995 !important; /* Slightly darker shade for hover */
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(96, 171, 167, 0.2);
}

.text-highlight {
    font-family: 'Montserrat', sans-serif; /* Modern, professional font */
    font-size: 1.2rem; /* Balanced size for readability */
    color: #2d3436; /* Dark color for clear visibility */
    font-weight: 500; /* Medium weight for a polished look */
    letter-spacing: 0.3px; /* Subtle spacing for enhanced clarity */
    margin-top: 10px; /* Maintain spacing consistency */
    text-align: center; /* Center alignment for a sleek layout */
}


        @media (max-width: 768px) {
            .testimonial-card {
                margin-bottom: 30px;
            }
            
            .social-platform-links {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PBGNBW8K"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
     

    <!-- Header -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link active" href="#hero">Home</a></li>
                    <li><a class="nav-link" href="menu.php">Menu</a></li>
                    <li><a class="nav-link" href="about-us.php">About Us</a></li>
                    <li><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center">
    <video autoplay muted loop playsinline class="hero-video">
        <source src="assets/img/cake.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="hero-overlay"></div> <!-- Semi-transparent overlay -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 hero-content">
                <h1 class="hero-title mb-4 animate__animated animate__fadeInDown">
                    Delighting Taste Buds,<br>One Slice at a Time
                </h1>
                <p class="lead mb-5 animate__animated animate__fadeIn animate__delay-1s">
                    Handcrafted with love, our cakes bring sweetness to your special moments.
                </p>
                <a href="menu.php" class="btn btn-custom animate__animated animate__fadeInUp animate__delay-1s">
                    Explore Our Products
                </a>
            </div>
        </div>
    </div>
</section>

    <!-- Featured Section -->
    <section class="featured-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-4 mb-4">
                <div class="feature-icon">
                    <i class="bi bi-award" style="font-size: 2rem; color: #bb3b47;"></i>
                </div>
                <h3 class="text-center font-alice mb-3">Premium Quality</h3>
                <p class="text-center text-muted">Made with the finest ingredients for exceptional taste</p>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="feature-icon">
                    <i class="bi bi-clock" style="font-size: 2rem; color: #bb3b47;"></i>
                </div>
                <h3 class="text-center font-alice mb-3">Fresh Daily</h3>
                <p class="text-center text-muted">Baked fresh every morning just for you</p>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="feature-icon">
                    <i class="bi bi-heart" style="font-size: 2rem; color: #bb3b47;"></i>
                </div>
                <h3 class="text-center font-alice mb-3">Made with Love</h3>
                <p class="text-center text-muted">Crafted with passion and attention to detail</p>
            </div>
        </div>
    </div>
</section>

    <!-- Best Sellers Section -->
<section class="bestsellers py-5">
    <div class="container" data-aos="fade-up">
        <!-- Section Header -->
        <div class="text-center mb-5">
        <span class="badge bg-soft-primary mb-3 px-3 py-2 rounded-pill" style="color: #60aba7;">Our Popular Picks</span>
            <h2 class="display-5 mb-3" style="color: #bb3b47;">Best Sellers</h2>
            <p class="text-highlight">Choose from our most loved cakes</p>
        </div>

        <!-- Products Grid -->
        <div class="row g-4">
            <?php
            $select_product = mysqli_query($conn, "SELECT * FROM `products` WHERE id IN (1,2,3,4)") or die('query failed');
            if (mysqli_num_rows($select_product) > 0) {
                while ($fetch_product = mysqli_fetch_assoc($select_product)) {
            ?>
            <div class="col-md-3">
                <div class="cake-card h-100">
                    <!-- Product Image Container -->
                    <div class="image-wrapper position-relative overflow-hidden rounded-4 mb-3">
                        <img src="assets/img/cakes/<?php echo $fetch_product['image']; ?>" 
                             class="w-100 cake-image" 
                             alt="<?php echo $fetch_product['product_name']; ?>">
                        <!-- Quick View Overlay -->
                        <div class="overlay-content">
                            <a href="cake-details.php?id=<?php echo $fetch_product['id']; ?>" 
                               class="btn btn-light rounded-circle">
                                <i class="bi bi-eye"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Product Info -->
                    <div class="cake-info text-center px-3">
                        <h5 class="cake-title mb-2"><?php echo $fetch_product['product_name']; ?></h5>
                        <div class="price-wrap mb-3">
                            <span class="h5" style="color: #bb3b47;">₱ <?php echo number_format($fetch_product['price'], 2); ?></span>
                        </div>
                        <a href="cake-details.php?id=<?php echo $fetch_product['id']; ?>" 
                           class="btn btn-outline-primary btn-see-details rounded-pill px-4">
                            See Details
                        </a>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>

        <!-- View All Button -->
        <div class="text-center mt-5">
            <a href="menu.php" class="btn btn-view-all rounded-pill px-5 py-3">
                View All Products
                <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>

    <style>

        .bestsellers {
            background-color: #FFF8F5;
            position: relative;
            overflow: hidden;
        }

        .bg-soft-primary {
            background-color: rgba(0, 102, 255, 0.1);
        }

        .cake-card {
            background: white;
            border: none;
            border-radius: 16px;
            transition: all 0.3s ease;
            padding: 12px;
        }

        .cake-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .image-wrapper {
            aspect-ratio: 1;
            position: relative;
        }

        .cake-image {
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .cake-card:hover .cake-image {
            transform: scale(1.05);
        }

        .overlay-content {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .cake-card:hover .overlay-content {
            opacity: 1;
        }

        .overlay-content .btn {
            width: 45px;
            height: 45px;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: translateY(20px);
            transition: all 0.3s ease;
        }

        .cake-card:hover .overlay-content .btn {
            transform: translateY(0);
        }

        /* Text Styles */
        .text-custom-price {
            color: #bb3b47;
        }

        .cake-title {
            color: #2D3436;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .btn-see-details {
            border-width: 2px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-see-details:hover {
            background-color: #0066FF;
            color: white;
            transform: translateY(-2px);
        }

        .btn-view-all {
            background-color: #bb3b47 !important;
            border: none !important;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-view-all:hover {
            background-color: white !important;
            color: #bb3b47 !important;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(187, 59, 71, 0.2);
            border: 2px solid #bb3b47 !important;
        }

        .badge-new {
    position: absolute;
    top: 20px;
    right: 20px;
    background: var(--secondary);
    color: white;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.8rem;
    z-index: 1;
}

.product-card .product-title {
    color: var(--text-dark);
    font-size: 1.25rem;
    transition: all 0.3s ease;
}

.product-card:hover .product-title {
    color: var(--primary);
}

/* Category Pills */
.category-pills {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-bottom: 3rem;
}

.category-pill {
    padding: 8px 20px;
    border-radius: 25px;
    background: white;
    color: var(--text-dark);
    border: 1px solid rgba(96, 171, 167, 0.2);
    transition: all 0.3s ease;
    cursor: pointer;
}

.category-pill:hover,
.category-pill.active {
    background: var(--secondary);
    color: white;
    border-color: var(--secondary);
}

/* Newsletter Section */
.newsletter-section {
    background: linear-gradient(45deg, #FFF8F5, #fff);
    padding: 80px 0;
    position: relative;
    overflow: hidden;
}
.newsletter-form {
    max-width: 500px;
    margin: 40px auto;
    position: relative;
    display: flex;
    gap: 10px;
}
.newsletter-input {
    flex: 1;
    padding: 15px 25px;
    border: 2px solid #eee;
    border-radius: 50px;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.newsletter-btn {
    padding: 15px 40px;
    border-radius: 50px;
    background-color: #bb3b47;
    border: none;
    color: white;
    font-weight: 500;
    transition: all 0.3s ease;
}

.newsletter-btn:hover {
    background-color: #a33239;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(187, 59, 71, 0.2);
}

.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2d3436;
    font-family: 'Lora', serif;
    margin-bottom: 1rem;
    position: relative;
}

.section-title::after {
    content: '';
    display: block;
    width: 60px;
    height: 3px;
    background: #bb3b47;
    margin: 15px auto 0;
    border-radius: 2px;
}

.section-subtitle {
    font-size: 1.1rem;
    color: #636e72;
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    line-height: 1.6;
    max-width: 600px;
    margin: 0 auto;
    letter-spacing: 0.3px;
}

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .cake-card {
                margin-bottom: 2rem;
            }
        }
    </style>
</section>

<section class="testimonials-section">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <h2 class="section-title">What Our Customers Say</h2>
            <p class="section-subtitle text-center">Feedbacks from our happy customers</p>
        </div>
        
        <!-- Testimonials Grid -->
        <div class="row gy-4 justify-content-center">
            <!-- Testimonial 1 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="testimonial-card">
                    <div class="testimonial-image-wrapper">
                        <img src="assets/img/tine.png" alt="Kristine Basilio" class="testimonial-image">
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-quote">
                            <i class="bi bi-quote"></i>
                            Amazing cakes! The quality and taste are consistently excellent. Every celebration becomes special with Dolis cakes!
                        </p>
                        <div class="testimonial-author">Kristine Basilio</div>
                        <div class="testimonial-role">Satisfied Customer</div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial-card">
                    <div class="testimonial-image-wrapper">
                        <img src="assets/img/avien.png" alt="Avien Batul" class="testimonial-image">
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-quote">
                            <i class="bi bi-quote"></i>
                            The best cakes in town! Perfect for every celebration. Their attention to detail and taste is unmatched!
                        </p>
                        <div class="testimonial-author">Avien Batul</div>
                        <div class="testimonial-role">Loyal Customer</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-card">
                    <div class="testimonial-image-wrapper">
                        <img src="assets/img/paul.png" alt="Paul Yumang" class="testimonial-image">
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-quote">
                            <i class="bi bi-quote"></i>
                            The flavors and designs are top-notch! I always recommend Dolis to anyone looking for amazing cakes.
                        </p>
                        <div class="testimonial-author">Paul Yumang</div>
                        <div class="testimonial-role">Food Vlogger</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Enhanced Social Media Section -->
<section class="social-media-section py-5">
    <div class="container">
        <!-- Section Header with Enhanced Styling -->
        <div class="social-media-header text-center mb-5">
            <span class="badge bg-soft-primary mb-3 px-3 py-2 rounded-pill">Connect With Us</span>
            <h2 class="section-title mb-3">Join Our Sweet Community</h2>
            <p class="section-subtitle">Follow us for daily cake inspiration and behind-the-scenes moments</p>
            
            <!-- Enhanced Social Links -->
            <div class="social-platform-links d-flex justify-content-center gap-3 mt-4">
                <a href="https://www.facebook.com/dolisbyvicky/" class="platform-link facebook-link" target="_blank">
                    <div class="platform-icon">
                        <i class="bi bi-facebook"></i>
                    </div>
                    <div class="platform-info">
                        <span class="platform-name">Facebook</span>
                        <span class="platform-handle">@dolisbyvicky</span>
                    </div>
                </a>
                <a href="https://www.tiktok.com/@dolisbyvicky" class="platform-link tiktok-link" target="_blank">
                    <div class="platform-icon">
                        <i class="bi bi-tiktok"></i>
                    </div>
                    <div class="platform-info">
                        <span class="platform-name">TikTok</span>
                        <span class="platform-handle">@dolisbyvicky</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- Social Feeds Container -->
        <div class="row g-4">
            <!-- Facebook Feed -->
            <div class="col-lg-6">
                <div class="social-feed-container">
                    <div class="feed-header facebook">
                        <div class="d-flex align-items-center">
                            <div class="social-platform-icon">
                                <i class="bi bi-facebook"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="mb-0">Latest Facebook Updates</h5>
                                <small class="text-muted">Follow us for daily posts</small>
                            </div>
                        </div>
                        <a href="https://www.facebook.com/profile.php?id=61570023253964" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill">
                            <i class="bi bi-box-arrow-up-right me-1"></i> Visit Page
                        </a>
                    </div>
                    <div class="feed-content">
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fphoto.php%3Ffbid%3D122104297568667441%26set%3Da.122103913730667441%26type%3D3&show_text=true&width=500" 
                                class="facebook-embed"
                                scrolling="no" 
                                frameborder="0" 
                                allowfullscreen="true" 
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                        </iframe>
                    </div>
                </div>
            </div>

            <!-- TikTok Feed -->
            <div class="col-lg-6">
                <div class="social-feed-container">
                    <div class="feed-header tiktok">
                        <div class="d-flex align-items-center">
                            <div class="social-platform-icon">
                                <i class="bi bi-tiktok"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="mb-0">TikTok Highlights</h5>
                                <small class="text-muted">Watch our latest videos</small>
                            </div>
                        </div>
                        <a href="https://www.tiktok.com/@dolisbyvicky" target="_blank" class="btn btn-outline-dark btn-sm rounded-pill">
                            <i class="bi bi-box-arrow-up-right me-1"></i> Visit Profile
                        </a>
                    </div>
                    <div class="feed-content">
                        <blockquote class="tiktok-embed" 
                                  cite="https://www.tiktok.com/@dolisbyvicky/video/7446802217014775057" 
                                  data-video-id="7446802217014775057">
                            <section>
                                <a target="_blank" href="https://www.tiktok.com/@dolisbyvicky"></a>
                            </section>
                        </blockquote>
                        <script async src="https://www.tiktok.com/embed.js"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

<!-- Newsletter Section -->
<section class="newsletter-section">
    <div class="container">
        <h2 class="section-title">Stay Updated</h2>
        <p class="section-subtitle">Subscribe to get special offers and sweet updates</p>
        <form class="newsletter-form">
            <input type="email" class="newsletter-input" placeholder="Enter your email">
            <button type="submit" class="newsletter-btn">Subscribe</button>
        </form>
    </div>
</section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Scripts -->
    <?php include 'scripts.php'; ?>
</body>
</html>