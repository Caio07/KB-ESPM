<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<div class="form-group">
		<div class="input-group">
			<input class="form-control" type="search" placeholder="<?php esc_html_e( 'O que você precisa?', 'docpress' ) ?>" value="<?php echo esc_html( get_search_query() ) ?>" name="s" title="<?php _e( 'Search for:', 'docpress' ) ?>" />
			<span class="input-group-btn">
				<input type="submit" class="btn btn-primary" value="<?php esc_html_e( 'Procurar', 'docpress' ) ?>" />
			</span>
		</div>
	</div>
</form>
