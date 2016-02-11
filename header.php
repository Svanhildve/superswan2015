<!DOCTYPE HTML>



<html>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>



	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

	<script src="//use.typekit.net/yzp2xso.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<script>
		$(document).ready(function(){
			$('a[href^="#"]').on('click',function (e) {
			    e.preventDefault();

			    var target = this.hash,
			    $target = $(target);

			    $('html, body').stop().animate({
			        'scrollTop': $target.offset().top
			    }, 400, 'swing', function () {
			        window.location.hash = target;
			    });
			});
		});

	</script>


	

<?php wp_head(); ?>

</head>



<body>

	<div class="siteblocker"></div>

	<section class="grid-container" id="top">

		<div class="row" id="header">

			<a href="#mobile-nav" class="hamburger-link">

    			<div class="hamburger-container">

    				<div class="hamburger">

    				</div>

    			</div>

			</a>

			<nav id="mobile-nav">

				<div class="mobile-nav-container">

					<div class="mobile-nav-hero">
						<a href="<?php bloginfo('url'); ?>">
							<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 54.6 28.9" enable-background="new 0 0 54.6 28.9" xml:space="preserve" width="80px" height="42px" class="mobile-nav-logo">
							<polygon fill="#00A79D" points="4.2,1.5 0,12.1 8.8,6 7.4,4.6 "/>
							<polygon fill="#00A79D" points="12.3,9.4 9.5,6.7 13.3,25.3 15.2,12.3 "/>
							<polygon fill="#00A79D" points="6.5,28.8 8.8,28.1 13,26.9 10.7,15.1 "/>
							<polygon fill="#00A79D" points="17.7,26.1 13.6,27.3 12.9,27.4 7.9,28.9 37.4,28.9 54.6,15.6 36.7,20.7 36.7,20.7 "/>
							<polygon fill="#00A79D" points="36.5,20.3 42.5,8.4 25.7,20.4 25.7,20.4 19.2,25 18.9,25.2 "/>
							<path fill="#00A79D" d="M13.7,26.7l3.9-1.1l7.9-5.6l1.2-12.3L14.2,22.4l-0.7,4.4c0,0,0,0,0,0L13.7,26.7z"/>
							<polygon fill="#00A79D" points="10.5,6.9 15.1,11.5 12.4,0 4.6,1.2 7.7,4.2 9.3,5.8 "/>
							</svg>
							<!--<img src="<?php echo get_template_directory_uri(); ?>\images\swan-design-logo.svg" width="80px" height="42px" class="mobile-nav-logo">-->
						</a>
					</div>

			      	<ul>
						<?php wp_nav_menu(); ?>
					</ul>

				</div>
		   </nav>

		   <div class="row wrapper">

			   <div class="col-s-12 col-m-2 col-l-2">

					<a href="<?php bloginfo('url'); ?>">
						<div class="brand">
						</div>
					</a>

				</div>

				
				<div class="col-m-8 col-l-8 center">

					<nav id="main-nav">

						<ul>

							<?php wp_nav_menu(); ?>

						</ul>

					</nav>

				</div>

				<div class="col-m-2 col-l-2"></div>

			</div>

		</div>


			

		