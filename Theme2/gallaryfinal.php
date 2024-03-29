<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	
	<title>Ronak Patel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Shoot a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Tajawal:200,300,400,500,700,800,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
</head>

<body>
	
	<!-- gallery -->
	<section class="gallery py-lg-5 py-3" id="gallery">
		<div class="container-fluid">
			<div class="inner-sec-w3ls-agileits p-lg-5 p-3">
				<div class="gallery_grids row">
					<div class="col-lg-3 header-info mt-5">
						<h3 class="heading">Photo Gallery</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Nunc Nam vel feugiat</p>

					</div>
					<div class="col-lg-9 gal-content">
						<ul class="clearfix demo">
							<li>
								<div class="gallery-grid1">
									<img src="images/g1.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g2.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g3.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g4.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g5.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g6.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g7.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g5.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g6.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g3.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g1.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
							<li>
								<div class="gallery-grid1">
									<img src="images/g3.jpg" alt=" " class="img-fluid" />
									<div class="p-mask">
										<h4>Shoot</h4>
									</div>
								</div>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- //gallery -->
	
	
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- carousel -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 2,
						nav: false
					},
					1024: {
						items: 2,
						nav: false
					},
					1080: {
						items: 3,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	<!-- //carousel -->
	<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide"
			});
		});
	</script>
	<!-- //flexSlider -->
	<!--/ start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	 <script>
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
	<!--// end-smoth-scrolling -->
	<!-- Gallery js file -->
	<script src="js/jquery.picEyes.js"></script>
	<script>
		$(function () {
			//picturesEyes($('.demo li'));
			$('.demo li').picEyes();
		});
	</script>
	<!-- //Gallery js file -->
	<!--pop-up-box-->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/jquery.magnific-popup.js"></script>
	<!--//pop-up-box-->
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!--//search-bar-->

	
		<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	   
	<!-- //Custom-JavaScript-File-Links -->
	<script src="js/bootstrap.js"></script>

</body>

</html>