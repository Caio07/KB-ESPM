<?php get_header(); ?>

	<div class="doc-main">
		<div class="container">
			<div class="row">
				<div class="doclist col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
				<?php if ( have_posts() ) : ?> 
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content' ); ?>
					<?php endwhile; ?>
						<div class="pagination">
							<div class="clearfix">
								<span class="left"><?php previous_posts_link(); ?></span>
								<span class="right"><?php next_posts_link(); ?></span>
							</div>
						</div>
				<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>