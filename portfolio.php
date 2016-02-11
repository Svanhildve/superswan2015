<?php
/*
Template Name: Portfolio Listing
*/
?>

<?php get_header(); ?>

			<div class="row">

				<?php 

				$args = array(

					'post_type' => 'portfolio_items',
					'orderby' => 'menu_order',
					'order' => 'ASC',
					'posts_per_page' => 20,
					
				);

				$query = new WP_Query( $args );

				//query_posts('post_type=portfolio_items &posts_per_page=20'); ?>

				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

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

				<!--</a>-->

				

				<?php endwhile; else: ?>

				<p><?php _e('Sorry, no content! :( '); ?></p>

				<?php endif; ?>

				<?php wp_reset_postdata(); ?>

			</div>


<?php get_footer(); ?>