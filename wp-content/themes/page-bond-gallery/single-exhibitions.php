<?php
/**
 * The template for displaying all single exhibitions.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="row">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">
					<div class="row justify-content-center">
								<?php
								while ( have_posts() ) : the_post();
									$exhibition_content = get_field('exhibition_content'); 
							?>
							<div class="col-md-10">
								<div class="row">
									<div class="col-md-12">
										<div class="head_content box-stroke__bottom">
											<div>
											<h1><?php echo the_title();?></h1>
												<div><?php echo $exhibition_content['date_text'];?></div> 
											</div>
												
												<div class="aux_links" >
												<a href="/artists">Back to Artists</a>
												</div>
											</div>
									</div>
								</div>
									
								<div class="row space__between">
									
									<?php 
									if( $exhibition_content['exhibition_images'] ) : 
										foreach( $exhibition_content['exhibition_images'] as $image ) : ?>
										<div class="col-md-4">
											<?php echo wp_get_attachment_image($image['ID'], 'thumbnail'); ?>
										</div>
									<?php	endforeach;
									endif;
									endwhile; 
							?>
									
								</div>
						</div>
					</div>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row end -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>
