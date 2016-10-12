<?php
/**
 * Sidebar (widgetized areas) HTML markup structure
 *
 * @package     startgen
 * @since       1.0.0
 * @author      juliarietveld
 * @link        http://juliarietveld.nl
 * @license     GNU General Public License 2.0+
 */
namespace Startgen\Developers;

/**
 * Unregister sidebar callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_sidebar_callbacks() {

}

//* Flexible widget classes
function starter_widget_area_class( $id ) {

	$count = atmosphere_count_widgets( $id );

	$class = '';
	
	if ( $count == 1 ) {
		$class .= ' widget-full';
	} elseif ( $count % 3 == 1 ) {
		$class .= ' widget-thirds';
	} elseif ( $count % 4 == 1 ) {
		$class .= ' widget-fourths';
	} elseif ( $count % 2 == 0 ) {
		$class .= ' widget-halves uneven';
	} else {	
		$class .= ' widget-halves';
	}

	return $class;
	
}

// //* Register widget areas
// genesis_register_sidebar( array(
// 	'id'          => 'front-page-1',
// 	'name'        => __( 'Welcom to my site', CHILD_TEXT_DOMAIN),
// 	'description' => __( 'This is the 1st section on the front page.', CHILD_TEXT_DOMAIN ),
// ) );
// genesis_register_sidebar( array(
// 	'id'          => 'front-page-2',
// 	'name'        => __( 'Services', CHILD_TEXT_DOMAIN ),
// 	'description' => __( 'This is the 2nd section on the front page.', CHILD_TEXT_DOMAIN ),
// ) );
// genesis_register_sidebar( array(
// 	'id'          => 'front-page-3',
// 	'name'        => __( 'About me', CHILD_TEXT_DOMAIN ),
// 	'description' => __( 'This is the 3rd section on the front page.', CHILD_TEXT_DOMAIN ),
// ) );
// genesis_register_sidebar( array(
// 	'id'          => 'front-page-4',
// 	'name'        => __( 'Testimonials', CHILD_TEXT_DOMAIN),
// 	'description' => __( 'This is the 4th section on the front page.', CHILD_TEXT_DOMAIN ),
// ) );
// genesis_register_sidebar( array(
// 	'id'          => 'front-page-5',
// 	'name'        => __( 'From the blog', CHILD_TEXT_DOMAIN),
// 	'description' => __( 'This is the 5th section on the front page.', CHILD_TEXT_DOMAIN ),
// ) );
// genesis_register_sidebar( array(
// 	'id'          => 'front-page-6',
// 	'name'        => __( 'Workshops', CHILD_TEXT_DOMAIN),
// 	'description' => __( 'This is the 6th section on the front page.', CHILD_TEXT_DOMAIN ),
// ) );
// genesis_register_sidebar( array(
// 	'id'          => 'front-page-7',
// 	'name'        => __( 'FAQ', CHILD_TEXT_DOMAIN),
// 	'description' => __( 'This is the 7th section on the front page.', CHILD_TEXT_DOMAIN ),
// ) );
// genesis_register_sidebar( array(
// 	'id'          => 'front-page-8',
// 	'name'        => __( 'Call to action', CHILD_TEXT_DOMAIN),
// 	'description' => __( 'This is the 8th section on the front page.', CHILD_TEXT_DOMAIN ),
// ) );