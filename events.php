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
    <title>Events | FSU ERC</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <script defer src="assets/fontawesome/js/all.js"></script>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/basic.css">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v17.0&appId=811479616893890&autoLogAppEvents=1"
        nonce="oiMly7sA"></script>
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
                        <div class="events-wrapper col-lg-9 ">

                            <!-- information or highlight notice  -->
                            <div class="row bg-primary">
                                <div class="col-md-8 first-column text-light py-5 my-auto ">
                                    <h3 class="text-light text-center font-weight-bold">Acedemic calender 2080</h3>
                                    <p class="text-light text-center">
                                        The IOE TU has recently released the Academic Calendar for the year 2080, which
                                        will be strictly adhered to according to the provided schedule.
                                    </p>
                                </div>
                                <div class="col-md-4 second-column text-light my-auto ">
                                    <p class="text-light text-center" style="margin-top: 15px">
                                        <a class="btn btn-danger rounded my-0" href="#" style="background-color:red"><i
                                                class="fas fa-download text-light"></i>Download now</a>
                                    </p>
                                </div>
                            </div>

                            <!-- main content page no manipulate here  -->
                            <header class="page-heading clearfix py-3">
                                <h1 class="heading-title float-left">All Events</h1>
                            </header>
                            <?php
                            global $ConnectingDb;
                            $sql = "SELECT * FROM event_post ORDER BY id desc";
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
                                <article class="events-item row page-row has-divider clearfix" id="<?php echo $Id ?>">
                                    <div class="date-label-wrapper col-lg-1 col-md-2 col-12">
                                        <p class="date-label">
                                            <span class="month">
                                                <?php echo $Date; ?>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="details col-lg-11 col-md-10 col-12">
                                        <h3 class="title"><b>
                                                <?php echo $Title; ?>
                                            </b>
                                        </h3>
                                        <p class="meta"><span class="time"><i class="far fa-clock"></i>
                                                <?php echo $Time; ?>
                                            </span><span class="location"><i class="fas fa-map-marker-alt"></i><a href="#">
                                                    <?php echo $Location; ?>
                                                </a></span>
                                            <?php if ($Type != null) {
                                                ?>
                                                <span class="bg-danger text-light p-2 mx-2">
                                                    <?php echo $Type; ?>
                                                </span>
                                            <?php } ?>
                                        </p>
                                        <p class="desc" style="color:#545B77!important">
                                            <?php echo $Description; ?>
                                        </p>
                                    </div>
                                </article>
                            <?php } ?>
                        </div>
                        <div class="col-lg-3">

                            <!-- Information any  -->

                            <section class="widget p-3 has-divider">
                                <h3 class="title font-weight-bold blink_me">Web Development Competition </h3>
                                <p>Collaborating with ACES and FSU, a Web Development Competition is scheduled for Ashad
                                    16. Limited spots available, so register promptly to secure your chance.
                                </p>
                                <a class="btn btn-danger rounded" href="registration.php"
                                    style="background-color:red"><i class="fas fa-download text-light"></i>Apply
                                    Here</a>
                            </section>

                            <!-- news section sidebar  -->
                            <section class="events py-3">
                                <h1 class="section-heading text-highlight"><span class="mx-4">Latest News</span></h1>
                                    <?php
                                    global $ConnectingDb;
                                    $sql = "SELECT * FROM news_post ORDER BY id desc LIMIT 0,5";
                                    $stmt = $ConnectingDb->query($sql);
                                    while ($DataRows = $stmt->fetch()) {
                                        $Id = $DataRows['id'];
                                        $Title = $DataRows['title'];
                                        $DateTime = $DataRows['datetime'];
                                        $Image = $DataRows['image'];
                                        $PostSummary = $DataRows['summary'];
                                        ?>
                                        <article class="news-item row mx-2">
                                            <figure class="thumb col-xl-3">
                                                <img class="" src="admin/uploads/<?php echo $Image; ?>" width="" alt="">
                                            </figure>
                                            <div class="details col-xl-9">
                                                <h4 class="title py-auto"><a href="news-post.php?id=<?php echo $Id; ?>">
                                                        <?php
                                                        if (strlen($Title) > 40) {
                                                            $Title = substr($Title, 0, 39) . '....';
                                                        }
                                                        echo $Title; ?>
                                                    </a></h4>
                                            </div>
                                        </article>
                                    <?php } ?>
                                    <a class="read-more m-3" href="news.php">All News<i
                                            class="fas fa-chevron-right"></i></a>
                            </section>

                            <!-- facebook embed   -->
                            <div class="fb-page" data-href="https://www.facebook.com/fsu.ioeerc" data-tabs="timeline"
                                data-width="" data-height="" data-small-header="true" data-adapt-container-width="true"
                                data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/fsu.ioeerc" class="fb-xfbml-parse-ignore"><a
                                        href="https://www.facebook.com/fsu.ioeerc">स्वतन्त्र विद्यार्थी युनियन, इ.अ.सं,
                                        पूर्वाञ्चल क्याम्पस धरान</a></blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <?php
    require_once("includes/footer_main.php");
    ?>