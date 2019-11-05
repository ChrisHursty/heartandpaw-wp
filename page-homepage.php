<?php
/**
 * Template Name: Home Page
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<!-- Masthead -->
<header class="masthead text-white" style="background-image: url(<?php the_field('hero_image'); ?>);">


	<div class="container d-flex flex-column">
		<!-- Masthead Avatar Image -->
		<div class="hero-logo col-sm-12 col-md-5 pl-0 mb-3">
			<img src="<?php the_field('hero_image_logo'); ?>" alt="">
		</div>
		<!-- Masthead Subheading -->
		<p class="col-sm-12 col-md-5 pl-0 masthead-subheading mb-3"><?php echo the_field('hero_text'); ?></p>
		<a class="col-sm-12 col-md-5 hero-btn btn btn-l btn-outline-light" href="<?php echo the_field('hero_button_url'); ?>" target="_blank"><?php echo the_field('hero_button_text'); ?></a>
	</div>
</header>
<!-- Intro Section -->
<section class="page-section about bg-secondary mb-0" id="about">
	<div class="container">
		<!-- Intro Section Heading -->
		<h2 class="page-section-heading text-center text-primary"><?php echo the_field('about_heading'); ?></h2>
		<div class="row">
			<div class="col-lg-8 ml-auto mr-auto text-center">
				<p class="lead"><?php echo the_field('about_text'); ?></p>
				<p class="footer-text italic text-primary"><?php echo the_field('about_footer_text'); ?></p>
			</div>
		</div>
	</div>
</section>
<!-- Services Section -->
<section class="page-section services" id="services">
	<div class="container-fluid">
		<!-- Services Section Heading -->
		<h2 class="page-section-heading text-primary"><?php _e( 'Services', 'hp_wp' ); ?></h2>
		<div class="row">
			<?php
			if( have_rows('services') ):
				while ( have_rows('services') ) : the_row(); ?>

			<!-- Services Item 1 -->
			<div class="col-sm-6 col-lg-3">
				<div class="services-care mx-auto">
					<div class="img-container">
						<img src="<?php the_sub_field('service_image'); ?>" alt="">
						<div class="icon text-center">
							<img src="<?php the_sub_field('service_image_icon'); ?>" alt="">
							<span class="text-center"><?php echo the_sub_field('service_title'); ?></span>
							<div class="coming-soon">
								<?php echo the_sub_field('service_coming_soon'); ?>
							</div>
						</div>
					</div>
					<div class="text-container">
						<div class="heading">
							<?php echo the_sub_field('service_heading'); ?>
						</div>
						<p><?php echo the_sub_field('service_excerpt'); ?></p>
					</div>
				</div>
			</div>

			<?php endwhile; else : endif; ?>
		</div>
		<!-- /.row -->
	</div>
</section>
<!-- Locations Section -->
<section class="page-section locations" id="locations">
	<div class="container-fluid">
		<!-- Locations Section Heading -->
		<h2 class="page-section-heading text-primary"><?php _e( 'Locations', 'hp_wp' ); ?></h2>
		<div class="row">
			<h1><?php _e( 'Locations Placeholder', 'hp_wp' ); ?></h1>
		</div>
	</div>
</section>
<!-- App Section -->
<section class="page-section bg-secondary app-area" id="app">
	<div class="container ">
		<!-- App Section Heading -->
		<div class="row">
			<div class="app-area ml-auto mr-auto">
				<div class="iphone-img">
					<img src="<?php echo PG_Image::getUrl( get_theme_mod( 'app_image', esc_url( get_template_directory_uri() . '/img/iphone-app.png' ) ), 'large' ) ?>" alt="">
				</div>
				<div class="text-container">
					<h2 class="page-section-heading text-primary"><?php echo get_theme_mod( 'app_heading', __( 'We are your partners in pet parenthood.', 'hp_wp' ) ); ?></h2>
					<p class="italic"><?php echo get_theme_mod( 'app_sub_heading', __( 'Coming soon on the web, iOS, and Android.', 'hp_wp' ) ); ?></p>
					<div class="download">
						<img src="<?php echo PG_Image::getUrl( get_theme_mod( 'app_download_one', esc_url( get_template_directory_uri() . '/img/download-google.svg' ) ), 'large' ) ?>" alt="" href="<?php echo get_theme_mod( 'app_download_one_link' ); ?>">
						<img src="<?php echo PG_Image::getUrl( get_theme_mod( 'app_download_two', esc_url( get_template_directory_uri() . '/img/download-apple.svg' ) ), 'large' ) ?>" alt="" href="<?php echo get_theme_mod( 'app_download_two_link' ); ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();