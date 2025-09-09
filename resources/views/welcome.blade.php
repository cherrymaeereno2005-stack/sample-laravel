<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cherry on Top</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/x-icon" href="../../../cherry/images/favicon.png">


	

	<!-- CSS
        ================================================ -->
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="../../../cherry/css/owl.carousel.css">
	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="../../../cherry/css/bootstrap.min.css">
	<!-- Font-awesome.min css -->
	<link rel="stylesheet" href="../../../cherry/css/font-awesome.min.css">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="../../../cherry/css/animate.min.css">

	<link rel="stylesheet" href="../../../cherry/css/main.css">
	<!-- Responsive Stylesheet -->
	<link rel="stylesheet" href="../../../cherry/css/responsive.css">
	<!-- Js -->
	<script src="../../../cherry/js/vendor/modernizr-2.6.2.min.js"></script>
	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
	<script>
		window.jQuery || document.write('<script src="../../../cherry/js/vendor/jquery-1.10.2.min.js"><ph/script>')
	</script>
	<script src="../../../cherry/js/jquery.nav.js"></script>
	<script src="../../../cherry/js/jquery.sticky.js"></script>
	<script src="../../../cherry/js/bootstrap.min.js"></script>
	<script src="../../../cherry/js/plugins.js"></script>
	<script src="../../../cherry/js/wow.min.js"></script>
	<script src="../../../cherry/js/main.js"></script>
</head>

<body>
	<!--
	header-img start 
	============================== -->
	<section id="home">
		<img class="img-responsive" src="../../../cherry/images/header.jpg" alt="">
	</section>
	<!--
    Header start 
	============================== -->
	<nav id="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<nav class="navbar navbar-default">
							<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
										data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="#">
										<img src="../../../cherry/images/rsz_logo.png" alt=>
									</a>

								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav navbar-right" id="top-nav">
										<li><a href="#home">Home</a></li>
										<li><a href="#author">Author</a></li>
										<li><a href="#blog">Blog</a></li>
										<li><a href="#more">more</a></li>
										<li><a href="#news">news</a></li>
										<li><a href="#contacts">contacts</a></li>
										<li>
											<a href="#" onclick= "event.preventDefault();getElementById('logout-form').submit();">
												Log out</a>
										</a>
										<form id="logout-form" method="POST" action="{{route('logout')}}"style="display: none;">
											@csrf
										</form>
										</li>
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.container-fluid -->
						</nav>
					</div>
				</div><!-- .col-md-12 close -->
			</div><!-- .row close -->
		</div><!-- .container close -->
	</nav><!-- header close -->
	<!--
    Slider start
    ============================== -->
	<section id="slider">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="title">
							<h3>Places to <span>Visit in DALAGUETE</span></h3>
						</div>
						<div id="owl-example" class="owl-carousel">
							<div>
								<img class="img-responsive" src="../../../cherry/images/slider/slider-img-1.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="../../../cherry/images/slider/slider-img-2.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="../../../cherry/images/slider/slider-img-3.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="../../../cherry/images/slider/slider-img-4.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="../../../cherry/images/slider/slider-img-1.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="../../../cherry/images/slider/slider-img-2.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="../../../cherry/images/slider/slider-img-3.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="../../../cherry/images/slider/slider-img-4.jpg" alt="">
							</div>

						</div>
					</div>
				</div><!-- .col-md-12 close -->
			</div><!-- .row close -->
		</div><!-- .container close -->
	</section><!-- slider close -->
	<!--
    author start
    ============================== -->
	<section id="author">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<img class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms" src="../../../cherry/images/cooker-img.png"
							alt="cooker-img">
						<h1 class="heading wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms">The
							<span>Author</span> </br>  <span></span>
						</h1>
						<p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">
							She is someone who enjoys quiet moments 
							with a good book and finds peace in music. She loves to play instruments and is part of the Praise and Worship team. She’s not one for loud introductions, but she shows up where it counts.
                           Dalaguete is one of her favorite places—it’s calm, beautiful, and full of spots to explore. 
                         That’s the kind of vibe she likes: simple, sincere, and a little mysterious.

						</p>

	
					</div>
				</div><!-- .col-md-12 close -->
			</div><!-- .row close -->
		</div><!-- .containe close -->
	</section><!-- #call-to-action close -->
	<!--
    blog start
    ============================ -->
	<section id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<h1 class="heading">Recommended <span>TOURIST</span> <span>ATTRACTIONS</span></h1>
						<ul>
							<li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="300ms">
								<div class="blog-img">
									<img src="../../../cherry/images/blog/blog-img-1.jpg" alt="blog-img">
								</div>
								<div class="content-right">
									<h3>Osmeña Peak</h3>
									<p>Osmeña Peak is the highest point on Cebu Island and one of its most iconic natural attractions.

									</p>
								</div>
							</li>
							<li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="400ms">
								<div class="blog-img">
									<img src="../../../cherry/images/blog/blog-img-2.jpg" alt="blog-img">
								</div>
								<div class="content-right">
									<h3>Kandungaw Peak</h3>
									Kandungaw Peak is an emerging destination that offers breathtaking views.
								</div>
							</li>
							<li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="500ms">
								<div class="content-left">
									<h3>Obong Spring</h3>
									<p>The Obong Spring is a fresh water spring which emanates near the beach
									</p>
								</div>
								<div class="blog-img-2">
									<img src="../../../cherry/images/blog/blog-img-3.jpg" alt="blog-img">
								</div>
							</li>
							<li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="600ms">
								<div class="content-left">
									<h3>Enchanted Mountain </h3>
									<p>Enchanted Mountain Cebu, Dalaguete · Disneyland feels in Dalaguete, Cebu.
									</p>
								</div>
								<div class="blog-img-2">
									<img src="../../../cherry/images/blog/blog-img-4.jpg" alt="blog-img">
								</div>
							</li>
							<li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="700ms">
								<div class="blog-img">
									<img src="../../../cherry/images/blog/blog-img-5.jpg" alt="blog-img">
								</div>
								<div class="content-right">
									<h3>Sunflower Farm</h3>
									<p> The Sunflower Garden or the “I Love Dalaguete Flower Farm” in Mantalongon, Dalaguete.
									</p>
								</div>
							</li>
							<li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
								<div class="blog-img">
									<img src="../../../cherry/images/blog/blog-img-6.jpg" alt="blog-img">
								</div>
								<div class="content-right">
									<h3>Casino Peak</h3>
									<p>
										Casino Peak, located in the neighboring Sitio Lugsangan rivals or even surpasses the view of Osmena. Its backdrop are lush and high mountains.
									</p>
								</div>
							</li>
						</ul>
						<a class="btn btn-default btn-more-info wow bounceIn" data-wow-duration="500ms" data-wow-delay="1200ms"
							href="#" role="button">More Info</a>
					</div>
				</div><!-- .col-md-12 close -->
			</div><!-- .row close -->
		</div><!-- .containe close -->
	</section><!-- #blog close -->
	<!--
    price start
    ============================ -->
	<section id="more">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<h1 class="heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">all
							<span>About</span>  <span>Dalaguete</span></h1>
						<p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">The dalakit (Ficus benjamina) tree is the foundation
							 of the origin and name of Dalaguete.
							 The natives look upon the tree not for its gigantic size, 
							 nor for its fruit which is of no use, but rather for the religious observance of the natives. They highly 
							 consider this tree for their belief that it harbors spirits or diwatas who could impose sickness 
							 if maltreated or hand in fortunes and gifts if placated. When fully grown, the intertwining roots are exposed
							  from the earth and form huge caverns that could house several people. </p>
						<div class="pricing-list">
							<div class="title">
								<h2>Dalaguete <span>fun Facts</span></h2>
							</div>
							<ul>
								<li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
									<div class="item">
										<div class="item-title">
											<h2>"Little Baguio" of Cebu</h2>
											<div class="border-bottom"></div>
											<span></span>
										</div>
										<p>Dalaguete, Cebu, is known for its
											 "Little Baguio" climate in its highlands, abundant vegetable farms, and historical sites</p>
									</div>
								</li>
								<li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
									<div class="item">
										<div class="item-title">
											<h2>Osmeña Peak and Mantalongon Ranges</h2>
											<div class="border-bottom"></div>
											<span></span>
										</div>
										<p>It's also a popular destination for nature lovers, offering attractions
											 like Osmeña Peak, Mantalongon mountain ranges, and the Dalaguete Beach Park</p>
									</div>
								</li>
								<li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
									<div class="item">
										<div class="item-title">
											<h2>Vegetable Basket of Cebu</h2>
											<div class="border-bottom"></div>
											<span></span>
										</div>
										<p>The town is a major producer of vegetables, supplying around 60 tons daily to Cebu City.</p>
									</div>
								</li>
								<li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">
									<div class="item">
										<div class="item-title">
											<h2>Historical Significance</h2>
											<div class="border-bottom"></div>
											<span></span>
										</div>
										<p>Dalaguete boasts Spanish-period structures like the Roman Catholic Cemetery with its preserved arch and
											 old Simborio, and a watchtower near Obong Spring, highlighting its rich history. </p>
									</div>
								</li>
								<li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="700ms">
									<div class="item">
										<div class="item-title">
											<h2>Cultural Significance</h2>
											<div class="border-bottom"></div>
											<span></span>
										</div>
										<p>Dalaguete's culture is deeply rooted in its traditions, 
											including religious practices and celebrations like the festival 
											
								</li>
								<li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
									<div class="item">
										<div class="item-title">
											<h2>Obong Spring and the Dalakit Tree</h2>
											<div class="border-bottom"></div>
											<span></span>
										</div>
										<p>The famous Obong Spring is said to be near the dalakit (Ficus benjamina) tree that is the
											 origin of the town's name, where locals believe spirits reside. </p>
									</div>
								</li>
							</ul>
							<a class="btn btn-default pull-right wow bounceIn" data-wow-duration="500ms" data-wow-delay="1200ms"
								href="#" role="button">More Info</a>
						</div>
					</div>
				</div><!-- .col-md-12 close -->
			</div><!-- .row close -->
		</div><!-- .containe close -->
	</section><!-- #price close -->
	<!--
    news start
    ============================ -->
	<section id="news">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<h1 class=" heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms"> I
							<span>LOVE </span> DALAGUETE</h1>
						<p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">Dalaguete is a coastal municipality in the province of Cebu, Central Visayas region (Region VII), Philippines. </p>
						<form class="form-inline">
							<div class="form-group">
								<div class="input-group">
									<input type="text" class="form-control" id="exampleInputAmount"
										placeholder="Enter your email to subsribe...">
									<div class="input-group-addon">
										<button class="btn btn-default" type="submit">news</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div><!-- .col-md-12 close -->
			</div><!-- .row close -->
		</div><!-- .containe close -->
	</section><!-- #news close -->
	<!--
    CONTACT US  start
    ============================= -->
	<section id="contacts">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
							<span>CONTACT US</span></h1>
						<h3 class="title wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">Sign Up for
							<span>Email Alerts</span> </h3>
						<form>
							<div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
								<input type="email" class="form-control" id="exampleInputEmail1"
									placeholder="Write your full name here...">
							</div>
							<div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="800ms">
								<input type="text" class="form-control" placeholder="Write your email address here...">
							</div>
							<div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1000ms">
								<textarea class="form-control" rows="3" placeholder="Write your message here..."></textarea>
							</div>
						</form>
						<a class="btn btn-default wow bounceIn" data-wow-duration="500ms" data-wow-delay="1300ms" href="#"
							role="button">send your message</a>
					</div>
				</div><!-- .col-md-12 close -->
			</div><!-- .row close -->
		</div><!-- .container close -->
	</section><!-- #contacts close -->
	<!--
    footer  start
    ============================= -->
	<section id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="block wow fadeInLeft" data-wow-delay="200ms">
						<h3>CONTACT <span>INFO</span></h3>
						<div class="info">
							<ul>
								<li>
									<h4><i class="fa fa-phone"></i>Telephone</h4>
									<p>(63+) 908 764 6758 </p>

								</li>
								<li>
									<h4><i class="fa fa-map-marker"></i>Address</h4>
									<p>Dalaguete, Central Visayas 6022.</p>
								</li>
								<li>
									<h4><i class="fa fa-envelope"></i>E-mail</h4>
									<p>dalaguete123@gmail.com - dalg@mail.ru</p>

								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- .col-md-4 close -->
				<div class="col-md-4">
					<div class="block wow fadeInLeft" data-wow-delay="700ms">
						<h3>OTHER <span>DESTINATIONS </span></h3>
						<div class="blog">
							<ul>
								<li>
									<h4><a href="#">Tingko Beach</a></h4>
									<p>A popular beach in Dalaguete with a public beach known for its cleanliness</p>
								</li>
								<li>
									<h4><a href="#">Dalaguete Public Market	</a></h4>
									<p>A place to experience local life and purchase fresh produce and goods. </p>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- .col-md-4 close -->
				<div class="col-md-4">
					<div class="block wow fadeInLeft" data-wow-delay="1100ms">
						<div class="gallary">
							<h3>PHOTO <span>STREAM</span></h3>
							<ul>
								<li>
									<a href="#"><img src="../../../cherry/images/photo/photo-1.PNG" alt=""></a>
								</li>
								<li>
									<a href="#"><img src="../../../cherry/images/photo/photo-2.jpg" alt=""></a>
								</li>
								<li>
									<a href="#"><img src="../../../cherry/images/photo/photo-3.jpg" alt=""></a>
								</li>
								<li>
									<a href="#"><img src="../../../cherry/images/photo/photo-4.jpg" alt=""></a>
								</li>
							</ul>
						</div>
						<div class="social-media-link">
							<h3>Follow <span>ME</span></h3>
							<ul>
								<li>
									<a href="#">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-dribbble"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-behance"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- .col-md-4 close -->
			</div><!-- .row close -->
		</div><!-- .containe close -->
	</section><!-- #footer close -->
	<!--
    footer-bottom  start
    ============================= -->
	<footer id="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="block">
						<!--<p>Copyright &copy; 2014 - All Rights Reserved.Design and Developed By <a
								href="http://www.themefisher.com">Themefisher</a> 
							</p>-->

							<p>Ereño, Cherry Mae B. BSIT-3B</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>

</html>