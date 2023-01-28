<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from webthemez.com/demo/myhome-real-estate-website-template/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2023 15:44:21 GMT -->
<head>
<meta charset="utf-8">
<title>Camella Butuan</title>
<link rel="icon" type="images/png" href="img/index.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com/" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="pull-left hidden-xs"><i class="fa fa-clock-o"></i><span>Mon - Sat 8.00 - 18.00. Sunday CLOSED</span>
        <p class="pull-right"><i class="fa fa-phone"></i>Cellphone No. (+63) 95 922 6540</p>
      </div>
    </div>
  </div>
</div>
	<!-- start header -->
    <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="img/camella-butuan-logo_classic200x54.png" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
						<li><a class="{{Request::routeIs('landing.index') ? 'active' : ''}}" href="{{route('landing.index')}}">Home</a></li>
						 <li class="dropdown">
							<a href="{{route('about.index')}}" class="dropdown-toggle">About Us <b class="caret"></b></a>
							{{-- <ul class="dropdown-menu">
								<li><a href="{{route('about.index')}}">Company</a></li>
								<li><a href="{{route('announcements.index')}}">Announcements</a></li>
							</ul> --}}
                    </li> 
						{{-- <li><a class="{{Request::routeIs('about.index') ? 'active' : ''}}" href="{{route('about.index')}}">About Us</a></li> --}}
						<li><a class="{{Request::routeIs('services.index') ? 'active' : ''}}" href="{{route('services.index')}}">Amenities</a></li>
                        <li><a class="{{Request::routeIs('projects.index') ? 'active' : ''}}" href="{{route('projects.index')}}">Properties</a></li>
                        <li><a class="{{Request::routeIs('pricing.index') ? 'active' : ''}}" href="{{route('pricing.index')}}">Pricing</a></li>
						{{-- <li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">What's New <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/announcements">Announcements</a></li>
								<li><a href="#">Our Team</a></li>
								<li><a href="#">News</a></li> 
								<li><a href="#">Investors</a></li>
							</ul>
						</li> --}}
						 
                        <li><a class="{{Request::routeIs('contact.index') ? 'active' : ''}}" href="{{route('contact.index')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">About Us</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<section class="section-padding">
		<div class="container">
			<div class="row showcase-section">
				<div class="col-md-6">
					<img src="img/about-camela500x272.png" alt="showcase image">
				</div>
				
				<div class="col-md-6">
					<div class="about-text">
						<h2><span class="coloured">About</span> Company</h2>
						<p>Camella Butuan is being developed by Vista Land, the same company that built Crosswinds, a world-class Swiss-inspired exclusive community in Tagaytay City. Expect the same level of engineering expertise and customer satisfaction from Vista Land when you buy your house and lot in Camella Butuan. You will have peace of mind as construction of houses according to the contracted specifications and schedule has been our trademark. </p>
						 <p>Vista Land has almost 40 years of experience in building quality homes throughout the nation. Thus making Vista Land the Philippine's largest homebuilder. It is the market leader by far in terms of total number of quality houses built, having constructed more than 250,000 homes in 31 provinces, and 63 cities and municipalities in Luzon, Visayas and Mindanao. Vista Land continues to solidify the status of Camella as a truly national brand and signifies the most-trusted brand in property development. </p>
					</div>
				</div>
			</div>

			
		</div>
	</section>
	<div class="container">
					
					<div class="about">
				
						
						<div class="row">
							<div class="col-md-4">
								<!-- Heading and para -->
								<div class="block-heading-two">
									<h3><span>Why Choose Us?</span></h3>
								</div>
								<p>Camella is the subsidiary catering to the mid-market segment of Vista Land.  In close to 38 years, Camella has built an immense selection of affordable, high-quality homes with world-class settings and exquisitely themed communities across the country – each one carrying Vista Land’s expertise in space planning, carefully thought out and sustainable architecture, and an innate knack for selecting the most accessible and attractive locations. </p>
							</div>
							<div class="col-md-4">
								<div class="block-heading-two">
									<h3><span>Our Solution</span></h3>
								</div>		
								<!-- Accordion starts -->
								<div class="panel-group" id="accordion-alt3">
								 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
								  <div class="panel">	
									<!-- Panel heading -->
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
											<i class="fa fa-angle-right"></i> Excellent Location
										  </a>
										</h4>
									 </div>
									 <div id="collapseOne-alt3" class="panel-collapse collapse">
										<!-- Panel body -->
										<div class="panel-body">
											Camella only chooses property sites near schools, hospitals and medical centers, places of worship, shopping malls and leisure centers, government institutions, transportation hubs and main access roads.
										</div>
									 </div>
								  </div>
								  <div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
											<i class="fa fa-angle-right"></i> Convenient
										  </a>
										</h4>
									 </div>
									 <div id="collapseTwo-alt3" class="panel-collapse collapse">
										<div class="panel-body">
											When Camella builds, it builds for its residents’ upgraded lifestyle; thus, the modern facilities and friendly amenities – an impressive grand entrance, clubhouse, swimming pool, basketball court, playground, jogging paths, and landscaped parks and gardens.
										</div>
									 </div>
								  </div>
								  <div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
											<i class="fa fa-angle-right"></i> Safe and Secure
										  </a>
										</h4>
									 </div>
									 <div id="collapseThree-alt3" class="panel-collapse collapse">
										<div class="panel-body">
											Camella guarantees its homeowners’ safety with exquisitely designed guarded entrance gates equipped with CCTV, as well as high perimeter fences, and round-the-clock roving security guards.  These security features allow families to feel safe in their own homes – as should always be the case – and enjoy worry-free lives every single day, making their homes and community safe havens and comfortable escapes from the stresses and fears of city living.
										</div>
									 </div>
								  </div>
								 
								  <div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
											<i class="fa fa-angle-right"></i> Affordable and value-for-money
										  </a>
										</h4>
									 </div>
									 <div id="collapseFour-alt3" class="panel-collapse collapse">
										<div class="panel-body">
											Owning your home is easy through flexible financing schemes and payment options. The money used to pay for rent can now be invested in your own dream home.
										</div>
									 </div>
								  </div>

								  <div class="panel">
									<div class="panel-heading">
									   <h4 class="panel-title">
										 <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFive-alt3">
										   <i class="fa fa-angle-right"></i> Wise Investment
										 </a>
									   </h4>
									</div>
									<div id="collapseFive-alt3" class="panel-collapse collapse">
									   <div class="panel-body">
										   Every Camella home is a landmark of quality and a product of modern technology, built to appreciate in value over time. As more communities are developed, the land value likewise increases, propelling your home investment to profit.
									   </div>
									</div>
								 </div>
								</div>
								<!-- Accordion ends -->
								
							</div>
							
							<div class="col-md-4">
								<div class="block-heading-two">
									<h3><span>Our Five Pillars</span></h3>
								</div>								
								<h6>Excellent Location</h6>
								<div class="progress pb-sm">
								  <!-- White color (progress-bar-white) -->
								  <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
									 <span class="sr-only">100% Complete (success)</span>
								  </div>
								</div>
								<h6>Convenience</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>
								<h6>Safe and Secure</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>
								<h6>Wise Investment</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>
								<h6>Affordable and Value-For-Money</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>
							
							
						</div>
						
						 	<section class="section-padding">
		<div class="container">
		 
			 
			{{-- <div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="about-text">
					<h3><span>Our Organization</span></h3>
						<p>Grids is a responsive Multipurpose Template. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>

						<ul class="withArrow">
							<li><span class="fa fa-angle-right"></span> Lorem ipsum dolor sit amet</li>
							<li><span class="fa fa-angle-right"></span> consectetur adipiscing elit</li>
							<li><span class="fa fa-angle-right"></span> Curabitur aliquet quam id dui</li>
							<li><span class="fa fa-angle-right"></span> Donec sollicitudin molestie malesuada.</li>
						</ul> 
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="about-image">
						<img src="img/about.jpg" alt="About Images">
					</div>
				</div>
			</div>
		</div> --}}
	</section>					
						 
						{{-- <br>
						<!-- Our Team starts -->
				  
						<div class="team-six">
							<div class="row">
								<div class="col-md-3 col-sm-6">
									<!-- Team Member -->
									<div class="team-member">
										<!-- Image -->
										<img class="img-responsive" src="img/team1.jpg" alt="">
										<!-- Name -->
										<h4>Johne Doe</h4>
										<span class="deg">Creative</span> 
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<!-- Team Member -->
									<div class="team-member">
										<!-- Image -->
										<img class="img-responsive" src="img/team2.jpg" alt="">
										<!-- Name -->
										<h4>Jennifer</h4>
										<span class="deg">Programmer</span> 
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<!-- Team Member -->
									<div class="team-member">
										<!-- Image -->
										<img class="img-responsive" src="img/team3.jpg" alt="">
										<!-- Name -->
										<h4>Christean</h4>
										<span class="deg">CEO</span> 
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<!-- Team Member -->
									<div class="team-member">
										<!-- Image -->
										<img class="img-responsive" src="img/team4.jpg" alt="">
										<!-- Name -->
										<h4>Kerinele rase</h4>
										<span class="deg">Manager</span> 
									</div>
								</div>
							</div>
						</div>
						
						<!-- Our team ends -->
					  
						
					</div>
									
				</div> --}}
	</section>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong>MyHome Inc</strong><br>
					JC Main Road, Near Silnile tower<br>
					 Pin-21542 NewYork US.</address>
					<p>
						<i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
						<i class="icon-envelope-alt"></i> email@domainname.com
					</p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Quick Links</h5>
					<ul class="link-list">
						<li><a href="#">Latest Events</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
					<div class="widget">
					<h5 class="widgetheading">Recent News</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="copyright">
						<p>
							<span>&copy; Camella Homes Butuan 2023 All right reserved. Click Here To </span><a href="/login" target="_blank">Login</a>
						</p>
					</div>
				</div>
				<div class="col-sm-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script> 
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- Mirrored from webthemez.com/demo/myhome-real-estate-website-template/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2023 15:44:27 GMT -->
</html>