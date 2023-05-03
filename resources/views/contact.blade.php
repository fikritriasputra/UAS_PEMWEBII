<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UAS</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://i.redd.it/2tz752vcwu261.png">

    <!-- main css, import other css -->
    <link rel="stylesheet" href="css/main.css">

    <!-- font awesome -->
    <!-- <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.css" /> -->
    <script src="https://kit.fontawesome.com/9b36cc6df3.js" crossorigin="anonymous"></script>

    <!-- modernizr js -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

  </head>

  <body>
    <!-- Loading Bar Start -->
    <div id="loading">
      <div id="loading-center">
        <div id="loading-center-absolute">
          <img src="https://i.redd.it/2tz752vcwu261.png" alt="Mim" />
          <div class="object" id="object_three"></div>
        </div>
      </div>
    </div>
    <!-- Loading Bar End -->
    <div id="home"></div>

    <!-- Header Section Start -->
    <header class="header-style-1 bg-color-1">
      <div class="top clearfix">
        <div class="header-top active-sticky ptb-50">
          <div class="container">
            <div class="row">
              <div class="col-xs-4 col-sm-4">
                <div class="left">
                  <div class="logo">
                    <a href="index.blade.php"><img src="https://i.redd.it/2tz752vcwu261.png" alt="Mim" /></a>
                  </div>
                </div>
              </div>
              <div class="col-xs-8 col-sm-8">
                <div class="right">
                  <div class="expand-menu-open floatright">
                    <i class="zmdi zmdi-menu"></i>
                  </div>
                  <nav class="mainmenu onepage-nev floatright">
                    <ul class="clearfix">
                      <li><a href="index.blade.php">Home</a></li>
                      <li><a href="contact.blade.php">Contact</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mainmenu-expand bg-color-3">
          <div class="close-menu">
            <i class="zmdi zmdi-close-circle-o"></i>
          </div>
          <div class="menu-logo">
            <a href="index.html"><img src="https://i.redd.it/2tz752vcwu261.png" alt="Mim" /></a>
          </div>
          <nav class="mainmenu-box onepage-nev">
            <ul class="clearfix">
              <li><a href="index.blade.php">Home</a></li>
              <li><a href="contact.blade.php">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    <!-- Contact Section Start -->
    <section class="contact-area light-bg section-padding" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="left">
              <div class="section-title mb-30">
                <h2 class="mb-15">Contact Me</h2>
                <div class="horizontal-line mb-20">
                </div>
                <p>Feel free to contact me.
              </div>
              <ul class="contact-text clearfix">
                <!-- <li>
                  <i class="zmdi zmdi-phone-in-talk"></i>
                  <h4 class="montserrat weight-regular no-margin capitalize">Phone</h4>
                  <span><a class="montserrat weight-regular" href="tel:+1-510-984-8835">+1 510 984 8835</a></span>
                </li> -->
                <li> 
                  <i class="zmdi zmdi-email"></i>
                  <h4 class="montserrat weight-regular no-margin capitalize">Email</h4>
                  <span><a class="montserrat weight-regular" href="mailto:simonguozirui@berkeley.edu">triasputrafikri@gmail.com</a></span>
                </li>
                <li>
                  <i class="zmdi zmdi-pin"></i>
                  <h4 class="montserrat weight-regular capitalize no-margin">Location</h4>
                  <span class="montserrat weight-regular capitalize">Belitang, OKU Timur, Sumatera Selatan.</span>
                </li>
                <li><a href="https://twitter.com/hahuhuuu" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://github.com/fikritriasputra" target="_blank"><i class="fab fa-github"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-8">
            <div class="right">
              <div class="contact-form pt-40">
                <form class="custom-input contact_form">
                  <div class="row name-email">
                    <div class="col-xs-12 col-sm-6">
                      <input type="name" name="name" placeholder="Your name">
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <input type="email" name="email" placeholder="Your email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <textarea class="mt-50" name="message" placeholder="Your message"></textarea>
                      <button class="btn montserrat weight-regular uppercase mt-30" type="submit" name="submit" data-complete-text="Thank you!">
  												Send Message
  											</button>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section End -->
        <!-- Footer Section Start -->
        <footer class="footer bg-color-1 ptb-100">
            <div class="container">
                <div class="col-xs-12">
                  <div class="text-center text-muted">
                    <p>Copyright &copy; 2023 Fikri Triasputra</p>
                  </div>
                </div>
            </div>
          </footer>
          <!-- Footer Section End -->

    <!-- All JS Here -->
    <!-- jQuery Latest Version -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- One Page Nav JS -->
    <script src="js/one-page-nav.js"></script>
    <!-- Waypoints JS -->
    <script src="js/waypoints.min.js"></script>
    <!-- Progressbar JS -->
    <script src="js/progressbar.js"></script>
    <!-- Isotope -->
    <script src="js/isotope.pkgd.js"></script>
    <!-- Isotope -->
    <script src="js/jquery.validate.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="js/slick.min.js"></script>
    <!-- Fancybox JS -->
    <script src="js/jquery.fancybox.pack.js"></script>
    <!-- Plugins JS -->
    <script src="js/plugins.js"></script>
    <!-- main JS -->
    <script src="js/main.js"></script>
    <!-- Google Analytics -->
    <script>
      (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

      ga('create', 'UA-96110124-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>

</html>
