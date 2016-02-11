<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

		

		<div class="row full-width">
			<div class="col-s-12 homepage-hero test">
		
				<div class="row wrapper clear-full-width">
					<div class="col-s-12 col-m-12 col-l-12">
						<div class="homepage-hero-text-block">
							<h1 class="hero-text">Svanhild Egge</h1>
							<p class="homepage-hero-body">Digital Designer</p>
							<a href="<?php bloginfo('url'); ?>/work" class="primary-button">View my work</a>	
						</div>
					</div>
				</div>

				<div id="scrolly-wheel">
					<a href="#homepage-main">
						<img src="<?php echo get_template_directory_uri(); ?>/images/scroll-icon.png" width="16px" height="47px">
					</a>
				</div>

			</div>
		</div>

		<div class="row wrapper base-spacing-overall" id="homepage-main">
			<div class="col-m-1 col-l-2"></div>
			<div class="col-s-12 col-m-10 col-l-8 homepage-content">
				<span class="background-text"><?php the_field('background_text'); ?></span>
				<div id="content-block">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
						<h1 class="display-h1"><?php the_field('homepage_title'); ?></h1>
						<div class="callout-content"><?php the_content(); ?></div>
						<a href="<?php bloginfo('url'); ?>/about" class="cta-link">More About Me</a>

					<?php endwhile; else: ?>
					<p><?php _e('Sorry, no content! :( '); ?></p>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-m-1 col-l-2"></div>
		</div>
		<div class="row">

			<?php query_posts('post_type=portfolio_items &posts_per_page=2'); ?>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<!--<a href="<?php the_permalink(); ?>">-->

				<div class="col-s-12 col-m-12 col-l-12 portfolio-listing-item full-width" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>')">

						<div class="row clear-full-width wrapper">

							<div class="col-s-12 col-m-7 col-l-6 portfolio-listing-text">

								<!--<?php the_post_thumbnail(); ?>-->

								<div class="subtitle"><?php the_field('what'); ?></div>
		      					<h2><?php the_title(); ?></h2>  
		      					<!--<p class="excerpt"><?php the_excerpt(); ?></p>-->

		      					<a class="secondary-button" href="<?php the_permalink(); ?>">View Case Study</a> 

		      				</div>

		      				<div class="col-m-5 col-l-6"></div> 

	      					

      					</div>	

      				</div>

			<?php endwhile; else: ?>

			<p><?php _e('Sorry, no content! :( '); ?></p>

			<?php endif; ?>

		</div>

<?php get_footer(); ?>