<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?>>
	<div class="card-body">
		<?php if ( is_sticky() ) : ?>
			<span class="oi oi-bookmark wp-bp-sticky text-muted" title="<?php echo esc_attr__( 'Sticky Post', 'wp-bootstrap-4' ); ?>"></span>
		<?php endif; ?>
		<header class="entry-header">
			<?php
			if (!is_singular()) {
				the_title( '<h2 class="text24 font-weight-bold text-center l-s-3 text-uppercase"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="text-dark">', '</a></h2>' );
				wp_bootstrap_4_post_thumbnail();
			}

			if ( 'post' === get_post_type() ) : ?>
			<div class="text-center">
				<?php wp_bootstrap_4_posted_on(); ?>
				<?php if (is_singular()) : ?>
					<div class="author text14 text-center l-s-4">
						<span class="regular">ESCRITO POR:</span><span class="font-weight-bold text-uppercase"> <?php the_author(); ?></span>
					</div>
				<?php
				endif; ?>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->


		<?php if( is_singular() || get_theme_mod( 'default_blog_display', 'excerpt' ) === 'full' ) : ?>
			<div class="entry-content">
				<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'LEIA MAIS<span class="screen-reader-text"> "%s"</span>', 'wp-bootstrap-4' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );
					
					?>
						<hr class="my-5">
						<div class="row">
							<div class="col-2 no-padding"><?php echo get_avatar(get_the_author_id(), 100); ?></div>
							<div class="col-10 pl-4">
								<div class="row my-3">
									<span class="text16 font-weight-bold text-uppercase l-s-3"> <?php the_author(); ?></span>
								</div>
								<div class="row light l-s-2"><?php the_author_description(); ?></div>
							</div>
						</div>
					<?php
					related_posts();

				?>
			</div><!-- .entry-content -->
		<?php else : ?>
			<div class="entry-summary text-justify l-s-2 m-b-30">
				<?php the_excerpt(); ?>
				<div class="text-center">
					<a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-outline-dark btn-dark-orange-dark-text"><?php esc_html_e( 'LEIA MAIS', 'wp-bootstrap-4' ); ?></a>
				</div>
			</div><!-- .entry-summary -->
		<?php endif;
		if (!is_singular()) { ?> <hr> <?php } ?>
	</div>
	<!-- /.card-body -->



</article><!-- #post-<?php the_ID(); ?> -->
