<?php
/**
 * Template Name: Services Page
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="row" style="margin-top: 60px;"></div>
<?php
if( have_rows('service_types') ):
	while ( have_rows('service_types') ) : the_row(); ?>
	
	<!-- Section -->
		<section class="page-section mb-0" style="background-color: <?php echo the_sub_field('background_color'); ?>">
			<div class="container">
				<h4 class="page-section-heading text-primary"><span class="services-page-icon"><img src="<?php the_sub_field('icon'); ?>" alt=""></span><?php echo the_sub_field('title'); ?></h4>
				<div class="row">
					<div class="col-md-9">
						<div class="intro-text">
							<?php echo the_sub_field('sub_title'); ?>
						</div>
					</div>
					<div class="col-md-3 services-btn">
						<button class="btn btn-l btn-outline-primary" href="<?php echo the_sub_field('button_link'); ?>" target="_blank"><?php echo the_sub_field('button_text'); ?></button>
					</div>
				</div>
				<div class="row services-list">
					<div class="col-md-6">
						<?php echo the_sub_field('column_one'); ?>
					</div>
					<div class="col-md-6">
						<?php echo the_sub_field('column_two'); ?>
					</div>
				</div>
			</div>
		</section>
<?php endwhile; else : endif;
get_footer();
