<?php include 'config.php';
session_start();
   
if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "<script>alert('Invalid cake ID');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cake Details - Dolis</title>
    <?php include 'head.php'; ?>
    <style>
        :root {
            --primary-color: #DC531B;
        }

        body {
            background-color: #f5f5f7;
        }

        .product-section {
            padding-top: 120px;
            min-height: 100vh;
            background: linear-gradient(180deg, #fff 0%, #f5f5f7 100%);
        }

        .back-button {
            position: fixed;
            top: 100px;
            left: 40px;
            z-index: 100;
            transition: all 0.3s ease;
        }

        .back-button:hover {
            transform: translateX(-5px);
        }
  

        .product-image-container {
            position: relative;
            overflow: hidden;
            border-radius: 24px;
            transition: all 0.5s ease;
        }

        .product-image {
            width: 100%;
            height: auto;
            transform: scale(1);
            transition: transform 0.7s ease;
        }

        .product-image-container:hover .product-image {
            transform: scale(1.05);
        }

        .product-title {
            font-size: 48px;
            font-weight: 700;
            background: linear-gradient(45deg, var(--primary-color), #ff8f5d);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
        }

        .product-price {
            font-size: 24px;
            color: #1d1d1f;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .product-description {
            font-size: 18px;
            line-height: 1.6;
            color: #86868b;
            margin-bottom: 40px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-bottom: 40px;
        }

        .info-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
        }

        .info-title {
            font-size: 16px;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 12px;
        }

        .info-content {
            font-size: 15px;
            color: #1d1d1f;
            line-height: 1.5;
        }

        .specifications {
            margin-top: 60px;
            padding: 40px;
            background: white;
            border-radius: 24px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.03);
        }

        .spec-title {
            font-size: 24px;
            font-weight: 600;
            color: #1d1d1f;
            margin-bottom: 30px;
        }

        .spec-item {
            display: flex;
            margin-bottom: 20px;
        }

        .spec-label {
            width: 140px;
            font-weight: 500;
            color: #86868b;
        }

        .spec-value {
            flex: 1;
            color: #1d1d1f;
        }

        @media (max-width: 768px) {
            .product-title {
                font-size: 36px;
            }
            
            .info-grid {
                grid-template-columns: 1fr;
            }
            
            .back-button {
                top: 80px;
                left: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJ42LCQN"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
     
    <?php include 'head.php'; ?>

    <a href="menu.php" class="back-button text-decoration-none">
        <div class="d-flex align-items-center">
            <i class="bi bi-arrow-left me-2" style="font-size: 20px; color: #86868b;"></i>
            <span style="color: #86868b;">Back to Menu</span>
        </div>
    </a>

    <main>
        <?php
        $select_product = mysqli_query($conn, "SELECT * FROM `products` WHERE id = $id") or die('query failed');
        if($select_product){
            $fetch_product = mysqli_fetch_assoc($select_product);
        ?>
        
        <section class="product-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                        <div class="product-image-container">
                            <img class="product-image" src="assets/img/cakes/<?php echo $fetch_product['image']; ?>" alt="<?php echo $fetch_product['product_name']; ?>">
                        </div>
                    </div>
                    
                    <div class="col-lg-6" data-aos="fade-left">
                        <h1 class="product-title"><?php echo $fetch_product['product_name']; ?></h1>
                        <div class="product-price">₱<?php echo number_format($fetch_product['price'], 2); ?></div>
                        <p class="product-description"><?php echo $fetch_product['description']; ?></p>
                        
                        <div class="info-grid">
                            <div class="info-card">
                                <div class="info-title">
                                    <i class="bi bi-exclamation-circle me-2"></i>Allergens
                                </div>
                                <div class="info-content"><?php echo $fetch_product['allergens']; ?></div>
                            </div>
                            
                            <div class="info-card">
                                <div class="info-title">
                                    <i class="bi bi-snow me-2"></i>Storage
                                </div>
                                <div class="info-content"><?php echo $fetch_product['storage']; ?></div>
                            </div>
                        </div>

                        <div class="specifications">
                            <h3 class="spec-title">Product Specifications</h3>
                            <?php if (in_array($fetch_product['id'], [1, 2, 3])) { ?>
                                <div class="spec-item">
                                    <div class="spec-label">Size</div>
                                    <div class="spec-value">10 inches</div>
                                </div>
                                <div class="spec-item">
                                    <div class="spec-label">Serves</div>
                                    <div class="spec-value">5-8 people</div>
                                </div>
                                <div class="spec-item">
                                    <div class="spec-label">Best Before</div>
                                    <div class="spec-value">3-4 days when refrigerated</div>
                                </div>
                            <?php } elseif ($fetch_product['id'] == 4) { ?>
                                <div class="spec-item">
                                    <div class="spec-label">Weight</div>
                                    <div class="spec-value">500 grams</div>
                                </div>
                                <div class="spec-item">
                                    <div class="spec-label">Serves</div>
                                    <div class="spec-value">4-6 people</div>
                                </div>
                                <div class="spec-item">
                                    <div class="spec-label">Best Before</div>
                                    <div class="spec-value">1 week when stored in an airtight container</div>
                                </div>
                            <?php } elseif ($fetch_product['id'] == 5) { ?>
                                <div class="spec-item">
                                    <div class="spec-label">Size</div>
                                    <div class="spec-value">5 cupcakes per box</div>
                                </div>
                                <div class="spec-item">
                                    <div class="spec-label">Serves</div>
                                    <div class="spec-value">1-2 people per cupcake</div>
                                </div>
                                <div class="spec-item">
                                    <div class="spec-label">Best Before</div>
                                    <div class="spec-value">2-3 days when refrigerated</div>
                                </div>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
    </main>

    <?php include 'footer.php'; ?>

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