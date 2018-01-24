<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php if ( has_post_thumbnail() ) : ?>
			<p><?php the_post_thumbnail(); ?></p>
		<?php endif; ?>
		<?php the_content(); ?>
		<?php wp_link_pages('before=<spam id="page-links">' . __( 'Pages:', 'docpress' ) . ' &after=</spam>'); ?>
	</div>
</article>