<?php
$pageTitle = isset($pageTitle) ? $pageTitle : 'Dolis Cakes & Pastries';
$pageDescription = isset($pageDescription) ? $pageDescription : 'Experience handcrafted cakes and pastries made with love and premium ingredients';
$pageKeywords = isset($pageKeywords) ? $pageKeywords : 'cakes, pastries, bakery, desserts, custom cakes, Angeles City';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords); ?>">
    <meta name="author" content="Dolis Cakes & Pastries">
    
    <!-- Open Graph / Social Media Meta Tags -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:image" content="assets/img/logo.png">
    <meta property="og:url" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
    
    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <!-- Favicons -->
    <link rel="icon" href="assets/img/favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">

    <!-- Preconnect to External Resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Alice&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files - Consider using defer for non-critical CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/vendor/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/vendor/glightbox/css/glightbox.min.css">
    <link rel="stylesheet" href="assets/vendor/remixicon/remixicon.css">
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/vendor/aos/aos.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Critical CSS Inline for Better Performance -->
    <style>
.modern-header {
    background: rgba(255, 252, 243, 0.98);
    padding: 20px 0;
    transition: all 0.4s ease;
    border-bottom: 1px solid rgba(96, 171, 167, 0.1);
}

.modern-header.scrolled {
    padding: 10px 0;
    background: rgba(255, 252, 243, 0.95);
    backdrop-filter: blur(10px);
    box-shadow: 0 2px 20px rgba(187, 59, 71, 0.1);
}

.logo img {
    height: 45px;
    transition: all 0.3s ease;
}

.logo:hover img {
    transform: scale(1.05);
}

.nav-wrapper {
    display: flex;
    align-items: center;
    gap: 2rem;
}

.nav-menu {
    display: flex;
    gap: 1.5rem;
    margin: 0;
    padding: 0;
    list-style: none;
}

.nav-link {
    color: #5D4638;
    font-weight: 500;
    padding: 0.5rem 1rem;
    position: relative;
    transition: all 0.3s ease;
    text-decoration: none;
}

.nav-link::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 1rem;
    right: 1rem;
    height: 2px;
    background-color: #bb3b47;
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.nav-link:hover::before,
.nav-link.active::before {
    transform: scaleX(1);
}

.nav-link:hover {
    color: #bb3b47;
}

.nav-link.active {
    color: #bb3b47;
}

/* Mobile Menu Icon */
.mobile-toggle {
    display: none;
    background: none;
    border: none;
    padding: 0.5rem;
    cursor: pointer;
    position: relative;
    z-index: 100;
}

.toggle-icon {
    position: relative;
    width: 24px;
    height: 2px;
    background: #bb3b47;
    transition: all 0.3s ease;
}

.toggle-icon::before,
.toggle-icon::after {
    content: '';
    position: absolute;
    width: 24px;
    height: 2px;
    background: #bb3b47;
    transition: all 0.3s ease;
}

.toggle-icon::before {
    top: -6px;
}

.toggle-icon::after {
    bottom: -6px;
}

.mobile-toggle.active .toggle-icon {
    background: transparent;
}

.mobile-toggle.active .toggle-icon::before {
    transform: rotate(45deg);
    top: 0;
}

.mobile-toggle.active .toggle-icon::after {
    transform: rotate(-45deg);
    bottom: 0;
}

@media (max-width: 991px) {
    .mobile-toggle {
        display: block;
    }

    .nav-wrapper {
        position: fixed;
        top: 0;
        right: -100%;
        height: 100vh;
        width: 80%;
        max-width: 400px;
        background: rgba(255, 252, 243, 0.98);
        backdrop-filter: blur(10px);
        flex-direction: column;
        padding: 80px 2rem;
        transition: all 0.4s ease;
        z-index: 99;
    }

    .nav-wrapper.active {
        right: 0;
        box-shadow: -5px 0 30px rgba(0, 0, 0, 0.1);
    }

    .nav-menu {
        flex-direction: column;
        align-items: center;
        gap: 2rem;
    }

    .nav-link {
        font-size: 1.2rem;
    }
}
</style>

<!-- Header HTML -->
<header class="modern-header fixed-top">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <!-- Logo Section -->
            <a href="index.php" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="Dolis" class="img-fluid me-2" style="max-height: 50px;">
            </a>

            <!-- Mobile Toggle for Small Screens -->
            <button class="mobile-toggle d-lg-none">
                <span class="toggle-icon"></span>
            </button>

            <!-- Navigation Menu -->
            <div class="nav-wrapper">
                <ul class="nav-menu">
                    <li>
                        <a href="index.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">
                            <i class="bi bi-house-door me-2"></i>Home
                        </a>
                    </li>
                    <li>
                        <a href="menu.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'menu.php') ? 'active' : ''; ?>">
                            <i class="bi bi-menu-button-wide me-2"></i>Menu
                        </a>
                    </li>
                    <li>
                        <a href="about-us.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'about-us.php') ? 'active' : ''; ?>">
                            <i class="bi bi-people me-2"></i>About Us
                        </a>
                    </li>
                    <li>
                        <a href="contact-us.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contact-us.php') ? 'active' : ''; ?>">
                            <i class="bi bi-envelope me-2"></i>Contact Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- Add this JavaScript before closing body tag -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Header scroll effect
    const header = document.querySelector('.modern-header');
    const mobileToggle = document.querySelector('.mobile-toggle');
    const navWrapper = document.querySelector('.nav-wrapper');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Mobile menu toggle
    mobileToggle.addEventListener('click', () => {
        mobileToggle.classList.toggle('active');
        navWrapper.classList.toggle('active');
    });

    // Close mobile menu on link click
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            mobileToggle.classList.remove('active');
            navWrapper.classList.remove('active');
        });
    });

    // Close mobile menu on outside click
    document.addEventListener('click', (e) => {
        if (!navWrapper.contains(e.target) && !mobileToggle.contains(e.target)) {
            mobileToggle.classList.remove('active');
            navWrapper.classList.remove('active');
        }
    });
});
</script>

    <!-- Polyfills and Compatibility Scripts -->
    <script>
        // Add any necessary polyfills or compatibility checks here
        if(!window.Promise) {
            document.write('<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"><\/script>');
        }
    </script>
</head>