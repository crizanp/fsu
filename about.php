<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<head>
    <title>What is FSU ?</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <script defer src="assets/fontawesome/js/all.js"></script>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/basic.css">
</head>
<style>
    .welcome img {
        height: 300px !important;
        width: 100%;
    }
</style>

<body class="home-page">
    <div class="wrapper">
        <!-- HEADER -->
        <?php
        require_once("includes/nav_main.php");
        ?>
        <!--CONTENt-->
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title float-left">About</h1>
                </header>
                <div class="page-content">
                    <div class="row page-row">
                        <article class="welcome col-lg-8 col-md-7 col-12">
                            <h3 class="title font-weight-bold">Welcome to FSU Purwanchal Campus Dharam</h3>
                            <p><img class="main-banner img-fluid rounded-lg"
                                    src="assets\images\slides\ERC_2019_srgb-scaled.jpg" alt="" /></p>
                            <p>At FSU, we believe in empowering students and fostering a vibrant academic community. Our
                                aim is to provide a platform for students to engage, express themselves, and actively
                                participate in shaping their educational journey.</p>
                            <p id="mission&vision">

                                As a student union, we prioritize the well-being and interests of our members. We strive
                                to create an inclusive and supportive environment where every student feels valued and
                                heard. Through various initiatives, events, and programs, we encourage personal growth,
                                leadership development, and meaningful connections among our diverse student body.</p>
                            <p>

                                Our mission is to advocate for student rights, represent their concerns, and collaborate
                                with university administration to improve the overall student experience. We actively
                                engage in dialogue, address issues, and work towards creating positive change in both
                                academic and non-academic spheres.</p>
                            <p>

                                By organizing workshops, seminars, and cultural activities, we aim to enhance the
                                holistic development of our students. We promote extracurricular involvement, sports,
                                arts, and other recreational pursuits that contribute to a well-rounded education.</p>



                            <b> Welcome to FSU Purwanchal Campus Dharan - where students thrive!</b></p>
                            <ul>

                                <li><i></i>FSU Purwanchal Campus Dharan advocates for student
                                    rights and concerns.</li>
                                <li><i></i>Engaging students to foster an inclusive and supportive
                                    community.</li>
                                <li><i></i>Promoting holistic development through workshops,
                                    seminars, and cultural activities.</li>
                                <li><i></i>Providing resources and information for informed
                                    decision-making.</li>
                                <li><i></i>Collaborating for positive changes and enhancing the
                                    student experience.</li>
                            </ul>
                            <h3 class="font-weight-bold">
                                Our Agandas
                            </h3>
                            <p>
                            <ul>
                                <li><i></i> Student Rights and Welfare: Advocating for student
                                    rights, addressing concerns, and working towards improving the overall welfare of
                                    students on campus.
                                </li>
                                <li><i></i>Academic Support and Resources: Organizing workshops,
                                    seminars, and sessions to provide academic support, study tips, and resources for
                                    students to excel in their studies.
                                </li>
                                <li><i></i>Cultural and Recreational Activities: Planning and
                                    hosting cultural events, festivals, sports tournaments, and other recreational
                                    activities to promote student engagement, diversity, and social interaction.
                                </li>
                                <li><i></i>Campus Development and Facilities: Collaborating with
                                    the university administration to address infrastructure needs, enhance facilities,
                                    and improve the overall campus environment.
                                </li>
                                <li><i></i>Student Representation and Participation: Encouraging
                                    student involvement in decision-making processes, inviting feedback and suggestions,
                                    and fostering an inclusive environment where every student's voice is heard.
                                </li>
                            </ul>
                            </p>
                        </article>
                        <!--page-content-->
                        <aside class="page-sidebar  col-lg-3 offset-lg-1 col-md-4 offset-md-1">
                            <section class="widget p-3 has-divider">
                                <h3 class="title font-weight-bold">Meet Our Dynamic FSU Team</h3>
                                <p>Our FSU Free Student Union team at Purwanchal Campus Dharan consists of dedicated
                                    members working collaboratively towards student welfare, organizing engaging events,
                                    fostering academic excellence, promoting sports and culture, and maintaining
                                    transparency. 

                                </p>
                                <a class="btn btn-danger rounded" href="team.php"
                                    style="background-color:red"><i class="fas fa-download text-light"></i>Click Here</a>
                            </section>
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
                                            <img src="admin/uploads/<?php echo $Image; ?>" width="" alt="">
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
                            <section class="widget has-divider p-3">
                                <h3 class="title font-weight-bold">Upcoming Events</h3>
                                <?php
                                global $ConnectingDb;
                                $sql = "SELECT * FROM event_post ORDER BY type desc LIMIT 0,3";
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