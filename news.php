<?php
require_once("includes/Db.php");
require_once("includes/Functions.php");
require_once("includes/Sessions.php");
require_once("includes/DateTime.php");
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<head>
    <title>Latest FSU News | Notics</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <script defer src="assets/fontawesome/js/all.js"></script>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/basic.css">
</head>

<body class="home-page">
    <div class="wrapper">
        <!-- NAV -->
        <?php
        require_once("includes/nav_main.php");
        ?>
        <!-- CONTENT -->
        <div class="content container">
            <div class="page-wrapper">
                <div class="page-content">
                    <div class="row page-row">
                        <div class="news-wrapper col-lg-8">
                            <?php
                            echo ErrorMessage();
                            echo SuccessMessage();
                            ?>

                            <!-- informative Section -->
                            <div class="row">
                                <div class="row bg-primary">
                                    <div class="col-md-8 first-column text-light py-5 my-auto ">
                                        <h3 class="text-light text-center font-weight-bold">Acedemic calender 2080</h3>
                                        <p class="text-light text-center">
                                            The IOE TU has recently released the Academic Calendar for the year 2080,
                                            which will be strictly adhered to according to the provided schedule.
                                        </p>
                                    </div>
                                    <div class="col-md-4 second-column text-light my-auto ">
                                        <p class="text-light text-center" style="margin-top: 15px">
                                            <a class="btn btn-danger rounded my-0" href="#"
                                                style="background-color:red"><i
                                                    class="fas fa-download text-light"></i>Download now</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- page title -->
                            <header class="page-heading clearfix">
                                <h1 class="heading-title float-left pt-3">News | Notices</h1>
                            </header>

                            <!-- main code no manupulate -->
                            <?php
                            global $ConnectingDb;
                            $sql = "SELECT * FROM news_post ORDER BY id desc LIMIT 0,5";
                            $stmt = $ConnectingDb->query($sql);
                            while ($DataRows = $stmt->fetch()) {
                                $Id = $DataRows['id'];
                                $Title = $DataRows['title'];
                                $DateTime = $DataRows['datetime'];
                                $Image = $DataRows['image'];
                                $Category = $DataRows['category'];
                                $PostSummary = $DataRows['summary'];
                                $Post = $DataRows['post'];
                                ?>
                                <article class="news-item page-row has-divider clearfix row">
                                    <figure class="thumb col-lg-2 col-md-3 col-4">
                                        <img class="img-fluid rounded" src="admin/uploads/<?php echo $Image; ?>"
                                            style="height:65px" alt="" />
                                    </figure>
                                    <div class="details col-lg-10 col-md-9 col-8">
                                        <h3 class="title text-dark  mb-2"><a href="news-post.php?id=<?php echo $Id ?>">
                                                <?php

                                                echo $Title; ?>
                                            </a></h3>
                                        <span style="background-color:red;color:white;padding:4px">
                                            <?php echo $Category; ?>
                                        </span>
                                    </div>
                                </article>
                            <?php } ?>
                        </div>

                        <!-- sidebar  -->
                        <aside class="page-sidebar  col-lg-3 offset-lg-1 col-md-4 offset-md-1">
                            <section class="widget p-3 has-divider">
                                <h3 class="title font-weight-bold blink_me">Web Development Compitition</h3>
                                <p>Collaborating with ACES and FSU, a Web Development Competition is scheduled for Ashad
                                    16. Limited spots available, so register promptly to secure your chance.
                                </p>
                                <a class="btn btn-danger rounded" href="registration.php"
                                    style="background-color:red"><i class="fas fa-download"></i>Apply Here</a>
                            </section>
                            <section class="widget has-divider p-3">
                                <h3 class="title font-weight-bold">Upcoming Events</h3>
                                <?php
                                global $ConnectingDb;
                                $sql = "SELECT * FROM event_post ORDER BY type desc LIMIT 0,4";
                                $stmt = $ConnectingDb->query($sql);
                                while ($DataRows = $stmt->fetch()) {
                                    $Id = $DataRows['id'];
                                    $Title = $DataRows['title'];
                                    $Date = $DataRows['date'];
                                    $Time = $DataRows['time'];
                                    $Location = $DataRows['location'];
                                    $Description = $DataRows['description'];
                                    $Type = $DataRows['type'];
                                    ?>
                                    <article class="events-item row page-row">
                                        <div class="date-label-wrapper col-lg-3 col-4">
                                            <p class="date-label rounded">
                                                <span class="month">
                                                    <?php echo $Date ?>
                                                </span>
                                                <span class="day font-weight-bold" style="font-size:11px">
                                                    <?php echo $Type ?>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="details col-lg-9 col-8">
                                            <h5 class="title">
                                                <?php echo $Title ?>
                                            </h5>
                                            <p class="time text-muted">
                                                <?php echo $Time ?><br />
                                                <?php echo $Location ?>
                                            </p>
                                        </div>
                                    </article>
                                <?php } ?>
                                <a class="read-more m-3" href="events.php">All Events<i
                                        class="fas fa-chevron-right"></i></a>
                            </section>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- FOOTER -->
    <?php
    require_once("includes/footer_main.php");
    ?>