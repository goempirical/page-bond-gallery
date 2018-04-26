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
							<div class="col-md-10 ">		
								<div class="row">
									<div class="col-md-12">
										<div class="head_content box-stroke__bottom">
												<h4><?php echo the_title();?></h4>
												<div class="aux_links" >
													<a href="#" class="toggle_artist">Thumbnails</a>
													<a href="/artists">Back to Artists</a>
												</div>
											</div>
									</div>
								</div>
								<?php $my_artist_content = get_field('artist_content'); ?> 
								<!--List all images from an artist--> 
										<div class="toggle__content active">
										<div class="owl-carousel next owl-theme owl-loaded">
											<div class="owl-stage-outer">
												<div class="owl-stage" >
												<?php 
													if( $my_artist_content['artist_images'] ) : 
														
														foreach( $my_artist_content['artist_images'] as $slide ) : ?>
															<div class="owl-item no__full">
																<?php echo wp_get_attachment_image( $slide["artist_image"]['ID'], 'medium' ); ?>
																<section>
																	<p> <?php echo $slide['content']['artist_info_title'] ?> </p>
																	<p> <?php echo $slide['content']['artist_info_title_sec'] ?> </p>
																</section> 
															</div>
														<?php 
														endforeach;
													endif; ?>
												</div>
											</div>
									<div class="owl-counter" > 
										<span class="index_count">...</span>
										<span class="global_count">...</span> 
									</div>
								</div>  <!-- END OWL-CAROUSEL -->
								</div>
								<div class="toggle__content">
									<div class="row .space__between">			
								<?php 
										if( $my_artist_content['artist_images'] ) : 
											foreach( $my_artist_content['artist_images'] as $slide ) : ?>
												<div class="col-md-4"> 
													<img src="<?php echo $slide['artist_image']['sizes']['thumbnail'] ?>">
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

								<div class="col-md-10">
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
												<li class="nav-item text-right">
													<a class="nav-link" href="<?php echo $my_artist_content['artist_cv_file'];?>" download>Download CV</a>
												</li>
											</ul>
										</div> <!-- END COL -->

										<div class="col-md-0 no__padding__left">
											<ul class="nav nav-tabs box-stroke justify-content-end">
												<!-- DOWNLOAD CV	 -->
										
											</ul>
										</div> <!-- END COL -->
									</div> <!-- END ROW -->
									
									<div class="tab-content" id="tabArtistContent">

										<div class="tab-pane fade show active" id="artist_cv" role="tabpanel" aria-labelledby="artist_cv_tab"> <?php echo $my_artist_content['artist_cv'];?> </div>

										<div class="tab-pane fade " id="artist_bio" role="tabpanel" aria-labelledby="artist_bio_tab"> 
											<div class="row">
												<div class="col-md-6">
													<?php echo $my_artist_content['artist_bio'];?>
												</div>
											</div>	
										</div>
										
										<div class="tab-pane fade " id="artist_state" role="tabpanel" aria-labelledby="artist_state_tab"> <?php echo $my_artist_content['artist_statement']?> </div>

										<div class="tab-pane fade " id="artist_pe" role="tabpanel" aria-labelledby="artist_pe_tab"> 
											<?php 
												
												$post_objects = $my_artist_content['artist_past_exhibitions'];
												if( $post_objects ): ?>
												<ul>
													<?php 
														foreach( $post_objects as $post): 
															setup_postdata($post); ?>
																<li>
																	<a href="<?php the_permalink(); ?>"> <h2><?php the_title(); ?></h2></a>
																	<p> <?php echo get_the_date( 'F j, Y') ?> </p>
																</li>
													<?php endforeach;?>
												</ul>
											<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
											<?php endif; ?>

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
