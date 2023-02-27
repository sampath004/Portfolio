<!DOCTYPE HTML>
<html lang="en">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Webject Systems Inc - 404 Page Not found</title>
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
            <div class="content full-height">
                <div class="error-wrap">
                    <div class="container">
                        <h2>404</h2>
                        <p> The Page you were looking for, couldn't be found.</p>
                        <a href="index.php" class="btn float-btn flat-btn">Back to home</a>
                    </div>
                </div>
                <div class="partcile-dec" data-parcount="200"></div>
            </div>
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
        <div class="fixed-title"><span>404 Page</span></div>
        <?php include('sidebar.php'); ?>
    </footer>
    <!-- footer end-->
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</body>

</html>