<?php 
include_once 'app/connect.php';
include_once 'class/feeds.php';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $newsID = $_GET['newsID'];
}
include_once 'module/newsData.php';
?>
<!DOCTYPE html>
<html class="no-js" prefix="og: http://ogp.me/ns#" lang="en-IN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>ICE commercial power</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Commercial energy re-invented. We built a solar energy model structured for Nigeria's commercial sector. We empower businesses to push beyond the constraints
        of an unreliable public energy grid. The energy revolution has arrived" />
    <link href="img/startup_logo_96dp.png" rel="apple-touch-icon" sizes="96x96">
    <link href="img/startup_logo_96dp.png" rel="icon" sizes="96x96" type="image/png">
    <link href="img/startup_logo_32dp.png" rel="icon" sizes="32x32" type="image/png">
    <meta content="img/startup_logo_96dp.png" name="msapplication-TileImage">

    <meta property="og:url" content="https://www.icecommpower.com/index.html" />
    <meta property="og:title" content="ICE Commercial power" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:site_name" content="ICE commercial power" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="ICE commercial power" />
    <meta name="twitter:creator" content="ICE commercial power" />

    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASEPATH . "css/owl.carousel.min.css" ?>">
    <link rel="stylesheet" href="<?php echo BASEPATH . "css/animate.min.css" ?>">
    <link rel="stylesheet" href="<?php echo BASEPATH . "css/app.css" ?>">

    <script src="<?php echo BASEPATH . "js/jquery.min.js" ?>"></script>
    <script> $(window).on('load', function(){ $(".loader").fadeOut(2000); }); </script>
</head>

<body>


    <!-- NAVIGATION 
            =================-->
    <?php include_once 'inc/nav.php'; ?>

    <!-- HEADER 
            =================-->
            <style>
                header.header-cat.header-cat-2 { background-image: url("../admin/<?php echo $post_featuredimage; ?>"); }
            </style>
    <header id="conent" class="header-cat header-cat-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 style="font-size:28px;"><?php echo $post_title?></h1>
                </div>
            </div>
        </div>
    </header>

    <!-- BLOG 
            =================-->
    <section id="blog" class="blog full">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6">
                            <span><b><?php echo $post_time ?></b></span>

                        </div>
                        <div class="col-md-6">
                            By <span><b><?php echo $post_author ?></b></span>

                        </div>


                    </div> <br>

                    <p class="text-left"><?php echo $post_body ?></p>
                    
                    
                          <!--  <div class="text-center" style="font-size:50px;">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-instagram"></i>
                                <i class="fa fa-twitter"></i>
                            </div> -->
                </div>
                <div class="col-md-3" style="height:100vh;">
                    <div class="card">
                        <div class="card-body" style="background-color:red;color:white;">
                            <blockquote>"The future of Nigeria lies in Renewable energy"</blockquote>
                            <p class="text-center">Bright M. Sunday</p>
                        </div>
                    </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- CLIENTS
            =================-->

    <!-- FOOTER 
          =================-->
    <footer>
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <div class="company-desc">
                        <h3>Product</h3>
                        <p><a href="" class="text-white">Mobile app</a></p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="company-desc">
                        <h3>Company</h3>

                        <p><a href="" class="text-white">About us</a></p>
                        <p><a href="" class="text-white">Privacy</a></p>
                        <p><a href="" class="text-white">Terms of use</a></p>


                    </div>
                </div>

                <div class="col-md-3">
                    <div class="social">
                        <h3>Social Corner</h3>
                        <ul>
                            <li><i class="fa fa-facebook"></i></li>
                            <li><i class="fa fa-instagram"></i></li>
                            <li><i class="fa fa-youtube"></i></li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-3">

                    <div class="latest-news">
                        <div class="cont-info number">
                            <h3>Contact</h3>
                            <i class="fa fa-phone"></i>
                            <a href="tel:17189027654" class="text-white">+1718-902-7654 (USA)</a> <br>
                            <a href="tel:2348122244769" class="text-white">+234-812-224-4769 (NIGERIA)</a>
                        </div>
                        <div class="cont-info mail">
                            <i class="fa fa-envelope-o"></i>
                            <a href="mail@startup.com" class="text-white">info@icecommpower.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid footer-b text-center">
            <small>Copyrights &copy; 2018 <a href="https://icecommpower.com/" class="text-white">ICE commercial power</a></small>
        </div>
    </footer>

    <script src="<?php echo BASEPATH . "js/popper.min.js" ?>"></script>
    <script src="<?php echo BASEPATH . "js/bootstrap.min.js" ?>"></script>
    <script src="<?php echo BASEPATH . "js/jquery.easing.min.js" ?>"></script>
    <script src="<?php echo BASEPATH . "js/owl.carousel.min.js" ?>"></script>
    <script src="<?php echo BASEPATH . "js/wow.min.js" ?>"></script>
    <script src="<?php echo BASEPATH . "js/app.js" ?>"></script>

</body>

</html>