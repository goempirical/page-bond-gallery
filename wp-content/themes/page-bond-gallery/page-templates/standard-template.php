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

<div class="wrapper" id="full-width-page-wrapper">



	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row justify-content-center">
			

			<div class="col-md-12 content-area " id="primary">

				<main class="site-main" id="main" role="main">
						<div class="row justify-content-center">
						<div class="col-md-10 no__padding__left">
						<?php
								if ( is_page() && $post->post_parent > 0 ) : 
									$put_boxStroke = '';
								?>
								<div class="col-md-12 no__padding__right">
										<?php	wp_nav_menu( 
												array( 'menu' => 'contact_menu', 
												'menu_class' => 'menu box-stroke__bottom',
												'container_class' => 'menu-side-container'  ) );?>
									
								</div>
								<?php endif;?>
								<?php /* GALLERY STANDARD */ ?> 
									<div class="col-md-12 no__padding__right">
									<div class="content full__img <?php echo $put_boxStroke; ?> adding__space adding__padding__top">
									<?php $gallery_stand = get_field('gallery_standard'); $size = 'slider';?>
									
									<?php if ( $gallery_stand ) :  ?>
												
										<?php if ( sizeof( $gallery_stand ) > 1 ): ?> 
												<!-- SHOW A SLIDER IF THERE MORE THAN 1 IMAGE -->
												
										<div class="owl-carousel next owl-theme owl-loaded">
											<div class="owl-stage-outer">
												<div class="owl-stage" >
												<?php foreach( $gallery_stand as $image_standard  ) : ?>
															<div class="owl-item no__full">
															
															<?php echo wp_get_attachment_image($image_standard['image']['ID'], $size); ?>
															<section>
																<?php $aux_description = $image_standard['content']; ?>
																<p> <?php echo $aux_description['title_primary'] ?> </p>
																<p><?php echo $aux_description['place'] ?> </p>	
															</section>
															</div>
														<?php endforeach; ?>
												</div>
											</div>
									<div class="owl-counter" > 
										<span class="index_count">...</span>
										<span class="global_count">...</span> 
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
								</div>
								<?php if( get_field('team') ) : ?>
									<div class="col-md-12 no__padding__right">
										<div class="row">
											<?php $team_stand = get_field('team'); ?>
											<?php foreach( $team_stand as $member ) : ?>
												<div class="col-md-12 adding__space__bottom">
													<div class="row">
														<div class="col-md-4"> <?php echo wp_get_attachment_image($member['photo']['ID'], 'thumbnail'); ?> </div>
														<div class="col-md-8">
														<?php $content_member = $member['content']; ?> 
															<div class="content_member">
																<h2> <?php echo $content_member['full_name'] ?> </h2>
																<i> <?php echo $content_member['role'] ?> </i>
																<?php echo $content_member['description'] ?>															
															</div>

														</div>
													</div>
												</div>
											<?php endforeach; ?>
										</div> 
									</div>
								<?php endif; ?>
								<div class="col-md-12 no__padding__right">
									<?php while ( have_posts() ) : the_post(); ?>
										<div class="aux_content <?php echo $put_boxStroke; ?>  adding__space adding__padding__top">
											<?php get_template_part( 'loop-templates/content', 'page' ); ?>
										</div>
										

										<?php
										// If comments are open or we have at least one comment, load up the comment template.
										if ( comments_open() || get_comments_number() ) :

											comments_template();

										endif;
										?>

									<?php endwhile; // end of the loop. ?>
								</div>	

						</div>
					</div> <!-- END ROW -->
			
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
