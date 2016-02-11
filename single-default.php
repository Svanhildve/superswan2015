<?php get_header(); ?>
		
		<section id="content">
			
			<div id="blogposts_headline">
				<h1>Where I ramble about design</h1>
			</div>
			
			<article id="blogposts2">
			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article>
					<div class="single_head">
						<h3><?php the_title(); ?></h3>
						<div class="date"><?php echo get_the_date('d/m/Y'); ?></div><br class="clear" />
					</div>
					
					<div class="entry">
						<?php the_content('Read more'); ?>
					</div>
					
					<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=245406032159496&xfbml=1"></script><fb:like href="" send="false" layout="button_count" width="100" show_faces="false" font="arial"></fb:like>
					
					<?php comments_template(); ?>
					
				</article>
			

			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no content! :( '); ?></p>
			<?php endif; ?>
			
			</article>

			<?php get_sidebar(); ?>
			
			<br class="clear" />
			
		</section>
<?php get_footer(); ?>