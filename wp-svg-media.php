<?php
/**
 * Plugin Name: Module Svg media importer
 * Plugin URI: https://github.com/anacronox/wp-svg-media
 * Description: Allow usage of svg image in Wordpress
 * Version: 1.0
 * Author: John BOTELLA
 * Author URI: https://www.john-botella.fr
 */

/* Allow SVG file USAGE */
function wpc_mime_types($mimes) {
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');
