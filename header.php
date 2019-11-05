<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="">
		<!-- Custom fonts for this theme -->
		<!-- Theme CSS -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>
	</head>
	<body id="page-top" class="<?php echo implode(' ', get_body_class()); ?>">
		<?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>

		<!-- Navigation -->
		<div class="nav-container fixed-top">
			<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
				<div class="container">
					<button class="navbar-toggler text-uppercase font-weight-bold" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fas fa-bars"></i>
					</button>
					<a class="navbar-brand js-scroll-trigger desktop-logo" href="/"><img src="<?php echo PG_Image::getUrl( get_theme_mod( 'desktop_logo', esc_url( get_template_directory_uri() . '/img/heartandpaw-logo.svg' ) ), 'large' ) ?>" alt="Heart+Paw Logo"></a>
					<a class="navbar-brand js-scroll-trigger mobile-logo" href="/"><img src="<?php echo PG_Image::getUrl( get_theme_mod( 'mobile_logo', esc_url( get_template_directory_uri() . '/img/heartandpaw-logo-mobile.svg' ) ), 'large' ) ?>" alt="Heart+Paw Mobile Logo"></a>
					<div class="collapse navbar-collapse" id="navbarResponsive">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<?php
								PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="nav-item mx-0 mx-lg-1 {CLASSES}" id="{ID}">
																<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" {ATTRS}>{TITLE}</a>
															</li>';
								wp_nav_menu( array(
									'container' => '',
									'theme_location' => 'primary',
									'items_wrap' => '<ul class="navbar-nav %2$s" id="%1$s">%3$s</ul>',
									'walker' => new PG_Smart_Walker_Nav_Menu()
							) ); ?>
						<?php endif; ?>
					</div>
				</div>
				<a href="http://app.heartandpaw.com/#/" target="_blank" class="account-login"><span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/account-icon.svg" alt=""></span><?php _e( 'Account', 'hp_wp' ); ?></a>
			</nav>
		</div>