<?php
//MGZN header.php

?>
<!doctype html>
<html 
    <?php if ($page == 'index.php' || $page == 'services.php') { print 'class="index-background"'; }
          if ($page == 'portfolio.php' || $page == 'contact.php' || $page == 'thx.php') { print 'class="black-background"'; }
          if ($page == 'about.php') { print 'class="white-background"'; }

          ?>>
    <head>
        <meta charset="UTF-8">

        <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->

        <!--Remy Sharp Shim -->
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
        </script>
        <![endif]-->
        <script src="http://use.typekit.net/hby5wtu.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <link href="css/media.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title><?php echo $title?></title>
    </head>

    <body <?php if ($page == 'index.php') { print 'class="index-body"';}?>>
        <?php if ($page == 'index.php') { print '
        <!-- Background Slider from 
        http://tympanus.net/codrops/2012/01/02/fullscreen-background-image-slideshow-with-css3/-->
        <ul class="cb-slideshow">
            <li><span>Image 01</span></li>
            <li><span>Image 02</span></li>
            <li><span>Image 03</span><div></li>
            <li><span>Image 04</span><div></li>
            <li><span>Image 05</span><div></li>
            <li><span>Image 06</span><div></li>
        </ul>';} ?>
        <main>
            <header <?php if ($page == 'index.php' || $page =='contact.php' || $page == 'thx.php' ) { print 'class="background-hide"'; }
                          if ($page =='services.php' || $page =='portfolio.php' || $page =='journal.php' || $page =='services.php') { print 'class="black-header"'; }                          
                          if ($page == 'about.php') { print 'class="a-hero"'; }                          
                          if ($page == 'singlepage1.php') { print 'class="s1-hero"'; } 
                          if ($page == 'singlepage2.php') { print 'class="s2-hero"'; } 
                          if ($page == 'singlepage3.php') { print 'class="s3-hero"'; } 
            
                    ?>>
                <div id="header-color">
                <nav <?php if ($page == 'index.php' || $page == 'contact.php' || $page == 'portfolio.php' || $page =='journal.php'  || $page =='services.php'  || $page == 'thx.php') { print 'class="background-hide"'; }
                          
                     ?>>        
                    <ul> 
                        <li class="logonav"><a href='index.php'><img class="logoimage" src="images/logo.png" alt="MGZN Logo"></a></li>
                        <li id="menu-a"><a href="about.php">About</a></li>
                        <li id="menu-p"><a href="portfolio.php">Portfolio</a></li>
                        <li id="menu-s"><a href="services.php">Services</a></li>
                        <li id="menu-j"><a href="journal.php">Journal</a></li>
                        <li id="menu-c"><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <div id="menu-selection" <?php if ($page == 'index.php' || $page =='services.php' || $page == 'portfolio.php' || $page == 'contact.php' || $page =='journal.php' || $page == 'thx.php') { print 'class="background-hide"'; }?>>
                    <ul> 
                        <li class="logonav">[]</li>
                        <li id="menu-a-select" class="nav<?php if ($page == 'about.php') { print '-on'; } ?>">[]</li>
                        <li id="menu-p-select" class="nav<?php if ($page == 'portfolio.php' || $page =='singlepage1.php' || $page == 'singlepage2.php' || $page == 'singlepage3.php') { print '-on'; }  ?>">[]</li>
                        <li id="menu-s-select" class="nav<?php if ($page == 'services.php') { print '-on'; } ?>">[]</li>
                        <li id="menu-j-select" class="nav<?php if ($page == 'journal.php') { print '-on'; } ?>" >[]</li>
                        <li id="menu-c-select" class="nav<?php if ($page == 'contact.php') { print '-on'; } ?>" >[]</li>
                    </ul>
                </div><!--end menu-selection div>    
                <!--Begin Mobile Navigation Menu from http://astuteo.com/mobilemenu/
                Very simple class toggle to show an open menu -->

                <button class="nav-button">Toggle Navigation</button>
                <a href="index.php"><img class="logosm" src="images/logo.png" alt="MGZN Logo"></a>

                        <ul class="primary-nav">
                            <li><a href='index.php'>Home</a></li>
                            <li><a href='about.php'>About</a></li>
                            <li class="parent"><a href='portfolio.php'>Portfolio</a>
                                <ul>
                                     <li><a href="singlepage1.php">Ballard Condo</a></li>
                                     <li><a href="singlepage2.php">Hotel Max</a></li>
                                     <li><a href="singlepage3.php">Sunview Home</a></li>

                                </ul>
                            </li>
                            <li ><a href='services.php'>Services</a></li>
                            <li ><a href='journal.php'>Journal</a></li>
                            <li ><a href='contact.php'>Contact</a></li>
                        </ul>
                <!-- End Mobile Navigation-->

                    <!--       To add the parent menu:

                                <li class="parent"><a href="#">About Wilson</a>
                                                    <ul>
                                                            <li><a href="#">Massage</a></li>
                    -->
                </div><!--end div header-color-->
            </header>
