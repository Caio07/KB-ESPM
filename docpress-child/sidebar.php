			<?php if ( is_active_sidebar( 'sidebar-widgets' ) ) : ?>
				<div class="sidebar widget-area col-sm-4 col-md-4">
					<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
				</div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'content_sidebar' ) ) : ?>
				<div class="sidebar widget-area col-sm-4 col-md-4">
					<?php dynamic_sidebar( 'content_sidebar' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>