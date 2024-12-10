<?php

include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

  <!-- Page Title -->
  <head><title>About Us</title></head>

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
            <li><a class="nav-link" href="index.php">Home</a></li>
            <li><a class="nav-link" href="menu.php">Menu</a></li>
            <li><a class="nav-link active" href="#about">About Us</a></li>
            <li><a class="nav-link" href="contact-us.php">Contact Us</a></li>

           
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
        <div class="modal-content">
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
    <section>
      <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
          <h1 class="display-4 text-white animated slideInDown mb-3"></h1>
          <nav aria-label="breadcrumb animated slideInDown">
          </nav>
        </div>
      </div>
    </section>
    <!-- ======= End Hero Section ======= -->

    <div>
      <img src="assets/img/element-yellow.png" class="yellow-element">
    </div>

    <main id="main">
      <!-- ======= About Us Section ======= -->
      <section id="team" class="">
        <!-- About Start -->
        <div class="container-xxl py-6">
          <div class="container" data-aos="fade-up">
            <div class="row g-5">
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row img-twice position-relative h-100">
                  <div class="col-6">
                    <img class="img-fluid rounded" src="assets\img\about\cake-1.jpg" alt="">
                  </div>
                  <div class="col-6 align-self-end">
                    <img class="img-fluid rounded" src="assets\img\about\cake-2.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                  <h1 class="display-6 mb-4">We Bake Every Item From The Core Of Our Hearts</h1>
                  <p>Welcome to Bake Me Happy, where convenience meets exquisite flavors. Whether you're surprising a loved one, treating yourself, or commemorating life's sweetest moments, the team invites you to embark on a journey of pure indulgence.</p>
                  <p>Prepare to encounter the magic of cakes like never before as you step into the world of Bake Me Happy, where delightful treats await you.</p>
                  <div class="row g-2 mb-4">
                    <div class="col-sm-6">
                      <i class="fa fa-check me-2" style="color: #ed502e;"></i>Quality Products
                    </div>
                    <div class="col-sm-6">
                      <i class="fa fa-check me-2" style="color: #ed502e;"></i>Custom Products
                    </div>
                    <div class="col-sm-6">
                      <i class="fa fa-check me-2" style="color: #ed502e;"></i>Online Order
                    </div>
                    <div class="col-sm-6">
                      <i class="fa fa-check me-2" style="color: #ed502e;"></i>Home Delivery
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- About End -->


      </section>
      <!-- End About Section -->

      <!-- ======= Team Section ======= -->

      <section id="team">
            <!-- Team Start -->
    <div class="container-xxl py-6">
        <div class="container" data-aos="fade-up">
          <div class="section-title">            
              <h2>Team</h2>
              <p>Meet Bake Me Happy's proud developer team</p>
          </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <img class="img-fluid" src="assets\img\team\avien.png" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Avien Flaire Batul</h5>
                                <span>Back-End Developer</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-light rounded-circle" href="https://www.facebook.com/avieflaire.batul"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light rounded-circle" href="https://www.instagram.com/avien_flaire"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-light rounded-circle" href="https://github.com/aviennn"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <img class="img-fluid" src="assets\img\team\niel.png" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Joshua Niel Sanguyo</h5>
                                <span>Front-End Developer</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-light rounded-circle" href="https://www.facebook.com/joshuaniel.sanguyo"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light rounded-circle" href="https://www.instagram.com/nielapag"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-light rounded-circle" href="https://github.com/nylon_n"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <img class="img-fluid" src="assets\img\team\tine.png" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Kristine Angeli Basilio</h5>
                                <span>Front-End Developer</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-light rounded-circle" href="https://www.linkedin.com/in/kristineangelibasilio/"><i class="fab fa-linkedin"></i></a>
                                <a class="btn btn-square btn-light rounded-circle" href="https://www.instagram.com/tineabsl"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-light rounded-circle" href="https://github.com/tinebasilio"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <img class="img-fluid" src="assets\img\team\paul.png" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>Paul Trustan Yumang</h5>
                                <span>Back-End Developer</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-light rounded-circle" href="https://www.facebook.com/paultrustan.yumang"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light rounded-circle" href="https://www.instagram.com/paulymng7"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-light rounded-circle" href="https://github.com/paulyumang"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->  
    </section>

    </main>
    <!-- End #main -->

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
