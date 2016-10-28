<!DOCTYPE html>
<!--
This file except where otherwise noted is copyright by Alex Watkins.
-->
<html>
    <head>
        <title>Alex Watkins</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900,300italic" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-social.css"/>
        <link href="style.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
    <body data-spy="scroll" data-target="#navbar-main" style="font-size: 0;">
        <a id="index" class="navLinkTarget"></a>
        <!-- Navigation Bar -->
            <nav id="navbar-main" class="navbar navbar-default navbar-fixed-top" style="font-size: 14px;">
                <div class="container">
                    <!-- Navigation Name and Grouping -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand navLink" href="#index">Alex Watkins</a>
                    </div>
                    <!-- Navigation Bar Content -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a class="navLink" href="#projects">Projects</a></li>
                            <li><a class="navLink" href="#education">Education</a></li>
                            <li><a class="navLink" href="#experience">Experience</a></li>
                            <li><a class="navLink" href="#activities">Activities</a></li>
                            <li><a class="navLink" href="#programming">Programming</a></li>
                            <li><a class="navLink" href="#contact">Contact</a></li>
                            <li><a class="navLink" target="_blank" href="resume.pdf?version=4">Resume</a></li>
                        </ul>
                        <div class="socialBtnPadder">
                            <a class="btn btn-social-icon btn-linkedin" target="_blank" href="http://www.linkedin.com/in/alexwatkins2">
                                <span class="fa fa-linkedin"></span>
                            </a>
                        </div>
                        <div class="socialBtnPadder">
                            <a class="btn btn-social-icon btn-github" target="_blank" href="https://github.com/jalexw1013">
                                <span class="fa fa-github"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        <!-- Title Div -->
            <div class="introTitle">
                <div class="col-md-6">
                    <div class="frame">
                        <img class="img-half-circle centerImg center" id="titleImage" src="images/personal/alexCasual.jpg" alt="Alex Watkins" />
                    </div>
                </div>
                <div class="col-md-6 specialSpacer" style="text-align: center;">
                    <div class="introTitleContent" >
                        <h1 class="mainTitle" >Alex Watkins</h1>
                        <h2 class="subTitle" >Software Developer</h2>
                    </div>
                </div>
            </div><br />
        <!-- Content -->
            <!-- Projects -->
                <div class="contentContainer">
                    <a id="projects" class="navLinkTarget"></a>
                    <div class="experienceContainer" style="font-size: 0;max-width: 1500px;margin-bottom: 20px;">
                        <h1 class="center">Projects</h1><br />
                        <!--<ul class="nav nav-tabs center" style="border-bottom: 0;font-size: 14px;display: inline-block;margin-top: 20px;">
                            <li id="projectButton1" role="presentation" class="active">
                                <a href="javascript:showProject(1)" id="projectLink1" class="activeSpecial">Clothes Log</a>
                            </li>
                            <li id="projectButton2" role="presentation">
                                <a href="javascript:showProject(2)" id="projectLink2">Vertical Maze</a>
                            </li>
                            <li id="projectButton3" role="presentation">
                                <a href="javascript:showProject(3)" id="projectLink3">Convert Colors</a>
                            </li>
                        </ul>
                        <div class="activeSpecial" style="border: 1px solid #ddd;width: 100%;font-size: 14px;">
                            <div id="project1">
                                <div class="imageSlider center" style="/*max-width: 1300px;*/margin: 50px 40px;">
                                    <img src="images/clothesLog/image1.png" alt="Clothes Log Screenshot" class="screenShotStyle" />
                                    <img src="images/clothesLog/image2.png" alt="Clothes Log Screenshot" class="screenShotStyle" />
                                    <img src="images/clothesLog/image5.png" alt="Clothes Log Screenshot" class="screenShotStyle" />
                                    <img src="images/clothesLog/image6.png" alt="Clothes Log Screenshot" class="screenShotStyle" />
                                    <img src="images/clothesLog/image3.png" alt="Clothes Log Screenshot" class="screenShotStyle" />
                                    <img src="images/clothesLog/image4.png" alt="Clothes Log Screenshot" class="screenShotStyle" />
                                </div>
                                <div>
                                    <h3>Description</h3>
                                    <p>Clothes Log is a cross platform application that allows users to organize clothes and decide what to wear. Clothes log is available as an application on the iOS App Store as well as a web application.</p>
                                    <h3>My Role</h3>
                                    <p>This entire application was designed and programmed by myself.</p>
                                    <h3>Links</h3>
                                    <p><a target="_blank" href="http://clotheslog.com">Clothes Log Website</a></p>
                                    <p><a target="_blank" href="https://itunes.apple.com/us/app/clothes-log/id1014574684?ls=1&mt=8">Clothes Log on the App Store</a></p>
                                </div>
                            </div>
                            <div id="project2" class="projectsContentHideOnStart">
                                <div class="center" style="max-width: 1300px;margin-top: 50px;margin-bottom: 50px;">
                                    <img src="images/verticalMaze/image1.jpeg" alt="Vertical Maze Screenshot" class="screenShotStyle" />
                                </div>
                                <div>
                                    <h3>Description</h3>
                                    <p>Vertical maze is am iOS game where the user attempts to move a blue dot through a scrolling maze.</p>
                                    <h3>My Role</h3>
                                    <p>This entire application was designed and programmed by myself.</p>
                                    <h3>Links</h3>
                                    <p><a target="_blank" href="https://itunes.apple.com/us/app/clothes-log/id1014574684?ls=1&mt=8">Vertical Maze on the App Store</a></p>
                                </div>
                            </div>
                            <div id="project3" class="projectsContentHideOnStart">
                                <div class="center" style="max-width: 1300px;margin-top: 50px;margin-bottom: 50px;">
                                    <img src="images/convertColors/image1.jpeg" alt="Convert Colors Screenshot" class="screenShotStyle" />
                                </div>
                                <div>
                                    <h3>Description</h3>
                                    <p>Convert Colors is an iOS application that allows users to easily convert HTML colors codes between HEX, HSL, and RGB.</p>
                                    <h3>My Role</h3>
                                    <p>This entire application was designed and programmed by myself.</p>
                                    <h3>Links</h3>
                                    <p><a target="_blank" href="https://itunes.apple.com/ie/app/convert-colors/id946062682?mt=8">Convert Colors on the App Store</a></p>
                                </div>
                            </div>-->
                        <!-- HPC Reaearch -->
                        <div style="font-size: 14px;margin-left: auto; margin-right: auto;">
                            <style type="text/css" >
                                .hiddenDataProject6 {
                                    display: none;
                                }
                            </style>
                            <h2>High Performance Computing Research</h2>
                            <span id="clickMeProject6" style="display: block;"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a style="cursor: pointer">Click to See more</a></span>
                            <div style="max-width: 600px;margin-left: auto; margin-right: auto;">
                                <h3 class="hiddenDataProject6">Description</h3>
                                <p>In this project I explored a new way to implement sorting algorithms using vector instructions, specifically the Intel AVX2 instruction set. Conventional implementations use the classical Batcher's algorithm. This approach adds significant overhead. I eliminated this overhead.</p>
                            </div>
                            <div class="hiddenDataProject6">
                                <div style="max-width: 600px;margin-left: auto; margin-right: auto;">
                                    <h3>My Role</h3>
                                    <p>I worked on a team with one other undergrad and a professor on this project. Most code was implemented by myself then compared and deliberated with the rest of the team.</p>
                                    <h3>Links</h3>
                                    <p>This project can be viewed on <a href="http://github.com/ogreen/avx-sort">GitHub</a>. Please contact me for more information on this project.</p>
                                </div>
                            </div>
                            <script>
                                $(document).ready(function(){
                                    $("#clickMeProject6").click(function(){
                                        $(".hiddenDataProject6").slideToggle();
                                    });
                                });
                            </script>
                        </div>
                        <!-- H2Whoa -->
                        <div style="font-size: 14px;margin-left: auto; margin-right: auto;">
                            <style type="text/css" >
                                .hiddenDataProject5 {
                                    display: none;
                                }
                            </style>
                            <h2>H<sub>2</sub>Whoa!</h2>
                            <span id="clickMeProject5" style="display: block;"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a style="cursor: pointer">Click to See more</a></span>
                            <div style="max-width: 600px;margin-left: auto; margin-right: auto;">
                                <h3 class="hiddenDataProject5">Description</h3>
                                <p>This project was a shoot off of NASA's <a href="https://2015.spaceappschallenge.org/challenge/clean-water-mapping/">Clean Water Challenge</a>. In this project, my team and I developed a javafx application used to track water sources and water purity. This app is especially useful in third world countries where clean water is hard to find.</p>
                            </div>
                            <div class="hiddenDataProject5">
                                <div style="max-width: 600px;margin-left: auto; margin-right: auto;">
                                    <h3>My Role</h3>
                                    <p>I worked on a 5 person team to develop this application. My job was to develop the backend of the application. I specifically worked with javafx screen controllers and data storage.</p>
                                    <h3>Links</h3>
                                    <p>This project will be available on my github upon completion</p>
                                </div>
                                <div class="imageSlider center" style="/*max-width: 1300px;*/margin: 50px 40px;">
                                    <img src="images/h2whoa/image1.png" alt="h2whoa Screenshot" class="screenShotStyle" />
                                    <img src="images/h2whoa/image2.png" alt="h2whoa Screenshot" class="screenShotStyle" />
                                    <img src="images/h2whoa/image3.png" alt="h2whoa Screenshot" class="screenShotStyle" />
                                </div>
                            </div>
                            <script>
                                $(document).ready(function(){
                                    $("#clickMeProject5").click(function(){
                                        $(".hiddenDataProject5").slideToggle();
                                    });
                                });
                            </script>
                        </div>
                        <!-- Robo Jackets -->
                        <div style="font-size: 14px;margin-left: auto; margin-right: auto;">
                            <style type="text/css" >
                                .hiddenDataProject4 {
                                    display: none;
                                }
                            </style>
                            <img src="images/logos/robojacketslogo.png" style="max-width: 350px;"/>
                            <span id="clickMeProject4" style="display: block;"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a style="cursor: pointer">Click to See more</a></span>
                            <div style="max-width: 600px;margin-left: auto; margin-right: auto;">
                                <h3 class="hiddenDataProject4">Description</h3>
                                <p>Robojackets is the main Georgia Tech robotics club. I worked on the roboracing team. Our goal was to create an autonomous robot that would both race around a race track and race in a drag race. The robot used both a camera, LIDAR, and other sensors to gather information. The robot ran on an NVIDIA Jetson running ROS (Robot Operating System).</p>
                            </div>
                            <div class="hiddenDataProject4">
                                <div style="max-width: 600px;margin-left: auto; margin-right: auto;">
                                    <h3>My Role</h3>
                                    <p>I worked on the programming team and was primarily in charge of two algorithms. One involved an algorithm that used the camera to do a computer vision algorithm in order to watch the stop light that starts the race. The other algorithm I worked on was another computer vision algorithm that detected whether the robot had crossed the finish line.</p>
                                    <h3>Links</h3>
                                    <p><a href="http://robojackets.org">RoboJackets Website</a></p>
                                    <p><a href="http://robotracing.wordpress.com">IARRC (Robo Racing) Website</a></p>
                                    <p>Code from this project is avaliable upon request.</p>
                                </div>
                            </div>
                            <script>
                                $(document).ready(function(){
                                    $("#clickMeProject4").click(function(){
                                        $(".hiddenDataProject4").slideToggle();
                                    });
                                });
                            </script>
                        </div>
                        <!-- Clothes Log -->
                        <div style="font-size: 14px;margin-left: auto; margin-right: auto;">
                            <style type="text/css" >
                                .hiddenDataProject3 {
                                    display: none;
                                }
                            </style>
                            <img src="images/logos/clothesLogLogo.png" style="max-width: 350px;"/>
                            <span id="clickMeProject3" style="display: block;"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a style="cursor: pointer">Click to See more</a></span>
                            <div style="max-width: 600px;margin-left: auto; margin-right: auto;">
                                <h3 class="hiddenDataProject3">Description</h3>
                                <p>Clothes Log is a cross platform application that allows users to organize clothes and decide what to wear. Clothes log is available as an application on the iOS App Store as well as a web application.</p>
                            </div>
                            <div class="hiddenDataProject3">
                                <div style="max-width: 600px;margin-left: auto; margin-right: auto;">
                                    <h3>My Role</h3>
                                    <p>This entire application was designed and programmed by myself.</p>
                                    <h3>Links</h3>
                                    <p>Clothes log has been removed from the app store and the web. Please contact me if you would like to see the code I wrote for this project.</p>
                                </div>
                                <div class="imageSlider center" style="/*max-width: 1300px;*/margin: 50px 40px;">
                                    <img src="images/clothesLog/image1.png" alt="Clothes Log Screenshot" class="screenShotStyle" />
                                    <img src="images/clothesLog/image2.png" alt="Clothes Log Screenshot" class="screenShotStyle" />
                                    <img src="images/clothesLog/image5.png" alt="Clothes Log Screenshot" class="screenShotStyle" />
                                    <img src="images/clothesLog/image6.png" alt="Clothes Log Screenshot" class="screenShotStyle" />
                                    <img src="images/clothesLog/image3.png" alt="Clothes Log Screenshot" class="screenShotStyle" />
                                    <img src="images/clothesLog/image4.png" alt="Clothes Log Screenshot" class="screenShotStyle" />
                                </div>
                            </div>
                            <script>
                                $(document).ready(function(){
                                    $("#clickMeProject3").click(function(){
                                        $(".hiddenDataProject3").slideToggle();
                                    });
                                });
                            </script>
                        </div>
                        <!-- Vertical Maze -->
                        <div style="font-size: 14px;margin-left: auto; margin-right: auto;">
                            <style type="text/css" >
                                .hiddenDataProject2 {
                                    display: none;
                                }
                            </style>
                            <h2>Vertical Maze</h2>
                            <span id="clickMeProject2" style="display: block;"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a style="cursor: pointer">Click to See more</a></span>
                            <div style="max-width: 600px;margin-left: auto; margin-right: auto;">
                                <h3 class="hiddenDataProject2">Description</h3>
                                <p>Vertical maze is am iOS game where the user attempts to move a blue dot through a scrolling maze.</p>
                            </div>
                            <div class="hiddenDataProject2">
                                <div style="max-width: 600px;margin-left: auto; margin-right: auto;">
                                    <h3>My Role</h3>
                                    <p>This entire application was designed and programmed by myself.</p>
                                    <h3>Links</h3>
                                    <p>This app is no longer on the app store. Contact me for the code.</p>
                                </div>
                                <div class="imageSlider center" style="/*max-width: 1300px;*/margin: 50px 40px;">
                                    <img src="images/verticalMaze/image1.jpeg" alt="Vertical Maze Screenshot" class="screenShotStyle" />
                                </div>
                            </div>
                            <script>
                                $(document).ready(function(){
                                    $("#clickMeProject2").click(function(){
                                        $(".hiddenDataProject2").slideToggle();
                                    });
                                });
                            </script>
                        </div>
                        <!-- Convert Colors -->
                        <div style="font-size: 14px;margin-left: auto; margin-right: auto;">
                            <style type="text/css" >
                                .hiddenDataProject1 {
                                    display: none;
                                }
                            </style>
                            <img src="images/logos/convertColorsLogo.gif" style="max-width: 350px;"/>
                            <span id="clickMeProject1" style="display: block;"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a style="cursor: pointer">Click to See more</a></span>
                            <div style="max-width: 600px;margin-left: auto; margin-right: auto;">
                                <h3 class="hiddenDataProject1">Description</h3>
                                <p>Convert Colors is an iOS application that allows users to easily convert HTML colors codes between HEX, HSL, and RGB.</p>
                            </div>
                            <div class="hiddenDataProject1">
                                <div style="max-width: 600px;margin-left: auto; margin-right: auto;">
                                    <h3>My Role</h3>
                                    <p>This entire application was designed and programmed by myself.</p>
                                    <h3>Links</h3>
                                    <p>Convert Colors has been removed from the app store and the web. Please contact me if you would like to see the code I wrote for this project.</p>
                                </div>
                                <div class="imageSlider center" style="/*max-width: 1300px;*/margin: 50px 40px;">
                                    <img src="images/convertColors/image1.jpeg" alt="Convert Colors Screenshot" class="screenShotStyle" />
                                </div>
                            </div>
                            <script>
                                $(document).ready(function(){
                                    $("#clickMeProject1").click(function(){
                                        $(".hiddenDataProject1").slideToggle();
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            <!-- Education -->
                <div class="contentContainer contentContainerAlt">
                    <a id="education" class="navLinkTarget"></a>
                    <div class="experienceContainer">
                        <h1 class="center">Education</h1><br />
                        <div class="contentItemPadder">
                            <a href="http://gatech.edu" target="_blank">
                                <img class="center heightLimiter" src="images/logos/gtLogo.png" alt="Georgia Institute of Technology" />
                            </a>
                            <br />
                            <p>Candidate for Bachelor of Science in Computer Science</p>
                            <p>Expected graduation in May, 2019</p>
                            <p>Threads: <a href="http://www.cc.gatech.edu/information-internetworks">Information Internetworks</a>, <a href="http://www.cc.gatech.edu/systems-architecture">Systems, and Architecture</a></p>
                            <p>CS GPA: 4.0/4.0</p>
                        </div>
                        <br />
                        <div class="contentItemPadder">
                            <a href="http://charlottechristian.com" target="_blank">  
                                <img class="center heightLimiter" src="images/logos/ccsLogo.png" alt="Charlotte Christian School" />
                            </a>
                            <br />
                            <p>Received a High School Diploma in May, 2015</p>
                            <p>Graduated with Distinction in Math and Science</p>
                            <p>GPA: 3.9/4.0</p>
                        </div>
                    </div>
                </div>
            <!-- Experience -->
                <div class="contentContainer">
                    <a id="experience" class="navLinkTarget"></a>
                    <div class="experienceContainer">
                        <h1 class="center">Experience</h1>
                        <div class="contentItemPadder">
                            <h2>Nexus Craft</h2>
                            <br />
                            <p>Manager of self owned software company</p>
                            <p>Developed web and mobile based applications.</p>
                        </div>
                    </div>
                </div>
        <!-- Activities -->
                <div class="contentContainer contentContainerAlt">
                    <a id="activities" class="navLinkTarget"></a>
                    <div class="experienceContainer">
                        <h1 class="center">Activities</h1>
                        <div class="contentItemPadder">
                            <a href="http://www.vexrobotics.com/" target="_blank">
                                <img src="images/logos/vexLogo.png" class="center widthLimiter" alt="Vex Robotics" />
                            </a>
                            <p>Lead autonomous programmer for high school robotics team</p>
                            <p>The team competed at a national competition</p>
                        </div>
                        <div class="contentItemPadder">
                            <h2 class="center">service</h2>
                            <h3>Service Hours</h3>
                            <p>Over 400 service hours served in high school and college via community service. Places I have volunteered:</p>
                            <a href="http://ymca.org" target="_blank">
                                <img class="center heightLimiter" src="images/logos/ymca.png" alt="YMCA" />
                            </a>
                            <a href="http://servantswithaheart.org" target="_blank">
                                <img class="center heightLimiter" src="images/logos/servantsWithAHeart.jpg" alt="Servants With a Heart" />
                            </a>
                            <a href="http://atlantamission.org/" target="_blank">
                                <img class="center heightLimiter" src="images/logos/atlMission.png" alt="The Atlanta Mission" />
                            </a>
                            <a href="http://www.libertyhealthcareandrehab.com/pavilionhealthcenter/" target="_blank">
                                <img class="center heightLimiter" src="images/logos/thePavillion.png" alt="The Pavillion" />
                            </a>
                        </div>
                    </div>
                </div>
        <!-- Programming -->
                <div class="contentContainer">
                    <a id="programming" class="navLinkTarget"></a>
                    <div class="experienceContainer">
                        <h1 class="titleSpecialCenter">Programming Experience</h1>
                        <div class="contentItemPadder">
                            <img src="images/languages/java.png" class="widthLimiterSmall heightLimiterLarge imageBorder" alt="Java" />                      
                            <img src="images/languages/c.png" class="widthLimiterSmall heightLimiterLarge imageBorder" alt="C" />                       
                            <img src="images/languages/html.png" class="widthLimiterSmall heightLimiterLarge imageBorder" alt="HTML" />                       
                            <img src="images/languages/css.png" class="widthLimiterSmall heightLimiterLarge imageBorder" alt="CSS" />                        
                            <img src="images/languages/python.png" class="widthLimiterSmall heightLimiterLarge imageBorder" alt="Python" />                        
                            <img src="images/languages/objC.png" class="widthLimiterSmall heightLimiterLarge imageBorder" alt="Objective C" />                      
                            <img src="images/languages/swift.png" class="widthLimiterSmall heightLimiterLarge imageBorder" alt="Swift" />                       
                            <img src="images/languages/mysql.png" class="widthLimiterSmall heightLimiterLarge imageBorder" alt="MySql" />
                            <img src="images/languages/js.jpg" class="widthLimiterSmall heightLimiterLarge imageBorder" alt="JavaScript" />                       
                            <img src="images/languages/php.png" class="widthLimiterSmall heightLimiterLarge imageBorder" alt="PHP" />                       
                            <img src="images/languages/cplusplus.png" class="widthLimiterSmall heightLimiterLarge imageBorder" alt="C++" />
                        </div>
                    </div>
                </div>
        <!-- Contact -->
            <div class="contentContainer contentContainerAlt" style="padding-left: 20px;padding-right: 20px;padding-bottom: 20px;">
                <a id="contact" class="navLinkTarget"></a>
                <h1>Contact Me</h1>
                <br />
                <div id="form-messages"></div>
                <form id="contactForm" class="contentBlockLimit center" action="contactFormSubmitter.php" method="get">
                    <div class="form-group">
                        <label for="nameField">Name</label>
                        <input id="name" type="text" class="form-control" id="nameField" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="emailField">Email address</label>
                        <input id="email" type="email" class="form-control" id="emailField" placeholder="Email" name="email">
                    </div>
                        <div class="form-group">
                        <label for="messageField">Message</label>
                        <textarea id="message" class="form-control" id="messageField" placeholder="Message" rows="4" cols="50" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        <!-- Footer -->
            <div class="footerContainer">
                <p style="margin: 0;">&#169; <?php echo date("Y"); ?> Alex Watkins</p>
            </div>
        <!-- Other -->
        <!--<script src="jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(function() {
              $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                  var target = $(this.hash);
                  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                  if (target.length) {
                    $('html,body').animate({
                      scrollTop: target.offset().top
                    }, 1000);
                    return false;
                  }
                }
              });
            });
            
            $('body').scrollspy({ target: '#navbar-main' });
            
            $(function() {
                var form = $('#contactForm');

                var formMessages = $('#form-messages');

                $(form).submit(function(event) {
                    event.preventDefault();

                    var formData = $(form).serialize();
                    $.ajax({
                        type: 'GET',
                        url: $(form).attr('action'),
                        data: formData
                    })
                    .done(function(response) {
                        $(formMessages).removeClass('error');
                        $(formMessages).addClass('success');

                        $(formMessages).text(response);

                        $('#name').val('');
                        $('#email').val('');
                        $('#message').val('');
                    })
                    .fail(function(data) {
                        $(formMessages).removeClass('success');
                        $(formMessages).addClass('error');

                        if (data.responseText !== '') {
                            $(formMessages).text(data.responseText);
                        } else {
                            $(formMessages).text('Oops! An error occured and your message could not be sent.');
                        }
                    });
                });
            });
            
            function showProject(num) {
                hideAllProjects();
                $('#project' + num).show();
                $('#projectButton' + num).addClass('active');
                $('#projectLink' + num).addClass('activeSpecial');
            }
            
            function hideAllProjects() {
                $('#project1').hide();
                $('#project2').hide();
                $('#project3').hide();
                $('#projectButton1').removeClass('active');
                $('#projectButton2').removeClass('active');
                $('#projectButton3').removeClass('active');
                $('#projectLink1').removeClass('activeSpecial');
                $('#projectLink2').removeClass('activeSpecial');
                $('#projectLink3').removeClass('activeSpecial');
            }
        </script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.imageSlider').slick({
                    dots: true,
                    infinite: true,
                    speed: 300,
                    slidesToShow: 1,
                    centerMode: true,
                    variableWidth: true
              });
            });
            
            $('.nav a').on('click', function(){
                var width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
                if (width < 993) {
                    $('.navbar-toggle').click();
                }
            });
        </script>
    </body>
</html>