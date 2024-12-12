<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu - Dolis Cakes and Pastries</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?php include 'head.php'; ?>
    <style>
    .hero-section {
    position: relative;
    height: 40vh;
    min-height: 300px;
    max-height: 400px;
    overflow: hidden;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/img/menu-hero.jpg');
    background-size: cover;
    background-position: center;
}

.hero-section img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.hero-section h1, 
.hero-section p {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

/* Adjust header to be truly fixed */
#header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    background: white;
}

/* Add padding to body to account for fixed header */
body {
    padding-top: 72px; /* Height of your header */
}

/* Hero section text styles */
.hero-section h1 {
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: bold;
    color: white;
    margin-bottom: 1rem;
}

.hero-section p {
    font-size: clamp(1rem, 2vw, 1.25rem);
    color: rgba(255, 255, 255, 0.9);
    max-width: 600px;
    margin: 0 auto;
}

@media (max-width: 768px) {
    .hero-section {
        height: 35vh;
        min-height: 250px;
    }
}

/* Adjust text sizes for better proportion */
.hero-section h1 {
    font-size: clamp(2rem, 5vw, 3.5rem); /* Responsive font size */
    font-weight: bold;
    color: white;
    margin-bottom: 1rem;
}

.hero-section p {
    font-size: clamp(1rem, 2vw, 1.25rem); /* Responsive font size */
    color: rgba(255, 255, 255, 0.9);
    max-width: 600px;
    margin: 0 auto;
}

/* Media query for smaller screens */
@media (max-width: 768px) {
    .hero-section {
        height: 35vh;
        min-height: 250px;
    }
}

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .product-image-wrapper {
            position: relative;
            padding-top: 100%;
            overflow: hidden;
        }

        .product-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-image {
            transform: scale(1.1);
        }

        .product-type-badge {
            position: absolute;
            top: 1rem;
            left: 1rem;
            background-color: rgba(187, 59, 71, 0.9);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 999px;
            font-size: 0.875rem;
            font-weight: 500;
            z-index: 10;
        }

        .price-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background-color: rgba(255, 255, 255, 0.95);
            color: #bb3b47;
            padding: 0.5rem 1rem;
            border-radius: 999px;
            font-weight: 600;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #60aba7;
            margin-bottom: 0.5rem;
        }

        .product-description {
            color: #666;
            font-size: 0.875rem;
            line-height: 1.5;
            margin-bottom: 1rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .view-details-btn {
            display: inline-block;
            width: 100%;
            background: #bb3b47;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 10px;
            text-align: center;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .view-details-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(220, 83, 27, 0.3);
        }

        .category-filters {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
        }

        .category-btn {
    padding: 0.75rem 1.5rem;
    border-radius: 999px;
    font-weight: 500;
    transition: all 0.3s ease;
    background: white;
    color: #666;  /* Default color */
    border: 2px solid #eee;
}

.category-btn.active {
    background: #bb3b47;
    color: white;  /* Making sure active state text is white */
    border-color: #bb3b47;
}

.category-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    background: #bb3b47;  /* Added hover background */
    color: white;  /* Added hover text color */
    border-color: #bb3b47;  /* Added hover border color */
}
    </style>
</head>
<body class="bg-gray-50">

        <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJ42LCQN"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->


    <!-- Hero Section -->
        <section class="hero-section flex items-center justify-center text-center">
            <div class="absolute inset-0">
                <img src="assets/img/menu-hero.jpg" alt="Hero Background" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black opacity-60"></div>
            </div>
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-4" data-aos="fade-down">
                    Our Sweet Creations
                </h1>
                <p class="text-xl text-gray-200 mb-8" data-aos="fade-up" data-aos-delay="200">
                    Each treat is crafted with love and premium ingredients
                </p>
            </div>
        </section>

    <!-- Menu Section -->
    <section class="py-24">
        <div class="container mx-auto px-4">
            <!-- Category Filters -->
            <div class="category-filters" data-aos="fade-up">
                <button class="category-btn active" data-category="all">All Products</button>
                <button class="category-btn" data-category="cake">Cakes</button>
                <button class="category-btn" data-category="cupcake">Cupcakes</button>
                <button class="category-btn" data-category="cookie">Cookies</button>
            </div>

            <div class="product-grid">
                <?php
                $select_product = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
                if (mysqli_num_rows($select_product) > 0) {
                    while ($fetch_product = mysqli_fetch_assoc($select_product)) {
                        // Updated category determination logic with cookies
                        $product_type = strpos(strtolower($fetch_product['product_name']), 'cupcake') !== false ? 'cupcake' : 
                                      (strpos(strtolower($fetch_product['product_name']), 'chocolate chip') !== false ? 'cookie' : 'cake');
                                      
                        // Format display name for the badge
                        $display_type = ucfirst($product_type);
                ?>
                <div class="product-card" data-category="<?php echo $product_type; ?>" data-aos="fade-up">
                    <div class="product-image-wrapper">
                        <span class="product-type-badge"><?php echo $display_type; ?></span>
                        <span class="price-badge">₱<?php echo $fetch_product['price']; ?></span>
                        <img class="product-image" 
                             src="assets/img/cakes/<?php echo $fetch_product['image']; ?>" 
                             alt="<?php echo $fetch_product['product_name']; ?>">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title"><?php echo $fetch_product['product_name']; ?></h3>
                        <p class="product-description"><?php echo $fetch_product['description']; ?></p>
                        <a href="cake-details.php?id=<?php echo $fetch_product['id']; ?>" 
                           class="view-details-btn">
                            View Details
                        </a>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all filter buttons and products
            const filterButtons = document.querySelectorAll('.category-btn');
            const products = document.querySelectorAll('.product-card');

            // Add click event to filter buttons
            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    
                    // Add active class to clicked button
                    button.classList.add('active');
                    
                    // Get selected category
                    const selectedCategory = button.getAttribute('data-category');
                    
                    // Filter products
                    products.forEach(product => {
                        const productCategory = product.getAttribute('data-category');
                        
                        if (selectedCategory === 'all' || selectedCategory === productCategory) {
                            // Show product with animation
                            product.style.opacity = '0';
                            product.classList.remove('hidden');
                            setTimeout(() => {
                                product.style.opacity = '1';
                            }, 50);
                        } else {
                            // Hide product with animation
                            product.style.opacity = '0';
                            setTimeout(() => {
                                product.classList.add('hidden');
                            }, 300);
                        }
                    });
                });
            });
        });
        </script>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Scripts -->
    <?php include 'scripts.php'; ?>
</body>
</html>