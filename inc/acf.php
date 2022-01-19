<?php

// Save JSON ACF Config
function my_acf_json_save_point( $path ) {
  return get_stylesheet_directory() . '/assets/acf-json/';
  return $path;
}
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

// Load JSON ACF Config
function my_acf_json_load_point( $paths ) {
$paths[] = get_stylesheet_directory() . '/assets/acf-json';
return $paths;
}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');