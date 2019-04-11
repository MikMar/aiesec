<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
     <!-- Site Metas -->
    <title>AIESEC | Live the experience</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="https://aiesec.org/assets/images/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="https://aiesec.org/assets/images/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

	<link rel="stylesheet" href="css/flipclock.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        var countDownTime = <?php echo strtotime('2019-04-13 16:00:00') - strtotime(date('Y-m-d h:i:s')); ?>;
    </script>

</head>
<body class="app_version" data-spy="scroll" data-target="#navbarApp" data-offset="98">

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v3.2&appId=321550328546010&autoLogAppEvents=1"></script>

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loaders/loader-app.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->
    <header class="header header_style_01">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.html"><img src="images/logos/logo-app.png" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp" aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#about">Events</a></li>
                        <li><a class="nav-link" href="#agenda">Agenda</a></li>
                        <!--<li><a class="nav-link" href="#team">Project Team</a></li>-->
                        <li><a class="nav-link" href="#statistics">Statistics</a></li>
                        <!--<li><a class="nav-link" href="#clients">Partners</a></li>-->
                        <li><a class="nav-link" href="#faqs">FAQs</a></li>
						<li><a class="nav-link" href="#contact">Registration</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>	
	
	<section id="home" class="cd-hero js-cd-hero">
		<ul class="cd-hero__slider">
			<li class="cd-hero__slide cd-hero__slide--selected js-cd-slide">
				<!--<div class="cd-hero__content cd-hero__content--half-width">
					<h2>Familiarize Your Creative Apps</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<a href="#0" class="hvr-bounce-to-right cd-hero__btn">App Store</a>
					<a href="#0" class="hvr-bounce-to-right cd-hero__btn cd-hero__btn--secondary">GooglePlay</a>
				</div>--> <!-- .cd-hero__content -->

				<!--<div class="cd-hero__content cd-hero__content--half-width cd-hero__content--img">
					<img src="uploads/app_iphone_01.png" class="img-fluid" alt="tech 1">
				</div>--> <!-- .cd-hero__content -->
			</li>

			<li class="cd-hero__slide js-cd-slide">
				<!--<div class="cd-hero__content cd-hero__content--half-width">
					<h2>Familiarize Your Creative Apps</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<a href="#0" class="hvr-bounce-to-right cd-hero__btn">App Store</a>
					<a href="#0" class="hvr-bounce-to-right cd-hero__btn cd-hero__btn--secondary">GooglePlay</a>
				</div>--> <!-- .cd-hero__content -->

				<!--<div class="cd-hero__content cd-hero__content--half-width cd-hero__content--img">
					<img src="uploads/app_iphone_02.png" class="img-fluid" alt="tech 1">
				</div>--> <!-- .cd-hero__content -->
			</li>

			<li class="cd-hero__slide js-cd-slide">
				<!--<div class="cd-hero__content cd-hero__content--half-width cd-hero__content--img">
					<img src="uploads/app_iphone_01.png" class="img-fluid" alt="tech 2">
				</div>--> <!-- .cd-hero__content -->

				<!--<div class="cd-hero__content cd-hero__content--half-width">
					<h2>Familiarize Your Creative Apps</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<a href="#0" class="hvr-bounce-to-right cd-hero__btn">App Store</a>
					<a href="#0" class="hvr-bounce-to-right cd-hero__btn cd-hero__btn--secondary">GooglePlay</a>
				</div>--> <!-- .cd-hero__content -->
				
			</li>

			<li class="cd-hero__slide js-cd-slide">
				<!--<div class="cd-hero__content cd-hero__content--half-width cd-hero__content--img">
					<img src="uploads/app_iphone_02.png" class="img-fluid" alt="tech 2">
				</div>--> <!-- .cd-hero__content -->

				<!--<div class="cd-hero__content cd-hero__content--half-width">
					<h2>Familiarize Your Creative Apps</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<a href="#0" class="hvr-bounce-to-right cd-hero__btn">App Store</a>
					<a href="#0" class="hvr-bounce-to-right cd-hero__btn cd-hero__btn--secondary">GooglePlay</a>
				</div>--> <!-- .cd-hero__content -->

			</li>

            <li class="cd-hero__slide js-cd-slide">
                <!--<div class="cd-hero__content cd-hero__content--half-width cd-hero__content--img">
                    <img src="uploads/app_iphone_02.png" class="img-fluid" alt="tech 2">
                </div>--> <!-- .cd-hero__content -->

                <!--<div class="cd-hero__content cd-hero__content--half-width">
                    <h2>Familiarize Your Creative Apps</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#0" class="hvr-bounce-to-right cd-hero__btn">App Store</a>
                    <a href="#0" class="hvr-bounce-to-right cd-hero__btn cd-hero__btn--secondary">GooglePlay</a>
                </div>--> <!-- .cd-hero__content -->

            </li>
		</ul> <!-- .cd-hero__slider -->

		<div class="cd-hero__nav js-cd-nav">
			<nav>
				<span class="cd-hero__marker cd-hero__marker--item-1 js-cd-marker"></span>
				
				<ul>
					<li class="cd-selected"><a href="#0">01</a></li>
					<li><a href="#0">02</a></li>
					<li><a href="#0">03</a></li>
					<li><a href="#0">04</a></li>
					<li><a href="#0">05</a></li>
				</ul>
			</nav> 
		</div> <!-- .cd-hero__nav -->
	</section> <!-- .cd-hero -->

	
	<div id="about" class="section wb">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h3>Kickoff Event</h3>
						<div class="flip-clock"></div>
					</div><!-- end title -->
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-lg-7 col-md-6">
					<div class="about-left">
						<img src="uploads/kickoff.png" class="img-fluid" alt="" />
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<div class="about-right">
						<h2>Kickoff</h2>
						<p>AIESEC in Armenia's 30th Anniversary first event of "I am an AIESECer I am an Impact" series will take place on April 13th, at 16:00. We will kick off by showcasing the Impact that has been created by our Alumni for the thirty years of existence and will engage into the dialogue of "What kind of leadership Armenia needs today" with our speaker-alumni.</p>
					</div>
				</div>
			</div>
			
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-6">
					<div class="about-right">
						<h2>ALDS (Alumni Leadership Development Seminar)</h2>
						<p>The aim of the event is to define AIESEC alumni leadership profile. It is important to strengthen alumni leadership skills and competencies with regards to current needs of leadership in Armenia. During ALDS we will discuss how AIESEC leaders can support each other in their leadership journey and make it better.</p>
					</div>
				</div>
				<div class="col-lg-7 col-md-6">
					<div class="about-left">
						<img src="uploads/alds_full.png" class="img-fluid" alt="" />
					</div>
				</div>
			</div>

            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="about-left">
                        <img src="images/logo.png" class="img-fluid ci" alt="" />
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="about-right">
                        <h2>Gala Event</h2>
                        <p>
                            Traditional Gala event, the way we gather together to celebrate the anniversary of AIESEC in Armenia. The Gala Event is initially planned for the end of August. It will be two days event. Stay tuned to be updated about the exact dates and venue of the 30th Anniversary greatest event.
                        </p>
                    </div>
                </div>
            </div>
			
		</div>
	</div>

    <div id="agenda" class="section agenda">
        <div class="container">
            <div class="section-title text-center">
                <h3>Agenda</h3>
            </div>
            <div class="footer-distributed text-center">
                <img src="images/Agenda.jpg">
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <!--<div class="how-its-work clearfix">
        <div class="hc colon1">
            <h2>1</h2>
            <h3>Go App Store</h3>
            <p>Lorem Ipsum dolroin gravida nibh vel velit aliquet. Aenean sollicitudin, lorem quis bibendum..</p>
        </div>

        <div class="hc colon2">
            <h2>2</h2>
            <h3>Create an Account</h3>
            <p>Lorem Ipsum dolroin gravida nibh vel velit aliquet. Aenean sollicitudin, lorem quis bibendum..</p>
        </div>

        <div class="hc colon3">
            <h2>3</h2>
            <h3>Download the App</h3>
            <p>Lorem Ipsum dolroin gravida nibh vel velit aliquet. Aenean sollicitudin, lorem quis bibendum..</p>
        </div>

        <div class="hc colon4">
            <h2>4</h2>
            <h3>Enjoy & Rate us!</h3>
            <p>Lorem Ipsum dolroin gravida nibh vel velit aliquet. Aenean sollicitudin, lorem quis bibendum..</p>
        </div>
    </div>-->

    <div id="statistics" class="parallax section stats-box" style="background-image:url('uploads/slider-01.png');background-position: center">
        <div class="container">
            <div class="row text-left stat-wrap">
                <div class="col-md-3 col-sm-6 col-xs-12">
					<div class="text-center">
						<span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-membership"></i></span>
						<p class="stat_count_download">50</p>
						<h3>AIESEC In Armenia Active Members</h3>
					</div>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
					<div class="text-center">
						<span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-member"></i></span>
						<p class="stat_count_download">2000</p>
						<h3>AIESEC In Armenia Alumni</h3>
					</div>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
					<div class="text-center">
						<span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-couple-of-arrows-changing-places"></i></span>
						<p class="stat_count_download">50</p>
						<h3>AIESEC In Armenia Exchange Numbers In One Year</h3>
					</div>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
					<div class="text-center">
						<span data-scroll class="global-radius icon_wrap effect-1"><i class="flaticon-school"></i></span>
						<p class="stat_count_download">1700</p>
						<h3>Partner Universities</h3>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="clients" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Partners</h3>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="offset-md-2 col-md-8 ">
						<div class="testi-carousel owl-carousel owl-theme">
							<div class="testimonial">
								<p class="description">
                                    Gold Partner
								</p>
								<h3 class="title">Ucom</h3>
							</div>

                            <div class="testimonial">
                                <p class="description">
                                    Silver Partner
                                </p>
                                <h3 class="title">Aurora Barealisse</h3>
                                <span class="post">marketing and branding</span>
                            </div>

							<div class="testimonial">
								<p class="description">
                                    In Kind Partner
								</p>
								<h3 class="title">Pepsi</h3>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
	
	
	<div id="faqs" class="section lb">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="accordion" id="accordionExample">
					  <div class="card">
						<div class="card-header" id="headingOne">
						  <h5 class="mb-0">
							<a href="" class="btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                When is AIESEC in Armenia 30th anniversary celebration ?
							</a>
						  </h5>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						  <div class="card-body">
                              This time we will have series of events during the whole year, which we beleive will keep the AIESEC spirit up and will give AIESEC alumnies a flexibility to chose the event which best suits their schedule.
                          </div>
						</div>
					  </div>
					  <div class="card">
						<div class="card-header" id="headingTwo">
						  <h5 class="mb-0">
							<a href="" class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What is the concept of 30th anniversary ?
							</a>
						  </h5>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						  <div class="card-body">
                              AIESEC in Armenia’s 30th anniversary theme specifically highlights AIESEC long-term vision. Namely, to develop and empower transformational leaders who can bring change and create measurable impact for the country. Throughout 30 years of its existence, AIESEC in Armenia has had its positive impact thanks to AIESEC alumni. Admittedly, who nowadays are successful entrepreneurs, high-rank governmental officials, social innovators, expert -professionals operating in different domains. 30th anniversary will bring together all the leaders of 30 AIESEC generations to honor its alma mater and to discuss the way forward.
                          </div>
						</div>
					  </div>
					  <div class="card">
						<div class="card-header" id="headingThree">
						  <h5 class="mb-0">
							<a href="" class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                When/ where will take place the events ?
							</a>
						  </h5>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						  <div class="card-body">
                              KickOff – 13 April, 2019, 16.00, Congress Hotel, Picasso Hall
                              ALDS (Alumni Leadership Development Seminar) – June 15-16, venue TBD
                              Gala Event – End of August (TBD)
						  </div>
						</div>
					  </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <a href="" class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                        How much is the fee ?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    KickOff – no fee
                                    ALDS – TBD
                                    Gala Event – TBD
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <a href="" class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                        Who can be as a participant ?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="card-body">
                                    All AIESEC Alumnies and current AIESECers
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <a href="" class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                        How can we register for the events ?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                <div class="card-body">
                                    Follow our Facebook page  (https://www.facebook.com/AIESECinArmenia30/), stay tuned to the events and cofnirm your participation.
                                    Go to the Resgitartion field in the present webpage and register to the upcoming event.
                                </div>
                            </div>
                        </div>
					</div>					
				</div>
				<!--<div class="col-lg-6 col-md-6">
					<div class="faq-right">
						<img src="uploads/kickoff.png" class="img-fluid" alt="" />
					</div>
				</div>-->
			</div>
		</div>
	</div>

    <div id="contact" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Register For The Upcoming Event</h3>
			    <div class="info-box" data-toggle="tooltip" data-placement="bottom" title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.">
					<!--<i class="fa fa-question-circle" aria-hidden="true"></i>-->
				</div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" name="current_occupation" id="current-occupation" class="form-control" placeholder="Current occupation">
                                </div>
                                <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Current occupation"></textarea>
                                </div>-->
                                <div class="text-center pdi">
                                    <button type="submit" value="SEND" id="submit" class="hvr-bounce-to-right get-btn">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--<footer class="footer">
		<div class="container"> 
			<div class="row"> 
				<div class="col-md-12"> 
					<div class="subscribe-text">
						<h3>Subscribe for Newsletter</h3>
						<p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore Lorem ipsum madolor sit amet, consectetur adipisicing incididunt.</p>
					</div>
					
					<div class="subscribe-form">
						<form>
							<input class="form-control" id="subscribe_email" name="email" placeholder="Email Address..." required="" type="email">
							<button type="submit" class="btn subscribe-btn"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
    </footer>-->

    <div class="copyrights fb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Follow Us On Facebook</h3>
            </div>
            <div class="footer-distributed text-center">
                <div class="footer-left">
                    <p class="footer-company-name"><div class="fb-page" data-href="https://www.facebook.com/AIESECinArmenia30/" data-width="500" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/AIESECinArmenia30/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/AIESECinArmenia30/">AIESEC in Armenia 30</a></blockquote></div></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                    
                    <p class="footer-company-name"><a href="/">aiesecalumniarm.org</a><br>All Rights Reserved. &copy; <?php echo date('Y') ?></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/main.js"></script>
	<script src="js/flipclock.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/swiper.min.js"></script>
	<script>
		var swiper = new Swiper('.swiper-container', {
			loop: true,
			effect: 'coverflow',
			centeredSlides: true,
			loopFillGroupWithBlank: true,
			slidesPerView: 3,
            initialSlide: 3,
            keyboardControl: true,
            mousewheelControl: false,
            lazyLoading: true,
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			breakpoints: {
                1199: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                991: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                767: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                575: {
                    slidesPerView: 1,
                    spaceBetween: 3,
                }
            }
		});
	  </script>

</body>
</html>