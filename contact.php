<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<head>
    <title>Contact US | FSU ERC</title>
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
        <!--CONTENT-->
        <div class="content container">
            <div class="page-wrapper">
                <div class="page-content">
                    <div class="row">
                        <article class="contact-form col-lg-8 col-md-7  col-12 page-row">

                            <!-- contact header  -->
                            <header class="page-heading clearfix">
                                <h1 class="heading-title float-left">Contact</h1>
                            </header>
                            <p>
                                We value your feedback! Please share your thoughts, suggestions, or inquiries. Contact
                                us through email or phone, or connect with us on social media. Your input helps us
                                improve and provide the best experience possible. We can't wait to hear from you!
                            </p>

                            <!-- main form here  -->
                            <form>
                                <div class="form-group name">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" class="form-control rounded-lg"
                                        placeholder="Enter your name">
                                </div>
                                <div class="form-group email">
                                    <label for="email">Email<span class="required">*</span></label>
                                    <input id="email" type="email" class="form-control rounded-lg"
                                        placeholder="Enter your email">
                                </div>
                                <div class="form-group phone">
                                    <label for="phone">Phone</label>
                                    <input id="phone" type="tel" class="form-control rounded-lg"
                                        placeholder="Enter your contact number">
                                </div>
                                <div class="form-group message">
                                    <label for="message">Message<span class="required">*</span></label>
                                    <textarea id="message" class="form-control rounded-lg" rows="6"
                                        placeholder="Enter your message here..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-danger rounded" style="background-color:red">Send
                                    message</button>
                            </form>
                        </article>

                        <!-- sidebar  -->
                        <aside class="page-sidebar  col-lg-3 offset-lg-1 col-md-4 offset-md-1">
                            <section class="widget p-3 has-divider">

                                <!-- any information short  -->
                                <h3 class="title font-weight-bold">Download Academic Calender</h3>
                                <p>Acedemic caleder of year 2080 has been published by IOE TU and will be followed
                                    strictly under the mentioned schedule</p>
                                <a class="btn btn-danger rounded" href="#" style="background-color:red"><i
                                        class="fas fa-download"></i>Download now</a>
                            </section>

                            <!-- address location  -->
                            <section class="widget has-divider p-3">
                                <h3 class="title font-weight-bold">Address</h3>
                                <p class="adr">
                                    <span class="adr-group">
                                        <span class="street-address">Purwanchal Campus | Engineering
                                            University</span><br>
                                        <span class="region">Sharan 8</span><br>
                                        <span class="postal-code">Tarara</span><br>
                                        <span class="country-name">Nepal</span>
                                    </span>
                                </p>
                            </section>

                            <!-- Contact info  -->
                            <section class="widget p-3">
                                <h3 class="title font-weight-bold">Also Contact us on</h3>
                                <p class="tel"><i class="fas fa-phone"></i>Tel: 025580989</p>
                                <p class="email"><i class="fas fa-envelope"></i>Email: <a href="#">fsu@ioepc.edu.np</a>
                                </p>
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