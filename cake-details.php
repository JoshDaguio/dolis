<?php
include 'config.php';

session_start();
   
if(isset($_GET['id'])) {
   $id = $_GET['id'];
} else {
     // Handle the case when 'id' is not provided in the URL
     echo "<script>alert('Invalid cake ID');</script>";
     echo "<script>window.location.href = 'index.php';</script>";
     exit();
   }
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
            <li><a class="nav-link" href="index.php">Home</a></li>
            <li><a class="nav-link active" href="menu.php">Menu</a></li>
            <li><a class="nav-link" href="about-us.php">About Us</a></li>
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


    <main id="main">

      <!-- ======= Breadcrumbs ======= -->
      <section id="breadcrumbs" class="breadcrumbs">
         <div class="container">
            <ol>
               <li><a href="menu.php"><span>&#8249;</span> Back to Menu</a></li>
            </ol>
         </div>
      </section>
      <!-- End Breadcrumbs -->

      <?php
            $select_product = mysqli_query($conn, "SELECT * FROM `products` WHERE id = $id") or die('query failed');
            if($select_product){
                $fetch_product = mysqli_fetch_assoc($select_product)
            
            ?>

      <!-- ======= Cake Details Section ======= -->
      <!-- content -->
      <section class="py-5">
        <div class="container">
          <div class="row gx-5">
            <aside class="col-lg-6">
              <div class="border rounded-4 mb-3 d-flex justify-content-center">
                <a data-fslightbox="mygalley" class="rounded-4" target="" data-type="" href="">
                  <form method="post" action="">
                    <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="assets/img/cakes/<?php echo $fetch_product['image']; ?>" alt="">
                </a>
              </div>
              <!-- thumbs-wrap.// -->
              <!-- gallery-wrap .end// -->
            </aside>
            <main class="col-lg-6">
              <div class="ps-lg-3">
                <h2 class="name" style="color: #DC531B;">
                  <?php echo $fetch_product['product_name']; ?>
                  <input type="hidden" name="product_name" value="<?php echo $fetch_product['product_name']; ?>">
                </h2>
                <div class="mb-3">
                  <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                  <span class="h5">₱ <?php echo $fetch_product['price']; ?></span>
                </div>
                <p class="product_description">
                  <?php echo $fetch_product['description']; ?>
                </p>
                </form>
                <?php
                     };
                     ?>
                <div class="row">
                  <dt class="col-3">Allergens:</dt>
                  <dd class="col-9"><?php echo $fetch_product['allergens']; ?></dd>
                  <dt class="col-3">Storage:</dt>
                  <dd class="col-9"><?php echo $fetch_product['storage']; ?></dd>
                </div>
                <hr />
                

              </div>
            </main>
          </div>
        </div>
      </section>
      <!-- content -->
      <!-- End Cake Details Section -->
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
