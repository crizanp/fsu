<?php
require_once("includes/Db.php");
require_once("includes/Functions.php");
require_once("includes/Sessions.php");
require_once("includes/DateTime.php");
?>

<?php
global $ConnectingDb;
$PostIdFromURL = $_GET["id"];
if (!isset($PostIdFromURL)) {
    $_SESSION["ErrorMessage"] = "This page isn't available. Sorry about that.!!";
    Redirect_to("news.php");
}
$sql = "SELECT * FROM news_post WHERE id='$PostIdFromURL'";
$stmt = $ConnectingDb->query($sql);
while ($DataRows = $stmt->fetch()) {
    $Id = $DataRows['id'];
    $News_Title = $DataRows['title'];
    $DateTime = $DataRows['datetime'];
    $Image = $DataRows['image'];
    $Category = $DataRows['category'];
    $PostSummary = $DataRows['summary'];
    $Post = $DataRows['post'];
}


?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<head>
    <title> News |
        <?php echo $News_Title; ?>
    </title>
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
        <!-- HEADER -->
        <?php
        require_once("includes/nav_main.php");
        ?>
        <!--CONTENt-->
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title float-left font-weight-bold">
                        <?php echo $News_Title; ?>
                    </h1>
                </header>
                <div class="page-content">
                    <div class="row page-row">
                        <article class="welcome col-lg-8 col-md-7 col-12">
                            <p>
                                <?php echo $PostSummary; ?>
                            </p>
                            <p>
                                <a href="admin/uploads/<?php echo $Image; ?>">
                                    <img class="img-fluid rounded-lg" src="admin/uploads/<?php echo $Image; ?>"
                                        alt="" />
                                </a>
                            </p>
                            <span style="background-color:red;color:white;padding:4px">
                                <?php echo $Category; ?>
                            </span>
                            <p>
                                <?php echo $Post; ?>
                            </p>
                        </article>
                        <!--Mani-content DOn't manupulate-->
                        <aside class="page-sidebar  col-lg-3 offset-lg-1 col-md-4 offset-md-1">
                            <section class="widget p-3 has-divider">
                                <h3 class="title font-weight-bold">Other News</h3>
                                <ul class="job-list custom-list-style">
                                    <?php
                                    $sql = "SELECT * FROM news_post ORDER BY id desc LIMIT 0,5";
                                    $stmt = $ConnectingDb->query($sql);
                                    while ($DataRows = $stmt->fetch()) {
                                        $LinkId = $DataRows['id'];
                                        $Title = $DataRows['title'];
                                        $DateTime = $DataRows['datetime'];
                                        $Image = $DataRows['image'];
                                        $Category = $DataRows['category'];
                                        $PostSummary = $DataRows['summary'];
                                        $Post = $DataRows['post'];
                                        if ($LinkId != $Id) {
                                            ?>
                                            <li><i class="fas fa-caret-right"></i><a
                                                    href="news-post.php?id=<?php echo $LinkId; ?>"> <?php
                                                       if (strlen($Title) > 40) {
                                                           $Title = substr($Title, 0, 39) . '....';
                                                       }
                                                       echo $Title; ?>
                                                </a>
                                            </li>
                                        <?php }
                                    } ?>
                                </ul>
                                <a class="btn btn-danger rounded" style="background-color:red" href="news.php">Get More
                                    News</a>
                            </section>
                            <section class="widget p-3 has-divider">
                                <h3 class="title font-weight-bold">Latest Events</h3>
                                <ul class="job-list custom-list-style">
                                    <?php
                                    $sql = "SELECT * FROM event_post ORDER BY type desc LIMIT 0,5";
                                    $stmt = $ConnectingDb->query($sql);
                                    while ($DataRows = $stmt->fetch()) {
                                        $EventId = $DataRows['id'];
                                        $Title = $DataRows['title'];
                                        $Type = $DataRows['type'];
                                        ?>
                                        <li><i class="fas fa-caret-right"></i><a href="events.php">
                                                <?php
                                                if (strlen($Title) > 40) {
                                                    $Title = substr($Title, 0, 39) . '....';
                                                }
                                                echo $Title; ?>

                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                                <a class="btn btn-danger rounded" style="background-color:red" href="news.php">Get All
                                    Events</a>
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