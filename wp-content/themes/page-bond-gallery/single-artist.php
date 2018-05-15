<?php
/**
 * The template for displaying all single artists.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<div class="row">
			<main class="site-main" id="main">
				
				<?php while ( have_posts() ) : the_post(); ?>
						
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-11 grid-container">		
								<div class="row">
									<div class="col-md-12">
										<div id="gallery-title" class="head_content box-stroke__bottom">
												<h1><?php echo the_title();?></h1>
												<div class="aux_links" >
													<a href="#" class="toggle_artist">Slideshow</a>
													<a href="<?php echo site_url(); ?>/artists">Back to Artists</a>
												</div>
											</div>
									</div>
								</div>
								<?php $my_artist_content = get_field('artist_content'); ?> 
								<!--List all images from an artist--> 
								<div class="toggle__content">
									<div class="owl-carousel next owl-theme owl-loaded">
										<div class="owl-stage-outer">
											<div class="owl-stage" >
											<?php 
												if( $my_artist_content['artist_image_gallery'] ) : 
													
													foreach( $my_artist_content['artist_image_gallery'] as $slide ) : ?>
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
																<?php if(!get_field('hide_inquire_link', $slide['ID'])){ echo '<p><a href="#">INQUIRE &gt;</a></p>'; }?>
															</section> 
														</div>
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
										if( $my_artist_content['artist_image_gallery'] ) : 
											foreach( $my_artist_content['artist_image_gallery'] as $slide ) : ?>
												<div class="col-md-4 grid-item"> 
													<a href="#" class="gallery-image"><img src="<?php echo $slide['sizes']['thumbnail'] ?>"></a>
												</div>
											<?php 
											endforeach;
										endif; ?>
										</div>	
								</div>
							</div> <!-- END COL -->
						</div> <!-- END ROW -->
					</div> <!-- END CONTAINER -->
				
						<div class="container">
							<div class="row justify-content-center">

								<div class="col-md-11 main-content-area">
									<div class="row">
										<div class="col-md-12">

											<ul class="nav nav-tabs box-stroke" id="tabArtist" role="tablist" >

												<li class="nav-item">
													<a class="nav-link active" id="artist_cv_tab" data-toggle="tab" href="#artist_cv" role="tab" aria-controls="artist_cv" aria-selected="true">Artist CV</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" id="artist_bio_tab" data-toggle="tab" href="#artist_bio" role="tab" aria-controls="artist_bio" aria-selected="false">Bio</a>
												</li>
												<li class="nav-item">
													<a class="nav-link " id="artist_state_tab" data-toggle="tab" href="#artist_state" role="tab" aria-controls="artist_state" aria-selected="false">Statement</a>
												</li>
												<li class="nav-item">
													<a class="nav-link " id="artist_pe_tab" data-toggle="tab" href="#artist_pe" role="tab" aria-controls="artist_pe" aria-selected="false">Past Exhibitions</a>
												</li>
												<?php if($my_artist_content['artist_cv_file']){ ?>
												<li class="nav-item text-right flex-right">
													<a class="nav-link" href="<?php echo $my_artist_content['artist_cv_file'];?>" download>Download CV</a>
												</li>
												<?php } ?>
											</ul>
										</div> <!-- END COL -->
									</div> <!-- END ROW -->
									
									<div class="tab-content" id="tabArtistContent">

										<div class="tab-pane fade show active" id="artist_cv" role="tabpanel" aria-labelledby="artist_cv_tab"> 
											<div class="col-md-6 p-0">
												<?php echo $my_artist_content['artist_cv'];?> 
											</div>
										</div>

										<div class="tab-pane fade " id="artist_bio" role="tabpanel" aria-labelledby="artist_bio_tab"> 
											<div class="col-md-6 p-0">
													<?php echo $my_artist_content['artist_bio'];?>
											</div>
										</div>
										
										<div class="tab-pane fade " id="artist_state" role="tabpanel" aria-labelledby="artist_state_tab">
											<div class="col-md-6 p-0">
												<?php echo $my_artist_content['artist_statement']?> 
											</div>
										</div>
										<div class="tab-pane fade " id="artist_pe" role="tabpanel" aria-labelledby="artist_pe_tab"> 
											<div class="col-md-6 p-0">
											<?php 
												
												$post_objects = $my_artist_content['artist_past_exhibitions'];
												if( $post_objects ): ?>
												<ul>
													<?php 
														foreach( $post_objects as $post): 
															setup_postdata($post); 
															$exhibition_content = get_field('exhibition_content');
															?>
																<li>
																	<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
																	<p><?php echo $exhibition_content['date_text'];?></p>
																</li>
													<?php endforeach;?>
												</ul>
											<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
											<?php endif; ?>
											</div>
										</div>

									</div> <!-- END TAB CONTENT -->

								</div> <!-- END COL -->

								</div> <!-- END ROW -->

							</div> <!-- END COL -->

							</div> <!-- END ROW -->
						</div> <!-- END CONTAINER -->
				
						<?php //understrap_post_nav(); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		<?php //get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
