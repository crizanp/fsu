<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<head>
    <title>Glimpse for Memory FSU Gallary</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <script defer src="assets/fontawesome/js/all.js"></script>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/basic.css">
</head>
<style>
    .gallery-title {
        font-size: 36px;
        color: black;
        text-align: center;
        font-weight: 500;
        margin-bottom: 70px;
    }

    .gallery-title:after {
        content: "";
        position: absolute;
        width: 7.5%;
        left: 46.5%;
        height: 45px;
        border-bottom: 1px solid #5e5e5e;
    }

    .filter-button {
        font-size: 18px;
        border: 1px solid red;
        border-radius: 5px;
        text-align: center;
        color: black;
        margin-bottom: 30px;

    }

    .filter-button:hover {
        font-size: 18px;
        border: 1px solid blue;
        border-radius: 5px;
        text-align: center;
        color: #ffffff;
        background-color: red;

    }

    .btn-default:active .filter-button:active {
        background-color: #42B32F;
        color: white;
    }

    .port-image {
        width: 100%;
    }

    .gallary-main {
        margin-bottom: 30px;
    }

    .gallary-main img {
        vertical-align: middle;
        max-width: -webkit-fill-available;
        height: 350px !important;
        border-style: none;
    }
</style>

<body class="home-page">
    <div class="wrapper">
        <!-- NAV -->
        <?php
        require_once("includes/nav_main.php");
        ?>
        <div class="container">
            <div class="row">
                <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="gallery-title"><?php echo strtoupper('Gallery')?></h1>
                    <div align="center">


                        <!-- gallary title button  -->
                        <button class="btn btn-default filter-button" data-filter="all">All</button>
                        <button class="btn btn-default filter-button" data-filter="notice">Notice</button>
                        <button class="btn btn-default filter-button" data-filter="webinar">Webinar</button>
                        <button class="btn btn-default filter-button" data-filter="program">Program</button>
                        <button class="btn btn-default filter-button" data-filter="meeting">Meeting</button>
                    </div>
                </div>
                <br />

                <!-- gallary images  -->

                <div class="gallary-main col-lg-4 col-md-4 col-sm-4 col-xs-6 filter notice">
                    <img src="assets/images/gallary/health_check.jpg" class="img-responsive">
                </div>
                <div class="gallary-main col-lg-4 col-md-4 col-sm-4 col-xs-6 filter webinar">
                    <img src="assets/images/gallary/saugat_webinar.jpg" class="img-responsive">
                </div>
                <div class="gallary-main col-lg-4 col-md-4 col-sm-4 col-xs-6 filter notice">
                    <img src="assets/images/gallary/aces_compition.jpg" class="img-responsive">
                </div>
                <div class="gallary-main col-lg-4 col-md-4 col-sm-4 col-xs-6 filter program">
                    <img src="assets/images/gallary/sarsafai_1.jpg" class="img-responsive">
                </div>
                <div class="gallary-main col-lg-4 col-md-4 col-sm-4 col-xs-6 filter program">
                    <img src="assets/images/gallary/sarsafai_2.jpg" class="img-responsive">
                </div>
                <div class="gallary-main col-lg-4 col-md-4 col-sm-4 col-xs-6 filter program">
                    <img src="assets/images/gallary/sarsafai_3.jpg" class="img-responsive">
                </div>
                <div class="gallary-main col-lg-4 col-md-4 col-sm-4 col-xs-6 filter meeting">
                    <img src="assets/images/gallary/meeting.png" class="img-responsive">
                </div>
                <div class="gallary-main col-lg-4 col-md-4 col-sm-4 col-xs-6 filter notice">
                    <img src="assets/images/gallary/karyakram sarsafai.jpg" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
    <script>
        //  gallary filter script
        $(document).ready(function () {

            $(".filter-button").click(function () {
                var value = $(this).attr('data-filter');

                if (value == "all") {
                    $('.filter').show('1000');
                }
                else {
                    $(".filter").not('.' + value).hide('3000');
                    $('.filter').filter('.' + value).show('3000');

                }
            });

            if ($(".filter-button").removeClass("active")) {
                $(this).removeClass("active");
            }
            $(this).addClass("active");

        });
    </script>
    <!-- footer section  -->
    <?php
    require_once("includes/footer_main.php");
    ?>