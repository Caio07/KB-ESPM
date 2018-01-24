<?php get_header(); ?>

	<div class="doc-main">
		<div class="container">
			<div class="row">
				<?php is_active_sidebar( 'kaltura_sidebar' ) ?>
				<div class="content-area col-sm-8 col-md-8">
					<div class="main-content page">
					<h1 class="main-title"><?php single_post_title(); ?></h1>
					<?php if ( have_posts() ) : ?> 	
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', 'page' ); ?>
							<?php endwhile; ?>
							<?php
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
							?>
						<?php else : ?>
							<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
					</div>
				</div>
			<?php get_sidebar(); ?>	
			</div>
	</div>


<?php get_footer(); ?>