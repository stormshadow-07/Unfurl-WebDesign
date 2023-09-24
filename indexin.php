<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.html");
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Unfurl &mdash; A portfolio by AbrarZahin</title>
    <link rel="icon" href="images/LOGO-UNFURL956.png" type="logo">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="keywords" content="html, css, javascript, jquery">
    <meta name="author" content="">

    <link rel="stylesheet" href="css/vendor/icomoon/style.css">
    <link rel="stylesheet" href="css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="css/vendor/animate.min.css">
    <link rel="stylesheet" href="css/vendor/aos.css">
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="css/vendor/jquery.fancybox.min.css">
    <!---Cursor scp-->
    <link rel="stylesheet" href="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.css">
    <script src="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.js"></script>
    

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="#">

  </head>
  <body data-spy="scroll" data-target=".site-nav-target" data-offset="200">

    <nav class="unslate_co--site-mobile-menu">
      <div class="close-wrap d-flex">
        <a href="#" class="d-flex ml-auto js-menu-toggle">
          <span class="close-label">Close</span>
          <div class="close-times">
            <span class="bar1"></span>
            <span class="bar2"></span>
          </div>
        </a>
      </div>
      <div class="site-mobile-inner"></div>
    </nav>


    <div class="unslate_co--site-wrap">

      <div class="unslate_co--site-inner">

        <div class="lines-wrap">
          <div class="lines-inner">
            <div class="lines"></div>
          </div>
        </div>
        <!-- END lines -->
      
      <nav class="unslate_co--site-nav site-nav-target">

        <div class="container">
        
          <div class="row align-items-center justify-content-between text-left">
            <div class="col-md-5 text-right">
              <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">
                <li class="has-children">
                  <a href="#home-section" class="nav-link">Home</a>
                  <!-- Drop down off
                  <ul class="dropdown">
                    <li>
                      <a href="index.html">Hero Image BG</a>
                    </li>
                    <li>
                      <a href="index-video.html">Video BG</a>
                    </li>
                    <li>
                      <a href="index-hero-slider.html">Hero Slider</a>
                    </li>
                    <li>
                      <a href="index-sidebar-menu.html">Sidebar Menu</a>
                    </li>
                    <li>
                      <a href="index-right-menu.html">Right Menu</a>
                    </li>
                  </ul>-->
                </li>
                <li><a href="#portfolio-section" class="nav-link">Portfolio</a></li>
                <li><a href="#about-section" class="nav-link">About</a></li>
                <li><a href="#services-section" class="nav-link">Services</a></li>
              </ul>
            </div>
            <div class="site-logo pos-absolute">
              <!--<a href="index.html" class="unslate_co--site-logo">Unfurl<span>.</span></a>-->
              <a href="index.html" class="unslate_co--site-logo"><img src="images/LOGO-UNFURL.png" alt="Unfurl" width="180" height="110"></a>
            </div>
            <div class="col-md-5 text-right text-lg-left">
              <ul class="site-nav-ul js-clone-nav text-left d-none d-lg-inline-block">
                <li><a href="#skills-section" class="nav-link">Skills</a></li>
                <li><a href="#testimonial-section" class="nav-link">Testimonial</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                <!--<li><a href="#journal-section" class="nav-link">Journal</a></li>-->
                <li><?php  if (isset($_SESSION['username'])) : ?>
    			      <p> <a href="indexin.php?logout='1'" class="nav-link">Logout</a> </p> <?php endif ?></li>
              </ul>

              <ul class="site-nav-ul-none-onepage text-right d-inline-block d-lg-none">
                <li><a href="#" class="js-menu-toggle">Menu</a></li>
              </ul>

            </div>
          </div>
        </div>

      </nav>
      <!-- END nav -->

      <div class="cover-v1 jarallax" style="background-image: url('images/Background_img.jpg');" id="home-section">
        <div class="container">
          <div class="row align-items-center">
              
            <div class="col-md-7 mx-auto text-center">
              <h1 class="heading gsap-reveal-hero" data-cursor-text="Unfurl">Unfurl<span>.</span></h1>
              <h2 class="subheading gsap-reveal-hero">Hi I’m Abrar Zahin A Softwere Devloper.</h2>
            </div>

          </div>
          
        </div>


        <a href="#portfolio-section" class="mouse-wrap smoothscroll">
          <span class="mouse">
            <span class="scroll"></span>
          </span>
          <span class="mouse-label" data-cursor-text="scroll">Scroll</span>
        </a>

      </div>
      <!-- END .cover-v1 -->


      <div class="unslate_co--section" id="portfolio-section">
        <div class="container">
          
          
          <div class="relative"><div class="loader-portfolio-wrap"><div class="loader-portfolio"></div></div> </div>
          <div id="portfolio-single-holder"></div>

          <div class="portfolio-wrapper">

            <div class="d-flex align-items-center mb-4 gsap-reveal gsap-reveal-filter">
              <h2 class="mr-auto heading-h2"><span class="gsap-reveal">Portfolio</span></h2>

              <!-- <a href="#" class="text-white js-filter d-inline-block d-lg-none">Filter</a>
              
              <div class="filter-wrap">
                <div class="filter ml-auto" id="filters">
                  <a href="#" class="active" data-filter="*">All</a>
                  <a href="#" data-filter=".web">Web</a>
                  <a href="#" data-filter=".branding">Branding</a>
                  <a href="#" data-filter=".illustration">Illustration</a>
                  <a href="#" data-filter=".packaging">Packaging</a>
                </div>
              </div> -->
            </div>


            
            <div id="posts" class="row gutter-isotope-item" data-cursor-text="Tap">
              <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="portfolio-single-1.html" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img" data-id="1">
                    <div class="overlay">
                      <span class="wrap-icon icon-link2"></span>
                      <div class="portfolio-item-content">
                        <h3>Softwere&Hardwere</h3>
                        <p>optimize softwere & hardwere.</p>
                      </div>
                    </div>
                    <img src="images/adi-goldstein-EUsVwEOsblE-unsplash.jpg" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>
              <div class="item branding packaging illustration col-sm-6 col-md-6 col-lg-4 isotope-mb-2 ">
                <a href="portfolio-single-3.html" class="portfolio-item ajax-load-page item-portrait isotope-item gsap-reveal-img" data-id="3">
                    <div class="overlay">
                      <span class="wrap-icon icon-link2"></span>
                      <div class="portfolio-item-content">
                        <h3>Bugs&Loops</h3>
                        <p>solving software bugs & loop.</p>
                      </div>
                    </div>
                    <img src="images/let-do-this.png" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item branding packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="portfolio-single-4.html" class="portfolio-item isotope-item gsap-reveal-img ajax-load-page" data-id="4">
                    <div class="overlay">
                      <span class="wrap-icon icon-link2"></span>
                      <div class="portfolio-item-content">
                        <h3>Programing language</h3>
                        <p>learning language for better software.</p>
                      </div>
                    </div>
                    <img src="images/anas-alshanti-feXpdV001o4-unsplash1.jpg" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item web packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">

                <a href="images/Ai_66.png" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Flowchart&PaperWork">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="portfolio-item-content">
                        <h3>Flowchart&PaperWork</h3>
                        <p>Giveing you all document.</p>
                      </div>
                    </div>
                    <img src="images/Ai_66.png" class="lazyload  img-fluid" alt="Images" />
                  </a>

              </div>

              <div class="item illustration packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="images/andras-vas-Bd7gNnWJBkU-unsplash.jpg" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Quick Work">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="portfolio-item-content">
                        <h3>Quick Work</h3>
                        <p>Solving your problem quickly.</p>
                      </div>
                    </div>
                    <img src="images/andras-vas-Bd7gNnWJBkU-unsplash.jpg" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>
              <!---->
              <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="portfolio-single-2.html" class="portfolio-item ajax-load-page item-portrait isotope-item gsap-reveal-img" data-id="2">
                    <div class="overlay">
                      <span class="wrap-icon icon-link2"></span>
                      <div class="portfolio-item-content">
                        <h3>Reshape</h3>
                        <p>web, branding</p>
                      </div>
                    </div>
                    <img src="images/andras-vas-Bd7gNnWJBkU-unsplash.jpg" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item branding packaging col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="images/work_7_a_md.jpg" class="portfolio-item item-portrait isotope-item gsap-reveal-img " data-fancybox="gallery" data-caption="Modern Building">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="portfolio-item-content">
                        <h3>Modern Building</h3>
                        <p>branding, packaging</p>
                      </div>
                    </div>
                    <img src="images/andras-vas-Bd7gNnWJBkU-unsplash.jpg" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="https://www.youtube.com/watch?v=mwtbEGNABWU" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Showreel 2019">
                    <div class="overlay">
                      <span class="wrap-icon icon-play_circle_filled"></span>
                      <div class="portfolio-item-content">
                        <h3>Showreel 2019</h3>
                        <p>web, branding</p>
                      </div>
                    </div>
                    <img src="images/andras-vas-Bd7gNnWJBkU-unsplash.jpg" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

              <div class="item web illustration col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="images/clark-tibbs-oqStl2L5oxI-unsplash.jpg" class="portfolio-item isotope-item gsap-reveal-img" data-fancybox="gallery" data-caption="Motivation">
                    <div class="overlay">
                      <span class="wrap-icon icon-photo2"></span>
                      <div class="portfolio-item-content">
                        <h3>Motivation</h3>
                        <p>Dedication to do somthing great.</p>
                      </div>
                    </div>
                    <img src="images/clark-tibbs-oqStl2L5oxI-unsplash.jpg" class="lazyload  img-fluid" alt="Images" />
                  </a>
              </div>

            </div>
            
          </div>


        </div>
      </div>
      <!--Close Portfolio-->
      <!--about open-->

      <div class="unslate_co--section" id="about-section">
        <div class="container">
          
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">About Me</span></h2>
            <span class="gsap-reveal">
            <img src="images/divider.png" alt="divider" width="76">
            </span>
          </div>
          

          <div class="row mt-5 justify-content-between">
            <div class="col-lg-7 mb-5 mb-lg-0">
              <figure class="dotted-bg gsap-reveal-img ">
                <img src="images/abrar_zahin2.jpg" alt="Image" class="img-fluid">
              </figure>
            </div>
            <div class="col-lg-4 pr-lg-5">
              <h3 class="mb-4 heading-h3"><span class="gsap-reveal">We can make it together</span></h3>
              <p class="lead gsap-reveal">I am Softwere Devloper.I devlope Softwere to give you a good experience.if you interested to designing and building computer programs,i will do for you.</p>
              <p class="mb-4 gsap-reveal"> I also work with a group of Devloper who work in WebDesign,webDevlope,Designing Programs,Serverwork etc.</p>
              <p class="gsap-reveal"><a href="#" class="btn btn-outline-pill btn-custom-light" data-cursor-text=".">Download my CV</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="unslate_co--section" id="services-section">
        <div class="container">

          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">My Services</span></h2>
            <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
          </div>
  
          <div class="unslate_co--section">
            <div class="container">
              <div class="owl-carousel logo-slider">
                <div class="logo-v1 gsap-reveal">
                    <img src="images/logo/php.png" alt="Image" class="img-fluid">
                </div>
                <div class="logo-v1 gsap-reveal">
                    <img src="images/logo/sql.png" alt="Image" class="img-fluid">
                </div>
                <div class="logo-v1 gsap-reveal">
                    <img src="images/logo/python.png" alt="Image" class="img-fluid">
                </div>
                <div class="logo-v1 gsap-reveal">
                    <img src="images/logo/vs_code.png" alt="Image" class="img-fluid">
                </div>
                <div class="logo-v1 gsap-reveal">
                    <img src="images/logo/java_script.png" alt="Image" class="img-fluid">
                </div>
                <div class="logo-v1 gsap-reveal">
                    <img src="images/logo/mac_os.png" alt="Image" class="img-fluid">
                </div>
                <div class="logo-v1 gsap-reveal">
                    <img src="images/logo/node_js.png" alt="Image" class="img-fluid">
                </div>
                <div class="logo-v1 gsap-reveal">
                  <img src="images/logo/c_plus.png" alt="Image" class="img-fluid">
                </div>
              </div>
            </div>
          </div>

          
        </div>
      </div>

      <div class="unslate_co--section section-counter" id="skills-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">My Skills</span></h2>
            <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
          </div>


          <div class="row pt-5">
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
              <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="60">0</span>
                  <span class="append-text">%</span>
                </span>
                <span class="counter-label">PHP</span>
              </div>
            </div>
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
              <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="100">0</span>
                  <span class="append-text">%</span>
                </span>
                <span class="counter-label">VS Code/XCode/v Studio<br>.</span>
              </div>
            </div>
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
              <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="85">0</span>
                  <span class="append-text">%</span>
                </span>
                <span class="counter-label">Python</span>
              </div>
            </div>
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="90">0</span>
                  <span class="append-text">%</span>
                </span>
                <span class="counter-label">WebDesign</span>
              </div>
            </div>
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="85">0</span>
                  <span class="append-text">%</span>
                </span>
                <span class="counter-label">C#/C++</span>
              </div>
            </div>
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="95">0</span>
                  <span class="append-text">%</span>
                </span>
                <span class="counter-label">SQL</span>
              </div>
            </div>
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="95">0</span>
                  <span class="append-text">%</span>
                </span>
                <span class="counter-label">HTML/CSS/js</span>
              </div>
            </div>
            <div class="col-6 col-sm-6 mb-5 mb-lg-0 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="counter-v1 text-center">
                <span class="number-wrap">
                  <span class="number number-counter" data-number="55">0</span>
                  <span class="append-text">%</span>
                </span>
                <span class="counter-label">Design</span>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- END .counter -->

      <div class="unslate_co--section" id="testimonial-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">My Happy Clients</span></h2>
            <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
          </div>
        </div>

        <div class="owl-carousel testimonial-slider" data-aos="fade-up">
          <div>
            <div class="testimonial-v1">
              <div class="testimonial-inner-bg">
                <span class="quote">&ldquo;</span>
                <blockquote>
                  Abrar Zahin is a vary good persion.And he was a Exclient Softwere Devloper.
                </blockquote>
              </div>
              
              <div class="testimonial-author-info">
                <img src="images/person_man_1.jpg" alt="Image">
                <h3>Eric Ingram</h3>
                <span class="d-block position">Product Designer @facebook</span>
              </div>

            </div>
          </div>
          <div>
            <div class="testimonial-v1">
              <div class="testimonial-inner-bg">
                <span class="quote">&ldquo;</span>
                <blockquote>
                  Abrar Zahin is a vary good persion.And he was a Exclient Softwere Devloper.
                </blockquote>
              </div>
              
              <div class="testimonial-author-info">
                <img src="images/person_man_2.jpg" alt="Image">
                <h3>Ryan Mullins</h3>
                <span class="d-block position">Product Designer @Shopify</span>
              </div>

            </div>
          </div>
          <div>
            <div class="testimonial-v1">
              <div class="testimonial-inner-bg">
                <span class="quote">&ldquo;</span>
                <blockquote>
                  Abrar Zahin is a vary good persion.And he was a Exclient Softwere Devloper.
                </blockquote>
              </div>
              
              <div class="testimonial-author-info">
                <img src="images/person_woman_1.jpg" alt="Image">
                <h3>Erica Miller</h3>
                <span class="d-block position">Product Designer @Twitter</span>
              </div>

            </div>
          </div>
        </div>

      </div>
      <!-- END testimonial -->
      <!--
      <div class="unslate_co--section" id="journal-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">My Journal</span></h2>
            <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
          </div>

          
          <div class="row gutter-v4 align-items-stretch">
            <div class="col-sm-6 col-md-6 col-lg-8 blog-post-entry" data-aos="fade-up" data-aos-delay="0">

              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>A Mounteering Guide For Beginners</h3>
                    <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                  </div>
                </div>
                <img src="images/post_1.jpg" class="lazyload" alt="Image" />
              </a>


            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="100">
              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>A Mounteering Guide For Beginners</h3>
                    <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                  </div>
                </div>
                <img src="images/post_2.jpg" class="lazyload" alt="Image" />
              </a>
            </div>


            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="0">

              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>A Mounteering Guide For Beginners</h3>
                    <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                  </div>
                </div>
                <img src="images/post_3.jpg" class="lazyload" alt="Image" />
              </a>


            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="100">
              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>A Mounteering Guide For Beginners</h3>
                    <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                  </div>
                </div>
                <img src="images/post_4.jpg" class="lazyload" alt="Image" />
              </a>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 blog-post-entry" data-aos="fade-up" data-aos-delay="200">
              <a href="blog-single.html" class="grid-item blog-item w-100 h-100">
                <div class="overlay">
                  <div class="portfolio-item-content">
                    <h3>A Mounteering Guide For Beginners</h3>
                    <p class="post-meta">By Joefrey <span class="small">&bullet;</span> 5 mins read</p>
                  </div>
                </div>
                <img src="images/post_5.jpg" class="lazyload" alt="Image" />
              </a>
            </div>


          </div>

        </div>
      </div>-->
      <!-- END blog posts -->


      <div class="unslate_co--section" id="contact-section">
        <div class="container">
          <div class="section-heading-wrap text-center mb-5">
            <h2 class="heading-h2 text-center divider"><span class="gsap-reveal">Get In Touch</span></h2>
            <span class="gsap-reveal"><img src="images/divider.png" alt="divider" width="76"></span>
          </div>


          <div class="row justify-content-between">
            
            <div class="col-md-6">
              <form method="post" class="form-outline-style-v1" id="contactForm">
                <div class="form-group row mb-0">

                  <div class="col-lg-6 form-group gsap-reveal">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name">
                  </div>
                  <div class="col-lg-6 form-group gsap-reveal">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email">
                  </div>
                  <div class="col-lg-12 form-group gsap-reveal">
                    <label for="message">Write your message...</label>
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row gsap-reveal"data-cursor-text=".">
                    <div class="col-md-12 d-flex align-items-center">
                      <input type="submit" class="btn btn-outline-pill btn-custom-light mr-3" value="Send Message">
                      <span class="submitting"></span>
                    </div>
                  </div>
              </form>
              <div id="form-message-warning" class="mt-4"></div> 
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>

            </div>

            <div class="col-md-4">
              <div class="contact-info-v1">
                <div class="gsap-reveal d-block">
                  <span class="d-block contact-info-label">Email</span>
                  <a href="#" class="contact-info-val">info@yourdomain.com</a>
                </div>
                <div class="gsap-reveal d-block">
                  <span class="d-block contact-info-label">Phone</span>
                  <a href="#" class="contact-info-val">+12 345 6789 012</a>
                </div>
                <div class="gsap-reveal d-block">
                  <span class="d-block contact-info-label">Address</span>
                  <address class="contact-info-val">273 South Riverview Rd. <br> New York, NY 10011</address>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      </div> <!-- END .unslate_co-site-inner -->

      <footer class="unslate_co--footer unslate_co--section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-7">
              
              <div class="footer-site-logo"><a href="#">Unfurl<span>.</span></a></div>

              <ul class="footer-site-social">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Dribbble</a></li>
                <li><a href="#">Behance</a></li>
              </ul>

              <p class="site-copyright">
                
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <!--
                <script>
                  document.write(new Date().getFullYear());
                </script>-->
                 All rights reserved | By Abrar Zahin <i class="icon-heart"
                  aria-hidden="true"></i>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              
              </p>
              <a href="index.html" class="unslate_co--site-logo"><img src="images/LOGO-UNFURL.png" alt="Unfurl" width="180px" height="110px"></a>

            </div>
          </div>
        </div>
      </footer>

      
    </div>
    <script>
        const cursor = new MouseFollower({
          el: null,
          container: document.body,
          className: 'mf-cursor',
          innerClassName: 'mf-cursor-inner',
          textClassName: 'mf-cursor-text',
          mediaClassName: 'mf-cursor-media',
          mediaBoxClassName: 'mf-cursor-media-box',
          iconSvgClassName: 'mf-svgsprite',
          iconSvgNamePrefix: '-',
          iconSvgSrc: '',
          dataAttr: 'cursor',
          hiddenState: '-hidden',
          textState: '-text',
          iconState: '-icon',
          activeState: '-active',
          mediaState: '-media',
          stateDetection: {
              '-pointer': 'a,button',
              '-hidden': 'iframe'
          },
          visible: true,
          visibleOnState: false,
          speed: 0.55,
          ease: 'expo.out',
          overwrite: true,
          skewing: 0,
          skewingText: 2,
          skewingIcon: 2,
          skewingMedia: 2,
          skewingDelta: 0.001,
          skewingDeltaMax: 0.15,
          stickDelta: 0.15,
          showTimeout: 20,
          hideOnLeave: true,
          hideTimeout: 300,
          hideMediaTimeout: 300
      });
        
    </script>

    
    <!-- Loader -->
    <div id="unslate_co--overlayer"></div>
    <div class="site-loader-wrap">
      <div class="site-loader"></div>
    </div>

    <script src="js/scripts-dist.js"></script>
    <script src="js/main.js"></script>
    <!--<script src="cursor/scriptc.js"></script>-->
    
  </body>
</html>