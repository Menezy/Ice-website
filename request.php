<!DOCTYPE html>
<html class="no-js" prefix="og: http://ogp.me/ns#" lang="en-IN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Request for consultation | ICE</title>
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
    <script>
        $(window).on('load', function () {
            $(".loader").fadeOut(2000);
        });
    </script>
    <style>
        .header{
     height: 400px;
     background: #0069d9;
     width:1900px;

}
.jumbotron{
    background:url("architecture.jpg") no-repeat fixed center;
}
body{
    margin:0;
    padding:0;
    margin-left:0;
}
    
    </style>
</head>

<body>

    <?php include_once 'inc/nav.php'; ?>

    <div class="container-fluid">
        <div class="jumbotron">
            <h2 class="text-center" style="padding:30px;">Pricing/Quote</h2>
            <h4 class="text-center">Our impact driven solar finance solution makes solar affordable for all.<br> Get
                solar for less.
            </h4>
        </div>
</div>
    <div class="container" style="margin-bottom:40px;">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="background:red;color:white;padding:60px;"><br>
                <h4 class="text-center">Company Information</h4>
                <form>
                    <div class="form-group">
                        <label for="Property Type">Property Type</label>
                        <select class="form-control" id="propertyType">
                            <option>Home</option>
                            <option>Company</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="property Address">Property Address</label>
                        <input type="text" class="form-control" id="propertyAddress" placeholder="Enter Property Address">
                    </div>
                    <div class="form-group">
                        <label for="Full Name">Your full Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter your full Name">
                    </div>
                    <div class="form-group">
                        <label for="Full Name">Your email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email address">
                    </div>
                    <div class="form-group">
                        <label for="Full Name">Your phone number</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter your phone number">
                    </div>
                    <div class="form-group">
                        <label for="Interest">Are you interested in getting solar energy discount through our Generator
                            buy-back program</label>
                        <select class="form-control" id="interest">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="need">What are your needs?</label>
                        <textarea class="form-control" id="need" rows="3" placeholder="What are your needs?"></textarea>
                    </div>

                    <button type="submit" class="btn-block btn-lg bg-white text-black"><b>Submit<b></button><br>
                </form>
            </div>
            <div class="col-md-2"></div>


        </div>

    </div>


    <?php include_once 'inc/footer.php'; ?>

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/app.js"></script>

</body>

</html>