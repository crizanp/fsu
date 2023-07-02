<?php

require_once("includes/Db.php");
require_once("includes/Functions.php");
require_once("includes/Sessions.php");
require_once("includes/DateTime.php");
$sql = "SELECT * FROM event_post ORDER BY id desc LIMIT 0,1";
$stmt = $ConnectingDb->query($sql);
while ($DataRows = $stmt->fetch()) {
    $Title = $DataRows['title'];
    $TitleId = $DataRows['id'];
}
$sql = "SELECT * FROM news_post ORDER BY id desc LIMIT 0,1";
$stmt = $ConnectingDb->query($sql);
while ($DataRows = $stmt->fetch()) {
    $NewsTitle = $DataRows['title'];
    $NewsId = $DataRows['id'];

}
?>
<header class="header" style="">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <marquee behavior="" direction="">Event: <a href="events.php#<?php echo $TitleId; ?>">
                            <?php echo $Title ?>
                        </a> <span class="px-4"> News: <a href="news-post.php?id=<?php echo $NewsId ?>"><?php echo $NewsTitle ?></a></span>
                    </marquee>
                </div>
                <div class="col-md-2 my-auto">
                    <a href="admin/login.php"><span class="float-right text-light">Admin <i
                                class="fa fa-lock"></i></span>
                </div>
            </div>
        </div>
    </div>
    <!--to-bar-->
    <div class="header-main container">
        <div class="row">
            <h1 class="logo col-md-4 col-12">
                <a href="index.php"><img id="logo" src="assets/images/logo.png" alt="Logo"></a>
            </h1>
            <div class="info col-md-8 col-12">

                <!--menu-top-->
                <br />
                <div class="contact row float-right m-auto">
                    <p class="phone"><i class="fas fa-phone"></i>Call Us +9779810570014</p>
                    <p class="email"><i class="fas fa-envelope"></i><a href="contact.html">fsu@ioepc.edu.np</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- NAV -->
<div class="main-nav-wrapper" style="z-index:-1">
    <div class="container">
        <nav class="main-nav navbar navbar-expand-md" role="navigation">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbar-collapse">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Departments<i
                                class="fas fa-angle-down"></i></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="bct_faculty.php">BCT</a>
                            <a class="dropdown-item" href="bce_faculty.php">BCE</a>
                            <a class="dropdown-item" href="bei_faculty.php">BEI</a>
                            <a class="dropdown-item" href="bme_faculty.php">BME</a>
                            <a class="dropdown-item" href="bag_faculty.php">BAG</a>
                            <a class="dropdown-item" href="barch_faculty.php">BArch</a>
                            <a class="dropdown-item" href="bel_faculty.php">BEL</a>
                        </div>
                        <!--dropdown-menu-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="news.php">News</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Information<i
                                class="fas fa-angle-down"></i></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="events.php">EVENTS</a>
                            <a class="dropdown-item" href="medication.php">MEDICATION</a>

                        </div>
                        <!--dropdown-menu-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="complainbox.php">Compain Box</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0"
                            data-close-others="false" href="#">About <i class="fas fa-angle-down"></i></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="about.php">About</a>
                            <a class="dropdown-item" href="team.php">Our Teams</a>
                            <a class="dropdown-item" href="about.php#mission&vision">Visions</a>
                            <a class="dropdown-item" href="gallary.php">Gallary</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="registration.php">Form</a></li>

                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>