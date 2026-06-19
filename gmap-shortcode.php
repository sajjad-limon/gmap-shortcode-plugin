<?php 
/**
 * Plugin Name:       Easy Google Map Shortcode
 * Plugin URI:        https://github.com/sajjad-limon
 * Description:       Lightweight, and simple shortcode plugin for display google maps on your website via shortcode in any pages.
 * Version:           1.0.0
 * Author:            Sajjad Limon
 * Author URI:        https://github.com/sajjad-limon
 * Text Domain:       easy_gmap
 * Requires PHP:      7.4
 * Requires at least: 6.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function easy_gmap_register_shortcode($attributes){    
    $default_value = [
        'place' => 'Berlin, Germany',
        'width' => 800,
        'height' => 600,
        'zoom'  => 10
    ];

    $params = shortcode_atts($default_value, $attributes);

    $gmap = <<<GMAP
        <iframe width="{$params['width']}" height="{$params['height']}"
	src="https://maps.google.com/maps?q={$params['place']}&t=&z={$params['zoom']}&ie=UTF8&iwloc=&output=embed"
	frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
</iframe>
GMAP;
return $gmap;

}
add_shortcode('gmap', 'easy_gmap_register_shortcode');
