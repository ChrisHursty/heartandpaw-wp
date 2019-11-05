<!-- Footer -->
<footer class="footer bg-primary">
	<div class="container">
		<div class="row">
			<!-- Footer Phone -->
			<?php if ( is_active_sidebar( 'footer_one' ) ) : ?>
				<div class="col-lg-4 phone">
					<?php dynamic_sidebar( 'footer_one' ); ?>
				</div>
			<?php endif; ?>
			<!-- Footer Menu -->
			<div class="col-lg-4">
				<?php if ( has_nav_menu( 'footer' ) ) : ?>
					<?php
						PG_Smart_Walker_Nav_Menu::$options['template'] = '<li id="{ID}" class="{CLASSES}">
														<a {ATTRS}>{TITLE}</a>
													</li>';
						wp_nav_menu( array(
							'container' => '',
							'theme_location' => 'footer',
							'items_wrap' => '<ul class="footer-menu %2$s" data-pg-collapsed id="%1$s">%3$s</ul>',
							'walker' => new PG_Smart_Walker_Nav_Menu()
					) ); ?>
				<?php endif; ?>
			</div>
			<!-- Footer Social Icons -->
			<?php if ( is_active_sidebar( 'footer_three' ) ) : ?>
				<div class="col-lg-4 mb-5 mb-lg-0 socials">
					<?php dynamic_sidebar( 'footer_three' ); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</footer>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
	<a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"> <i class="fa fa-chevron-up"></i> </a>
</div>

		<!-- Bootstrap core JavaScript -->
		<!-- Plugin JavaScript -->
		<!-- Contact Form JavaScript -->
		<!-- Custom scripts for this template -->
		<?php wp_footer(); ?>
	</body>
</html>
