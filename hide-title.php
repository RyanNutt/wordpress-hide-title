<?php
Plugin Name:  Hide Post Title
Plugin URI:   https://www.nutt.net/hide-post-titles-wordpress/
Description:  Hide a post or page title in WordPress with a custom field
Version:      0.1.0
Author:       Ryan Nutt
Author URI:   https://www.nutt.net
*/
add_action( 'wp_head', 'hide_title' );
function hide_title() {
  if (is_single()) {
    if (metadata_exists( $post->post_type, $post->ID, 'hide_title')) {
      echo '<style type="text/css">.page-title {display:none;}</style>';
    }
  }
}
