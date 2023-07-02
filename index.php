<?php
require_once("includes/Db.php");
require_once("includes/Functions.php");
require_once("includes/Sessions.php");
require_once("includes/DateTime.php");
?>
        <!-- Table of content 
        47. Overwrite of Bootstrap CSS
        58. News Style
        78. popup-teams Display CSS style
        128. popup-teams Display Teams
        159. Main Page Starts Here
        163. HEADER
        169.Page Content
        177.Short Notice
        200.Slider Of Gallary
        229.FSU Introduction
        260.Message From SECRETARY and President
        316.Short notice here
        338.Events Highlight Don't manipulate it
        386.Youtube video embad and intro of college
        419.news Highlight don't manipulate here
        465.popup-teams script
        485.FOOTER Here -->


<!-- HTMl starts -->
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<head>
    <title>Official FSU Purwanchal Campus Website</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <script defer src="assets/fontawesome/js/all.js"></script>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/basic.css">
</head>
<style>
    /* Overwrite of Bootstrap CSS */
    @media (min-width: 768px) {
        .navbar-expand-md .navbar-collapse {
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
            flex-direction: column;
        }
    }

    /* News Style */
    .news-item {
        margin-bottom: 15px;
    }

    .news-item img {
        width: 40px;
        height: 40px;
    }

    .news-item .title {
        font-size: 14px;
        margin-top: 0;
    }

    .center {
        margin-top: 15px;
    }


    /* popup-teams Display CSS style */
    .popup-teams {
        background-color: #f0ebeb;
        width: 365px;
        padding: 20px 36px;
        position: fixed;
        transform: translate(-50%, -50%);
        left: 50%;
        top: 63%;
        border-radius: 8px;
        z-index: 100;
        display: none;

    }

    .popup-teams button {
        display: block;
        margin: 0 0 20px auto;
        background-color: transparent;
        font-size: 20px;
        color: grey;
        outline: none;
        border: none;
        cursor: pointer;

    }

    .popup-teams button:hover {
        color: black;

    }

    .popup-teams p {
        font-size: 14px;
        text-align: justify;
        margin: 20px 0;

    }

    .popup-teams a {
        display: block;
        position: relative;
        margin: auto;
        text-decoration: none;
        padding: 5px 0;

    }
</style>

<body class="home-page">
    <!-- popup-teams Display Teams -->
    <div class="popup-teams">
        <div class="row" style="align-items: center;margin-bottom: 25px;">
            <h2 class="font-weight-bold">
                <center> Build By <span class="text-danger">GigaByte</span></center>
            </h2>
            <button id="close">&times;</button>
        </div>
        <table class="table px-0 mx-0">
            <tbody>
                <tr>
                    <td>Bhuwan Ojha</td>
                    <td>Browser Scripting</td>
                </tr>
                <tr>
                    <td>NC Nepal</td>
                    <td>Backend</td>
                </tr>
                <tr>
                    <td>Sunil Bist</td>
                    <td>Server Side (MySql)</td>
                </tr>
                <tr>
                    <td>Srijan Pokhrel</td>
                    <td>Full Stack</td>
                </tr>
            </tbody>
        </table>
        <center><a href="#" class="close" style="float: unset;background-color:blue;color:white">Done</a></center>
    </div>

    <!-- Main Page Starts Here -->

    <div class="wrapper">

        <!-- HEADER -->

        <?php
        require_once("includes/nav_main.php");
        ?>

        <!-- Page Content -->

        <div class="content container">
            <?php
            echo SuccessMessage();
            echo ErrorMessage();
            ?>

            <!-- Short Notice  -->
            <div class="bg-primary mb-2">
                <div class="container-fluid">
                    <div class="row p-1 os-banner text-light">
                        <div class="col-lg-4 text-center text-y my-auto">
                            <h3 class="py-auto font-weight-bold blink_me">Web Development Compitition</h3>
                        </div>
                        <div class="col-lg-4 py-2 my-auto">
                            <p align="justify" class="text-light my-auto">Ashad 16 brings you an exciting Web
                                Developments
                                Competition in collaboration with ACES and FSU! Limited spots available, so seize the
                                opportunity and secure your place by filling out the form. Don't miss out on this
                                chance!
                            </p>
                        </div>
                        <div class="col-lg-4 text-center py-2 center my-auto">
                            <a href="registration.php" target="blank"> <button type="button"
                                    class="btn btn-outline-light btn-lg">Apply Here</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Of Gallary -->

            <div id="promo-slider" class="slider flexslider rounded">
                <ul class="slides">
                    <li>
                        <img style="width: 100%;
                        max-height: 480px;
                        object-fit: cover;"
                            src="assets/images/slides/352949190_149879404755710_5379618072103954179_n.jpg" alt="" />
                    </li>
                    <li>
                        <img style="width: 100%;
                        max-height: 480px;
                        object-fit: cover;" src="assets/images/slides/ERC_2019_srgb-scaled.jpg" alt="" />
                    </li>
                    <li>
                        <img style="width: 100%;
                        max-height: 480px;
                        object-fit: cover;" src="assets/images/slides/bg-768x498.jpg" alt="" />
                    </li>
                    <li>
                        <img style="width: 100%;
                        max-height: 480px;
                        object-fit: cover;"
                            src="assets/images/slides/354452118_157284317348552_7498292732088310369_n (1).jpg" alt="" />
                    </li>
                </ul>
            </div>

            <!-- FSU Introduction -->

            <section class="section-head">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 my-3 d-flex wow animate__animated animate__fadeIn">
                            <div class="card card-body border-0 welcome">
                                <h3 class="text-center font-weight-bold wrap-head">Welcome to FSU Purwanchal Campus</h3>
                                <p>
                                    Welcome to the Free Student Union of Purwanchal Campus! We are a vibrant and
                                    inclusive community dedicated to creating an environment that promotes academic
                                    excellence, personal growth, and student advocacy. As a member of our union, you
                                    will have access to a wide array of resources and opportunities tailored to support
                                    your educational journey. From academic support services to engaging cultural
                                    events, thrilling sports competitions, and impactful community outreach programs,
                                    there is something for everyone.
                                </p>
                                <p>
                                    We strongly believe in the power of student voices and provide a platform for you to
                                    express your ideas, concerns, and perspectives. Your active participation in our
                                    events and involvement in student clubs will not only enhance your university
                                    experience but also develop your leadership skills and foster lifelong connections.
                                    Our committed team is always ready to listen to your feedback, address your
                                    questions, and ensure that your time at Purwanchal Campus is fulfilling and
                                    successful. Join us at the Free Student Union and let's embark on this remarkable
                                    journey together, where we support and empower each other to reach new heights.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Message From SECRETARY and President -->


                    <div class="row">
                        <div class="col-md-6 mb-4 d-flex wow animate__animated animate__fadeIn">
                            <div class="card card-body border-0" style="background: #e31212;">
                                <h5 class="text-white font-weight-bold">Message from FSU President</h5>
                                <p class="text-white">
                                    As President, I represent your interests and advocate for educational freedom,
                                    inclusivity, and student empowerment. We are committed to equal access to education,
                                    supporting you during the pandemic, and addressing your needs. Our focus is on
                                    quality education, mental health support, affordable housing, and student
                                    involvement. Let's build a strong community through engaging events and forums. Your
                                    voice matters, and together, we can create positive change.
                                </p>
                                <div class="row mt-auto">
                                    <div class="col-4">
                                        <div class="img-circle">
                                            <img src="assets/images/nabin_stha.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-8 my-auto">
                                        <h6 class="text-white mt-3">Er. Nabin Shrestha</h6>
                                        <h6 class="text-white">PRESIDENT FSU (Agriculture Engineer)</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 d-flex wow animate__animated animate__fadeIn">
                            <div class="card card-body border-0" style="background: #e31212;">
                                <h5 class="text-white font-weight-bold">Message from FSU SECRETARY</h5>
                                <p class="text-white">
                                    I want to emphasize our commitment to representing your interests and
                                    ensuring your voices are heard. We strive to create an inclusive and supportive
                                    environment where every student can thrive academically and personally. If you have
                                    any concerns, suggestions, or ideas, please don't hesitate to contact us. Together,
                                    let's build a vibrant and progressive community that fosters growth and empowers
                                    each student.
                                </p>
                                <div class="row mt-auto">
                                    <div class="col-4">
                                        <div class="img-circle">
                                            <img src="assets/images/rajan yadav.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-8 my-auto">
                                        <h6 class="text-white mt-3">Rajan Yadav</h6>
                                        <h6 class="text-white">SECRETARY FSU (Electronics and Comm. Engineer)</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Short notice here  -->

            <div style="background-color:#e31212">
                <div class="container-fluid">
                    <div class="row py-4 px-4 os-banner text-light">
                        <div class="col-lg-4 text-center text-y center">
                            <h3 class="py-auto font-weight-bold">Are you in need of medicine?</h3>
                        </div>
                        <div class="col-lg-4 my-auto">
                            <p align="justify" class="text-light my-auto">If you require medicine, please check its
                                availability and get in touch with the administration or reach out to us directly. We
                                will provide you with the necessary instructions.
                            </p>
                        </div>
                        <div class="col-lg-4 text-center py-2 center">
                            <a href="medication.php" target="blank"> <button type="button"
                                    class="btn btn-outline-light btn-lg">See If available</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Events Highlight Don't manipulate it-->

            <div class="row cols-wrapper">
                <div class="col-lg-3 col-12">
                    <section class="events rounded">
                        <h1 class="section-heading text-highlight"><span class="mx-3">Events</span></h1>
                        <div class="section-content">
                            <?php
                            global $ConnectingDb;
                            $sql = "SELECT * FROM event_post ORDER BY id desc LIMIT 0,5";
                            $stmt = $ConnectingDb->query($sql);
                            while ($DataRows = $stmt->fetch()) {
                                $Id = $DataRows['id'];
                                $Title = $DataRows['title'];
                                $Date = $DataRows['date'];
                                $Time = $DataRows['time'];
                                $Location = $DataRows['location'];
                                $Description = $DataRows['description'];
                                ?>
                                <div class="event-item">
                                    <p class="date-label">
                                        <span class="month">
                                            <?php echo $Date ?>
                                        </span>
                                    </p>
                                    <div class="details">
                                       <a href="events.php#<?php echo $Id;?>"><h2 class="title">
                                            <?php
                                            if (strlen($Title) > 30) {
                                                $Title = substr($Title, 0, 29) . '....';
                                            }
                                            echo $Title; ?>

                                        </h2></a>
                                        <p class="time"><i class="far fa-clock"></i>
                                            <?php echo $Time ?>
                                        </p>
                                        <p class="location"><i class="fas fa-map-marker-alt"></i>
                                            <?php echo $Location ?>
                                        </p>
                                    </div>
                                </div>
                            <?php } ?>
                            <a class="read-more" href="events.php">All events<i class="fas fa-chevron-right"></i></a>
                        </div>
                    </section>
                </div>

                <!-- Youtube video embad and intro of college -->


                <div class="col-lg-6 col-12">
                    <section class="video rounded-lg">
                        <div class="section-content">

                            <div class="embed-responsive embed-responsive-16by9 mb-2 my-3">
                                <iframe width="942" height="530" src="https://www.youtube.com/embed/NcVwnPXxTpk"
                                    title="IOE PURWANCHAL CAMPUS, DHARAN || PROMOTIONAL VIDEO ||" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>

                            <p class="description">Purwanchal Campus, formerly known as Eastern Region (ERC) Campus is
                                one of constituent campuses of Tribhuvan University (TU) and one of the associate
                                engineering campuses of Institute of Engineering (IOE) which is a comprehensive,
                                non-profit making institution and pioneering institution of higher education level in
                                Nepal funded by Government of Nepal.Currently this campus runs seven (Agricultural,
                                Architecture, Civil, Computer, Electrical, Electronics Communication & Information,
                                Mechanical) bachelors degree program and one (Land and Water) master degree program It
                                is situated at Gangalal Marg, Tinkune, Dharan-8, Sunsari district in the eastern region
                                of Nepal. It occupies an area of 443 ropani (34-13-11.75 Bigahas)
                                </p><p>
                                With the upgrade to a higher level of courses, the need to adopt the recent
                                technological development and initiate research and development activities to better
                                deal with related engineering problems, the Purwanchal campus is committed to achieving
                                better quality results
                            </p>
                        </div>
                    </section>
                </div>

                <!-- news Highlight don't manipulate here -->

                <div class="col-lg-3 col-12">
                    <section class="events rounded ">
                        <h1 class="section-heading text-highlight"><span class="m-3">Latest News</span></h3>
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
                                $Category = $DataRows['category'];
                                ?>
                                <article class="news-item row mx-2">
                                    <figure class="thumb col-xl-3">
                                        <img class="rounded-pill" src="admin/uploads/<?php echo $Image; ?>" width="280px"
                                            alt="">
                                    </figure>
                                    <div class="details col-xl-9">
                                        <h4 class="title mb-1"><a href="news-post.php?id=<?php echo $Id; ?>">
                                                <?php
                                                if (strlen($Title) > 40) {
                                                    $Title = substr($Title, 0, 39) . '....';
                                                }
                                                echo $Title; ?>

                                            </a></h4>
                                        <span class="text-light p-1" style="background-color:red">
                                            <?php echo $Category; ?>
                                        </span>
                                    </div>
                                </article>
                            <?php } ?>
                            <a class="read-more m-3" href="news.php">Explore All<i class="fas fa-chevron-right"></i></a>
                    </section>
                    <a href="/fsu/assets/images/gallary/saugat_webinar.jpg"><img
                            src="assets/images/gallary/saugat_webinar.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <!-- popup-teams script -->

    <script>
        window.addEventListener("load", function () {
            setTimeout(
                function open(event) {
                    document.querySelector(".popup-teams").style.
                        display = "block";
                },
                1000
            )
        });
        document.querySelector("#close").addEventListener("click", function () {
            document.querySelector(".popup-teams").style.display = "none";
        });
        document.querySelector(".close").addEventListener("click", function () {
            document.querySelector(".popup-teams").style.display = "none";
        });
    </script>

    <!-- FOOTER Here-->

    <?php
    require_once("includes/footer_main.php");
    ?>