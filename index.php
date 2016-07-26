<?php
    include"Academy.php";

    $respond = "";
    if (isset($_POST["sendMessage"])){

      $name = $_POST["name"];
      $email = $_POST["email"];
      $message = $_POST["message"] ;

      $academy = new Academy($name,$email,$message);
      $respond = $academy->addUser();


    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MSC Artisan Academy</title>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Bodo - Simple One Page Personal" name="description">
    <meta content="BdgPixel" name="author">
    <!--Fav-->
    <link href="images/favicon.ico" rel="shortcut icon">
    
    <!--styles-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!--fonts google-->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
       <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--PRELOADER-->
    <div id="preloader">
      <div id="status">
        <img alt="logo" src="images/logo-big.png">
      </div>
    </div>
    <!--/.PRELOADER END-->

    <!--HEADER -->
    <div class="header">
      <div class="for-sticky">
        <!--LOGO-->
        <div class="col-md-2 col-xs-6 logo">
          <a href="index.html"><img alt="logo" class="logo-nav" src="images/logo.png"></a>
        </div>
        <!--/.LOGO END-->
      </div>
      <div class="menu-wrap">
        <nav class="menu">
          <div class="menu-list">
            <a data-scroll="" href="#home" class="active">
              <span>Home</span>
            </a>
            <a data-scroll="" href="#about">
              <span>About Us</span>
            </a>
            <a data-scroll="" href="#work">
              <span>Facilities</span>
            </a>
             <a data-scroll="" href="#services">
              <span>Services</span>
            </a>
            <a data-scroll="" href="#employement">
              <span>Employement</span>
            </a>
            <a data-scroll="" href="#skill">
              <span>Skills</span>
            </a>
            <a data-scroll="" href="#education">
              <span>Education</span>
            </a>
            <a data-scroll="" href="#testimonial">
              <span>Testimonial</span>
            </a>
            <a data-scroll="" href="#blog">
              <span>Blog</span>
            </a>
            <a data-scroll="" href="#contact">
              <span>Contact</span>
            </a>
          </div>
        </nav>
        <button class="close-button" id="close-button">Close Menu</button>
      </div>
      <button class="menu-button" id="open-button">
        <span></span>
        <span></span>
        <span></span>
      </button><!--/.for-sticky-->
    </div>
    <!--/.HEADER END-->
    
    <!--CONTENT WRAP-->
    <div class="content-wrap">
      <!--CONTENT-->
      <div class="content">
        <!--HOME-->
        <section id="home">
          <div class="container">
            <div class="row">
              <div class="wrap-hero-content">
                  <div class="hero-content">
                    <h1>MSC Artisan Academy</h1>
                    <br>
                    <span class="typed"></span>
                  </div>
              </div>
              <div class="mouse-icon margin-20">
                <div class="scroll"></div>
              </div>
            </div>
          </div>
        </section>
        <!--/.HOME END-->

        <!--ABOUT-->
        <section id="about">
          <div class="col-md-6 col-xs-12 no-pad">
            <div class="bg-about"></div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12 white-col">
            <div class="row">
              <!--OWL CAROUSEL2-->
              <div class="owl-carousel2">
                <div class="col-md-12">
                  <div class="wrap-about">
                    <div class="w-content">

                      <h3 class="title-small">
                        <span>About Us</span>
                      </h3>
<br>
                      <p class="head-about">
                        The MSC Artisan Academy Renewable Centre is a specialised division of MSC Artisan Academy operating from the Science and Technology Park (STP) of the East London Industrial Development Zone. The centre has been in operation since 2013 focusing on the delivery of skills development programs in Photovoltaic, Solar Thermal and Small Wind technologies. All of these programmes are credit-bearing (relevant existing unit standards) and non-credit bearing according to client needs.
                      </p>

                    </div>
                  </div>
                </div>
              
                <div class="col-md-12 col-sm-12 col-xs-12 white-col">
                  <div class="row">

                      <div class="wrap-about">
                        <div class="w-content">
                          <p class="head-about">
Since 2013 the centre is the only licensed institution in South Africa to offer the Solarteur program under the Austrian-based Solarteur School. MSC has also established a Smart Grid Power Management Laboratory in partnership with the East London IDZ in early 2016. The laboratory is within the centre to simulate and offer related specialised training.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <!--/.OWL CAROUSEL2 END-->
            </div>
          </div>
        </section>
        <!--/.ABOUT END-->

        <!--WORK-->
        <section class="grey-bg mar-tm-10" id="work">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Facilities</span>
                </h3>
                <p class="content-detail">
                  Located with the East London IDZ Science and Technology Park, the centre is a 5 minute drive from the East London Airport and is in a safe and controlled environment. Additional access to conference facilities for large groups and seminars is also available.  <br><br>The Renewable Energy Centre houses six specialized training laboratories
                </p>
              </div>
              <div class="col-md-9 content-right">
                <!--PORTFOLIO IMAGE-->
                <ul class="portfolio-image">
                  <li class="col-md-6">
                    <a href="images/bw-1.png"><img alt="image" src="images/bw-1.png">
                      <div class="decription-wrap">
                        <div class="image-bg">
                           <p class="desc">Programmable Logic Controller (PLC) Training Lab</p>
                        </div>

                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="images/bw-2.png"><img alt="image" src="images/bw-2.png">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Electrical & Electronics Lab supported by latest simulated training software (Uni-train - Lucas Nulle)
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="images/bw-3.png"><img alt="image" src="images/bw-3.png">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Power systems Lab for Smart Grid Management Training
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="images/bw-4.png"><img alt="image" src="images/bw-4.png">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Solarteur Lab for PV Rooftop, Solar Thermal and Small Wind Generation
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="images/bw-5.png"><img alt="image" src="images/bw-5.png">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            A hybrid (Small wind turbine and PV) stand-alone practical simulator
                          </p>  
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="images/bw-6.png"><img alt="image" src="images/bw-6.png">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            A 14kW PV Rooftop system feeding live into the centre
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
                <!--/.PORTFOLIO IMAGE END-->
              </div>
            </div>
          </div>
        </section>
        <!--/.WORK END-->

        <!--Core Focus Area-->
        <section class="white-bg" id="services">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Core Focus Areas</span>
                </h3>
                <p class="content-detail">
                  The focus areas of the MSC Artisan centre are:
                </p>
              </div>
              <div class="col-md-9 content-right">
                <div class="row">
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-4 col-sm-4">
                        <h3 class="icon-use">
                          e
                        </h3>
                        <p class="head-sm">
                          Training and Development
                        </p>
                        <p class="text-grey">
                          This is offered both on and off-site 
                        </p>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-4 col-sm-4">
                        <h3 class="icon-use">
                          b
                        </h3>
                        <p class="head-sm">
                          Consultancy
                        </p>
                        <p class="text-grey">
                          Turnkey skills development solutions 
                        </p>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-4 col-sm-4">
                        <h3 class="icon-use">
                          d
                        </h3>
                        <p class="head-sm">
                          Supporting Research & Development Programmes
                        </p>
                        <p class="text-grey">
                          Typi non habent claritatem insitam est usus legentis in iis qui facit eorum claritatem. 
                        </p>
                      </div>
                    </li>
                  </ul>

                  <ul class="listing-item">
                    <li>
                      <div class="col-md-4 col-sm-4">
                        <p class="icon-use">
                          f
                        </p>
                        <p class="head-sm">
                          Support Prototype Testing Programmes
                        </p>
                        <p class="text-grey">
                          Typi non habent claritatem insitam est usus legentis in iis qui facit eorum claritatem. 
                        </p>
                      </div>
                    </li>


                  </ul>

                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/.Core Focus Area-->





        <!--Scope of Program-->
        <section class="grey-bg" id="education">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Scope of Program Offering</span>
                </h3>
                <p class="content-detail">
                  Full SAQA qualifications (learnership) in conjunction with MSC Artisan Academy (MAASA) in East London – NCL Electrical Engineering: Renewable Energy <br><br>

                 <b> We offer Skills Programmes in:</b>
                </p>
              </div>
              <div class="col-md-9 content-right">
                <div class="row">
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              Photovoltaic Roof Top 
                            </h2>
                            <p class="job">
                              Installation/Maintenance
                            </p>
                            <p class="company">
                              MAASA
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                More Info on skills training here
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              Solar Hotwater 
                            </h2>
                            <p class="job">
                              Installation/Maintenance
                            </p>
                            <p class="company">
                              MAASA
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                More Info on skills training here
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              Small Wind Turbine 
                            </h2>
                            <p class="job">
                              Installation/Maintenance
                            </p>
                            <p class="company">
                              MSC Artisan Academy
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                More info on skills training here
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              Basic Electronics
                            </h2>
                            <p class="job">
                              Theory
                            </p>
                            <p class="company">
                              MSC Artisan Academy
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                More info on skills training here
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                  <ul class="listing-item">
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              Basic Programmable Logic Controllers
                            </h2>
                            <p class="job">
                              PLC Theory
                            </p>
                            <p class="company">
                              MSC Artisan Academy
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                More info on skills training here
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              Smart Grid Management 
                            </h2>
                            <p class="job">
                              Inclusive of SCADA software
                            </p>
                            <p class="company">
                              MSC Artisan Academy
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                More info on skills training here
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/.Scope of Programme-->

        <!--TESTIMONIAL-->
        <section id="testimonial">
          <div class="container">
            <div class="row wrap-testimonial">
              <div class="col-md-10 col-md-offset-1">
                <div class="owl-carousel">
                  <div class="list-testimonial">
                    <div class="content-testimonial">
                      <h3 class="testi">
                      <h2>Training Methodology</h2>
                      <br>
The center offers both theory and practical training through a blended approach using a combination of a face to face contact, electronic learning platforms, simulated practical training modules as well as actual working systems. This ensures a complete learning experience, working knowledge and comprehension.
                      </h3>
                      <p class="people">
                        More detail can be added
                      </p>
                    </div>
                  </div>
                  <div class="list-testimonial">
                    <div class="content-testimonial">
                      <h3 class="testi">
                      <h2>Accreditation</h2>
                      <br>
                        The MSC Artisan Academy has accreditation with merSETA, EWSETA and CETA for applicable unit standards and qualifications as well as the Solateur Schools (Austria) for the Solarteur Program.  
                      </h3>
                      <p class="people">
                        More Detail can be added
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mask-testimonial"></div>
        </section>
        <!--/.TESTMONIAL END-->

        <!--BLOG-->
        <section class="grey-bg" id="blog">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h3 class="title-small-center text-center">
                  <span>Strategic Partners and Associates</span>
                </h3>
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <p class="content-details text-center">
                      Lorem ipsum dolor sit amet consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. 
                    </p>
                  </div>
                </div>
                <!--GRID BLOG-->
                <div class="grid">
                  <div class="grid-item">
                    <div class="wrap-article">
                      <img alt="blog-1" class="img-circle text-center" src="images/blog-1.png">
                      <p class="subtitle fancy">
                        <span>1</span>
                      </p>
                      <a href="#">
                        <h3 class="title">
                          East London Industrial Development Zone
                        </h3>
                      </a>
                      <p class="content-blog">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.
                      </p>
                    </div>
                  </div>

                  <div class="grid-item">
                    <div class="wrap-article">
                     <img alt="blog-4" class="img-circle text-center" src="images/blog-2.png">
                     <p class="subtitle fancy">
                        <span>2</span>
                      </p>
                      <a href="#">
                        <h3 class="title">
                          Solarteur School (Austria)
                        </h3>
                      </a>
                      <p class="content-blog">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                      </p>
                    </div>
                  </div>

                  <div class="grid-item">
                    <div class="wrap-article">
                     <img alt="blog-4" class="img-circle text-center" src="images/blog-3.png">
                     <p class="subtitle fancy">
                        <span>3</span>
                      </p>
                      <a href="#">
                        <h3 class="title">
                          Siyandza Experience Design
                        </h3>
                      </a>
                      <p class="content-blog">
                        Design and Marketing approach, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                      </p>
                    </div>
                  </div>


                </div>
                <!--/.GRID BLOG END-->
              </div>
            </div>
          </div>
        </section>
        <!--/.BLOG END-->

        <!--CONTACT-->
        <section id="contact" class="white-bg">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Contact</span>
                </h3>
                <p class="content-detail">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </p>

              </div>
              <div class="col-md-9 content-right">
                <form action="index.php" method="post">
                  <div class="group">
                    <input required="" name="name" type="text"><span class="highlight"></span><span class="bar"></span><label>Name</label>
                  </div>
                  <div class="group">
                    <input required="" name="email" type="email"><span class="highlight"></span><span class="bar"></span><label>Email</label>
                  </div>
                  <div class="group">
                    <textarea required="" name="message"></textarea><span class="highlight"></span><span class="bar"></span><label>Message</label>
                  </div>

                  <?php
                  if(!empty($respond) && $respond == "Message Sent"){
                  ?>
                  <div class="group alert alert-success">
                      <?php
                        echo $respond;
                        header('Location: '. "/index.php#contact");
                      ?>
                  </div>
                  <?php }else if(!empty($respond) && ($respond != "Message Sent")){ ?>
                    <div class="group alert alert-danger">
                      <?php
                      echo $respond;
                      header('Location: '. "/index.php#contact");
                      ?>
                    </div>
                  <?php }else{

                  }?>
                  <input id="sendMessage" name="sendMessage" type="submit" value="Send Message">
                </form>
              </div>
            </div>
          </div>
        </section>
        <!--/.CONTACT END-->
        
        <!--FOOTER-->
        <footer>
          <div class="footer-top">
            <ul class="socials">
              <li class="facebook">
                <a href="#" data-hover="Facebook">Facebook</a>
              </li>
              <li class="twitter">
                <a href="#" data-hover="Twitter">Twitter</a>
              </li>
              <li class="gplus">
                <a href="#" data-hover="Google +">Google +</a>
              </li>
            </ul>
          </div>

          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <a href="http://designscrazed.org/"><img src="images/logo-bottom.png" alt="crafted with love" class="center-block" /></a>
			 </div>
            </div>
          </div>
        </footer>
        <!--/.FOOTER-END-->

      <!--/.CONTENT END-->
      </div>
    <!--/.CONTENT-WRAP END-->
    </div>
    

    <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.appear.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/classie.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="js/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="js/masonry.js" type="text/javascript"></script>
    <script src="js/smooth-scroll.min.js" type="text/javascript"></script>
    <script src="js/typed.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
  </body>
</html>