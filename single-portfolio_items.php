<?php get_header(); ?>
		
		<div class="row">

			<div class="col-s-12 col-m-12 col-l-12 full-width portfolio-item-hero base-spacing-bottom-x2" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>')">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="row wrapper">
					<div class="col-s-1 col-m-2 col-l-3"></div>
					<div class="col-s-10 col-m-8 col-l-6 portfolio-hero-text">
						<div class="single-border-box">
							<?php the_field('when'); ?>
							<h1 class="portfolio-title"><?php single_post_title(); ?></h1>
							<?php the_field('what'); ?>
						</div>
					</div>
					<div class="col-s-1 col-m-2 col-l-3"></div>

					<?php endwhile; else: ?>
					<p><?php _e('Sorry, no content! :( '); ?></p>
					<?php endif; ?>

				</div>

				
				

			</div>

		</div>

		<div class="base-spacing-bottom">
		<?php get_template_part( 'buildable' ); ?> 
		</div>		
			
		
			
		
<?php get_footer(); ?>
