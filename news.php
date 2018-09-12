<?php 
include_once 'app/connect.php';
include_once 'class/feeds.php';
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
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/app.css">

    <script src="js/jquery.min.js"></script>
   
</head>

<body>

   
    <!-- NAVIGATION 
            =================-->
    <?php include_once 'inc/nav.php'; ?>

        <!-- HEADER 
            =================-->
        <header id="conent" class="header-cat header-cat-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Latest News</h1>
                    </div>
                </div>
            </div>
        </header>

        <!-- BLOG 
            =================-->
        <section id="blog" class="blog full">
            <div class="container">
                <div class="row">
                    <?php 
                    $feeds = new Feeds($conn);
                    $feeds->getFeeds();
                    ?>
                </div>
            </div>
        </section>

        

        <!-- FOOTER 
          =================-->
        <?php include_once 'inc/footer.php'; ?>

            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery.easing.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/wow.min.js"></script>
            <script src="js/app.js"></script>
           
</body>

</html>