<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from webthemez.com/demo/myhome-real-estate-website-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2023 15:43:30 GMT -->
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
<!-- logo -->
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper" class="home-page">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="pull-left hidden-xs"><i class="fa fa-clock-o"></i><span>Mon - Sat 8.00 - 18.00. Sunday CLOSED</span> 
        <p class="pull-right"><i class="fa fa-phone"></i>Tel No. (+001) 123-456-789</p>
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
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('about.index')}}">Company</a></li>
                            <li><a href="{{route('announcements.index')}}">Announcements</a></li>
                        </ul>
                    </li> 
						{{-- <li><a class="{{Request::routeIs('about.index') ? 'active' : ''}}" href="{{route('about.index')}}">About Us</a></li> --}}
						<li><a class="{{Request::routeIs('services.index') ? 'active' : ''}}" href="{{route('services.index')}}">Services</a></li>
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
	</header>
	<!-- end header -->
	<section id="banner">
	 
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
				<img src="img/slides/camella1_1920x700.png" alt="" />
                <div class="flex-caption">
                    {{-- <h3>Gated Villas</h3>   --}}
					 
                </div>
              </li>
              <li>
                <img src="img/slides/camella-homes-header1920x700.png" alt="" />
                <div class="flex-caption">
                    {{-- <h3>Trendy Home</h3>   --}}
					 
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider -->
 
	</section>
	
	<section class="section-padding gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2><span class="coloured">Camella</span> Butuan</h2>
						<p>
							Camella Butuan, one of the newest Camella house and lot developments in Northern Mindanao, is strategically located in Villa Kananga, Butuan City. Camella Butuan is a Spanish-inspired house and lot development that is accessible to the city center and other important lifestyle destinations. Camella Butuan is a community of distinctive, affordable homes and outdoor amenities spread out in a landscaped haven of green, with a grand entrance designed to be a major landmark in the whole of Butuan City.
						</p>
					</div>
				</div>
			</div>
			<div class="row service-v1 margin-bottom-40">
            <div class="col-sm-4 md-margin-bottom-40">
               <img class="img-responsive" src="img/greta-model.png" alt="">   
                <h3>Greta Model House</h3>
                <p>Greta is Camella’s most spacious house offering yet, with five spacious bedrooms, three neat toilet-and-baths, a wide two-car carport and a refreshing balcony. Its master’s bedroom is equipped with its own bathtub and a provision for a walk-in closet to give you a luxurious and better living experience. Every moment is great in Greta, where you can find your favorite features for a smart and healthy home.</p>        
            </div>
            <div class="col-sm-4 md-margin-bottom-40">
                <img class="img-responsive" src="img/freya-model.png" alt="">            
                <h3>Freya Model House</h3>
                <p>Freya stands out for its flexible hobby room that you could transform into an office area, a passion corner, or a gallery for your favorite collectibles. This is on top of its five spacious bedrooms, three large toilet-and-baths, and a provision for a carport and a balcony. With all these inclusions, Freya has more than enough space for your expanding family.</p>        
            </div>
            <div class="col-sm-4 md-margin-bottom-40">
              <img class="img-responsive" src="img/ella-model.png" alt="">  
                <h3>Ella Model House</h3>
                <p>Ella does something different with its space. It has a big bedroom next to a bath and toilet on the house’s ground floor, making mobility for engaging in favorite pastimes easy for the elder members of your family. This also frees up more area for the bedrooms upstairs for a total of five rooms. This home gets even more inventive by allocating a provision for a carport and a balcony to complete the grand package. Ella is a perfect home option for bigger families with elderly.</p>        
            </div>
			</div>
			<div class="row service-v1 margin-bottom-40">
			    <div class="col-sm-4 md-margin-bottom-40">
               <img class="img-responsive" src="img/dani-model.png" alt="">   
                <h3>Dani Model House</h3>
                <p>Dani is the perfect home for our moderately-sized families. This house wastes no space and fits four bedrooms to give every single one of your children their own favorite sanctuary. Dani also has three toilet-and-baths, and a provision for a balcony and a carport within its generous area to complete its indulging package.</p>        
            </div>
            <div class="col-sm-4 md-margin-bottom-40">
                <img class="img-responsive" src="img/cara-model.png" alt="">            
                <h3>Cara Model House</h3>
                <p>Cara is Camella’s family starter house offering, with three bedrooms, two toilet-and-baths, and a provision for a single-car carport and a balcony. Start smart and surround your family with your favorite leisure activities and bring them to your beautiful first home here in Camella.</p>        
            </div>
            <div class="col-sm-4 md-margin-bottom-40">
              <img class="img-responsive" src="img/bella-model.png" alt="">  
                <h3>Bella Model House</h3>
                <p>Bella Model House is perfect for people aiming to start owning a piece of a Camella community. With two bedrooms, two bathrooms, and a provision for carport, Bella has just enough space to cover your essential and favorite home basics.</p>        
            </div>
        </div>
		</div>
		</section>
		<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2><span class="coloured">About</span> Camella Butuan</h2>
						<p>Camella is the country’s largest home builder with an excellent reputation in building top-quality homes for over 40 years and counting.</p>
					</div>
				</div>
			</div>
			 
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="about-text">
						<p>Camella Butuan, one of the newest Camella house and lot developments in Northern Mindanao, is strategically located in Villa Kananga, Butuan City. Camella Butuan is a Spanish-inspired house and lot development that is accessible to the city center and other important lifestyle destinations. Camella Butuan is a community of distinctive, affordable homes and outdoor amenities spread out in a landscaped haven of green, with a grand entrance designed to be a major landmark in the whole of Butuan City.</p>

						<ul class="withArrow">
							<li><span class="fa fa-angle-right"></span> Excellent Location</li>
							<li><span class="fa fa-angle-right"></span> Convenient</li>
							<li><span class="fa fa-angle-right"></span> Safe and Secure</li>
							<li><span class="fa fa-angle-right"></span> Wise Investment</li>
							<li><span class="fa fa-angle-right"></span> Affordable and Value-For-Money</li>
							
							
						</ul>
						<a href="{{route('about.index')}}" class="btn btn-primary">Learn More</a>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="about-image">
						<img src="img/about_camela.png" alt="About Images">
					</div>
				</div>
			</div>
		</div>
	</section>
 
	
	<section id="content">
	<div class="container"> 
			<div class="row">
		<div class="skill-home"> <div class="skill-home-solid clearfix"> 
		<div class="col-md-3 col-sm-6 text-center">
		<span class="icons c1"><i class="fa fa-home"></i></span> <div class="box-area">
		<h3>New Projects</h3> <p>Impelled by its mission to build homes wherever Filipinos choose to live, Camella has established communities in more cities, towns, and provinces farther across the country than any other property developer. </p></div>
		</div>
		<div class="col-md-3 col-sm-6 text-center"> 
		<span class="icons c2"><i class="fa fa-rocket"></i></span> <div class="box-area">
		<h3>Ready To Move</h3> <p>This beautifully designed, ready-to-move-in home is the perfect blend of style and functionality. Boasting an open-concept floor plan, the spacious living room flows seamlessly into the kitchen and dining area, creating the perfect space for entertaining. The kitchen features granite countertops, stainless steel appliances, and plenty of storage space. </p></div>
		</div>
		<div class="col-md-3 col-sm-6 text-center"> 
		<span class="icons c3"><i class="fa fa-trophy"></i></span> <div class="box-area">
		<h3>Commercial</h3> <p>This versatile commercial property is ready for your business to thrive. The open floor plan allows for endless possibilities and the high ceilings and natural light create a welcoming and professional atmosphere. The property is equipped with ample parking, making it easy for customers and clients to access the building. </p></div>
		</div>
		<div class="col-md-3 col-sm-6 text-center"> 
		<span class="icons c4"><i class="fa fa-star"></i></span> <div class="box-area">
		<h3>Gated Projects</h3> <p>Experience luxury living in this gated community. This exclusive development offers a tranquil and secluded atmosphere, while still being conveniently located close to amenities. The lush landscaping, tranquil ponds, and beautiful water features create a peaceful and serene environment. </p>
		</div></div>
		</div></div>
		</div> 
	  
	</div>
	
	{{-- <section class="section-padding noTopMrgn gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2><span class="coloured">Trending</span> Projects</h2>
						<p>Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada Pellentesque <br>ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
					</div>
				</div>
			</div>
			<div class="row service-v1 margin-bottom-40">
            <div class="col-sm-3 md-margin-bottom-40">
               <img class="img-responsive" src="img/img1.jpg" alt="">   
                <h3>Apartments</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>    
            </div>
            <div class="col-sm-3 md-margin-bottom-40">
                <img class="img-responsive" src="img/img2.jpg" alt="">            
                <h3>luxury Villas</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>          
            </div>
            <div class="col-sm-3 md-margin-bottom-40">
              <img class="img-responsive" src="img/img3.jpg" alt="">  
                <h3>Gated Projects</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>    
            </div> 
			    <div class="col-sm-3 md-margin-bottom-40">
               <img class="img-responsive" src="img/img4.jpg" alt="">   
                <h3>Apartments</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>    
            </div> 
        </div>
		</div>
		</section>
	
	
	</section> --}}
		  
	
				
					

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
							<span>&copy; Bootstrap Template 2018 All right reserved. Template By </span><a href="http://webthemez.com/free-bootstrap-templates/" target="_blank">WebThemez</a>
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

<!-- Mirrored from webthemez.com/demo/myhome-real-estate-website-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2023 15:44:04 GMT -->
</html>