<?php


$has_sponsors = is_active_sidebar( 'sponsors' );

if ( $has_sponsors) {
	?>

	<div class="sponsors">

		<div class="sponsors-inner section-inner">

				<aside class="footer-widgets-outer-wrapper" role="complementary">

					<div class="">


							<div class="column-one grid-item">
								<?php dynamic_sidebar( 'sponsors' ); ?>
							</div>


					</div>

				</aside>

		</div>

	</div>

<?php } ?>
