<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>

<?php
	get_template_part( 'template-parts/content', 'page-full' );
	$page = get_page_by_title( '404' );
	echo apply_filters('the_content', $page->post_content);
?>

<?php
get_footer();
