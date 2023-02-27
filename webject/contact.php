<!DOCTYPE HTML>
<html lang="en">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Balkon - Creative Responsive Architecture Template</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/plugins.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/yourstyle.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
    <?php include('header.php'); ?>
    <!--=============== wrapper ===============-->
    <div id="wrapper">
        <!-- content-holder  -->
        <div class="content-holder">
            <!--  content -->
            <div class="content">
                <!--  section  -->
                <section class="parallax-section header-section" data-scrollax-parent="true">
                    <div class="bg" data-bg="images/web/contact1.jpg"
                        data-scrollax="properties: { translateY: '200px' }"></div>
                    <div class="overlay"></div>
                    <div class="container big-container">
                        <div class="section-title">
                            <h3>Contact Details</h3>
                            <div class="separator trsp-separator"></div>
                            <h2>Get In Touch <br> with us</h2>
                            <p>Curabitur bibendum mi sed rhoncus aliquet. Nulla blandit porttitor justo, at posuere sem
                                accumsan nec.</p>
                            <a href="contact.html#sec1" class="custom-scroll-link sect-scroll-link"><i
                                    class="fa fa-long-arrow-down"></i> <span>scroll down</span></a>
                        </div>
                    </div>
                </section>
                <!--  section  end-->
                <!--  section  -->
                <section>
                    <div class="container">
                        <div class="contact-details-wrap fl-wrap" id="sec1">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="small-sec-title">
                                        <h3>Contact details :</h3>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="contact-details fl-wrap">
                                        <div class="row border-dec">
                                            <div class="col-md-6">
                                                <h4><span>01.</span>Office in New York</h4>
                                                <ul>
                                                    <li><span>Mail :</span><a href="contact.html#"
                                                            target="_blank">yourmail@domain.com</a></li>
                                                    <li><span>Adress :</span><a href="contact.html#" target="_blank">USA
                                                            27TH Brooklyn NY</a></li>
                                                    <li><span>Phone :</span><a href="contact.html#">+7(111)123456789</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <h4><span>02.</span>Work Hours</h4>
                                                <ul>
                                                    <li><span>Monday - Friday : </span> 08h.00 - 17h.30</li>
                                                    <li><span>Saturday: </span> 08h.00 - 12h.00 </li>
                                                    <li><span>Sunday :</span> Off work </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="map-box">
                            <!-- <div  id="map-canvas"></div> -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11861.940272603619!2d-70.9761047!3d41.9898643!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e491b668ffa1e7%3A0x50d068bf012270a5!2sWebject%20Systems%20Inc!5e0!3m2!1sen!2sus!4v1677366424698!5m2!1sen!2sus"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="contact-details-wrap fl-wrap">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="small-sec-title">
                                        <h3>Get in Touch : </h3>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <!-- contact form -->
                                    <div class="contact-form-holder fl-wrap">
                                        <div id="contact-form">
                                            <div id="message"></div>
                                            <form method="post"
                                                action="http://balkon.kwst.net/site/light/php/contact.php"
                                                name="contactform" id="contactform">
                                                <input name="name" type="text" id="name" onClick="this.select()"
                                                    value="Name">
                                                <input name="email" type="text" id="email" onClick="this.select()"
                                                    value="E-mail">
                                                <input type="text" name="phone" id="phone" onClick="this.select()"
                                                    value="Phone" />
                                                <textarea name="comments" id="comments"
                                                    onClick="this.select()">Message</textarea>
                                                <div class="verify-wrap">
                                                    <span class="verify-text"> How many gnomes were in the story about
                                                        the "Snow-white" ?</span>
                                                    <input name="verify" type="text" id="verify" onClick="this.select()"
                                                        value="0">
                                                </div>
                                                <button type="submit" id="submit"
                                                    data-top-bottom="transform: translateY(-50px);"
                                                    data-bottom-top="transform: translateY(50px);"><span>Send Message
                                                    </span></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- contact form  end-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  partcile-dec  -->
                    <div class="partcile-dec" data-parcount="200"></div>
                    <!--  partcile-dec  end-->
                </section>
                <!--  section  end-->
                <!--  social-wrap  -->
                <div class="social-wrap fl-wrap">
                    <ul>
                        <li><a href="contact.html#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="contact.html#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="contact.html#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="contact.html#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="contact.html#" target="_blank"><i class="fa fa-tumblr"></i></a></li>
                    </ul>
                </div>
                <!--  social-wrap  end-->
            </div>
            <!-- content end -->
            <?php include('footer.php'); ?>
        </div>
        <!-- content-holder end -->
    </div>
    <!-- wrapper end -->
    <!--search-form-holder -->
    <div class="search-form-holder fixed-search">
        <div class="search-form-bg"></div>
        <div class="search-form-wrap">
            <div class="container">
                <form class="searchform" method="get">
                    <input type="text" autocomplete="off" name="s" placeholder="Type and Enter to Search">
                </form>
                <div class="close-fixed-search"></div>
            </div>
            <div class="dublicated-text"></div>
        </div>
    </div>
    <!--search-form-holder  end-->
    <!-- Share container  -->
    <div class="share-wrapper isShare">
        <div class="share-container"></div>
    </div>
    <!-- Share container  end-->
    <!-- footer -->
    <footer class="main-footer">
        <div class="fixed-title"><span>Contacts</span></div>
        <?php include('sidebar.php'); ?>
    </footer>
    <!-- footer end-->
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAPE3GJx-x7z7dRkayGB8_iJH0biknkX6s"></script> -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <!-- <script type="text/javascript" src="js/map.js"></script> -->
</body>

</html>