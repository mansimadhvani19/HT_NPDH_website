<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.voidcoders.com/htmldemo/maxtreo/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 12:32:19 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Contact</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/font/stylesheet.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:800&amp;display=swap" rel="stylesheet">


<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/jquery-ui.css">

<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

<link rel="stylesheet" href="assets/css/font-awosome.css">

<link rel="stylesheet" href="assets/flat-font/flaticon.css">

<link rel="stylesheet" href="assets/css/ticker.min.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="assets/css/sm-core-css.css">
<link rel="stylesheet" href="assets/css/sm-mint.css">
<link rel="stylesheet" href="assets/css/sm-style.css">

<link rel="stylesheet" href="assets/css/aos.css">
<link rel="stylesheet" href="assets/css/animate.min.css">

<link rel="stylesheet" href="assets/sliders/slider-2/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
<link rel="stylesheet" href="assets/sliders/slider-2/fonts/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="assets/sliders/slider-2/css/rs6.css">

<link rel="stylesheet" href="assets/css/style.css">

<link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo.png">

<style>

form {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .contuct-us-input,
        .contuct-us-textarea {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .contuct-us-message
        {
            padding: 10px;
            margin-left: -6px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;

        }
        .col-xl-6 {
            width: 50%;
            padding: 10px;
        }

        .col-xl-12 {
            width: 100%;
        }

        .contact-us-btn {
            text-align: center;
        }

        .btn-1 {
            padding: 10px 20px;
            background-color: #d0a15c;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-1 span {
            display: inline-block;
            margin-left: 10px;
        }

        .btn-1:hover {
            background-color: #d0a15c;
        }
        section.mextreo-hero.inner .hero-content .mextreo-contact .m-submit:hover{
            background: #d0a15c;
            border-color: #d0a15c;
        }
        
</style>
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> -->
</head>
<body>

<div id="preloader"></div>


<button class="scroll-top scroll-to-target" data-target="html">
<i class="flaticon-up scrollup-icon"></i>
</button>


<!-- <div class="page-settings">
<div class="psg-icon">
<i class="fa fa-cog" aria-hidden="true"></i>
</div>
<div class="pgs-box">
<a href="rtl/contact.php">View RTL Verson</a>
</div>
</div> -->


<!-- main header -->
<?php include 'header.php'; ?>
        <!-- main-header end -->


        <?php include 'side_panel.php'; ?>




<section class="mextreo-hero inner mar-bot-140">
<div class="container">
<div class="row">
<div class="col-md-6">
<div class="hero-content">
<!-- <h6 class="ht-tittle" data-aos="fade-right" data-aos-duration="1500">Contact</h6> -->
<h2 data-aos="fade-up" data-aos-duration="2000">Get In Touch</h2>
<p data-aos="fade-up" data-aos-duration="2500">We are waiting for you on our office in New York
or in way, contact us via the contact form below your idea.</p>
<div class="mextreo-contact" data-aos="fade-up" data-aos-duration="3000">

    <form method="post" action="contact_handler.php">     
        <!-- <div class="row"> -->
            <div class="col-xl-12">
                <!-- <form action="#" method="post"> -->
            </div>
                <div class="col-xl-6">
                    <div>
                        <input type="text" name="name" class="contuct-us-input" placeholder="Your Name">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div>
                        <input type="email" name="email" class="contuct-us-input" placeholder="Your Email">
                    </div>
                </div>
                
                <div class="col-xl-12">
                    <div>
                        <textarea type="text" name="message" class="contuct-us-message" placeholder="Your Message"></textarea>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="contact-us-btn">
                        <div>
                            <!-- <button class="theme-btn style-one" type="submit" name="submit-form">Submit</button> -->
                            <button type="submit" id="submit" class="m-submit">send message</button>
                        </div>
                    </div>
                </div>
            <!-- </div> -->

        </form>
<!-- <form id="cf" method="POST" action="contact_handler.php">
    <div class="form-group mcfg">
        <input type="text" name="name" placeholder="Name" required="">
    </div>
    <div class="form-group">
        <input type="email" name="email" placeholder="Your Email" required="">
    </div>
    <div class="form-group mcfg">
        <textarea name="message" placeholder="Message" required=""></textarea>
    </div>
    <button type="submit" id="submit" class="m-submit">send message</button>
    <div class="col-md-12 text-center">
        <div class="cf-msg"></div>
    </div>
</form> -->
</div>
</div>
</div>
<br>
<br>
<div class="col-md-6">
<div class="hero-inner-img">
<img src="Final_images\contact_us_image.jpg" alt data-aos="fade-left" data-aos-duration="2000">
</div>

</div>
</div>
</div>
</div>
</section>


<section class="g-map">
    <div class="map">
        <div class="map-outer" id="googleMap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.369292237053!2d72.53116827402022!3d23.04691891542166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e856b2cc44623%3A0xbe4e81495991b208!2sVimurti%20Complex!5e0!3m2!1sen!2sin!4v1689586696722!5m2!1sen!2sin" width="1265" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>


        <!-- main-footer -->
        <?php include 'footer.php'; ?>
        <!-- main-footer end -->


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.4.1.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/aos.js"></script>

<script src="assets/js/jquery-ui.js"></script>

<script src="assets/js/jquery.smartmenus.js"></script>

<script src="assets/sliders/slider-2/js/rbtools.min.js"></script>
<script src="assets/sliders/slider-2/js/rs6.min.js"></script>
<script src="assets/sliders/slider-2/js/slideractivation.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/countdown.js"></script>

<script src="assets/js/jquery.fancybox.min.js"></script>

<script src="assets/js/theme.js"></script>

</body>

<!-- Mirrored from demo.voidcoders.com/htmldemo/maxtreo/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 12:32:20 GMT -->
</html>