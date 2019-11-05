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
			<div class="row">

				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
							<header class="entry-header">
								<?php
								the_title(
									sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
									'</a></h2>'
								);
								?>
							</header><!-- .entry-header -->
							<div class="entry-content">
								<?php the_content(); ?>
							</div><!-- .entry-content -->
					</article><!-- #post-## -->
					<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>
		</div> <!-- .row -->
	</div><!-- #content -->
</div>

<?php get_footer();
