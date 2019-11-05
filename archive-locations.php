<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package hp_wp
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<div class="row" style="margin-top: 60px;"></div>
<div class="page-fullwidth wrapper" id="page-wrapper">
	<div class="container-fluid">
		<div class="container">
			<h4 class="page-section-heading text-primary">Locations</h4>
			<div class="row">
				<div class="col-md-6">
					<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="one-half">
							<h2><?php the_field('location_title') ?></h2>
							<a href="<?php the_permalink(); ?>" class="border">
								<div class="image-container">
									<img src="<?php the_field('location_gallery') ?>" alt="">
								</div>
								<div class="location-details">
									<?php the_field('location_title') ?>
									<?php the_field('location_address') ?>
								</div>
							</a>
						</div>
					<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>
				</div>
				<div class="col-md-6">
					<iframe src="https://www.google.com.qa/maps/d/embed?mid=1uKjxAgauJlC-vi_a2g_7yasZ8Dq369-c" width="100%" height="800"></iframe>
				</div>
				
		</div> <!-- .row -->
	</div><!-- #content -->
</div>

<?php get_footer();
