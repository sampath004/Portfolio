<?php 
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>   
   <!-- loader -->
   <div class="loader">
            <div id="movingBallG">
                <div class="movingBallLineG"></div>
                <div id="movingBallG_1" class="movingBallG"></div>
            </div>
        </div>
        <!-- loader end -->
        <!--================= Main   ================-->
        <div id="main">
            <!--================= header ================-->
            <header class="main-header">
                <!-- logo -->
                <a class="logo-holder" href="index.php"><img src="images/logo.png" alt=""></a>
                <!-- logo end -->  
                <!-- share button-->  
                <div class="show-share-wrap">
                    <div class="show-share"><span>Share</span><img src="images/share.png" alt=""></div>
                </div>
                <!-- share button end-->  		
             
                <!-- mobile nav --> 
                <div class="nav-button-wrap">
                    <div class="nav-button vis-main-menu"><span></span><span></span><span></span></div>
                </div>
                <!-- mobile nav end--> 
                <!--  navigation --> 
                <div class="nav-holder">
                    <nav>
                        <ul>
                            <li>
                                <a href="index.php" class="<?= ($activePage == 'index') ? 'act-link':''; ?>" >Home </a>
                            </li>
                           
                            <li>
                                <a href="about.php" class="<?= ($activePage == 'about') ? 'act-link':''; ?>">About</a>
                                <!--second level -->
                                <ul>
                                    
                                    <li><a href="team.php" class="<?= ($activePage == 'about') ? 'act-link':''; ?>">Team</a></li>
                                    <li><a href="clients.php" class="<?= ($activePage == 'about') ? 'act-link':''; ?>">Clients</a></li>
                                   
                                </ul>
                                <!--second level end-->
                            </li>
                            <li>
                                <a href="services.php" class="<?= ($activePage == 'services') ? 'act-link':''; ?>">Services </a>
                            </li>
                            <li>
                                <a href="industries.php" class="<?= ($activePage == 'industries') ? 'act-link':''; ?>">Industries </a>
                            </li>
                            <li>
                                <a href="careers.php" class="<?= ($activePage == 'careers') ? 'act-link':''; ?>">Careers </a>
                            </li>
                            
                            <li>
                                <a href="contact.php" class="<?= ($activePage == 'contact') ? 'act-link':''; ?>">Contact </a>
                            </li>
                           
                           
                        </ul>
                    </nav>
                </div>
                <!-- navigation  end -->
            </header>
            <!-- header  end -->