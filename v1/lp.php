<?php

// Check if the query string contains msclkid or gclid parameters
if (isset($_GET['gclid'])) {
    $platform = 'Google';
    $c_id = $_GET['gclid'];
} else if (isset($_GET['msclkid'])) {
    $platform = 'Bing';
    $c_id = $_GET['msclkid'];
} else {
    $platform = 'Direct';
    $c_id = null;
}


?>


<!DOCTYPE html>
<html>

<head>
    <title>
        <?php if (isset($title) && is_string($title)) {
            echo $title;
        } else {
            echo 'Trademark Registration uspto';
        } ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content=<?php if (isset($keywords) && is_string($keywords)) {
        echo $keywords;
    } else {
        echo 'desired tag';
    } ?> />
    <meta name="description" content=<?php if (isset($description) && is_string($description)) {
        echo $description;
    } else {
        echo 'desired description';
    } ?> />
    <link rel="canonical" href=<?php if (isset($canonical) && is_string($canonical)) {
        echo $canonical;
    } else {
        echo 'https://thepraetors.com';
    } ?> />
    <link rel="shortcut icon" href="images/logo.png" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--<link href="css/animate.css" rel="stylesheet" type="text/css">-->
    <!--<link href="css/aos.css" rel="stylesheet" type="text/css">-->
    <!--<link href="css/fancybox.min.css" rel="stylesheet" type="text/css">-->
    <!--<link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">-->
    <!--<link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">-->
    <!--<link href="css/jquery-ui.css" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />-->
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <!--<link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">-->
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <!--<link href="css/intl.css" rel="stylesheet" type="text/css">-->
    <style>

    </style>
</head>


<body>
    <header>
        <nav class="navbar navbar-expand-xl">
            <div class="container container-navbar">
                <!-- <div class="logo">
                    <a href="index.php">
                        <img src="images/logo.png" alt="">
                    </a>
                </div> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">ABOUT US</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="javascript:;">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">FAQS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">CONTACT US</a>
                        </li>
                    </ul>
                    <ul class="right-head">
                        <li class="nav-item">
                            <a class="nav-link btn1" href="tel:+0 (123) 456-7890">
                                <i class="fa-solid fa-phone"></i>
                                +0 (123) 456-7890</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="banner-sec reg">
        <img src="images/reg-banner.png" alt="" class="ban-img">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-8 col-lg-8 col-md-8 col-sm-8">
                    <div>
                        <h1>Get Your Business <span>Trademarked</span> Today!</h1>
                        <p>Safeguard your name, logo, slogan, or products from unauthorized use and
                            prevent competitors from profiting off your hard work.</p>
                        <ul class="ban-btns">
                            <li>
                                <a href="javascript:;" class="btn1" data-bs-toggle="modal" data-bs-target="#modal1">get
                                    started</a>
                            </li>
                            <li>
                                <a href="javascript:;" class="btn2" onclick="setButtonURL();"><img src="images/chat.png"
                                        alt=""> Live Chat</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- about sec start -->
    <section class="abt-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div>
                        <img src="images/abt1.png" alt="" class="abt-sec-img">
                    </div>
                </div>
                <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div>
                        <h6>about us</h6>
                        <h2>We’re The <span>Premium</span> Trademark <span>Registration</span> Experts</h2>
                        <p>
                            We ensure you own the exclusive rights to your creations, including business names and
                            digital assets. Safeguard what's rightfully yours and secure the future of your brand.
                        </p>
                        <ul class="abt-points">
                            <li>
                                <img src="images/check.png" alt="">
                                Certified ® on Logos
                            </li>
                            <li>
                                <img src="images/check.png" alt="">
                                Protect from Infringements
                            </li>
                            <li>
                                <img src="images/check.png" alt="">
                                Fosters Trust and Loyalty
                            </li>
                        </ul>
                        <ul class="ban-btns">
                            <li>
                                <a href="javascript:;" class="btn1" data-bs-toggle="modal" data-bs-target="#modal1">get
                                    started</a>
                            </li>
                            <li>
                                <a href="javascript:;" class="btn2" onclick="setButtonURL();"><img src="images/chat.png"
                                        alt=""> Live Chat</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about sec end -->

    <!-- our service sec start -->
    <section class="our-services">
        <div class="container">
            <div class="row text-center pb-5">
                <div class="col-12">
                    <h6>OUR SERVICES</h6>
                    <h2>
                        Trademark <span>Services</span> We Offer
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="serv-box">
                        <h2>1</h2>
                        <img src="images/serv1.png" alt="">
                        <h5>Trademark Registration</h5>
                        <p>
                            Prevent fraudulent companies from replicating your hard work by taking proactive measures to
                            safeguard your valuable assets.
                        </p>
                        <a href="javascript:;" class="btn1">read more</a>
                    </div>
                </div>
                <div class="col-12 col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="serv-box">
                        <h2>2</h2>
                        <img src="images/serv2.png" alt="">
                        <h5>Copyright Registration</h5>
                        <p>
                            Prevent fraudulent companies from replicating your hard work by taking proactive measures to
                            safeguard your valuable assets.
                        </p>
                        <a href="javascript:;" class="btn1">read more</a>
                    </div>
                </div>
                <div class="col-12 col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="serv-box">
                        <h2>3</h2>
                        <img src="images/serv3.png" alt="">
                        <h5>Business Formation</h5>
                        <p>
                            Prevent fraudulent companies from replicating your hard work by taking proactive measures to
                            safeguard your valuable assets.
                        </p>
                        <a href="javascript:;" class="btn1">read more</a>
                    </div>
                </div>
                <div class="col-12 col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="serv-box">
                        <h2>4</h2>
                        <img src="images/serv4.png" alt="">
                        <h5>Amazon Brand Registry</h5>
                        <p>
                            Prevent fraudulent companies from replicating your hard work by taking proactive measures to
                            safeguard your valuable assets.
                        </p>
                        <a href="javascript:;" class="btn1">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our service sec end -->

    <!-- why choose us sec start -->
    <section class="choose-sec reg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-12  col-lg-12 col-md-12">
                    <div class="text-center">
                        <h6>OUR EXPERTISE</h6>
                        <h2 class="p-2">Reliable Trademark <span>Registration Solutions</span> </h2>
                        <p class="" style="    width: 80%;
    display: inline-block;">
                            We ensure you own the exclusive rights to your creations, including business names and
                            digital
                            assets. Safeguard what's rightfully yours and secure the future of your brand.</p>
                    </div>
                </div>
            </div>
            <div class="choose-box text-center">
                <div class="row">
                    <div class="col-12 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="choose-col">
                            <h3>3k+</h3>
                            <h4>Trademarked Businesses</h4>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="choose-col cen">
                            <h3>1k+</h3>
                            <h4>Satisfied Clients</h4>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="choose-col">
                            <h3>800+</h3>
                            <h4>Trademark Applications</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why choose us sec end -->

    <!-- packages sec start -->
    <section class="packages-sec reg" id="packages">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h6>PRICING PLAN</h6>
                        <h2 style="width:80%;display:inline-block">Affordable Trademark <span>Packages</span> For
                        All <span>Businesses</span></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="pakg2">
                        <div class="pckg-list ">
                            <div class="pckg-box pckg pckg-box2 text-left">
                                <div class="upper">
                                    <h5>Trademark Gold Package
                                    </h5>
                                    <p>Ensure long-term success with our trusted trademark registration.</p>
                                    <div>
                                        <h4>$35<span class="pck-price">+ USPTO Fee $350/Class*</span></h4>
                                    </div>
                                </div>
                                <div class="lower border-left">
                                    <ul>
                                        <li>
                                            <p>Quick and Easy Questionnaire
                                            </p>
                                        </li>
                                        <li>
                                            <p>Seamless Online Process</p>
                                        </li>
                                        <li>
                                            <p>24/7 Customer Support
                                            </p>
                                        </li>
                                        <li>
                                            <p>Free Consultancy
                                            </p>
                                        </li>
                                        <li>
                                            <p>Secure Online Access</p>
                                        </li>
                                    </ul>
                                    <div class="text-center">
                                        <a href="javascript:;" class="btn3" data-bs-toggle="modal"
                                            data-bs-target="#modal1">Get
                                            Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="pckg-list">
                        <div class="pckg-box pckg pckg-box2 text-left active">
                            <div class="upper">
                                <h5>Trademark Platinum Package
                                </h5>
                                <p>Uncover potential issues with our expert search service.</p>
                                <div>
                                    <h4>$149</h4>
                                </div>
                            </div>
                            <div class="lower border-left">
                                <ul>
                                    <li>
                                        <p>Save Time and Money
                                        </p>
                                    </li>
                                    <li>
                                        <p>Domestic and International Searches</p>
                                    </li>
                                    <li>
                                        <p>Comprehensive Custom PDF Report</p>
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <a href="javascript:;" class="btn3" data-bs-toggle="modal"
                                        data-bs-target="#modal1">Get
                                        Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="pckg-list end">
                        <div class="pckg-box pckg pckg-box2 text-left ">
                            <div class="upper">
                                <h5>Trademark Elite Package
                                </h5>
                                <p>Safeguard your brand with proactive trademark monitoring!</p>
                                <div>
                                    <h4>$175</h4>
                                </div>
                            </div>
                            <div class="lower border-left">
                                <ul>
                                    <li>
                                        <p>24/7 Monitoring and Support
                                        </p>
                                    </li>
                                    <li>
                                        <p>Advanced Monitoring Technology</p>
                                    </li>
                                    <li>
                                        <p>No Limits on Detections and Takedowns</p>
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <a href="javascript:;" class="btn3" data-bs-toggle="modal"
                                        data-bs-target="#modal1">Get
                                        Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- packages sec end -->

    <!-- safeguard sec start -->

    <section class="safeguard reg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-xl-8 col-lg-8 col-md-8">
                    <div>
                        <h2>No More Worries About <span>Intellectual</span>
                            Property Infringements
                            Get Your <span>Trademark Today!</span>
                        </h2>
                        <p>
                            Ready to begin? Connect with our experts to start your trademark registration process!
                        </p>
                        <ul class="ban-btns">
                            <li>
                                <a href="javascript:;" class="btn1" data-bs-toggle="modal"
                                    data-bs-target="#modal1">contact us</a>
                            </li>
                            <li>
                                <a href="javascript:;" class="btn2" onclick="setButtonURL();"><img src="images/chat.png"
                                        alt=""> Live Chat</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- safeguard sec end -->


    <!-- TESTIMONIALS sec start -->
    <section class="testi-sec">
        <div class="container">
            <div class="row justify-content-center text-center my-3 pb-5">
                <div class="col-12 col-xl-12 col-lg-12">
                    <div>
                        <h6>TESTIMONIALS</h6>
                        <h2>What Our <span>Clients</span> Have To <span>Say</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testi-slider">
                        <div class="testi-box">
                            <div>
                                <img src="images/testi1.png" alt="">
                                <span>
                                    <h3>Craig Robertson</h3>
                                    <h5>Toronto, ON</h5>
                                </span>
                            </div>
                            <p>
                                Roy was very professional and his work was excellent. I would recommend him for any
                                paint work that needs to be done at the house.
                            </p>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                        <div class="testi-box">
                            <div>
                                <img src="images/testi2.png" alt="">
                                <span>
                                    <h3>Bob Martin</h3>
                                    <h5>Consultant</h5>
                                </span>
                            </div>
                            <p>
                                Roy is professional, hardworking guy. He did a great job on my doors, window casings,
                                Closets, and baseboard casing. He makes sure that everything is done nicely. I highly
                                recommend Roy!
                            </p>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                        <div class="testi-box">
                            <div>
                                <img src="images/testi3.png" alt="">
                                <span>
                                    <h3>Katie Lynne</h3>
                                    <h5>Mississauga, ON</h5>
                                </span>
                            </div>
                            <p>
                                Extremely professional! Meticulous work ethic and products and totally above and beyond.
                                The experience shows, there were no short-cuts and our home looks brand new. These
                                gentlemen are the best. Would highly recommend!
                            </p>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                        <div class="testi-box">
                            <div>
                                <img src="images/testi1.png" alt="">
                                <span>
                                    <h3>Craig Robertson</h3>
                                    <h5>Toronto, ON</h5>
                                </span>
                            </div>
                            <p>
                                Roy was very professional and his work was excellent. I would recommend him for any
                                paint work that needs to be done at the house.
                            </p>
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIALS sec end -->


    <!-- contact us sec start -->
    <section class="contact-us-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-xl-5 col-lg-5 col-md-5 col-sm-12 p-0">
                    <div>
                        <img src="images/cont1.png" alt="" class="cont1">
                    </div>
                </div>
                <div class="col-12 col-xl-7 col-lg-7 col-md-7 col-sm-12 p-0">
                    <div class="cont-txt">
                        <h6>Contact us</h6>
                        <h2>Protect Your Intellectual
                            <span>Property Today!</span>
                        </h2>
                        <ul class="ban-btns">
                            <li>
                                <a href="javascript:;" class="btn1" data-bs-toggle="modal"
                                    data-bs-target="#modal1">Connect with US
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="btn2" onclick="setButtonURL();"><img src="images/chat.png"
                                        alt=""> Live Chat
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact us sec end -->


    <footer>
        <div class="container">
            <div class="row pb-5">
                <div class="col-12 col-xl-4 col-lg-4 col-md-6">
                    <div class="footer-col one">
                        <p>
                            Trademark Registration USPTO strives to provide businesses with the most reliable, rapid,
                            and
                            cost-effective trademark protection services. Quality is our topmost priority.
                        </p>
                        <ul class="social-links">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-xl-2 col-lg-2 col-md-6">
                    <div class="footer-col">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="javascript:;">Home</a></li>
                            <li><a href="javascript:;">About Us</a></li>
                            <li><a href="javascript:;">FAQs</a></li>
                            <li><a href="javascript:;">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-xl-2 col-lg-2 col-md-6">
                    <div class="footer-col">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="javascript:;">Trademark Registration</a></li>
                            <li><a href="javascript:;">Copyright Registration</a></li>
                            <li><a href="javascript:;">Business Formation</a></li>
                            <li><a href="javascript:;">Amazon Brand Registry</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-lg-4 col-md-6 ps-4">
                    <h3>Newsletter</h3>
                    <h5>Subscribe Our Newsletter</h5>
                    <form action="">
                        <i class="fas fa-envelope"></i>
                        <input placeholder="Your email address" class="d-block">
                        <button type="submit">subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="copy-right-sec">
            <div class="container">
                <div class="copy-right">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-12 col-xl-5 col-lg-5 col-md-5">
                            <p>Copyright © 2024 Trademarkregistrationuspto, LLC.</p>
                        </div>
                        <div class="col-12 col-xl-3 col-lg-3 col-md-3">
                            <ul>
                                <li>
                                    <a href="javascript:;">
                                        Terms of Service
                                    </a>
                                </li>
                                <li>
                                    |
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <div class="text-center">
                        <h2>Basic</h2>
                        <h2>in Just <span>$35</span></h2>
                        <p>Register your trademark and save yourself from the risk of losing thousands of dollars in
                            lawsuits and rebranding efforts.</p>
                    </div>
                </div>
                <div class="modal-body">
                    <form class="form-get-quote" action="javascript:;" method="POST">
                        <input type="text" class="form-control" name="quote[name]" placeholder="name">
                        <input type="text" class="form-control" name="quote[email]" placeholder="email">
                        <input type="tel" class="form-control" name="quote[phone]" placeholder="phone number">
                        <!--hidden feilds-->
                        <input type="text" name="quote[ip]" hidden value=<?php echo $_SERVER["REMOTE_ADDR"]; ?>>
                        <input type="text" name="quote[date]" hidden value=<?php echo date("Y/m/d"); ?>>
                        <input type="hidden" name="quote[url]"
                            value="<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
                        <input type="text" name="quote[platfrom]" hidden value=<?php echo $platform; ?>>
                        <input type="text" name="quote[c_id]" hidden value=<?php echo $c_id; ?>>
                        <input type="text" name="quote[page_name]" hidden value="landing_page_1">
                        <!--hidden feilds-->
                        <div class="text-center">
                            <button href="" type="submit" class="btn3">
                                get started
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

















</body>



<script src="js/jquery-3.6.3.min.js"></script>
<!--<script src="js/wow.min.js"></script>-->
<!-- <script>
    new WOW().init();
</script> -->
<!--<script src="js/aos.js"></script>-->
<script src="js/bootstrap.bundle.min.js"></script>
<!--<script src="js/fancybox.min.js"></script>-->
<!--<script src="js/owl.carousel.min.js"></script>-->
<script src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>-->
<script src="js/custom.js"></script>


</html>

<script>
    $('.form-get-quote').on('submit', function (e) {
        //$('.btn-quote').on('click' , function(e){        
        var obj = $(this);
        e.preventDefault();
        var data = $(obj).serialize();
        jQuery.ajax({
            url: "/sendmail_backup.php",
            // For Demo
            // url: window.location.origin + '/lvm-track-html/v6/sendmail.php',
            // For Live
            // url: window.location.origin + '/sendmail.php',
            type: "POST",
            data: data,
            async: false, // Has to be false to be able to return response
            dataType: "json", // Has to be false to be able to return response
            success: function (response) {
                if (response.status == 1) {
                    // $('#myModal').modal('hide');
                    // $('#myModal').modal('show');
                    // alert('Submit Successfully.');
                    window.location = "/steps/trademark-application-step-1.php";
                    obj.trigger("reset");
                } else {
                    return false;
                }
            },
            beforeSend: function () {
                // Loader.show();
            }
        });
        return false;
    });

    var video = document.getElementById("myVideo");
    // // Autoplay the video
    video.play();
</script>