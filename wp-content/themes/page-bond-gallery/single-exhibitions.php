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
							<div class="col-md-11 grid-container">
								<div class="row">
									<div class="col-md-12">
										<div id="gallery-title" class="head_content box-stroke__bottom">
											<div>
												<h1 class="gallery-title"><?php echo the_title();?></h1>
												<p><?php echo $exhibition_content['date_text'];?></p> 
											</div>
												
											<div class="aux_links" >
												<a href="#" class="toggle_artist">Gallery</a>
												<a href="<?php echo site_url(); ?>/past">Back to Exhibitions</a>
											</div>
										</div>
									</div>
								</div>
							<?php
									endwhile; 
							?>

								<div class="toggle__content">
									<div class="owl-carousel next owl-theme owl-loaded">
										<div class="owl-stage-outer">
											<div class="owl-stage" >
											<?php 
												if( $exhibition_content['exhibition_images'] ) : 
													foreach( $exhibition_content['exhibition_images'] as $slide ) : ?>
														<div class="owl-item no__full">
															<?php echo wp_get_attachment_image( $slide['ID'], 'medium' ); ?>
														</div>
														<section>
															<p> <?php echo $slide['content']['artist_info_title'] ?> </p>
															<p> <?php echo $slide['content']['artist_info_title_sec'] ?> </p>
														</section> 
													<?php 
													endforeach;
												endif; ?>
											</div>
										</div>
										<div class="owl-counter" > 
											<span class="index_count">...</span><span class="global_count">...</span> 
										</div>
									</div>  <!-- END OWL-CAROUSEL -->
								</div>
								<div class="toggle__content active">
									<div class="row">			
									<?php 
										if( $exhibition_content['exhibition_images'] ) : 
													foreach( $exhibition_content['exhibition_images'] as $slide ) : ?>
												<div class="col-md-4 grid-item"> 
													<a href="#" class="gallery-image"><img src="<?php echo $slide['sizes']['thumbnail'] ?>"></a>
												</div>
											<?php 
											endforeach;
										endif; ?>
										</div>	
						</div>
					</div>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row end -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>
