<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Our Story - Dolis Cakes and Pastries</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <?php include 'head.php'; ?>
    <style>
        :root {
            --primary: #bb3b47;
            --text-dark: #333333;
            --text-light: #666666;
            --bg-light: #fff5f3;
        }

        body {
            body {
            font-family: 'Montserrat', sans-serif; /* Could override global font-family */
            font-weight: 400; /* May make fonts thinner */
        }

        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('assets/img/hero-bg.jpg');
            background-size: cover;
            background-position: center;
            height: 45vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            font-family: 'Lora', serif;
        }
  

        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            color: var(--text-dark);
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
            font-family: 'Lora', serif;
        }

        .section-title p {
            color: var(--text-light);
            font-size: 1.1rem;
        }

        .timeline-container {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            padding: 40px 0;
        }

        .timeline-line {
            position: absolute;
            left: 50%;
            top: 0;
            width: 2px;
            height: 100%;
            background-color: #f0f0f0;
            transform: translateX(-50%);
        }

        .timeline-item {
            margin-bottom: 60px;
            position: relative;
            width: 50%;
            padding: 0 40px;
        }

        .timeline-content {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            position: relative;
        }

        .timeline-year {
            position: absolute;
            top: 0;
            background: var(--primary);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            transform: translateY(-50%);
        }

        .timeline-item:nth-child(odd) {
            margin-left: 50%;
        }

        .timeline-item:nth-child(odd) .timeline-year {
            left: -20px;
        }

        .timeline-item:nth-child(even) .timeline-year {
            right: -20px;
        }

        .values-section {
            background-color: var(--bg-light);
            padding: 80px 0;
        }

        .value-card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }

        .value-card:hover {
            transform: translateY(-10px);
        }

        .value-icon {
            width: 80px;
            height: 80px;
            background: var(--bg-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .value-icon i {
            color: #bb3b47; 
            font-size: 2rem;
        }

        .value-title {
            color: var(--text-dark);
            font-size: 1.5rem;
            margin-bottom: 1rem;
            font-family: 'Lora', serif;
        }

        .value-description {
            color: var(--text-light);
            font-size: 1rem;
            line-height: 1.6;
        }

        .founder-section {
            padding: 100px 0;
            background-color: white;
        }

        .founder-section h2 {
            color: var(--text-dark);
            font-family: 'Lora', serif;
        }

        .founder-image {
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .founder-image:hover {
            transform: translateY(-10px);
        }

        .quote-box {
            background: var(--bg-light);
            padding: 40px;
            border-radius: 20px;
            position: relative;
            margin-top: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .quote-box::before {
            content: '"';
            position: absolute;
            top: -30px;
            left: 40px;
            font-size: 100px;
            color: var(--primary);
            opacity: 0.2;
            font-family: 'Georgia', serif;
            color: #bb3b47;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .timeline-container {
                padding: 20px;
            }
            
            .timeline-item {
                width: 100%;
                margin-left: 0 !important;
                padding: 0 0 0 50px;
            }
            
            .timeline-line {
                left: 20px;
            }
            
            .timeline-year {
                left: -30px !important;
            }
            
            .founder-section {
                padding: 60px 0;
            }
            
            .quote-box {
                margin: 40px 0;
            }
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
            <a href="index.php" class="logo">
                <img src="assets/img/logo.png" alt="Dolis Logo" class="img-fluid">
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="index.php">Home</a></li>
                    <li><a class="nav-link" href="menu.php">Menu</a></li>
                    <li><a class="nav-link active" href="about-us.php">About Us</a></li>
                    <li><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="hero-title">A Story of Passion & Dedication</h1>
            <p class="hero-subtitle">Since 2014, bringing homemade goodness to every bite</p>
        </div>
    </section>

    <!-- Journey Section -->
    <section class="py-5">
        <div class="container">
            <div class="section-title">
                <h2>Our Journey</h2>
                <p>From a passionate hobby to a beloved local brand</p>
            </div>

            <div class="timeline-container">
                <div class="timeline-line"></div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <span class="timeline-year">2014</span>
                        <h3>The Beginning</h3>
                        <p>Victoria Basilio founded Dolis Cakes and Pastries, turning her college baking hobby into a home-based business.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-content">
                        <span class="timeline-year">2014-Present</span>
                        <h3>Growth & Evolution</h3>
                        <p>Expanded from a home kitchen to serving schools and online markets, while maintaining our commitment to homemade quality.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Founder Section -->
    <section class="founder-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="display-4 mb-4">The Story Behind Our Name</h2>
                    <p class="lead mb-4">The name "Dolis" honors Victoria's parents, Gerardo and Elisa, whose entrepreneurial spirit inspired her journey.</p>
                    <div class="quote-box">
                        <p class="lead mb-0">"What started as a hobby became my passion. Each recipe explored and every skill learned brought me closer to my dream of sharing the joy of baking with others."</p>
                        <footer class="mt-3">
                            <strong>- Victoria Basilio</strong><br>
                            <small class="text-muted">Founder, Dolis Cakes and Pastries</small>
                        </footer>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left">
                    <div class="founder-image">
                        <img src="assets/img/founder.jpg" alt="Victoria Basilio" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Values</h2>
                <p>What makes our treats special</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3 class="value-title">Homemade Goodness</h3>
                        <p class="value-description">Every product is crafted with love and care, just like it's made in your own kitchen.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h3 class="value-title">Quality Ingredients</h3>
                        <p class="value-description">We use only the finest, freshest ingredients to ensure exceptional taste in every bite.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-smile"></i>
                        </div>
                        <h3 class="value-title">Customer Satisfaction</h3>
                        <p class="value-description">Your happiness is our priority, from the first bite to the last crumb.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <?php include 'footer.php'; ?>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>

    <?php include 'scripts.php'; ?>
</body>
</html>