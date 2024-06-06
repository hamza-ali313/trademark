<!DOCTYPE html>
<html>

<head>
    <title>
        <?php if (isset($title) && is_string($title)) {
            echo $title;
        } else {
            echo 'Home | The Praetors';
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
    <link rel="shortcut icon" href="media/favicon.png" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/aos.css" rel="stylesheet" type="text/css">
    <link href="css/fancybox.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <link href="css/intl.css" rel="stylesheet" type="text/css">
    <style>

    </style>
</head>


<body>
    <header>
        <nav class="navbar navbar-expand-xl">
            <div class="container container-navbar">
                <div class="logo">
                    <a href="index.php">
                        <img src="images/logo.png" alt="">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">Why Trademark?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">How It Works</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="javascript:;">Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">FAQs</a>
                        </li>
                    </ul>
                    <ul class="right-head">
                        <li class="nav-item">
                            <a class="nav-link btn1"  href="tel:+0 (123) 456-7890" >
                                <i class="fa-solid fa-phone"></i> 
                                +0 (123) 456-7890</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>