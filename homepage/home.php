
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="images/bg.jpg">

<title>REDMOON</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Games Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
   
   
    <!-- //font -->



	<!-- Stylesheets -->
	<link rel="stylesheet" href="css1/bootstrap.min.css"/>
	<link rel="stylesheet" href="css1/font-awesome.min.css"/>
	<link rel="stylesheet" href="css1/flaticon.css"/>
	<link rel="stylesheet" href="css1/slicknav.min.css"/>
	<link rel="stylesheet" href="css1/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css1/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css1/animate.css"/>
  <link rel="stylesheet" href="css1/style.css"/>
  <link rel="stylesheet" href="css_contact/main.css"/>
	<link rel="stylesheet" href="css_contact/util.css"/>
	
	

<link rel="stylesheet" href="css/font-awesome2.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="css/styleb.css">
<link rel="stylesheet" type="text/css" href="css/style2.css">
   
                <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/poposlides.css">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
    
    <link href="//fonts.googleapis.com/css?family=Marcellus+SC" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:200,200i,300,400,400i,500,600,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/styleh.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">




    
</head>
<body >
 <?php
require('test.php');
?>
<!-- Header section end -->
<div class="bloc1"></div>



<!-- Hero section -->
<script src="js1/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
  <script type="text/javascript">
      jssor_1_slider_init = function() {

          var jssor_1_SlideshowTransitions = [
            {$Duration:800,$Opacity:2}
          ];

          var jssor_1_options = {
            $AutoPlay: 1,
            $SlideshowOptions: {
              $Class: $JssorSlideshowRunner$,
              $Transitions: jssor_1_SlideshowTransitions,
              $TransitionsOrder: 1
            },
            $ArrowNavigatorOptions: {
              $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
              $Class: $JssorBulletNavigator$
            }
          };

          var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

          /*#region responsive code begin*/

          var MAX_WIDTH = 3000;

          function ScaleSlider() {
              var containerElement = jssor_1_slider.$Elmt.parentNode;
              var containerWidth = containerElement.clientWidth;

              if (containerWidth) {

                  var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                  jssor_1_slider.$ScaleWidth(expectedWidth);
              }
              else {
                  window.setTimeout(ScaleSlider, 30);
              }
          }

          ScaleSlider();

          $Jssor$.$AddEvent(window, "load", ScaleSlider);
          $Jssor$.$AddEvent(window, "resize", ScaleSlider);
          $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
          /*#endregion responsive code end*/
      };
  </script>
  <style>
      /*jssor slider loading skin spin css*/
      .jssorl-009-spin img {
          animation-name: jssorl-009-spin;
          animation-duration: 1.6s;
          animation-iteration-count: infinite;
          animation-timing-function: linear;
      }

      @keyframes jssorl-009-spin {
          from { transform: rotate(0deg); }
          to { transform: rotate(360deg); }
      }

      /*jssor slider bullet skin 051 css*/
      .jssorb051 .i {position:absolute;cursor:pointer;}
      .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
      .jssorb051 .i:hover .b {fill-opacity:.7;}
      .jssorb051 .iav .b {fill-opacity: 1;}
      .jssorb051 .i.idn {opacity:.3;}

      /*jssor slider arrow skin 051 css*/
      .jssora051 {display:block;position:absolute;cursor:pointer;}
      .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
      .jssora051:hover {opacity:.8;}
      .jssora051.jssora051dn {opacity:.5;}
      .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
  </style>
  <div id="jssor_1" style="position:relative;width:980px;height:380px;overflow:hidden;visibility:hidden;">
      <!-- Loading Screen -->
      <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center">
          <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
      </div>
      <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
          <div>
              <img data-u="image" src="img/30-ConvertImage3.jpg" />
          </div>
          <div>
              <img data-u="image" src="img/40.jpg" />
          </div>
          <div>
            <img data-u="image" src="img/70.jpg" />
        </div>
          <div>
              <img data-u="image" src="img/50-ConvertImage.jpg" />
    </div>
    <div>
        <img data-u="image" src="img/90-ConvertImage2.jpg" />
    </div>
      </div>
      <!-- Bullet Navigator -->
      <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
          <div data-u="prototype" class="i" style="width:16px;height:16px;">
              <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                  <circle class="b" cx="8000" cy="8000" r="5800"></circle>
              </svg>
          </div>
      </div>
      <!-- Arrow Navigator -->
      <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
              <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
          </svg>
      </div>
      <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
              <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
          </svg>
      </div>
  </div>
  <script type="text/javascript">jssor_1_slider_init();</script>
  <!-- #endregion Jssor Slider End -->

<!-- /details -->
  <div class="details-w3lsagile">
    <div class="container">
      <h3 class="agile_heading find">Some amazing features of REDMOON!</h3>
      <p class="sub_cap des" id="B">Enjoy your time </p>
      <div class="agile_inner_info">
        <div class="col-md-4 col-sm-4 details-grid-w3lsagile details-grid-3-w3lsagile">
          <div class="details-grid3-w3lsagile agile_services_grid">
            <div class="details-grid-image-w3lsagile">
              <div class="hover06 column">
                <div>
                  <figure><img src="images/spotify.jpg" alt=" " class="img-responsive"></figure>
                </div>
              </div>
            </div>
            <div class="details-grid-info-w3lsagile">
              <h4>Spotify</h4>
              <p>Spotify is a digital music service that gives you access to millions of songs.</p>
              <ul>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                <li>(665)</li>
              </ul>
            </div>
            >
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 details-grid-w3lsagile details-grid-3-w3lsagile">
          <div class="details-grid3-w3lsagile agile_services_grid">
            <div class="details-grid-image-w3lsagile">
              <div class="hover06 column">
                <div>
                  <figure><img src="images/netflix.jpg" alt=" " class="img-responsive"></figure>
                </div>
              </div>
            </div>
            <div class="details-grid-info-w3lsagile">
              <h4>Netflix</h4>
              <p>Watch Netflix movies & TV shows online or stream right to your smart TV, game console, PC, Mac, mobile, tablet and more.</p>
              <ul>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                <li>(854)</li>
              </ul>
            </div>
            
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 details-grid-w3lsagile details-grid-3-w3lsagile">
          <div class="details-grid3-w3lsagile agile_services_grid">
            <div class="details-grid-image-w3lsagile">
              <div class="hover06 column">
                <div>
                  <figure><img src="images/education.jpg" alt=" " class="img-responsive"></figure>
                </div>
              </div>
            </div>
            <div class="details-grid-info-w3lsagile">
              <h4>Learnig</h4>
              <p>Start Learning Today! Unlimited Learning. Custom Playlists. Expert Led Training. Highlights: Online Learning Platform.</p>
              <ul>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                <li>(643)</li>
              </ul>
            </div>
           
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>

    </div>
  </div>
  <!-- //details -->
  
  <!-- Stats --><div class="stats">
    <div class="container">
      <h3 class="agile_heading find">Overview</h3>
      <div class="agile_inner_info two">
        <div class="row">
        <div class="col-md-4 col-sm-4 stats-grid slideanim">
          <i class="fa fa-smile-o"></i>
          <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1500' data-delay='.5' data-increment="50">1500</div>
          <p class="stats-info">Happy Clients</p>
        </div>
        <div class="col-md-4 col-sm-4 stats-grid slideanim">
          <i class="fa fa-tags" aria-hidden="true"></i>
          <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1000' data-delay='.5' data-increment="5">1000</div>
          <p class="stats-info">Sale for one month</p>
</div>
        <div class="col-md-4 col-sm-4 stats-grid slideanim">
          <i class="fa fa-home" aria-hidden="true"></i>
          <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='500' data-delay='.5' data-increment="20">500</div>
          <p class="stats-info">Number of Accounts for sale</p>
        </div>
      </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!-- //Stats -->

  <!-- /services -->
  <div class="featured_services">
    <div class="container">
      <h3 class="agile_heading"> Go to buy the account you want</h3>

      <div class="agile_inner_info">
        <div id="owl-demo2" class="owl-carousel owl-theme">
          
          <div class="item">


            <div class="projects_img">

              <img class="agile-img" src="images/60.jpg" alt=" " class="img-responsive">
              <div class="details-grid-info-w3lsagile slide_agile_te_info">
                <h4>Tom Clancy’s The Division 2</h4>
                <p>Tom Clancy’s The Division 2 is a shooter RPG with campaign, co-op, and PvP modes that offers more variety in missions and challenges, new progression systems with unique twists and surprises, and fresh innovations that offer new ways to play.</p>

              </div>
            </div>
          </div>
          <div class="item">
            <div class="projects_img">

              <img class="agile-img" src="images/deezer.jpg" alt=" " class="img-responsive">
              <div class="details-grid-info-w3lsagile slide_agile_te_info">
                <h4>Deezer</h4>
                <p>Try Flow, only on Deezer. Listen to your music, when and where you want. Discover more than 53 million tracks, create your own playlists, and share your favourite tracks with your friends.



</p>

              </div>
            </div>
          </div>
          
          <div class="item">
            <div class="projects_img">

              <img class="agile-img" src="images/beinsports.jpg" alt=" " class="img-responsive">
              <div class="details-grid-info-w3lsagile slide_agile_te_info">
                <h4>Beinsports</h4>
                <p>watch live sports like Champions and Premier League. Viaplay has all TV shows and channels online.</p>

              </div>
            </div>
          </div>
          <div class="item">
            <div class="projects_img">

              <img class="agile-img" src="images/str.jpg" alt=" " class="img-responsive">
              <div class="details-grid-info-w3lsagile slide_agile_te_info">
                <h4>Streaming</h4>
                <p> Making it beautiful and easy to enjoy. Streaming organizes your personal video, music, and photo collections and streams them to all of your devices.</p>

              </div>
            </div>
          </div>
          <div class="item">
            <div class="projects_img">

              <img class="agile-img" src="images/pizza.jpg" alt=" " class="img-responsive">
              <div class="details-grid-info-w3lsagile slide_agile_te_info">
                <h4>Domino's Pizza </h4>
                <p>Order pizza, pasta, chicken & more online for carryout or delivery from your local Domino’s restaurant.



</p>

              </div>
            </div>
          </div>
          <div class="item">
            <div class="projects_img">

              <img class="agile-img" src="images/expressvpn.png" alt=" " class="img-responsive">
              <div class="details-grid-info-w3lsagile slide_agile_te_info">
                <h4>Expressvpn</h4>
                <p>Fast, Secure & Anonymous. 94 Countries. Easy Setup on any Device. Try Risk-Free! 148 VPN Locations. Protect Your Privacy. Stream Any Content. Hide Your IP Address.



</p>

              </div>
            </div>
          </div>
          <div class="item">
            <div class="projects_img">

              <img class="agile-img" src="images/wwe network.jpg" alt=" " class="img-responsive">
              <div class="details-grid-info-w3lsagile slide_agile_te_info">
                <h4>WWE network</h4>
                <p>WWE Network – where you can watch every WWE pay-per-view live including Royal Rumble & WrestleMania plus other WWE Network video.







</p>

              </div>
            </div>
          </div>
         
        
          <div class="item">
            <div class="projects_img">

              <img class="agile-img" src="images/hulu.jpg" alt=" " class="img-responsive">
              <div class="details-grid-info-w3lsagile slide_agile_te_info">
                <h4>Hulu</h4>
                <p>Hulu is a premium streaming service that offers instant access to live and on-demand channels, original series and films, and a premium library of TV and movies.</p>

              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>

<!-- about -->
    <section class="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6  p-0">
                    <img src="images/bg5.jpg" alt="Realtie" class="img-fluid" />
                </div>
                <div class="col-lg-6 about-info">
                    <h3 class="tittle text-left mb-lg-5 mb-3" id="about" class="titre-mail">About Us</h3>
                    <p class="my-xl-4 my-lg-3 my-md-4 my-3" id="us">We are RedMoon shop number ONE account seller in the market we provide quality accounts of over 100+ sites in the world easy to use easy to pay with just one click buy now and save your money .
                    </p>

                </div>

            </div>
        </div>
    </section>
    <!-- /about -->

    <!-- //Slider -->
        <!-- content-starts-here -->
        <div class="main-content">
            <div class="w3-categories">
                <h3 id="Services">Services</h3>
                <div class="container">
                    <div class="col-md-3">
                        <div class="focus-grid w3layouts-boder1">
                            <a class="btn-8" href="">
                                <div class="focus-border">
                                    <div class="focus-layout">


                                        <div class="focus-image"><i class="glyphicon glyphicon-music"></i></div>
                                        <h4 class="clrchg">Music</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="focus-grid w3layouts-boder2">   
                        <a class="btn-8" href="">
                            <div class="focus-border">
                                <div class="focus-layout">
                                    <div class="focus-image"><i class="glyphicon glyphicon-film"></i></div>
                                    <h4 class="clrchg"> Streaming</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="focus-grid w3layouts-boder3">
                        <a class="btn-8" href="categories.html#parentVerticalTab3">
                            <div class="focus-border">
                                <div class="focus-layout">
                                    <div class="focus-image"><i class="glyphicon glyphicon-heart-empty"></i></div>
                                    <h4 class="clrchg">Sport</h4>
                                </div>
                            </div>
                        </a>
                    </div>  
                    </div>
                    <div class="col-md-3">
                    <div class="focus-grid w3layouts-boder4">
                        <a class="btn-8" href="categories.html#parentVerticalTab4">
                            <div class="focus-border">
                                <div class="focus-layout">
                                    <div class="focus-image"><i class="glyphicon glyphicon-play"></i></div>
                                    <h4 class="clrchg">Gaming</h4>
                                </div>
                            </div>
                        </a>
                    </div>  
                    </div>
                    <div class="col-md-3">
                    <div class="focus-grid w3layouts-boder5">
                        <a class="btn-8" href="categories.html#parentVerticalTab5">
                            <div class="focus-border">
                                <div class="focus-layout">
                                    <div class="focus-image"><i class="glyphicon glyphicon-facetime-video"></i></div>

                                    <h4 class="clrchg">Media</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="focus-grid w3layouts-boder6">
                        <a class="btn-8" href="categories.html#parentVerticalTab6">
                            <div class="focus-border">
                                <div class="focus-layout">
                                    <div class="focus-image"><i class="glyphicon glyphicon-cutlery"></i></div>
                                    <h4 class="clrchg">Food</h4>
                                </div>
                            </div>
                        </a>
                    </div>  
                    </div>
                    <div class="col-md-3">
                    <div class="focus-grid w3layouts-boder7">
                        <a class="btn-8" href="categories.html#parentVerticalTab7">
                            <div class="focus-border">
                                <div class="focus-layout">
                                    <div class="focus-image"><i class="glyphicon glyphicon-blackboard"></i></div>
                                    <h4 class="clrchg">Vpn</h4>
                                </div>
                            </div>
                        </a>
                    </div>  
                    </div>
                    <div class="col-md-3">
                    <div class="focus-grid w3layouts-boder8">
                        <a class="btn-8" href="categories.html#parentVerticalTab8">
                            <div class="focus-border">
                                <div class="focus-layout">
                                    <div class="focus-image"><i class="glyphicon glyphicon-alert"></i></div>
                                    <h4 class="clrchg">Security</h4>
                                </div>
                            </div>
                        </a>
                    </div>  
                    </div>
                     <div class="col-md-3">
                    <div class="focus-grid w3layouts-boder8">
                        <a class="btn-8" href="categories.html#parentVerticalTab8">
                            <div class="focus-border">
                                <div class="focus-layout">
                                    <div class="focus-image"><i class="glyphicon glyphicon-shopping-cart"></i></div>
                                    <h4 class="clrchg">Shopping</h4>
                                </div>
                            </div>
                        </a>
                    </div>  
                    </div>
                    <div class="col-md-3">
                    <div class="focus-grid w3layouts-boder9">
                        <a class="btn-8" href="categories.html#parentVerticalTab9">
                            <div class="focus-border">
                                <div class="focus-layout">
                                    <div class="focus-image"><i class="glyphicon glyphicon-education"></i></div>
                                    <h4 class="clrchg">Education</h4>
                                </div>
                            </div>
                        </a>
                    </div>  
                    </div>
                   
                    
                    <div class="clearfix"></div>
                </div>
            </div>
                                             
            <div class="trending-ads">
                <div class="container">
                <!-- slider -->

<!-- //banner -->
<div class="contact1">
  <div class="container-contact1">
    <div class="contact1-pic js-tilt" data-tilt>
      <img src="images/img-01.png" alt="IMG">
    </div>

    <form class="contact1-form validate-form">
      <span class="contact1-form-title">
        Get in touch
      </span>

      <div class="wrap-input1 validate-input" data-validate = "Name is required">
        <input class="input1" type="text" name="name" placeholder="Name">
        <span class="shadow-input1"></span>
      </div>

      <div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <input class="input1" type="text" name="email" placeholder="Email">
        <span class="shadow-input1"></span>
      </div>

      <div class="wrap-input1 validate-input" data-validate = "Subject is required">
        <input class="input1" type="text" name="subject" placeholder="Subject">
        <span class="shadow-input1"></span>
      </div>

      <div class="wrap-input1 validate-input" data-validate = "Message is required">
        <textarea class="input1" name="message" placeholder="Message"></textarea>
        <span class="shadow-input1"></span>
      </div>

      <div class="container-contact1-form-btn">
        <button class="contact1-form-btn">
          <span>
            Send Email
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
          </span>
        </button>
      </div>
    </form>
  </div>
</div>

    <!-- //newsletter-->
    <!-- footer -->
    <div class="footer_agileinfo_w3">
        <div class="footer_inner_info_w3ls_agileits">
            <div class="col-md-3 footer-left">
                <h2><a href="index.html"><span>R</span>EDMOON </a></h2>
                <p>We are RedMoon shop number ONE account seller in the market we provide quality accounts of over 100+ sites in the world easy to use easy to pay with just one click buy now and save you money !.</p>
                
            </div>
            <div class="col-md-9 footer-right">
                <div class="sign-grds">
                    <div class="col-md-4 sign-gd">
                        <h4>Our <span>Information</span> </h4>
                        <ul>
                            <li><a href="#titre">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#Services">Services</a></li>
                            <li><a href="">Cart Shooping</a></li>
                            <li><a href="#mail">help</a></li>
                        </ul>
                    </div>

                    <div class="col-md-5 sign-gd-two">
                        <h4>Store <span>Information</span></h4>
                        <div class="address">
                            <div class="address-grid">
                                <div class="address-left">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="address-right">
                                    <h6>Phone Number</h6>
                                    <p>111111111111</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="address-grid">
                                <div class="address-left">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="address-right">
                                    <h6>Email Address</h6>
                                    <p>Email :<a href=""> mail@example.com</a></p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="address-grid">
                                
                            
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>

            
        </div>
    </div>
    </div>

    


    <script>
            (function() {
                // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
                if (!String.prototype.trim) {
                    (function() {
                        // Make sure we trim BOM and NBSP
                        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                        String.prototype.trim = function() {
                            return this.replace(rtrim, '');
                        };
                    })();
                }

                [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
                    // in case the input is already filled..
                    if( inputEl.value.trim() !== '' ) {
                        classie.add( inputEl.parentNode, 'input--filled' );
                    }

                    // events:
                    inputEl.addEventListener( 'focus', onInputFocus );
                    inputEl.addEventListener( 'blur', onInputBlur );
                } );

                function onInputFocus( ev ) {
                    classie.add( ev.target.parentNode, 'input--filled' );
                }

                function onInputBlur( ev ) {
                    if( ev.target.value.trim() === '' ) {
                        classie.remove( ev.target.parentNode, 'input--filled' );
                    }
                }
            })();
        </script>
        
        
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script> 





<script src="js/jquery-2.1.4.min.js"></script>
  <!-- range -->
  <script type="text/javascript" src="js/jquery-ui.js"></script>    
  <script type='text/javascript'>//<![CDATA[ 
    $(window).load(function(){
     $( "#slider-range" ).slider({
          range: true,
          min: 0,
          max: 9000,
        values: [ 1000, 7000 ],
          slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
          }
     });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

    });//]]>  
  </script>
<!-- //range -->
  <script src="js/search.js"></script>
  <script src="js/poposlides.js">
  </script>
  <script>
    $(".slides").poposlides();
  </script>

  <!-- js for portfolio lightbox -->
  <script src="js/jquery.chocolat.js "></script>
  <link rel="stylesheet " href="css/chocolat.css " type="text/css " media="screen ">
  <!--light-box-files -->
  <script type="text/javascript ">
    $(function () {
      $('.portfolio-grids a').Chocolat();
    });
  </script>
  <!-- /js for portfolio lightbox -->
  <!-- stats -->
  <script type="text/javascript" src="js/numscroller-1.0.js"></script>
  <!-- //stats -->
  <!-- start-smooth-scrolling -->
  <script type="text/javascript" src="js/move-top.js"></script>
  <script type="text/javascript" src="js/easing.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function ($) {
      $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({
          scrollTop: $(this.hash).offset().top
        }, 1000);
      });
    });
  </script>
  <!-- start-smooth-scrolling -->
  <!-- here stars scrolling icon -->
  <script type="text/javascript">
    $(document).ready(function () {
      /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
      */

      $().UItoTop({
        easingType: 'easeOutQuart'
      });

    });
  </script>
  <!-- //here ends scrolling icon -->


  <!-- carousel -->
  <script src="js/owl.carousel.js"></script>
  <script>
    $(document).ready(function () {
      $("#owl-demo").owlCarousel({
        items: 1,
        itemsDesktop: [768, 1],
        itemsDesktopSmall: [414, 1],
        lazyLoad: true,
        autoPlay: true,
        navigation: true,

        navigationText: false,
        pagination: true,

      });

    });
  </script>
  <script>
    $(document).ready(function () {
      $("#owl-demo2").owlCarousel({
        items: 1,
        itemsDesktop: [768, 1],
        itemsDesktopSmall: [414, 1],
        lazyLoad: true,
        autoPlay: true,
        navigation: true,

        navigationText: false,
        pagination: true,

      });

    });
  </script>





	<!--====== Javascripts & Jquery ======-->
	<script src="js1/main.js"></script>
	<script src="js1/bootstrap.min.js"></script>
	<script src="js1/jquery.slicknav.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/jquery.zoom.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery-3.2.1.min.js"></script>
  


    </body>
