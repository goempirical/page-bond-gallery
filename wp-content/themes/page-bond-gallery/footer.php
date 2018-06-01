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
									<?php the_field('footer_text', 'option'); ?>
								</div>
								<div class="col-md-4">
									<div class="resize_icons">
										<?php
											$artsy = get_field('artsy_link', 'option');
											$facebook = get_field('facebook_link', 'option');
											$instagram = get_field('instagram_link', 'option');
											$pinterest = get_field('pinterest_link', 'option');
											$twitter = get_field('twitter_link', 'option');
											$artlab = get_field('artlab_link', 'option');

											if($artsy) :
										?>
										<a href="<?php echo $artsy; ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 21" aria-labelledby="artsy-icon"><title id="artsy-icon">Connect with Pagebond on Artsy</title><path fill="#A9A9A9" fill-rule="evenodd" d="M7.312 5.828l.965 2.631H6.335l.977-2.631zm-.732-1.53l-2.94 7.57h1.52l.795-2.13h2.85l.783 2.13h1.521l-2.94-7.57H6.58zM1.542 2.245h17.114v17.092H15.62v-3.913h-1.43v3.913H1.542V2.244zM.1 20.789h20v-20H.1v20z"/></svg></a>
										<?php
											endif;

											if($facebook) :
										?>
										<a href="<?php echo $facebook; ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 20" aria-labelledby="fb-icon"><title id="fb-icon">Connect with Pagebond on Facebook</title><path fill="#A9A9A9" fill-rule="evenodd" d="M7.377 19.79v-8.667h2.91l.435-3.377H7.377V5.589c0-.978.271-1.644 1.674-1.644l1.79-.001V.923A24 24 0 0 0 8.232.79C5.654.79 3.89 2.364 3.89 5.255v2.49H.972v3.378H3.89v8.667h3.488z"/></svg></a>
										<?php
											endif;

											if($instagram) :
										?>
										<a href="<?php echo $instagram; ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" aria-labelledby="insta-icon"><title id="insta-icon">Connect with Pagebond on Instagram</title><g fill="#A9A9A9" fill-rule="evenodd"><path d="M10.562.79C7.71.79 7.353.802 6.233.853c-1.118.05-1.881.229-2.549.488a5.172 5.172 0 0 0-1.86 1.21 5.172 5.172 0 0 0-1.211 1.86C.354 5.08.176 5.844.125 6.962.074 8.08.062 8.438.062 11.29c0 2.852.012 3.209.063 4.329.051 1.118.229 1.88.488 2.549.269.69.628 1.276 1.211 1.86.584.583 1.17.942 1.86 1.21.668.26 1.431.438 2.549.489 1.12.05 1.477.063 4.329.063 2.852 0 3.209-.012 4.329-.063 1.118-.051 1.881-.23 2.549-.488a5.172 5.172 0 0 0 1.86-1.211 5.172 5.172 0 0 0 1.211-1.86c.259-.668.437-1.431.488-2.55.051-1.12.063-1.476.063-4.328 0-2.852-.012-3.21-.063-4.33-.051-1.117-.229-1.88-.488-2.548a5.172 5.172 0 0 0-1.211-1.86 5.172 5.172 0 0 0-1.86-1.211c-.668-.26-1.431-.437-2.549-.488C13.771.802 13.414.79 10.562.79m0 1.892c2.804 0 3.136.01 4.243.06 1.024.048 1.58.219 1.95.363.49.19.84.418 1.207.785.367.367.595.717.785 1.207.144.37.315.926.362 1.95.05 1.107.061 1.439.061 4.243 0 2.804-.011 3.136-.061 4.243-.047 1.024-.218 1.58-.362 1.95-.19.49-.418.839-.785 1.207a3.248 3.248 0 0 1-1.207.785c-.37.144-.926.315-1.95.362-1.107.05-1.439.06-4.243.06-2.804 0-3.136-.01-4.243-.06-1.024-.047-1.58-.218-1.95-.362a3.256 3.256 0 0 1-1.207-.785 3.256 3.256 0 0 1-.785-1.207c-.144-.37-.315-.926-.362-1.95-.05-1.107-.061-1.44-.061-4.243 0-2.804.011-3.136.061-4.243.047-1.024.218-1.58.362-1.95.19-.49.418-.84.785-1.207a3.256 3.256 0 0 1 1.207-.785c.37-.144.926-.315 1.95-.362 1.107-.05 1.439-.061 4.243-.061"/><path d="M10.562 14.79a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7m0-8.892a5.392 5.392 0 1 0 0 10.784 5.392 5.392 0 0 0 0-10.784M17.427 5.685a1.26 1.26 0 1 1-2.52 0 1.26 1.26 0 0 1 2.52 0"/></g></svg></a>
										<?php
											endif;

											if($pinterest) :
										?>
										<a href="<?php echo $pinterest; ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 21" aria-labelledby="pinterest-icon"><title id="pinterest-icon">Connect with Pagebond on Pinterest</title><path fill="#A9A9A9" fill-rule="evenodd" d="M10.044.79c-5.522 0-10 4.477-10 10a10 10 0 0 0 5.986 9.159c-.028-.698-.005-1.537.174-2.296l1.286-5.45s-.32-.638-.32-1.581c0-1.482.86-2.59 1.93-2.59.909 0 1.348.684 1.348 1.502 0 .915-.583 2.282-.883 3.549-.25 1.06.532 1.926 1.579 1.926 1.894 0 3.17-2.433 3.17-5.317 0-2.191-1.476-3.832-4.161-3.832-3.033 0-4.923 2.262-4.923 4.789 0 .87.257 1.486.66 1.96.185.22.21.308.143.559-.048.184-.158.627-.203.802-.067.254-.272.344-.501.25-1.397-.57-2.048-2.1-2.048-3.82 0-2.84 2.396-6.247 7.147-6.247 3.818 0 6.33 2.763 6.33 5.729 0 3.923-2.18 6.853-5.395 6.853-1.08 0-2.095-.583-2.443-1.246 0 0-.581 2.304-.704 2.749-.212.77-.627 1.54-1.006 2.142.899.265 1.849.41 2.834.41 5.522 0 10-4.477 10-10s-4.478-10-10-10"/></svg></a>
										<?php
											endif;

											if($twitter) :
										?>
										<a href="<?php echo $twitter; ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 19" aria-labelledby="twitter-icon"><title id="twitter-icon">Connect with Pagebond on Twitter</title><path fill="#A9A9A9" fill-rule="evenodd" d="M22.6 2.92a9.107 9.107 0 0 1-2.61.717 4.56 4.56 0 0 0 1.997-2.514c-.878.52-1.85.898-2.885 1.102a4.545 4.545 0 0 0-7.744 4.145 12.904 12.904 0 0 1-9.366-4.748 4.524 4.524 0 0 0-.615 2.284c0 1.577.802 2.968 2.021 3.783a4.523 4.523 0 0 1-2.058-.57v.059a4.546 4.546 0 0 0 3.645 4.455 4.544 4.544 0 0 1-2.052.078 4.55 4.55 0 0 0 4.245 3.156 9.119 9.119 0 0 1-5.644 1.945 9.24 9.24 0 0 1-1.084-.063 12.865 12.865 0 0 0 6.966 2.04c8.358 0 12.93-6.923 12.93-12.928 0-.197-.006-.393-.014-.588A9.235 9.235 0 0 0 22.6 2.92"/></svg></a>
										<?php
											endif;
										?>
									</div>
									<?php 
										if($artlab) :
									?>
										<a class="artlab" href="<?php echo $artlab; ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer/image-18@3x.png" id="logo_art" alt="ArtLab"></a>
									<?php
										endif;
									?>
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

