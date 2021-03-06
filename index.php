<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Associate Professor Chuck Konkol</title>
    
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Start</a>
            </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   <?php include 'members/phpbox.php';?>
                </ul>
            </div>
            
                  <!-- php include brings in contents of members_section -->
           <?php include 'menu/nav.php';?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
            <div class="header-content">
            <div class="header-content-inner">
                <h1>Professor Chuck Konkol</h1>
                <hr>
                <p>Associate Professor, Rock Valley College</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">About Professor Chuck Konkol</h2>
                    <hr class="light">
                    <p class="text-faded">Chuck Konkol has been associate professor for over 20   years in the area of Computer Science. 
                    He teaches courses such as php, asp.net, graphic design, visual basic, network security, iOS app development, and 
                    digital photography. In addition, Chuck is a technical trainer, web developer, Windows application developer, 
                    graphic designer and iOS developer. Chuck has written and published an iBook, Teaching with the iPad, that has sold 
                    around the world and has created and taught hundreds of online courses. In addition, Chuck has implemented iTunes U, 
                    course podcasting, and multiple pilot programs for the iPad. Chuck is on the forefront of creating and publishing 
                    podcasts, teaching with the iPad and mobile integration in the classroom and has been featured on iTunes U for multiple courses.</p>
                    <a href="#services" class="btn btn-default btn-xl">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        
        <!-- font awesome -->
        
        <!-- http://fontawesome.io/icons/ -->
        
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-university wow bounceIn text-primary"></i>
                        <h3>Teacher</h3>
                        <p class="text-muted">Over 20 years experience</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-bullhorn wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Speaker</h3>
                        <p class="text-muted">Available for conferences</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-code wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Coder</h3>
                        <p class="text-muted">Mobile, Web, Windows Developer</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-laptop wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Technologists</h3>
                        <p class="text-muted">Specializing in all things tech!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="no-padding" id="portfolio"> -->
    <section id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="http://ckonkol.com/" class="portfolio-box">
                        <img src="img/portfolio/11.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    { PROJECT }
                                </div>
                                <div class="project-name">
                                    Personal Web Site
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="http://rvchourofcode.com/" class="portfolio-box">
                        <img src="img/portfolio/22.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                     { PROJECT }
                                </div>
                                <div class="project-name">
                                    Training: Hour of Code
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="http://destir.info/" class="portfolio-box">
                        <img src="img/portfolio/33.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                     { PROJECT }
                                </div>
                                <div class="project-name">
                                    Telepresence Robotics
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="http://ioscourse.com/" class="portfolio-box">
                        <img src="img/portfolio/44.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                     { PROJECT }
                                </div>
                                <div class="project-name">
                                    iOS Course & Bootcamp
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="http://ckonkol.com/apps/" class="portfolio-box">
                        <img src="img/portfolio/55.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                     { PROJECT }
                                </div>
                                <div class="project-name">
                                    Published Apps
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="http://www.iteachthereforeipad.com/" class="portfolio-box">
                        <img src="img/portfolio/66.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                     { PROJECT }
                                </div>
                                <div class="project-name">
                                    Faculty Training
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Access RVC Web102 Course Site</h2>
                <a href="https://rvceagle.instructure.com/courses/10895" class="btn btn-default btn-xl wow tada">Access Now</a>
            </div>
        </div>
    </aside>
    
    <section id="messageboard">
        <div class="container">
            <div class="row">
       <center>
           <?php include 'modules/msg.php';?>
       </center>

          </div>
        </div>
    </section>
    
    <!-- New Section. I added right before the contact section -->
<section id="myapps">
        <div class="container">
            <div class="row">
       <center>
           <!-- php include brings in contents of msg.php -->
           <?php include 'modules/apps.php';?>
       </center>
          </div>
        </div>
</section>

        <!-- php include brings in contents of members_section -->
           <?php include 'modules/members_section.php';?>


    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>I will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-6 col-lg-offset-3 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>815-921-3164</p>
                </div>
                <div class="col-lg-6 text-center">
                    <i class="fa fa-envelope  fa-3x wow bounceIn"></i>
                    <p><a href="mailto:c.konkol@rockvalleycollege.edu">c.konkol@rockvalleycollege.edu</a></p>
                </div>
                <div class="col-lg-6 text-center">
                    <i class="fa fa-comment fa-3x wow bounceIn"></i>
                    <p><a href="http://ckonkol.com/chat">Live Chat</a></p>
                </div>
                  <center>
           <!-- php include brings in contents of msg.php -->
           <?php include 'modules/contact.php';?>
         
       </center>
            </div>
        </div>
    </section>
  

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
    
      

</body>

</html>
