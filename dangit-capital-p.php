<?php
/**
 * Plugin Name:     Disable Capital P Dangit.
 * Description:     Some code in posts actually requires a lowercase P.
 * Author:          jeremyfelt
 * Author URI:      https://jeremyfelt.com
 * Version:         0.0.1
 */

// Filters applied by WordPress in wp-includes/default-filters.php
remove_filter( 'the_title', 'capital_P_dangit', 11 );
remove_filter( 'wp_title', 'capital_P_dangit', 11 );
remove_filter( 'the_content', 'capital_P_dangit', 11 );
remove_filter( 'comment_text', 'capital_P_dangit', 31 );
remove_filter( 'widget_text_content', 'capital_P_dangit', 11 );

// Not yet available, see https://core.trac.wordpress.org/ticket/51643
// remove_filter( 'document_title', 'capital_P_dangit', 11 );
