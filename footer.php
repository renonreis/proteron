<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer text-center bg-white text-muted">

		<section class="footer-widgets text-left">
			<div class="container">
				<div class="row">
					<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
						<div class="col">
							<aside class="widget-area footer-1-area mb-2">
								<?php dynamic_sidebar( 'footer-1' ); ?>
							</aside>
						</div>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
						<div class="col">
							<aside class="widget-area footer-2-area mb-2">
								<?php dynamic_sidebar( 'footer-2' ); ?>
							</aside>
						</div>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
						<div class="col">
							<aside class="widget-area footer-3-area mb-2">
								<?php dynamic_sidebar( 'footer-3' ); ?>
							</aside>
						</div>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
						<div class="col">
							<aside class="widget-area footer-4-area mb-2">
								<?php dynamic_sidebar( 'footer-4' ); ?>
							</aside>
						</div>
					<?php endif; ?>
				</div>
				<!-- /.row -->
			</div>
		</section>

		<div class="container">
			<div class="site-info">
				<div class="col text-center logo-footer my-3">
					<a href="<?php echo esc_url(site_url('/')) ; ?>">
						<img src="<?php echo esc_url(site_url('/wp-content/uploads/2019/05/proteron-engenharia-logo-footer.png')) ; ?>" alt="proteron-engenharia-logo-footer" title="Proteron Engenharia">
					</a>
				</div>
				<div class="row-full bg-dark">
					<div class="col text-left img-logo-footer">
						<a href="<?php echo esc_url(site_url('/')) ; ?>">
							<img src="<?php echo esc_url(site_url('/wp-content/uploads/2019/05/proteron-engenharia-logo-r-footer.png')) ; ?>" alt="proteron-engenharia-logo-letra-footer" title="Proteron Engenharia">
						</a>
					</div>
					<div class="col-12 justify-content-center social d-none">
						<a href="<?php echo esc_url(site_url('/')) ; ?>">
							<img class="social-facebook" title="Proteron Engenharia - Facebook">
						</a>
						<a href="<?php echo esc_url(site_url('/')) ; ?>">
							<img class="social-instagram" title="Proteron Engenharia - Instagram">
						</a>
						<a href="<?php echo esc_url(site_url('/')) ; ?>">
							<img class="social-whatsup" title="Proteron Engenharia - Olá, nos mande uma mensagem ;D">
						</a>
					</div>
					<div class="row d-inline-flex text-center my-3">
						<?php echo do_shortcode('[contact-form-7 id="33"]') ; ?>
					</div>
				</div>
				<div class="row-full bg-dark-orange">
					<?php
						$home = esc_url(home_url('/'));
						wp_nav_menu( 
							array( 
								'items_wrap' => '<ul id="%1$s" class="%2$s"><li><a href="'.$home.'">HOME</a></li>%3$s</ul>',
								'menu_class' => 'menu-footer' 
							) 
						);                                
					?>
				</div>
			</div><!-- .site-info -->
		</div><!-- /.container -->

		<div class="container-btn">
			<div class="btn-holder vc_btn3-container  btn-defaults btn-orcamento-fixed">
				<a class="vc_general vc_btn3-size-md vc_btn3-style-modern vc_btn3-color-grey" href="<?php echo esc_url(site_url('/contato/')) ; ?>" title="CONTATO">QUERO UM ORÇAMENTO</a>
			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
