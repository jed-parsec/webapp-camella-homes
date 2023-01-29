<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from webthemez.com/demo/myhome-real-estate-website-template/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2023 15:44:27 GMT -->
<head>
<meta charset="utf-8">
<title>Camella Butuan</title>
<link rel="icon" type="images/png" href="img/index.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com/" />
 
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
						 <li>
							<a href="{{route('about.index')}}">About Us</a>
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
				<h2 class="pageTitle">Amenities</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
		<div class="container content">		
        <!-- Service Blcoks -->
			
						<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h2><span class="coloured">Awesome</span> Facilities</h2>
									<p>Experience the best in luxury living with our awesome amenities. From a regulation-size basketball court and sparkling swimming pool, to beautifully landscaped parks and a playground for children, we have something for everyone. Host events in our clubhouse's event room, relax in our gazebo, and enjoy added security with our entrance gate that features CCTV surveillance and 24/7 monitoring. With so many amenities, you'll never run out of things to do at our community.</p>
                                    	
								</div>  
							</div>
						</div>
						 
						    <!-- Info Blcoks -->
        <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-check"></i>
                <div class="info-blocks-in">
                    <h3>Basketball Court</h3>
                    <p>Get active on our regulation-size basketball court, perfect for pick-up games or practicing your skills. High-quality hoops and an outdoor setting ensure a great experience. Come and join the fun!</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-check"></i>
                <div class="info-blocks-in">
                    <h3>Clubhouse</h3>
                    <p>Our Clubhouse features a fitness center, swimming pool, and lounge areas for residents to relax and socialize. Host events in our clubhouse's event room, or catch up on work in the business center. It's a perfect place to unwind and connect with your neighbours.</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-check"></i>
                <div class="info-blocks-in">
                    <h3>Entrance Gate with CCTV and 24/7</h3>
                    <p>Experience added security with our entrance gate that features CCTV surveillance and 24/7 monitoring. You can rest easy knowing that your safety is our top priority.</p>
                </div>
            </div>
        </div>
        <!-- End Info Blcoks -->

       
        <!-- Info Blcoks -->
        <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-check"></i>
                <div class="info-blocks-in">
                    <h3>Gazebo</h3>
                    <p>Relax and take in the beautiful scenery under our Gazebo, a perfect spot for picnics and outdoor gatherings.</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-check"></i>
                <div class="info-blocks-in">
                    <h3>Landscaped Parks</h3>
                    <p>Experience nature in the heart of the city with our beautifully landscaped parks, perfect for walks and picnics.</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-check"></i>
                <div class="info-blocks-in">
                    <h3>Playground</h3>
                    <p>Watch your children play and have fun in our safe and modern playground, featuring a variety of play structures and equipment to keep them active and entertained.</p>
                </div>
            </div>
        </div>

		<div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-check"></i>
                <div class="info-blocks-in">
                    <h3>Marketing Tent</h3>
                    <p>Promote your brand or business in style with our state-of-the-art marketing tent. With ample space and customizable options, it's perfect for events, trade shows, and outdoor promotions.</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-check"></i>
                <div class="info-blocks-in">
                    <h3>Swimming Pool</h3>
                    <p>Take a dip in our sparkling swimming pool, perfect for both exercise and relaxation. With ample space and comfortable lounge chairs, it's the perfect place to spend a hot summer day.</p>
                </div>
        </div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
        <!-- End Info Blcoks -->
        <div class="row service-v1 margin-bottom-40">
            <div class="col-md-4 md-margin-bottom-40">
               <img class="img-responsive" src="img/amenities-clubhouse.png" alt="">   
                <h3>Clubhouse</h3>
                <p>Relax and socialize in our luxurious clubhouse, equipped with state-of-the-art amenities such as lounge areas, event room, and a business center. It's the perfect place to unwind and connect with your neighbours.</p>        
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="img/amenities-swimming_pool.png" alt="">            
                <h3>Swimming Pool</h3>
                <p>Beat into our refreshing swimming pool, perfect for a refreshing dip and relaxation. Well-maintained and with plenty of space, it offers a great spot to cool off and unwind.</p>        
            </div>
            <div class="col-md-4 md-margin-bottom-40">
              <img class="img-responsive" src="img/amenities_basketball-court.png" alt="">  
                <h3>Basketball Court</h3>
                <p>Get your game on with our regulation-size basketball court, perfect for pick-up games or practicing your skills. High-quality hoops and an outdoor setting make it a great spot to stay active and have fun.</p>        
            </div>

            
        </div>
        <!-- End Service Blcoks -->
 
     

        
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
                            {{-- <li><a href="{{route('pricing.index')}}">Pricing</a></li> --}}
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

<!-- Mirrored from webthemez.com/demo/myhome-real-estate-website-template/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2023 15:44:30 GMT -->
</html>