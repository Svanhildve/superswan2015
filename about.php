<?php
/*
Template Name: About
*/
?>



<?php get_header(); ?>

	<div class="row">
		<div class="col-s-12 col-m-12 col-l-12 full-width about-hero" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>')">
			
			<div class="row wrapper clear-full-width">
				<div class="about-hero-text base-spacing-top col-s-12 col-pm-8 col-m-5 col-l-6"><?php the_field('hero_text'); ?></div>
				<div class="col-s-0 col-m-7 col-l-6"></div>
			</div>

		</div>
	</div>	
		
	<div class="row wrapper">
		<div class="col-s-12 col-m-10 col-l-9 base-spacing-overall-x2">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<?php the_content(); ?>

			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no content! :( '); ?></p>
			<?php endif; ?>
					
		</div>
	</div>

	<?php

		// check if the repeater field has rows of data
		if( have_rows('skills') ): ?>

			<div class="row wrapper">

		    <?php while ( have_rows('skills') ) : the_row();

		        // display a sub field value
		      //  the_sub_field('sub_field_name');

				$icon = get_sub_field( 'icon_field' ); 
				$title = get_sub_field( 'title_field' ); 
				$text = get_sub_field( 'text_field' ); ?>

					<?php if ( $icon && $title && $text ) { ?>

							<div class="col-s-12 col-pm-4 col-m-4 col-l-4 base-spacing-bottom-x2">
								<img src="<?php echo esc_url( $icon ); ?>" class="skills-icon">
								<div class="subtitle"><?php echo $title; ?></div>
								<?php echo $text; ?>
							</div>
						
					<?php
					} ; // End if $image

		    endwhile; ?>

			</div>

		<?php else :

		    // no rows found

		endif;

	?>		


<?php get_footer(); ?>