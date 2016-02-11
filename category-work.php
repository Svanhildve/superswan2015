<?php get_header(); ?>
		
		<section id="content">
			
			<section id="work">
				<h1>Where I show off my work</h1>	
				<?php 
				$style_classes = array('thumbnail','thumbnail','thumbnail2');
				$styles_count = count($style_classes);
				$style_index = 0;
				?>
				<?php query_posts('category_name=work &posts_per_page=20'); ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>			
				<article class="<?php $k = $style_index % $styles_count; echo "$style_classes[$k]"; $style_index++; ?> box">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>

						<span class="caption fade-caption">  
      						  <h3><?php the_title(); ?></h3>  
      						</span>

					</a>
				</article>
				
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no content! :( '); ?></p>
			<?php endif; ?>
				
			</section>
			
			<br class="clear" />
			
		</section>
<?php get_footer(); ?>