<!DOCTYPE HTML>



<html>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<script src="//use.typekit.net/yzp2xso.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>



	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/fav.png" type="image/png">

	

	<script type="text/javascript"><!-- analytics -->



	  var _gaq = _gaq || [];

	  _gaq.push(['_setAccount', 'UA-29684454-3']);

	  _gaq.push(['_trackPageview']);



	  (function() {

		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

	  })();



	</script>



	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200' rel='stylesheet' type='text/css'>

	

<?php wp_head(); ?>

</head>



<body>



	<section id="container">

	

		<header id="header2">

				

			<nav id="nav_home">

				<ul>

					<!--<li><a href="#" class="active">Home</a></li>

					<li><a href="#">About</a></li>

					<li><a href="#">Work</a></li>

					<li><a href="#">Blog</a></li>

					<li><a href="#">Contact</a></li>-->

					<?php wp_nav_menu(); ?>

				</ul>

			</nav>

			

			<div class="logobig">

				<img src="<?php echo get_template_directory_uri(); ?>/images/logo_big.png" />

			</div>

		</header>