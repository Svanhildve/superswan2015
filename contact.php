<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

		<div class="row wrapper base-spacing-top-x2">
			<div class="col-s-12 col-m-6 col-l-5"><h1><?php the_title(); ?></h1>
			</div>
			<div class="col-m-6 col-l-7"></div>
		</div>

		<div class="row wrapper base-spacing-bottom">

			<div class="col-s-12 col-m-6 col-l-5">
		
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
					<?php the_content(); ?>

				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no content! :( '); ?></p>
				<?php endif; ?>

			</div>

			<div class="col-s-0 col-m-0 col-l-1"></div>

			<div class="col-s-6 col-m-3 col-l-3">
				<div class="subtitle">Email</div>
				<?php the_field('email'); ?>
			</div>

			<div class="col-s-6 col-m-3 col-l-3">
				<div class="subtitle">Social</div>
				<?php the_field('social'); ?>
			</div>
			
		</div>

		

		<?php get_template_part( 'buildable' ); ?> 

<?php get_footer(); ?>