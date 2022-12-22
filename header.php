<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kha_Han_Store
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'khahan' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-wrap">
			<div class="site-branding">
				<?php

				$title_tag = 'p';
				$logo_id = 68;

				if ( is_front_page() && is_home() ) {
					$title_tag = 'h1';
				}

				echo '<'.$title_tag.' class="site-title">
						<a href="'.home_url( '/' ).'" rel="home">
							'. wp_get_attachment_image($logo_id, 'medium') . '
						</a>
					</'.$title_tag.'>';
				?>
			</div><!-- .site-branding -->

			<div class="right-header">
				
				<div class="site-header-cart">
				<svg xmlns="http://www.w3.org/2000/svg" 
					width="48" height="48" fill="currentColor" class="cart-icon" viewBox="0 0 16 16"> 
					<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/> 
				</svg>
					<?php 
						//woocommerce_mini_cart(); 
						echo woo_cart_but();
					?>
				</div>

			</div>
		</div>
	</header><!-- #masthead -->

	<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
			<span class="toggle-x"></span>
		</button>
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			)
		);
		?>
	</nav><!-- #site-navigation -->

	<div class="wrapper">
