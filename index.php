<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
	<title>Vacation a Travel Agency Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
	<!--mobile apps-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Vacation Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--mobile apps-->
	<!--Custom Theme files -->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="css/lightbox.css">
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<!-- //Custom Theme files -->
	<!-- js -->
	<script src="js/jquery-1.11.1.min.js"></script> 
	<!-- //js -->
	<!--web-fonts-->
	<link href='//fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<!--//web-fonts-->
</head>
<body>
	<!--banner-->
	<div class="banner">
		<!--navigation-->
		<div class="top-nav" style="border-bottom: 3px solid #E51D24">
			<div class="container">
				<div class="navbar-header logo">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1 class="wow fadeInUp animated" data-wow-delay=".5s"><a href="index.html">Kaizen Team</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-right menu__list menu--shylock">
						<li class="menu__item menu__item--current"><a href="index.html" class="menu__link">Home</a></li>
						<li class="menu__item"><a href="#about" class="menu__link scroll">About</a></li>
						<li class="menu__item"><a href="#services" class="menu__link scroll">Services</a></li>
						<li class="menu__item"><a href="#portfolio" class="menu__link scroll">Galary</a></li>
						<li class="menu__item"><a href="#contact" class="menu__link scroll">Contact</a></li>
					</ul>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>	
		<!--//navigation-->
		
		<div class="fullscreen-bg">
			<video loop muted autoplay poster="images/banner.jpg" class="fullscreen-bg__video">
				<source src="videos/kaizen.mp4" type="video/mp4">
				<source src="videos/kaizen.webm" type="video/webm">
			</video>
		</div>

		<div class="banner-text">
			<!--banner Slider starts Here-->
			<script>
				// You can also use "$(window).load(function() {"
				$(function () {
				  // Slideshow 3
				  $("#slider3").responsiveSlides({
					auto: true,
					pager: false,
					nav: true,
					speed: 500,
					namespace: "callbacks",
					before: function () {
					  $('.events').append("<li>before event fired.</li>");
					},
					after: function () {
					  $('.events').append("<li>after event fired.</li>");
					}
				  });
			
				});
			</script>
			<!--//End-slider-script-->
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-text-info">
							<h2 class="bnr-title wow zoomIn animated" data-wow-delay=".5s">HTML5 / CSS3</h2>	
							<p class="wow fadeInDown animated" data-wow-delay=".7s">Lập trình web nhanh chống dễ dàng, áp dụng công nghệ hiện đại. Mang đến trải nghiệm thật sự về giao diện web.</p>	
							<div class="more">
								<a href="#about" class="button-tamaya scroll" data-text="More About"><span>More About</span></a>
							</div>	
						</div>	
					</li>
					<li>
						<div class="banner-text-info">
							<h3 class="bnr-title">JAVA</h3>	
							<p>Lập trình ứng dụng chưa bao giờ dễ dàng hơn, tiếp cận với các mẫu thiết kế hiện đại. Sản phẩm cụ thể, đưa ra hướng giải pháp hợp lí cho ứng dụng.</p>	
							<div class="more">
								<a href="#about" class="button-tamaya scroll" data-text="More About"><span>More About</span></a>
							</div>
						</div>	
					</li>
					<li>
						<div class="banner-text-info">
							<h3 class="bnr-title">SQLServer / PHPmysql</h3>	
							<p>Đồng bộ cơ sở dữ liệu nhanh chống, hiệu quả. Thu ngắn thời gian cập nhật, truyền tải. Tăng hiệu năng của trang web.</p>	
							<div class="more">
								<a href="#about" class="button-tamaya scroll" data-text="More About"><span>More About</span></a>
							</div>
						</div>	
					</li>
				</ul>
			</div>
		</div>	
	</div>
	<!--//banner-->
	<!--welcome-->
	<div class="welcome" id="about">
		<div class="container">
			<h3 class="title wow fadeInDown animated" data-wow-delay=".5s">About Us</h3>
			<h4 class="wow fadeInDown animated" data-wow-delay=".7s">We are Kaizen Team. It's mean together we improve our skills, our services day by day. All of our targets are customer's satisfaction. So, we provide best service all every aspect</h4>
			<p class="w-text wow fadeInUp animated" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida mauris non mi gravida, at sollicitudin odio efficitur. Mauris ex nulla, aliquam ornare facilisis nec convallis pulvinar a non nunc non leo sollicitudin</p>
			<div class="welcome-row">
				<div class="col-md-4 welcome-grids wow slideInLeft animated" data-wow-delay=".5s">
					<div class="welcome-img">
						<img src="images/product.jpg" class="img-responsive zoom-img" alt="">
						<div class="welcome-text">
							<h5>Tutorial Video</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4 welcome-grids grid wow zoomIn animated" data-wow-delay=".5s">
					<div class="welcome-img">
						<img src="images/product1.jpg" class="img-responsive zoom-img" alt="">
						<div class="welcome-text">
							<h5>Real Estate Web</h5>
						</div>
					</div>
				</div>
				<div class="col-md-4 welcome-grids grid wow slideInRight animated" data-wow-delay=".5s">
					<div class="welcome-img">
						<img src="images/product.jpg" class="img-responsive zoom-img" alt="">
						<div class="welcome-text">
							<h5>Our Product</h5>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//welcome-->
	<!--services-->
	<div class="services" id="services">
		<div class="container">
			<h3 class="title wow fadeInDown animated" data-wow-delay=".5s">Services</h3>
			<div class="servc-grids">
				<div class="col-md-4 servc-grid wow fadeInUp animated" data-wow-delay=".5s">
					<ul> 
						<li>
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						</li>
						<li>
							<h4>Cum soluta</h4>
						</li>
					</ul> 
					<div class="clearfix"> </div>
					<p>Itaque earum rerum hic tenetur a sapiente delectus 
						reiciendis maiores alias consequatur aut</p>
				</div>
				<div class="col-md-4 servc-grid wow fadeInUp animated" data-wow-delay=".7s">
					<ul> 
						<li>
							<span class="glyphicon glyphicon-plane" aria-hidden="true"></span>
						</li>
						<li>
							<h4>Nobis esgendi</h4>
						</li>
					</ul> 
					<div class="clearfix"> </div>
					<p>Itaque earum rerum hic tenetur a sapiente delectus 
						reiciendis maiores alias consequatur aut</p>
				</div>
				<div class="col-md-4 servc-grid wow fadeInUp animated" data-wow-delay=".9s">
					<ul> 
						<li>
							<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
						</li>
						<li>
							<h4>Est eligendi</h4>
						</li>
					</ul> 
					<div class="clearfix"> </div>
					<p>Itaque earum rerum hic tenetur a sapiente delectus 
						reiciendis maiores alias consequatur aut</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//services -->
	<!--team-->
	<div class="team" id="team">
		<div class="container">
			<h3 class="title wow fadeInDown animated" data-wow-delay=".5s">Meet Our Team</h3>
			<div class="team-info">
				<script>
					// You can also use "$(window).load(function() {"
					$(function () {
					  // Slideshow 4
					  $("#slider4").responsiveSlides({
						auto: true,
						pager: true,
						nav: false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
					  });
				
					});
				</script>
				<!--//End-slider-script-->
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider4">
						<li>
							<div class="col-md-3 team-grids wow zoomInLeft animated" data-wow-delay=".5s">
								<h5>Nguyễn Trung Nghĩa</h5>
								<p>The "God" who motivated to other member. He hard-working, kinda sensitive.</p>
								<div class="social-icons">
									<ul>
										<li><a href="#" class="fb"> </a></li>
										<li><a href="#"> </a></li>
										<li><a href="#" class="in"> </a></li>
									</ul>
								</div>
								<div class="team-img">
									<img src="images/tnghia.jpg" alt="">
								</div>
							</div>
							<div class="col-md-3 team-grids team-mdl wow zoomInLeft animated" data-wow-delay=".9s">
								<h5>Lại Hoàng Đô</h5>
								<p>The way he try to catches up with his teammates is so admirable.</p>
								<div class="social-icons">
									<ul>
										<li><a href="#" class="fb"> </a></li>
										<li><a href="#"> </a></li>
										<li><a href="#" class="in"> </a></li>
									</ul>
								</div>
								<div class="team-img">
									<img src="images/tdo.jpg" alt="">
								</div>
							</div>
							<div class="col-md-3 team-grids team-mdl1 wow zoomInRight animated" data-wow-delay=".7s">
								<h5>Trần Minh Trí</h5>
								<p>He's ambitious, kind, funny, hard-working. Sometimes get in trouble with his lover.</p>
								<div class="social-icons">
									<ul>
										<li><a href="#" class="fb"> </a></li>
										<li><a href="#"> </a></li>
										<li><a href="#" class="in"> </a></li>
									</ul>
								</div>
								<div class="team-img">
									<img src="images/ttri.jpg" alt="">
								</div>
							</div>
							<div class="col-md-3 team-grids wow zoomInRight animated" data-wow-delay=".5s">
								<h5>Nguyễn Đức Minh</h5>
								<p>He communicates with everyone. Actualy, he helps people with his enthusiastic.</p>
								<div class="social-icons">
									<ul>
										<li><a href="#" class="fb"> </a></li>
										<li><a href="#"> </a></li>
										<li><a href="#" class="in"> </a></li>
									</ul>
								</div>
								<div class="team-img">
									<img src="images/tminh.jpg" alt="">
								</div>
							</div>
							<div class="clearfix"> </div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--//team-->
	<!--portfolio-->
	<div id="portfolio" class="portfolio">
		<div class="container">
			<h3 class="title wow fadeInDown animated" data-wow-delay=".5s">Portfolio</h3>
			<div class="sap_tabs">			
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list wow fadeInUp animated" data-wow-delay=".7s">
						<li class="resp-tab-item"><span>All</span></li>
						<li class="resp-tab-item"><span>HTML & CSS</span></li>
						<li class="resp-tab-item"><span>SQLServer</span></li>
						<li class="resp-tab-item"><span>JavaScript</span></li>
						<li class="resp-tab-item"><span>Jquery</span></li>					
					</ul>	
					<div class="clearfix"> </div>	
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content">
							<div class="tab_img">
								<div class="col-md-4 portfolio-grids">
									<a class="wow zoomIn animated" data-wow-delay=".5s" href="images/g1.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
										<img src="images/g1.jpg" class="img-responsive zoom-img" alt=""/>
										<div class="b-wrapper">
											<h5>Top Vacations</h5>
										</div>
									</a>
								</div>
								<div class="col-md-4 portfolio-grids">
									<a class="wow zoomIn animated" data-wow-delay=".7s" href="images/g2.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
										<img src="images/g2.jpg" class="img-responsive zoom-img" alt=""/>
										<div class="b-wrapper">
											<h5>Top Vacations</h5>
										</div>
									</a>
								</div>
								<div class="col-md-4 portfolio-grids">
									<a class="wow zoomIn animated" data-wow-delay=".7s" href="images/g3.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
										<img src="images/g3.jpg" class="img-responsive zoom-img" alt=""/>
										<div class="b-wrapper">
											<h5>Top Vacations</h5>
										</div>
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="tab_img">
								<div class="col-md-8 portfolio-grids portfolio-two">
									<a class="wow zoomIn animated" data-wow-delay=".9s" href="images/g4.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also remaining essentially unchanged. ">
										<img src="images/g4.jpg" class="img-responsive zoom-img" alt=""/>
										<div class="b-wrapper">
											<h5>Top Vacations</h5>
										</div>
									</a>
								</div>
								<div class="col-md-4 portfolio-grids portfolio-grids-mdl">
									<a class="wow zoomIn animated" data-wow-delay=".5s" href="images/g5.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
										<img src="images/g5.jpg" class="img-responsive zoom-img" alt=""/>
										<div class="b-wrapper">
											<h5>Top Vacations</h5>
										</div>
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="tab_img">
								<div class="col-md-4 portfolio-grids">
									<a class="wow zoomIn animated" data-wow-delay=".9s" href="images/g7.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen book It has survived not only five centuries, but also remaining essentially unchanged. ">
										<img src="images/g7.jpg" class="img-responsive zoom-img" alt=""/>
										<div class="b-wrapper">
											<h5>Top Vacations</h5>
										</div>
									</a>
								</div>
								<div class="col-md-8 portfolio-grids  portfolio-two portfolio-grids-mdl">
									<a class="wow zoomIn animated" data-wow-delay=".5s" href="images/g6.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
										<img src="images/g6.jpg" class="img-responsive zoom-img" alt=""/>
										<div class="b-wrapper">
											<h5>Top Vacations</h5>
										</div>
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="tab_img">
								<div class="col-md-4 portfolio-grids">
									<a class="wow zoomIn animated" data-wow-delay=".5s" href="images/g2.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
										<img src="images/g2.jpg" class="img-responsive zoom-img" alt=""/>
										<div class="b-wrapper">
											<h5>Top Vacations</h5>
										</div>
									</a>
								</div>
								<div class="col-md-4 portfolio-grids">
									<a class="wow zoomIn animated" data-wow-delay=".7s" href="images/g5.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
										<img src="images/g5.jpg" class="img-responsive zoom-img" alt=""/>
										<div class="b-wrapper">
											<h5>Top Vacations</h5>
										</div>
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="tab_img">
								<div class="col-md-8 portfolio-grids portfolio-two">
									<a class="wow zoomIn animated" data-wow-delay=".5s" href="images/g4.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
										<img src="images/g4.jpg" class="img-responsive zoom-img" alt=""/>
										<div class="b-wrapper">
											<h5>Top Vacations</h5>
										</div>
									</a>
								</div>
								<div class="col-md-4 portfolio-grids">
									<a class="wow zoomIn animated" data-wow-delay=".7s" href="images/g3.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
										<img src="images/g3.jpg" class="img-responsive zoom-img" alt=""/>
										<div class="b-wrapper">
											<h5>Top Vacations</h5>
										</div>
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="tab_img">
								<div class="col-md-4 portfolio-grids">
									<a class="wow zoomIn animated" data-wow-delay=".5s" href="images/g1.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
										<img src="images/g1.jpg" class="img-responsive zoom-img" alt=""/>
										<div class="b-wrapper">
											<h5>Top Vacations</h5>
										</div>
									</a>
								</div>
								<div class="col-md-8 portfolio-grids portfolio-two">
									<a class="wow zoomIn animated" data-wow-delay=".7s" href="images/g6.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
										<img src="images/g6.jpg" class="img-responsive zoom-img" alt=""/>
										<div class="b-wrapper">
											<h5>Top Vacations</h5>
										</div>
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="tab_img">
								<div class="col-md-8 portfolio-grids portfolio-three">
									<a class="wow zoomIn animated" data-wow-delay=".5s" href="images/g7.jpg" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
										<img src="images/g7.jpg" class="img-responsive zoom-img" alt=""/>
										<div class="b-wrapper">
											<h5>Top Vacations</h5>
										</div>
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>	
						</div>
					</div>						
				</div>
			</div>
		</div>
	</div>
	<!--//portfolio-->
	<!--youtube-->	
	<div class="youtube">
		<div class="container">
			<div class="social-icons wow zoomIn animated" data-wow-delay=".5s">
				<ul>
					<li><a href="#" class=""> </a></li>
				</ul>
			</div>
			<h4 class="wow fadeInUp animated" data-wow-delay=".7s">LATEST FROM YOUTUBE</h4>
			<p class="twit-text wow fadeInUp animated" data-wow-delay=".8s">Libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
		</div>
	</div>		
	<!--//youtube-->	
	<!--contact -->
	<div class="contact" id="contact">
		<div class="container">
			<h3 class="title wow fadeInDown animated" data-wow-delay=".5s">Contact Us</h3>
			<div class="contact-form">
				<form>
					<div class="col-md-6 form-left wow fadeInDown animated" data-wow-delay=".5s">
						<input type="text" placeholder="Name" required="">
					</div>
					<div class="col-md-6 form-right wow fadeInDown animated" data-wow-delay=".5s">
						<input class="email" type="text" placeholder="Email" required="">
					</div>
					<div class="clearfix"> </div>
					<input class="wow fadeInDown animated" data-wow-delay=".7s" type="text" placeholder="Phone" required="">
					<textarea class="wow fadeInDown animated" data-wow-delay=".9s" placeholder="Message" required=""></textarea>
					<input type="submit" value="SUBMIT" >
				</form>
			</div>
		</div>
	</div>		
	<!--//contact -->
	<!--footer-->
	<div class="footer">
		<div class="container">
			<h3 class="wow zoomIn animated" data-wow-delay=".5s"><a href="index.html">Kaizen Team</a></h3>
			<div class="social-icons wow fadeInUp animated col-md-12" data-wow-delay=".9s">
				<ul>
					<li><a href="https://www.facebook.com/groups/590370407821516/" class="fb"> </a></li>
					<li><a href="#" class="in"> </a></li>
					<li><a href="https://www.youtube.com/channel/UCkGUwYccWLpdgvjngewFA6A" class="yt"> </a></li>
					<li style="margin-left: 39em"><p class="wow fadeInUp animated" data-wow-delay=".7s">© 2016 Kaizen. All rights reserved | Design by Kaizen Team</p></li>
				</ul>
			</div>
		</div>
	</div>
	<!--//footer-->	
	<script src="js/lightbox-plus-jquery.min.js"> </script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});		
	</script>
	<!--script-->
	<!--responsive slider-->
	<script src="js/responsiveslides.min.js"></script>
	<!--//responsive slider-->
	<!-- start-smooth-scrolling-->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!--//end-smooth-scrolling-->
	<!--bar-js-->
	<script src="js/bars.js"></script>
	<!--bar-js-->
	<!--animate-->
	<script src="js/wow.min.js"></script>
		<script>
			 new WOW().init();
		</script>
	<!--//end-animate-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>