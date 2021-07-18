<?php


$has_sponsors = is_active_sidebar( 'sponsors' );

if ( $has_sponsors) {
	?>

	<div class="sponsors">

		<div class="sponsors-inner section-inner">

				<aside class="footer-widgets-outer-wrapper" role="complementary">

					<div class="footer-widgets-wrapper">


							<div class="column-one grid-item">
								<?php dynamic_sidebar( 'sponsors' ); ?>
							</div>


					</div><!-- .footer-widgets-wrapper -->

				</aside><!-- .footer-widgets-outer-wrapper -->

		</div><!-- .footer-inner -->

	</div><!-- .footer-nav-widgets-wrapper -->

<?php } ?>
