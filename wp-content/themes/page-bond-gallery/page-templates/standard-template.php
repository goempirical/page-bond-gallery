<?php
/**
 * Template Name: Standard Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
$put_boxStroke = 'box-stroke';
?>

<main class="wrapper" id="full-width-page-wrapper" role="main">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="row justify-content-center">
			<div class="col-md-11 main-content-area page-content">
			<?php
					if ( is_page() && $post->post_parent > 0 ) : 
						$put_boxStroke = '';
					?>
						<?php	wp_nav_menu( 
							array( 'menu' => 'contact_menu', 
							'menu_class' => 'menu box-stroke__bottom',
							'container_class' => 'menu-side-container'  ) );?>
					<?php endif;?>
					<?php /* GALLERY STANDARD */ ?> 
						<div class="content full__img">
						<?php $gallery_stand = get_field('page_image_gallery'); $size = 'slider';?>
						
						<?php if ( $gallery_stand ) :  ?>
									
							<?php if ( sizeof( $gallery_stand ) > 1 ): ?> 
									<!-- SHOW A SLIDER IF THERE MORE THAN 1 IMAGE -->
							<div class="owl-carousel next owl-theme owl-loaded">
								<div class="owl-stage-outer">
									<div class="owl-stage" >
									<?php 
										foreach( $gallery_stand as $slide ) : ?>
											<div class="owl-item no__full">
												<?php 
												$image_attributes = wp_get_attachment_image_src( $slide['ID'], 'lightbox' );
												if ( $image_attributes ) : ?>
												    <a href="<?php echo $image_attributes[0]; ?>" data-featherlight="image"><?php echo wp_get_attachment_image( $slide['ID'], 'slider', "", ["class" => "slide-image"] ); ?></a>
												<?php else: ?>
													<?php echo wp_get_attachment_image( $slide['ID'], 'slider', "", ["class" => "slide-image"] ); ?>
												<?php endif; ?>
												<section>
													<?php
														$info = get_field('information', $slide['ID']);
														echo $info ? $info : '';
													?> 
												</section> 
											</div>
										<?php 
										endforeach;?>
									</div>
								</div>
								<div class="owl-counter" > 
									<span class="index_count">...</span><span class="global_count">...</span> 
								</div>
							</div>  <!-- END OWL-CAROUSEL -->

						<?php else: ?> 													
									<!-- SHOW JUST A IMAGE -->
							<?php foreach( $gallery_stand as $image_standard ) : ?> 

								<?php echo wp_get_attachment_image($image_standard['ID'], 'full'); ?> 

							<?php endforeach; ?> 
							
						<?php endif; ?> 
						
					<?php endif; ?>
					</div>


					<?php if( get_field('team') ) : ?>
						<?php $team_stand = get_field('team'); ?>
							<?php foreach( $team_stand as $member ) : ?>
								<div class="row">
									<div class="col-md-4 grid-item"> <?php echo wp_get_attachment_image($member['photo']['ID'], 'thumbnail'); ?> </div>
									<div class="col-md-8 grid-item">
										<?php $content_member = $member['content']; ?> 
										<div class="content_member">
											<h2><?php echo $content_member['full_name'] ?></h2>
											<i><?php echo $content_member['role'] ?></i>
											<?php echo $content_member['description'] ?>															
										</div>
									</div>
								</div>
							<?php endforeach; ?>
					<?php else: ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="aux_content <?php echo $put_boxStroke; ?>">
							<?php get_template_part( 'loop-templates/content', 'page' ); ?>
						</div>
					<?php endwhile; // end of the loop. ?>
					<?php endif; ?>

			</div>	

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
