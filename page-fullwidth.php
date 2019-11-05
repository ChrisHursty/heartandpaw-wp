<?php
/**
 * Template Name: Full Width Page
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();

?>
<div class="page-fullwidth wrapper" id="page-wrapper">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<?php while ( have_posts() ) : the_post(); ?>
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>
					<?php endwhile; // end of the loop. ?>
				</div>
			</div><!-- .row -->
		</div>
	</div><!-- .container-fluid -->

</div><!-- #page-wrapper -->

<?php get_footer();