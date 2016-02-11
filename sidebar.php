		<div id="sidebar">
			<?php if ( !dynamic_sidebar() ) : ?>
			<h3>Archive</h3>
				<?php wp_get_archives('type=monthly'); ?>
			<?php endif; ?>
		</div>