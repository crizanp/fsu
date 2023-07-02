<?php
require_once("includes/Db.php");
require_once("includes/DateTime.php");
require_once("includes/Sessions.php");
?>
<?php
if (isset($_POST["submit"])) {
    $Message = $_POST["message"];
    $Subject = $_POST["subject"];
    $captcha = $_POST['captcha'];


    if (empty($Message)) {
        $_SESSION["ErrorMessage"] = "You can't make your post title blank";
        header("Location: complainbox.php");
    } elseif (strlen($Message) < 2) {

        $_SESSION["ErrorMessage"] = "Inbox should be at least 2 characters";
        header("Location: complainbox.php");

    } elseif (strlen($Message) > 99999) {

        $_SESSION["ErrorMessage"] = "Message shouldn't be more then 100000 characters";
        header("Location: complainbox.php");

    } else {
        if ($_SESSION['CODE'] == $captcha) {
            global $ConnectingDb;
            $sql = "INSERT INTO complain(datetime,subject,message)";
            $sql .= "VALUES(:dateTime,:subjectTitle,:message)";
            $stmt = $ConnectingDb->prepare($sql);
            $stmt->bindValue(':dateTime', $DateTime);
            $stmt->bindValue(':subjectTitle', $Subject);
            $stmt->bindValue(':message', $Message);
            $Execute = $stmt->execute();
            if ($Execute) {
                $_SESSION["SuccessMessage"] = " Complain Submitted Successfully ";
                header("Location: index.php");
                exit();
            } else {
                $_SESSION["ErrorMessage"] = "Something Went Wrong";
                header("Location: complainbox.php");
            }
        } else {
            $_SESSION["ErrorMessage"] = " Enter valid Captcha ";
            header("Location: complainbox.php");
            exit();
        }
    }
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
    <title>Contact Us | FSU ERC</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <script defer src="assets/fontawesome/js/all.js"></script>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/basic.css">

    <!-- facebook embed script  -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v17.0&appId=811479616893890&autoLogAppEvents=1"
        nonce="oiMly7sA"></script>
</head>
<style>
    .main-nav-wrapper {
        margin-bottom: 0px !important;
    }
</style>

<body>
    <div class="wrapper">
        <!-- NAV -->
        <?php
        require_once("includes/nav_main.php");
        ?>
        <!-- CONTENT -->
        <div class="content py-0" style="background-color:gainsboro;">
            <div class="container">
                <div class="page-wrapper">
                    <header class="page-heading clearfix">
                        <h1 class="heading-title float-left pt-4 text-dark font-weight-bold">Complain | Suggestion</h1>
                    </header>
                    <div class="page-content">
                        <div class="row page-row mb-0 pb-3">
                            <div class=" col-md-8 col-md-7 col-12">
                                <div class="">
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>!!! Ones sent message cannot be undo !!
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                </div>
                                <div class="events-wrapper container">
                                    <div class="contact">
                                        <div class="col-md-offset-3">
                                            <div class="form-area">
                                                <div class="text-center contact-h">
                                                    <h2> Send message anynomously</h2>
                                                </div>
                                                <?php
                                                echo SuccessMessage();
                                                echo ErrorMessage();
                                                ?>
                                                <form method="post" enctype="multipart/form-data">
                                                    <div class="form-group group">
                                                        <input type="text" class="form-control" name="subject" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>Subject</label>
                                                    </div>
                                                    <div class="form-group group">
                                                        <div class="text-group">
                                                            <textarea required="required" name="message"
                                                                class="form-control" rows="6"></textarea>
                                                            <label for="textarea" class="input-label">Textarea</label><i
                                                                class="bar"></i>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row py-3">

                                                            <div class="col-lg-2 mt-1">
                                                                <img src="captcha.php" alt="Something went wrong"
                                                                    class="float-right">

                                                            </div>
                                                            <div class="col-lg-6 float-left">
                                                                <input type="text" class="form-control float-left"
                                                                    id="captcha"
                                                                    placeholder="Enter captcha aside ( case sensitive )"
                                                                    name="captcha">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" name="submit"
                                                        class="btn btn-danger col-md-12">Send Message</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">

                                <aside class="page-sidebar">
                                    <div class="fb-page" data-href="https://www.facebook.com/fsu.ioeerc"
                                        data-tabs="timeline" data-width="" data-height="" data-small-header="true"
                                        data-adapt-container-width="true" data-hide-cover="false"
                                        data-show-facepile="true">
                                        <blockquote cite="https://www.facebook.com/fsu.ioeerc"
                                            class="fb-xfbml-parse-ignore"><a
                                                href="https://www.facebook.com/fsu.ioeerc">स्वतन्त्र विद्यार्थी युनियन,
                                                इ.अ.सं, पूर्वाञ्चल क्याम्पस धरान</a></blockquote>
                                    </div>
                                </aside>
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