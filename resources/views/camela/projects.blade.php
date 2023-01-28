<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from webthemez.com/demo/myhome-real-estate-website-template/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2023 15:44:30 GMT -->
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
<!-- Vendor Styles -->
<link href="css/magnific-popup.css" rel="stylesheet"> 
<!-- Block Styles -->
<link href="css/style.css" rel="stylesheet" />
<link href="css/gallery-1.css" rel="stylesheet">
 
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
				<h2 class="pageTitle">Featured Properties</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
	
						<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h2><span class="coloured">House</span> Models</h2>
									<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
                                    	<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
								</div>  
							</div>
						</div> 
						
	</div>
	</section>	
			  <!-- Start Gallery 1-2 -->
    <section id="gallery-1" class="content-block section-wrapper gallery-1">
    	 	<div class="container">

			<div class="editContent">
	            <ul class="filter">
	                <li class="active"><a href="#" data-filter="*">All</a></li>
	                <li><a href="#" data-filter=".grande_houses">Grande Houses</a></li>
	                <li><a href="#" data-filter=".easyhome_series">EasyHomes Series</a></li>
	                <li><a href="#" data-filter=".l-series">L-Series Enclave</a></li>
	                <li><a href="#" data-filter=".townhouse">Townhouse Enclave</a></li>
	                <li><a href="#" data-filter=".housing">Lot Only (110 sqm)</a></li>
	            </ul>
			</div>
            <!-- /.gallery-filter -->
            
            <div class="row">
                <div id="isotope-gallery-container">


                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper grande_houses greta">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/grande_greta.png" class="img-responsive" alt="1st gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/grande_greta.png" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
	                                <h5>Greta House Model</h5>
                            	</div>
                            	<div class="editContent">
	                                <p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
							
                        </div>
                    </div>

					<div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper grande_houses freya">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/grande_freya.png" class="img-responsive" alt="1st gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/grande_freya.png" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
	                                <h5>Freya House Model</h5>
                            	</div>
                            	<div class="editContent">
	                                <p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
							
                        </div>
                    </div>

					



					
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper l-series ezabelle">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/l-series_ezabelle.png" class="img-responsive" alt="2nd gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/l-series_ezabelle.png" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>Ezabelle House Model</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->


					<!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper l-series criselle">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/l-series_criselle.png" class="img-responsive" alt="2nd gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/l-series_criselle.png" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>Ezabelle House Model</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper easyhome_series ella">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/easyhome_ella.png" class="img-responsive" alt="4th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/easyhome_ella.png" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>Ella House Model</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div>

					<div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper easyhome_series dani">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/easyhome_dani.png" class="img-responsive" alt="4th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/easyhome_dani.png" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>Dani House Model</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div>



					<div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper easyhome_series cara">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/easyhome_cara.png" class="img-responsive" alt="4th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/easyhome_cara.png" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>Cara House Model</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div>


					<div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper easyhome_series bella">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/easyhome_bella.png" class="img-responsive" alt="4th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/easyhome_bella.png" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>Bella House Model</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div>


					<div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper easyhome_series alli">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/easyhome_alli.png" class="img-responsive" alt="4th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/easyhome_alli.png" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>Alli House Model</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div>


					<div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper townhouse alli">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/townhouse_arielle.png" class="img-responsive" alt="4th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/townhouse_arielle.png" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>Alli House Model</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div>


					<div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper housing 110-SQM">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/lot-only_110sqm.png" class="img-responsive" alt="1st gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/lot-only_110sqm.png" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
	                                <h5>Lot Only - 110 SQM</h5>
                            	</div>
                            	<div class="editContent">
	                                <p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
							
                        </div>
                    </div>

                    
                    
                </div>
                <!-- /.isotope-gallery-container -->
            </div>
            <!-- /.row --> 
        <!-- /.container -->
		</div>
    </section>
    <!--// End Gallery 1-2 -->  
	</div>
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
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
 
</body>

<!-- Mirrored from webthemez.com/demo/myhome-real-estate-website-template/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2023 15:44:38 GMT -->
</html>