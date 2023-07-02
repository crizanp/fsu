<?php
require_once("includes/Db.php");
require_once("includes/Functions.php");
require_once("includes/Sessions.php");
require_once("includes/DateTime.php"); ?>

<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<style>
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
<head>
    <title>Medication | FSU Purwanchal Campus</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <script defer src="assets/fontawesome/js/all.js"></script>
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/basic.css">
</head>

<!-- main body start -->

<body class="home-page">
<div class="popup-teams">
        <div class="row" style="align-items: center;margin-bottom: 25px;">
            <h2 class="font-weight-bold">
                <center> Emergency <span class="text-danger">Number</span></center>
            </h2>
            <button id="close">&times;</button>
        </div>
        <table class="table px-0 mx-0">
            <tbody>
                <tr>
                    <td>Dr. Bhuwan Ojha</td>
                    <td>9810570000</td>
                </tr>
                <tr>
                    <td>Dr. NC Dinesh</td>
                    <td>9810570000</td>
                </tr>
                <tr>
                    <td>Dr. Sunil Bist</td>
                    <td>9810570000</td>
                </tr>
                <tr>
                    <td>Dr. Srijan Pokhrel</td>
                    <td>9810570000</td>
                </tr>
            </tbody>
        </table>
        <center><a href="#" class="close" style="float: unset;background-color:blue;color:white">Done</a></center>
    </div>
    <div class="wrapper">

        <!-- NAV -->
        <?php
        require_once("includes/nav_main.php");
        ?>

        <!--Informative CONTENT-->

        <div class="bg-primary container mb-3">
            <div class="container-fluid">
                <div class="row py-4 px-4 os-banner text-light">
                    <div class="col-lg-3 text-center text-y center my-auto">
                        <h3 class="font-weight-bold">Are you in need of medicine?</h3>
                    </div>
                    <div class="col-lg-6 py-2">
                        <p align="justify" class="text-light my-auto">If you are seriously ill, we offer the convenience
                            of delivering medicine directly to your doorstep. Simply reach out to us through our website
                            for assistance. Alternatively, you can also contact the college administration for further
                            support and guidance.

                        </p>
                    </div>
                    <div class="col-lg-3 text-center  my-auto center">
                        <a href="contact.php" target="blank"> <button type="button"
                                class="btn btn-outline-light btn-lg">Contact Us</button></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Title of page -->

        <div class="content container">
            <header class="page-heading clearfix" style="border-bottom: 1px solid #e8e8e8;">
                <center>
                    <h2 class="heading-title float-center font-weight-bold">Medication Information</h2>
                </center>
            </header>


            <!-- Search bar -->
            <form method="get">
                <div class="p-1 bg-light shadow-sm mb-4" style="border: 1px solid red;">
                    <div class="input-group">
                        <input type="search" value="<?php
                        if (isset($_GET["search"])) {
                            $Search = $_GET["search"];
                            echo $Search;
                        } ?>" placeholder="Search Available Medicine" aria-describedby="button-addon1"
                            class="form-control border-0 bg-light" name="search">
                        <div class="input-group-append">
                            <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i
                                    class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row" style="align-items: center;">

                <!-- result display don't manupulate it  -->
                <?php
                global $ConnectingDb;
                $Val = 0;
                if (isset($_GET["search"])) {
                    $Search = $_GET["search"];
                    $sql = "SELECT * FROM medication
                    WHERE title LIKE :search
                    OR description LIKE :search
                    OR stock LIKE :search 
                    ORDER BY id desc";
                    $stmt = $ConnectingDb->prepare($sql);
                    $stmt->bindValue(':search', '%' . $Search . '%');
                    $stmt->execute();

                } else {
                    $sql = "SELECT * FROM medication order by id desc";
                    $stmt = $ConnectingDb->query($sql);
                }
                while ($DataRows = $stmt->fetch()) {
                    $Id = $DataRows["datetime"];
                    $Title = $DataRows["title"];
                    $Image = $DataRows["image"];
                    $Stock = $DataRows["stock"];
                    $Description = $DataRows["description"];
                    $Val = 1;
                    ?>
                    <div class="col-md-4 px-3 my-2">
                        <div class="card" style="border: 1px solid red;">
                            <div class="card-block px-3">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6 my-auto">
                                        <h5 class="card-title pt-1 px-1 my-auto" style="font-weight:400;font-size: large;">
                                            <?php echo strtoupper($Title); ?>
                                            <br>
                                            <span class="bg-danger text-light p-1 my-0"
                                                style="font-size:15px; border-radius:4px">
                                                <?php echo $Stock; ?>
                                            </span>
                                        </h5>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <a href="admin/uploads/<?php echo $Image ?>"> <img
                                                src="admin/uploads/<?php echo $Image ?>" alt="<?php echo $Title; ?>"
                                                hight="100px" width="100px" class="float-center pt-2"></a>
                                    </div>
                                </div>
                                <p class="card-text pt-0">
                                    <?php echo $Description; ?>
                                </p>
                            </div>
                        </div>

                    </div>
                    <?php
                }
                if ($Val == 0 && isset($_GET["search"])) {
                    ?>
                    <h3 class="mx-auto py-3">Sorry your search parameter "<span class="font-weight-bold">
                            <?php echo $_GET["search"]; ?>
                        </span>" Has No Information Available</h3>
                    <?php
                }
                if ($Val == 0 && !isset($_GET["search"])) {
                    ?>
                    <h3 class="mx-auto py-3">Currently, No any information available.</h3>
                    <?php
                }
                ?>
            </div>

        </div>

        <!-- footer  -->
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
        <?php
        require_once("includes/footer_main.php");
        ?>