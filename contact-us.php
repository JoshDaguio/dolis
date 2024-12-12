<?php
include 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'dolisbyvicky@gmail.com';
        $mail->Password = 'lroussvoafawdyze';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom($email, $fullName);
        $mail->addAddress('dolisbyvicky@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = "New Message from Bake Me Happy Contact Form";
        $mail->Body = "
            <h2>New Contact Form Message</h2>
            <p><strong>Full Name:</strong> $fullName</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        $mail->send();
        header("Location: thank-you.php");
        exit();
    } catch (Exception $e) {
        echo "<script>alert('Failed to send message: {$mail->ErrorInfo}');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us - Dolis Cakes and Pastries</title>
    <?php include 'head.php'; ?>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('assets/img/contact-hero.jpg');
            background-size: cover;
            background-position: center;
            height: 40vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 72px;
            text-align: center;
            color: white;
        }

        .contact-section {
            padding: 80px 0;
            background-color: #fff;
            position: relative;
        }

        .contact-info-box {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }

        .contact-info-box:hover {
            transform: translateY(-5px);
        }

        .contact-icon {
            width: 60px;
            height: 60px;
            background: #fef1ef;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .contact-icon i {
            color: #ed502e;
            font-size: 24px;
        }

        .contact-form {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-control {
            height: 50px;
            border: 2px solid #eee;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #ed502e;
            box-shadow: none;
        }

        textarea.form-control {
            height: 150px;
            resize: none;
        }

        .submit-btn {
            background: #ed502e;
            color: white;
            padding: 15px 40px;
            border-radius: 30px;
            border: none;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .submit-btn:hover {
            background: #d63b1b;
            transform: translateY(-2px);
        }

        .map-container {
            height: 400px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .social-links {
            margin-top: 20px;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #fef1ef;
            color: #ed502e;
            margin: 0 5px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: #ed502e;
            color: white;
            transform: translateY(-3px);
        }

        .decoration-element {
            position: absolute;
            z-index: -1;
            opacity: 0.1;
        }

        .decoration-1 {
            top: 0;
            left: 0;
            width: 200px;
        }

        .decoration-2 {
            bottom: 0;
            right: 0;
            width: 200px;
        }
    </style>
</head>

<body>
    <!-- Header -->
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

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="display-4 mb-3 animate__animated animate__fadeInDown">Get in Touch</h1>
            <p class="lead animate__animated animate__fadeInUp">We'd love to hear from you! Share your thoughts, questions, or special requests.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <img src="assets/img/decoration-1.png" class="decoration-element decoration-1" alt="">
        <img src="assets/img/decoration-2.png" class="decoration-element decoration-2" alt="">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info-box">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4>Our Location</h4>
                        <p>Blk 6 Lot 6 Christine Rd. Essel Park Subdivision, San Fernando, Pampanga</p>
                    </div>
                    
                    <div class="contact-info-box">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h4>Call Us</h4>
                        <p>+63 905 474 7023</p>
                    </div>
                    
                    <div class="contact-info-box">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4>Email Us</h4>
                        <p>dolisbyvicky@gmail.com</p>
                        
                        <div class="social-links">
                            <a href="https://www.facebook.com/dolisbyvicky" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.tiktok.com/@dolisbyvicky?is_from_webapp=1&sender_device=pc" target="_blank" rel="noopener noreferrer"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-8">
                    <div class="contact-form">
                        <h3 class="mb-4">Send us a Message</h3>
                        <form action="" method="post" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" name="fullName" class="form-control" id="fullName" placeholder="Your Full Name" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" class="form-control" id="message" rows="5" placeholder="Your Message" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="submit-btn">Send Message</button>
                            </div>
                        </form>
                    </div>
                    
                    <div class="map-container mt-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4580.449064548731!2d120.6038698400321!3d15.120779007537804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f399a24b1ddd%3A0xc4dc5f1c6d10003e!2sEssel%20Park%20Subdivision!5e0!3m2!1sen!2sph!4v1733939509134!5m2!1sen!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Scripts -->
    <?php include 'scripts.php'; ?>
</body>
</html>