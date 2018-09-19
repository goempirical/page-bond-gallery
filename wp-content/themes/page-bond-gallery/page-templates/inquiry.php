<?php
/**
 * Template Name: Inquiry Page
 *
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );

$artist = $_GET['artistid'];
$work = $_GET['workid'];

$image_attributes = wp_get_attachment_image_src( $work, 'slider' );
?>


<main class="wrapper" id="full-width-page-wrapper" role="main">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="row justify-content-center">
			<div class="col-md-11 main-content-area page-content">

				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="row -inner justify-content-between">
							<div class="col-md-4">
								<?php the_content(); ?>

								<?php if($work && $artist) { ?>
									<div class="my-4">
										<a href="<?php echo $image_attributes[0]; ?>"><?php echo wp_get_attachment_image( $work, 'medium' ); ?></a>
										<div class="mt-3">
											<?php
												echo get_the_title($artist);

												$info = get_field('information', $work);
												echo $info ? $info : '<p><em>Untitled</em></p>';
											?>
										</div>
									</div>
								<?php } ?>
							</div>
							<div class="col-md-7">
								<?php the_field('form_embed'); ?>
								<div id="artwork-data">
									<p><?php echo get_the_title($artist); ?></p>
									<?php $info = get_field('information', $work);
									echo $info ? $info : '<p><em>Untitled</em></p>'; ?>
									<p><?php echo '( '. $image_attributes[0] .' )'; ?></p>
								</div>
							</div>
						</div>
					<?php endwhile; // end of the loop. ?>
				<?php endif; ?>

			</div>	

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
