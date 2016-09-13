<?php
/**
 * Single Post Template
 *
 *
 * @package Genesis\Templates
 * @author  MC
 */

/** Remove default sidebar */
remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );

/* Code to Display Featured Image on top of the post */
add_action( 'genesis_before_entry', 'featured_post_image', 8 );
function featured_post_image() {
  if ( ! is_singular( 'post' ) )  return;
	the_post_thumbnail('post-image');
}


genesis();