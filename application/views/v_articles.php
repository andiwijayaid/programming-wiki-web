<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Wiki</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/base.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/vendor.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/main.css') ?>">

    <!-- script
    ================================================== -->
    <script src="<?php echo base_url('/assets/js/modernizr.js') ?>"></script>
    <script src="<?php echo base_url('/assets/js/pace.min.js') ?>"></script>

    <!-- favicons
     ================================================== -->
    <link rel="shortcut icon" href="<?php echo site_url('/assets/favicon.ico') ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo site_url('/assets/favicon.ico') ?>" type="image/x-icon">

</head>

<body id="top">

<!-- header
================================================== -->
<header class="short-header">

    <div class="gradient-block"></div>

    <div class="row header-content">

        <div class="logo">
            <a href="<?php echo base_url('crud/index') ?>">WIKI</a>
            <h2>WIKI</h2>
        </div>

        <nav id="main-nav-wrap">
            <ul class="main-navigation sf-menu">
                <li class="current"><a href="<?php echo base_url('crud/index') ?>" title="">Home</a></li>
                <li><a href="<?php echo base_url('crud/about') ?>" title="">About</a></li>
                <li><a href="<?php echo base_url('crud/add') ?>" title="">Contribute</a></li>
            </ul>
        </nav> <!-- end main-nav-wrap -->
    </div>

</header> <!-- end header -->


<!-- masonry
================================================== -->
<section id="bricks">

    <div class="row masonry">

        <!-- brick-wrapper -->
        <div class="bricks-wrapper">

            <div class="grid-sizer"></div>

            <?php
            $no = 1;
            foreach ($article as $a) {
                ?>
                <article class="brick entry format-standard animate-this">
                    <div class="entry-thumb">
                        <a href="<?php echo base_url('crud/article_detail/'.$a->id) ?>" class="thumb-link">
                            <img src="<?php echo $a->image ?>" alt="image">
                        </a>
                    </div>

                    <div class="entry-text">
                        <div class="entry-header">

                            <h1 class="entry-title">
                                <?php echo anchor('crud/article_detail/'.$a->id, $a->title); ?>
                            </h1>

                        </div>
                        <div class="entry-excerpt">
                            <?php echo $a->article_text ?>
                        </div>
                    </div>

                </article> <!-- end article -->
            <?php } ?>

        </div> <!-- end brick-wrapper -->

    </div> <!-- end row -->

</section> <!-- end bricks -->


<!-- footer
================================================== -->
<footer>

    <div class="footer-main">

        <div class="row">

            <div class="col-four tab-full mob-full footer-info">

                <h4>About Our Site</h4>

                <p>
                    Lorem ipsum Ut velit dolor Ut labore id fugiat in ut fugiat nostrud qui in dolore commodo eu magna
                    Duis cillum dolor officia esse mollit proident Excepteur exercitation nulla. Lorem ipsum In
                    reprehenderit commodo aliqua irure labore.
                </p>

            </div> <!-- end footer-info -->

            <div class="col-two tab-1-3 mob-1-2 site-links">

                <h4>Site Links</h4>

                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>

            </div> <!-- end site-links -->

            <div class="col-two tab-1-3 mob-1-2 social-links">

                <h4>Social</h4>

                <ul>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Dribbble</a></li>
                    <li><a href="#">Google+</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>

            </div> <!-- end social links -->

            <div class="col-four tab-1-3 mob-full footer-subscribe">

                <h4>Subscribe</h4>

                <p>Keep yourself updated. Subscribe to our newsletter.</p>

                <div class="subscribe-form">

                    <form id="mc-form" class="group" novalidate="true">

                        <input type="email" value="" name="dEmail" class="email" id="mc-email"
                               placeholder="Type &amp; press enter" required="">

                        <input type="submit" name="subscribe">

                        <label for="mc-email" class="subscribe-message"></label>

                    </form>

                </div>

            </div> <!-- end subscribe -->

        </div> <!-- end row -->

    </div> <!-- end footer-main -->

    <div class="footer-bottom">
        <div class="row">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Wiki 2016</span>
                    <span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>
                </div>

                <div id="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
                </div>
            </div>

        </div>
    </div> <!-- end footer-bottom -->

</footer>

<div id="preloader">
    <div id="loader"></div>
</div>

<!-- Java Script
================================================== -->
<script src="<?php echo base_url('/assets/js/jquery-2.1.3.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/plugins.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/jquery.appear.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/main.js') ?>"></script>

</body>

</html>