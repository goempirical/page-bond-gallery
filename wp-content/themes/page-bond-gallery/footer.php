<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row justify-content-center">

			<div class="col-md-11 footer-inner">

				<footer class="site-footer box-stroke" id="colophon">

					<div class="site-info">
							<div class="row">
								<div class="col-md-8">
									<p>1625 West Main Street  Richmond, Virginia  |  804 359 3633  |  MAILING LIST</p>
									<p>TUESDAY—SATURDAY 10—5PM OR BY APPOINTMENT</p>
								</div>
								<div class="col-md-4">
									<div class="row justify-content-end">
										<div class="col-md-12 text-right">
											<div class="resize_icons">
												<div class="cont_image"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer/fill-8.png" alt="Unknown"></a></div>
												<div class="cont_image"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer/fill-4.png" alt="Facebook"></a></div>
												<div class="cont_image"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer/instagram-icon.png" alt="Twitter"></a></div>
												<div class="cont_image"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer/fill-6.png" alt="Pinterest"></a></div>
												<div class="cont_image"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer/fill-2.png" alt="Twitter"></a></div>
											</div>
										</div>
										<div class="col-md-12">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer/image-18@3x.png" id="logo_art" alt="ArtLab">
										</div>
									</div>
								</div>
							</div>
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

