<?php
/*
Plugin Name: WP-delinquify
Plugin URI: http://ezbitz.com/wp-delinquify/
Description: Remove all links from comments
Version: 1.0
Author: The Chef
Author URI: http://ezbitz.com
*/

require_once (ABSPATH . '/wp-config.php');

function clean_comments($text)
{
	return preg_replace ( '%<a[^>]*>(.*?)</a>%si', '$1', preg_replace ( '/\b(https?)(:\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/i', 'hxxp$2', $text ) );
}

add_filter ( 'comment_text', 'clean_comments' );

?>