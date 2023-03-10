<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from webthemez.com/demo/myhome-real-estate-website-template/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2023 15:44:21 GMT -->
<head>
<meta charset="utf-8">
<title>Camella Butuan   </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com/" />
<!-- css -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{asset('css/fancybox/jquery.fancybox.css')}}" rel="stylesheet"> 
<link href="{{asset('css/flexslider.css')}}" rel="stylesheet" />
<link href="{{asset('css/style.css')}}" rel="stylesheet" />
 
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
		<p class="pull-left hidden-xs"><i class="fa fa-clock-o"></i><span>Mon - Sun 9:00 AM - 6:00 PM</span>
			<p class="pull-right"><i class="fa fa-phone"></i>Cellphone No. (+63) 94 234 31765</p>
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
							<a href="{{route('about.index')}}" class="dropdown-toggle">About Us</a>
							{{-- <ul class="dropdown-menu">
								<li><a href="{{route('about.index')}}">Company</a></li>
								<li><a href="{{route('announcements.index')}}">Announcements</a></li>
							</ul> --}}
                    </li> 
						{{-- <li><a class="{{Request::routeIs('about.index') ? 'active' : ''}}" href="{{route('about.index')}}">About Us</a></li> --}}
						<li><a class="{{Request::routeIs('services.index') ? 'active' : ''}}" href="{{route('services.index')}}">Amenities</a></li>
                        <li><a class="{{Request::routeIs('projects.index') ? 'active' : ''}}" href="{{route('projects.index')}}">Properties</a></li>
                        {{-- <li><a class="{{Request::routeIs('pricing.index') ? 'active' : ''}}" href="{{route('pricing.index')}}">Pricing</a></li> --}}
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
				<h2 class="pageTitle">Announcement</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<section class="section-padding">
		<div class="container">
			<div class="row showcase-section">
				<div class="col-md-6">
					<img src="{{asset($announcement->imagePath)}}" alt="showcase image">
				</div>
				<div class="col-md-6">
					<div class="about-text">
						{{-- <h2><span class="coloured">About</span> Company</h2> --}}
                        <h2>{{$announcement->title}}</h2>
						{{-- <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Vivamus suscipit tortor eget felis porttitor volutpat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.</p>
						 <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo..</p> --}}
						 {!!$announcement->body!!}
					</div>
				</div>
			</div>
		</div>
	</section>
	{{-- <div class="container">
					
					<div class="about">
				
						
						<div class="row">
							<div class="col-md-4">
								<!-- Heading and para -->
								<div class="block-heading-two">
									<h3><span>Why Choose Us?</span></h3>
								</div>
								<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. <br/><br/>Sed ut perspiciaatis iste natus error sit voluptatem probably haven't heard of them accusamus.</p>
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
											<i class="fa fa-angle-right"></i> Accordion Heading Text Item # 1
										  </a>
										</h4>
									 </div>
									 <div id="collapseOne-alt3" class="panel-collapse collapse">
										<!-- Panel body -->
										<div class="panel-body">
										  Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
										</div>
									 </div>
								  </div>
								  <div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
											<i class="fa fa-angle-right"></i> Accordion Heading Text Item # 2
										  </a>
										</h4>
									 </div>
									 <div id="collapseTwo-alt3" class="panel-collapse collapse">
										<div class="panel-body">
										  Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
										</div>
									 </div>
								  </div>
								  <div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
											<i class="fa fa-angle-right"></i> Accordion Heading Text Item # 3
										  </a>
										</h4>
									 </div>
									 <div id="collapseThree-alt3" class="panel-collapse collapse">
										<div class="panel-body">
										  Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
										</div>
									 </div>
								  </div>
								  <div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
											<i class="fa fa-angle-right"></i> Accordion Heading Text Item # 4
										  </a>
										</h4>
									 </div>
									 <div id="collapseFour-alt3" class="panel-collapse collapse">
										<div class="panel-body">
										  Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
										</div>
									 </div>
								  </div>
								</div>
								<!-- Accordion ends -->
								
							</div>
							
							<div class="col-md-4">
								<div class="block-heading-two">
									<h3><span>Our Expertise</span></h3>
								</div>								
								<h6>Web Development</h6>
								<div class="progress pb-sm">
								  <!-- White color (progress-bar-white) -->
								  <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>
								<h6>Designing</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>
								<h6>User Experience</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-lblue" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>
								<h6>Development</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>
							</div>
							
						</div>
						
						 	<section class="section-padding">
		<div class="container">
		 
			 
			<div class="row">
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
		</div>
	</section>					 --}}
						 
						<br>
						<!-- Our Team starts -->
				  
						{{-- <div class="team-six">
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
						</div> --}}
						
						<!-- Our team ends -->
					  
						
					</div>
									
				</div>
	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="widget">
						<h5 class="widgetheading">Our Contact</h5>
						<address>
						<strong>Camella Butuan</strong><br>
						Daang Maharlika Highway, Butuan City<br>
						8600 Agusan Del Norte</address>
						<p>
							<i class="icon-phone"></i> (+63) 94 234 31765 <br>
							<i class="icon-envelope-alt"></i> camellamindanao.sales@gmail.com
	
						</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="widget">
						<h5 class="widgetheading">Quick Links</h5>
						<ul class="link-list">
							<li><a href="{{route('landing.index')}}">Home</a></li>
							<li><a href="{{route('about.index')}}">About Us</a></li>
							<li><a href="{{route('services.index')}}">Amenities</a></li>
							<li><a href="{{route('projects.index')}}">Properties</a></li>
							<li><a href="{{route('pricing.index')}}">Pricing</a></li>
							<li><a href="{{route('contact.index')}}">Contact us</a></li>
						</ul>
					</div>
				</div>
				{{-- <div class="col-sm-3">
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
				</div> --}}
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
							<li><a href="https://www.facebook.com/OfficialCamellaButuan/" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/camellamindawow" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.instagram.com/camellaofficial" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>

							
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
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('js/jquery.fancybox-media.js')}}"></script> 
<script src="{{asset('js/jquery.flexslider.js')}}"></script>
<script src="{{asset('js/animate.js')}}"></script>
<!-- Vendor Scripts -->
<script src="{{asset('js/modernizr.custom.js')}}"></script>
<script src="{{asset('js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/animate.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>

<!-- Mirrored from webthemez.com/demo/myhome-real-estate-website-template/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2023 15:44:27 GMT -->
</html>

