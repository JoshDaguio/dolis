<?php
include 'config.php';
?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // SMTP server (Gmail example)
        $mail->SMTPAuth = true;
        $mail->Username = 'dolisbyvicky@gmail.com'; // Email address
        $mail->Password = 'lroussvoafawdyze'; // App password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Email settings
        $mail->setFrom($email, $fullName); // Sender details
        $mail->addAddress('dolisbyvicky@gmail.com'); // Recipient email

        $mail->isHTML(true);
        $mail->Subject = "New Message from Bake Me Happy Contact Form";
        $mail->Body = "
            <h2>New Contact Form Message</h2>
            <p><strong>Full Name:</strong> $fullName</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        // Send the email
        $mail->send();

        // Redirect to thank-you page
        header("Location: thank-you.php");
        exit();
    } catch (Exception $e) {
        echo "<script>alert('Failed to send message: {$mail->ErrorInfo}');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

    <!-- Page Title -->
    <head><title>Contact Us</title></head>

    <?php include 'head.php'; ?>

    <body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJ42LCQN"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center justify-content-between">
                <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link" href="index.php">Home</a></li>
                        <li><a class="nav-link" href="menu.php">Menu</a></li>
                        <li><a class="nav-link" href="about-us.php">About Us</a></li>
                        <li><a class="nav-link active" href="contact-us.php">Contact Us</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
            </div>
        </header>
        <!-- End Header -->

        <main id="main">
            <section id="team" class="team section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Contact Us</h2>
                        <p>We'd love to hear from you! Fill out the form below to send us a message.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <form action="" method="post" class="php-email-form">
                                <div class="form-group">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" name="fullName" class="form-control" id="fullName" placeholder="Your Full Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" class="form-control" id="message" rows="6" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
