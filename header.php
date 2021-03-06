<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/kag1aej.css">

	<script type="text/javascript">
		(function () {
			var options = {
				whatsapp: "+5541991694336", // WhatsApp number
				call_to_action: "Olá, nos mande uma mensagem ;D", // Call to action
				position: "right", // Position may be 'right' or 'left'
			};
			var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
			var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
			s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
			var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
		})();
	</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144496028-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-144496028-1');
	</script>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/flexslider.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.flexslider.js"></script>

	<script type="text/javascript" charset="utf-8">
		$(window).ready(function() {
			$('.flexslider').flexslider({
				controlNav: false,
				directionNav: true,
				prevText: "",
				nextText: ""
			});
		});
	</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-4' ); ?></a>

	<?php if($args['hide-header']){ return; } else { ?>

		<header id="masthead" class="site-header bg-transparent <?php if ( get_theme_mod( 'sticky_header', 0 ) ) : echo 'sticky-top'; endif; ?>">
			<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg <?php echo ('page' == get_option( 'show_on_front' ) && is_front_page()) ? 'bg-transparent': 'navbar-dark bg-custom-dark'; ?>">
				<?php if( get_theme_mod( 'header_within_container', 0 ) ) : ?><div class="container"><?php endif; ?>
					<?php the_custom_logo(); ?>

					<div class="site-branding-text">
						<?php
							if ( is_front_page() && is_home() ) : ?>
								<h1 class="site-title h3 mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand mb-0"><?php bloginfo( 'name' ); ?></a></h1>
							<?php else : ?>
								<h2 class="site-title h3 mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand mb-0"><?php bloginfo( 'name' ); ?></a></h2>
							<?php
							endif;

							if ( get_theme_mod( 'show_site_description', 1 ) ) {
								$description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) : ?>
										<p class="site-description"><?php echo esc_html( $description ); ?></p>
								<?php
								endif;
							}
						?>
					</div>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-menu-wrap" aria-controls="primary-menu-wrap" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<?php
						wp_nav_menu( array(
							'theme_location'  => 'menu-1',
							'menu_id'         => 'primary-menu',
							'container'       => 'div',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'primary-menu-wrap',
							'menu_class'      => 'navbar-nav ml-auto',
							'fallback_cb'     => '__return_false',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 2,
							'walker'          => new WP_bootstrap_4_walker_nav_menu()
						) );
					?>
				<?php if( get_theme_mod( 'header_within_container', 0 ) ) : ?></div><!-- /.container --><?php endif; ?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

	<?php } ?>

	<div id="content" class="site-content <?php echo ('page' == get_option( 'show_on_front' ) && is_front_page()) ? '': 'margin-bar'; ?>">
