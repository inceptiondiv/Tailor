<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/aclonica:n4:default;source-sans-pro:n2,i2,n9:default.js" type="text/javascript"></script>
</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >Start Bootstrap</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >About</a>
            </li>
            <li>
                <a href="#services" onclick = $("#menu-close").click(); >Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick = $("#menu-close").click(); >Portfolio</a>
            </li>
            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
          <h1>THE TAILORS</h1>
          <h3 class="caption">UnStiched to Stiched in One Click</h3>
          <br>
            <a href="#about" class="btn btn-lg ScheduleButton btn-dark">Schedule a Pick Up</a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                  <h3>Now you can get your clothes designed and stiched sitting at home!</h3>
                  <!--<p class="lead">This theme features some wonderful photography courtesy of <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a>.</p>-->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                  <h2>How It Works!</h2>
                  <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <h3><span class="fa-stack fa-4x">
                               <!-- <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>-->
                                <a href = "OrderPage.php"><img class="img-responsive" src="img/mouse2.jpg" width="192" height="192" alt=""/> </a></span>
                                </h3>
                              <h3> <strong>Order</strong></h3>
                                <h4>Place your orders online or give us a call</h4>
</div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <h3><span class="fa-stack fa-4x">
                                <!--<i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>-->
                                <img class="img-responsive" src="img/Sccoter.jpg" width="192" height="192" alt=""/>
                                </span>
                                </h3>
                                <h3> <strong>PickUp</strong></h3>
                                <h4>We will collect your unstitched clothes with the measurement piece</h4>
</div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <h3><span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                                </span>
                                </h3>
                              <h3> <strong>Stitch</strong></h3>
                                <h4>Our people will stitch you clothes as per the mesurement piece</h4>
</div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <h3><span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                                </span>
                                </h3>
                                <h3> <strong>Deliver</strong></h3>
                                <h4>We deliver your stitched clothes. Pay cash on delivery.</h4>
</div>
                        </div>
                    </div>
                    <h3><!-- /.row (nested) -->
                    </h3>
                </div>
                <h3><!-- /.col-lg-10 -->
                </h3>
            </div>
            <h3><!-- /.row -->
            </h3>
        </div>
        <h3><!-- /.container -->
        </h3>
    </section>

    <!-- Callout -->
    <!--<aside class="callout">
        <div class="text-vertical-center">
            <h1>Vertically Centered Text</h1>
        </div>
    </aside>-->

    <!-- Pricing -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                  <h2>Pricing</h2>
                  <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                 <h3 class="text-center">Blouse</h3>
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/Blouse_2.jpg">
                                </a>
                                 <h3 class="text-center">Rs.500</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <h3 class="text-center">Kurti</h3>
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/Kurti_perfect.jpg">
                                </a>
                                <h3 class="text-center">Rs.500</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <h3 class="text-center">Bottom</h3>
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/salwar_bottom.jpg">
                                </a>
                                <h3 class="text-center">Rs.500</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <h3 class="text-center">Salwar</h3>
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/Salwar_perfected.jpg">
                                </a>
                                <h3 class="text-center">Rs.500</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#" class="btn btn-dark">Place Order</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- User feedback -->
    <div id="carousel1" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1" data-slide-to="1"></li>
        <li data-target="#carousel1" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active"><img src="img/portfolio-1.jpg" alt="First slide image" class="center-block">
          <div class="carousel-caption">
            <h3>First slide Heading</h3>
            <p>First slide Caption</p>
          </div>
        </div>
        <div class="item"><img src="img/portfolio-2.jpg" alt="Second slide image" class="center-block">
          <div class="carousel-caption">
            <h3>Second slide Heading</h3>
            <p>Second slide Caption</p>
          </div>
        </div>
        <div class="item"><img src="img/portfolio-3.jpg" alt="Third slide image" class="center-block">
          <div class="carousel-caption">
            <h3>Third slide Heading</h3>
            <p>Third slide Caption</p>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
	<!-- end of User feedback -->
    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>The buttons below are impossible to resist.</h3>
                    <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Map -->
    <!--<section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
        <br />
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
        </iframe>
    </section>-->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Start Bootstrap</strong>
                    </h4>
                    <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">name@example.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <!-- <script src="js/jquery.js"></script> -->
    <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script> <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
