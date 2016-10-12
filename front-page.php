<?php

/**
 * Front end page
 *
 * @package     startgen
 * @since       1.0.0
 * @author      juliarietveld
 * @link        http://juliarietveld.nl
 * @license     GNU General Public License 2.0+
 */



add_filter( 'genesis_seo_title', 'filter_starter_front_page_site_title_html' );
function filter_starter_front_page_site_title_html( $html ) {
	$site_name = get_bloginfo( 'name' );
	$new_html = '<span class="site-logo"></span>' . $site_name;
	return str_replace( $site_name, $new_html, $html );
}


add_action( 'genesis_meta', 'starter_front_page_genesis_meta' );
/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
function starter_front_page_genesis_meta() {

	if ( is_active_sidebar( 'front-page-1' ) || is_active_sidebar( 'front-page-2' ) || is_active_sidebar( 'front-page-3' ) || is_active_sidebar( 'front-page-4' ) || is_active_sidebar( 'front-page-5' ) || is_active_sidebar( 'front-page-6' ) || is_active_sidebar( 'front-page-7' ) || is_active_sidebar( 'front-page-8' )) {


		//* Add front-page body class
		add_filter( 'body_class', 'starter_body_class' );
		function starter_body_class( $classes ) {

   			$classes[] = 'front-page';

  			return $classes;

		}
		//* Remove breadcrumbs
		remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

		//* Add widgets on front page
		add_action( 'genesis_after_header', 'starter_front_page_widgets' );


	}

}

//* Add markup for front page widgets
function starter_front_page_widgets() {

	//echo '<h2 class="screen-reader-text">' . __( 'Main Content', CHILD_TEXT_DOMAIN) . '</h2>';

	genesis_widget_area( 'front-page-1', array(
		'before' => '<div id="front-page-1" class="front-page-1"><div class="widget-area"><div class="wrap">',
		'after'  => '</div></div></div>',
	) );

	genesis_widget_area( 'front-page-2', array(
		'before' => '<div id="front-page-2" class="front-page-2"><div class="flexible-widgets widget-area' . starter_widget_area_class( 'front-page-2' ) . '"><div class="wrap">',
		'after'  => '</div></div></div>',
	) );

	genesis_widget_area( 'front-page-3', array(
		'before' => '<div id="front-page-3" class="front-page-3"><div class="widget-area"><div class="wrap">',
		'after'  => '</div></div></div>',
	) );

	genesis_widget_area( 'front-page-4', array(
		'before' => '<div id="front-page-4" class="front-page-4"><div class="widget-area"><div class="wrap">',
		'after'  => '</div></div></div>',
	) );
	genesis_widget_area( 'front-page-5', array(
		'before' => '<div id="front-page-5" class="front-page-5"><div class="widget-area"><div class="wrap">',
		'after'  => '</div></div></div>',
	) );
	genesis_widget_area( 'front-page-6', array(
		'before' => '<div id="front-page-6" class="front-page-6"><div class="widget-area"><div class="wrap">',
		'after'  => '</div></div></div>',
	) );
	genesis_widget_area( 'front-page-7', array(
		'before' => '<div id="front-page-7" class="front-page-7"><div class="widget-area"><div class="wrap">',
		'after'  => '</div></div></div>',
	) );
	genesis_widget_area( 'front-page-8', array(
		'before' => '<div id="front-page-8" class="front-page-8"><div class="widget-area"><div class="wrap">',
		'after'  => '</div></div></div>',
	) );





}




genesis();