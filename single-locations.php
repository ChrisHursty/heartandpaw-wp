<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package hp_wp
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();

?>
<div class="row" style="margin-top: 60px;"></div>
<!-- Section -->
<section class="page-section mb-0">
	<div class="container">
		<!-- Intro Section Heading -->
		<h4 class="page-section-heading text-primary"><?php echo the_field('location_title'); ?></h4>
		<div class="row">
			<div class="col-md-9">
				<div class="intro-text">
					<?php echo the_field('location_address'); ?>
				</div>
			</div>
			<div class="col-md-3 services-btn">
				<button class="btn btn-l btn-outline-primary" href="https://app.heartandpaw.com/#/booking" target="_blank">Book a Visit</button>
			</div>
		</div>
		<div class="row location-details">
			<div class="col-sm-2">
				<div class="title">
					Phone
				</div>
				<a href="tel:<?php echo the_field('location_phone'); ?>"><?php echo the_field('location_phone'); ?></a>
			</div>
			<div class="col-sm-3">
				<div class="title">
					Email
				</div>
				<a href="mailto:<?php echo the_field('location_email'); ?>"><?php echo the_field('location_email'); ?></a>
			</div>
			<div class="col-sm-3">
				<div class="title">
					Open Hours
				</div>
				<?php echo the_field('location_open_hours'); ?>
			</div>
			<div class="col-sm-2">
				<div class="title">
					Services
				</div>
				<?php echo the_field('location_services'); ?>
			</div>
		</div>
	</div>
</section>

<section class="page-section gallery-map">
	<div class="container">
		<div class="row">
			<div class="col-md-6 photo">
				<img src="<?php the_field('location_gallery'); ?>" alt="">
			</div>
			<div class="col-md-6 map">
				<?php the_field('location_map'); ?>
			</div>
		</div>
	</div>
</section>

<section class="page-section staff">
	<div class="container">
		<h4 class="page-section-heading text-primary"><?php echo the_field('location_title'); ?> Staff</h4>
		<div class="row">
			<?php
			if( have_rows('location_team') ):
				while ( have_rows('location_team') ) : the_row(); ?>
				<div class="col-md-4">
					<div class="staff-photo">
						<img src="<?php the_sub_field('photo'); ?>" alt="">
					</div>
					<div class="staff-details">
						<h4><?php the_sub_field('name'); ?></h4>
						<p><?php the_sub_field('title'); ?></p>
					</div>
				</div>
			<?php endwhile; else : endif; ?>
		</div>
	</div>
</section>

<?php get_footer();
