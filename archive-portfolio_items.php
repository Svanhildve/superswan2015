<?php get_header(); ?>
		
		<section id="content">
		
			<section id="work">
				<h1>Where I show off my work</h1>
		
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="entry">
						<?php the_content('Read more'); ?>
					</div>
					
					<br class="clear" />

				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no content! :( '); ?></p>
				<?php endif; ?>
			
			</section>
			
			<br class="clear" />
			
		</section>
<?php get_footer(); ?>
