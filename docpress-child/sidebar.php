			<?php if ( is_active_sidebar( 'sidebar-widgets' ) ) : ?>
				<div class="sidebar widget-area col-sm-4 col-md-4">
					<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
				</div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'kaltura_sidebar' ) ) : ?>
				<div class="sidebar widget-area col-sm-4 col-md-4">
					<?php dynamic_sidebar( 'kaltura_sidebar' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>