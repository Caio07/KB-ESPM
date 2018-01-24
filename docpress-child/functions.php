<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>

<?php

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'kaltura_sidebar',
		'id'            => 'kaltura_sidebar',
		'before_widget' => '<aside id="%1$s" class="row widget docwidget widget %2$s"><div class="widget-wrap">',
		'after_widget'  => '</div></aside>',
		'before_title'  => '<strong class="widget-title">',
		'after_title'   => '</strong>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

/**
 * Inserindo botões personalizados Visual editor
 */

function add_style_select_buttons( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'add_style_select_buttons' );

// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {  
	// Define the style_formats array
	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => 'Aviso',  
			'block' => 'div',  
			'classes' => 'conteudo-aviso',
			'wrapper' => true,
			
		),  
		array(  
			'title' => 'Dica',  
			'block' => 'div',  
			'classes' => 'conteudo-dica',
			'wrapper' => true,
		),
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );  


?>

