<?php
/*
Author: Cassandra Marshall
URL: http://daydreamproject.com

These are the functions for the child theme based off of reverie.

*/

/*add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'acme_product',
		array(
			'labels' => array(
				'name' => __( 'Slides' ),
				'singular_name' => __( 'Slides' )
			),
		'public' => true,
		'has_archive' => true,
		)
	);
}*/

//function adds post-thumbnails to the theme 
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size('true');
}

function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '"><br /> More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//this function is commented out in the reverie functions.php file. It styles the name and date for posts in content.php
// return entry meta information for posts, used by multiple loops.
function reverie_entry_meta() {
	echo '<p class="byline author">'. __('—', 'reverie') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a>';
	//echo '<p><time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('%s', 'reverie'), get_the_time('F jS, Y'), get_the_time()) .'</time></p>';
}



/* add any widget as in a shortcode 
add_shortcode( 'widget', 'my_widget_shortcode' );
function my_widget_shortcode( $atts ) {

// Configure defaults and extract the attributes into variables
extract( shortcode_atts( 
	array( 
		'type'  => '',
		'title' => '',
	), 
	$atts 
));

$args = array(
	'before_widget' => '<div class="box widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<div class="widget-title">',
	'after_title'   => '</div>',
);

ob_start();
the_widget( $type, $atts, $args ); 
$output = ob_get_clean();

return $output;
*/

?>