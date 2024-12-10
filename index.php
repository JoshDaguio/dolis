<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

    <!-- Page Title -->
    <head><title>Dolis</title></head>

    <?php include 'head.php'; ?>

  <body>
    <!-- Empty Cart Modal -->
    <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <!-- add modal-lg class to the modal-dialog to make it large -->
            <div class="modal-content custom-modal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center mb-4">
                <!-- add d-flex and justify-content-center classes to center the image -->
                <img src="assets\img\cart-modal.png" alt="Empty Cart" class="img-fluid">
                </div>
                <div class="text-center">
                <h3>It looks like you haven't picked any cakes yet.</h3>
                <h5>Browse our menu and add your favorites to your cart.</h5>
                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
            <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link active" href="#hero">Home</a></li>
                <li><a class="nav-link" href="menu.php">Menu</a></li>
                <li><a class="nav-link" href="about-us.php">About Us</a></li>
                <li><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                
            </span>            

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content custom-modal">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Welcome Back!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                <div class="form-group">
                    <label for="username">Email</label>
                    <input type="email" name="email" class="form-control" id="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary custom-login-btn" value="login now">Login</button>
                </div>
                <div class="text-center mt-3">
                    <p>Don't have an account? <a href="register.php">Register Here</a></p>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-image: url(assets/img/slide/main.png)">
            <div class="carousel-container">
            <div class="container" style="white-space: pre-line;">
  <h3 class="animate__animated animate__fadeInDown">Delighting Taste Buds,
One Slice at a Time</h3>
  <a href="menu.php" class="btn-order-here animate__animated animate__fadeInUp scrollto">See Cakes Here</a>
</div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Hero -->

    <div>
        <img src="assets/img/element-yellow.png" class="yellow-element">
    </div>

    <main id="main">
        <!-- ======= Best Sellers Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Best Sellers</h2>
                    <p>Choose from our most loved cakes</p>
                </div>
                    <div class="row">
                        <?php
                                        $select_product = mysqli_query($conn, "SELECT * FROM `products` WHERE id IN (1,2,3,4)") or die('query failed');
                                        if (mysqli_num_rows($select_product) > 0) 
                                        {
                                        while ($fetch_product = mysqli_fetch_assoc($select_product)) 
                                        {
                                        ?>
                <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <!-- Product image -->
                    <img class="card-img-top" src="assets/img/cakes/<?php echo $fetch_product['image']; ?>" alt="">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                    <!-- Product details -->
                    <div class="card-body">
                    <h5 class="card-title fw-bolder text-center"><?php echo $fetch_product['product_name']; ?></h5>
                    <input type="hidden" name="product_name" value="<?php echo $fetch_product['product_name']; ?>">
                    <div class="card-details">
                        <h5>₱ <?php echo $fetch_product['price']; ?></h5>
                        <a href="cake-details.php?id=<?php echo $fetch_product['id']; ?>" style="font-size: small;">See cake details</a>
                    </div>
                    
                    </div>
                </div>
                </div>
                <?php
                                }
                                }
                                ?>
            </div>
            <div class="text-center">
                <a href="menu.php" class="btn-order-here">View more cakes</a>
            </div>
            </div>
        </section>
        <!-- ======= End Best Sellers Section ======= -->
        </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include 'footer.php'; ?>
    <!-- ======= End Footer ======= -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Scripts  -->
    <?php include 'scripts.php'; ?>
    <!-- End Scripts -->
  </body>

</html>
