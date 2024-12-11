<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

  <!-- Page Title -->
  <head><title>Thank You!</title></head>


<?php include 'head.php'; ?>

    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center justify-content-between">
                <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link" href="index.php">Home</a></li>
                        <li><a class="nav-link" href="menu.php">Menu</a></li>
                        <li><a class="nav-link" href="about-us.php">About Us</a></li>
                        <li><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
            </div>
        </header>
        <!-- End Header -->

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJ42LCQN"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <main id="main">
            <section id="thank-you" class="thank-you section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="text-center">
                        <h1>Thank You!</h1>
                        <p>Your message has been successfully sent. We'll get back to you as soon as possible.</p>
                        <a href="index.php" class="btn btn-primary">Return to Home</a>
                    </div>
                </div>
            </section>
        </main>

        <!-- ======= Footer ======= -->
        <?php include 'footer.php'; ?>
        <!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Scripts  -->
        <?php include 'scripts.php'; ?>
        <!-- End Scripts -->
    </body>
</html>
