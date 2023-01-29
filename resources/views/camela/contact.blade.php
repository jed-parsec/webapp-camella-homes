

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from webthemez.com/demo/myhome-real-estate-website-template/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2023 15:44:38 GMT -->
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
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
						 <li >
							<a href="{{route('about.index')}}" >About Us</a>
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
				<h2 class="pageTitle">Contact Us</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	
	<div class="container">
		<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h2><span class="coloured">Get</span> in Touch</h2>
									<p>Don't miss this opportunity to own a piece of this prime real estate. Get in touch with us today to schedule a viewing and take the first step towards making this property your own. Our team of experienced real estate agents are ready to help you every step of the way, and answer any questions you may have. Contact us now to make your dream of owning a property a reality.</p>
                                    	<p>If you're interested in learning more about this property, or would like to schedule a viewing, please fill out the contact form below. Our team of experienced real estate agents will be in touch with you shortly to answer any questions you may have and assist you in the process of making this property your own. We are dedicated to providing you with the best possible service and look forward to helping you find your dream home.</p>
								</div>  
							</div>
						</div>
	<div class="row">
								<div class="col-md-6">
									
								  	
		   <!-- Form itself -->
          <form action="{{ route('contact.store') }}" name="sentMessage" id="contactForm"  novalidate>
            {{-- <form action="#" name="sentMessage" id="contactForm"  novalidate> --}}
	       
			<h3>Contact Us</h3>
		 <div class="control-group">
                    <div class="controls">
			<input type="text" class="form-control" 
			   	   placeholder="Full Name" id="name" required
			           data-validation-required-message="Please enter your name" />
			  <p class="help-block"></p>
		   </div>
	         </div> 	
                <div class="control-group">
                  <div class="controls">
			<input type="email" class="form-control" placeholder="Email" 
			   	            id="email" required
			   		   data-validation-required-message="Please enter your email" />
		</div>
	    </div> 	
			  
               <div class="control-group">
                 <div class="controls">
				 <textarea rows="10" cols="100" class="form-control" 
                       placeholder="Message" id="message" required
		       data-validation-required-message="Please enter your message" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
		</div>
               </div> 		 
	     <div id="success"> </div> <!-- For success/fail messages -->
	    <button type="submit" class="btn btn-primary pull-right">Send</button><br />
          </form>
								</div>
								{{-- <div class="map-container">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31530.415945423592!2d125.53563516399916!3d8.944294675214435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3301eacf2fbf248d%3A0xbdb2d15f74b50da2!2sCamella%20Prima%20Butuan%20%7C%20House%20and%20Lot%20in%20Butuan!5e0!3m2!1sen!2sph!4v1673544468453!5m2!1sen!2sph" width="600" height="450" style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								 </div> --}}
							</div>
	</div>

	<div class="map-container">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31530.415945423592!2d125.53563516399916!3d8.944294675214435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3301eacf2fbf248d%3A0xbdb2d15f74b50da2!2sCamella%20Prima%20Butuan%20%7C%20House%20and%20Lot%20in%20Butuan!5e0!3m2!1sen!2sph!4v1673544468453!5m2!1sen!2sph" width="600" height="450" style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

 <script src="js/jqBootstrapValidation.js"></script>
 <script src="js/contact_me.js"></script>
</body>

<!-- Mirrored from webthemez.com/demo/myhome-real-estate-website-template/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2023 15:44:40 GMT -->
</html>