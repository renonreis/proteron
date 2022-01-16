<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>

<?php
	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>

	<div class="container">
		<div class="row">

			<?php if ( $default_sidebar_position === 'no' ) : ?>
				<div class="col-md-12 wp-bp-content-width">
			<?php else : ?>
				<div class="col-md-8 wp-bp-content-width">
			<?php endif; ?>

				<div id="primary" class="content-area">
					<main id="main" class="site-main">

					<?php
					global $post;
					$page_for_posts_id = get_option('page_for_posts');
					if ( $page_for_posts_id ) {
						$post = get_page($page_for_posts_id);
						setup_postdata($post);
						the_content();
						rewind_posts();
					} 

					if ( have_posts() ) : ?>

						<header class="page-header">
							<?php
								if (is_category()) {
									?>
										<div class="row text-center bg-light-gray card-category m-b-30">
											<div class="col-12 text-uppercase font-weight-bold l-s-4 m-b-15">
												<span class="text-dark-orange text14">VOCÊ ESTÁ NA CATEGORIA</span><br>
												<span class="text18"><?php single_cat_title(); ?></span>
											</div>
											<div class="col-12 l-s-2 light">
												<p><?php the_archive_description(); ?></p>
											</div>
										</div>
									<?php
								} else {
									the_archive_title( '<h1 class="page-title">', '</h1>' );
									the_archive_description( '<div class="archive-description text-muted">', '</div>' );
								}
							?>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

						simple_boostrap_page_navi();
					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
			<!-- /.col-md-8 -->

			<?php if ( $default_sidebar_position != 'no' ) : ?>
				<?php if ( $default_sidebar_position === 'right' ) : ?>
					<div class="col-md-4 wp-bp-sidebar-width">
				<?php elseif ( $default_sidebar_position === 'left' ) : ?>
					<div class="col-md-4 order-md-first wp-bp-sidebar-width">
				<?php endif; ?>
						<?php get_sidebar(); ?>
					</div>
					<!-- /.col-md-4 -->
			<?php endif; ?>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->

<?php
get_footer();
