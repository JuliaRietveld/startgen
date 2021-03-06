<?php
/**
 * Description
 *
 * @package     startgen
 * @since       1.0.0
 * @author      juliarietveld
 * @link        http://juliarietveld.nl
 * @license     GNU General Public License 2.0+
 */
namespace Startgen\Developers;

/**
 * Unregister post callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_post_callbacks() {

}

add_filter( 'genesis_author_box_gravatar_size', __NAMESPACE__ . '\setup_author_box_gravatar_size' );
/**
 * Modify size of the Gravatar in the author box.
 *
 * @since 1.0.0
 *
 * @param $size
 *
 * @return int
 */
function setup_author_box_gravatar_size( $size ) {

	return 90;
}