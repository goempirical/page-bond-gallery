<?php
/**
 * The template for displaying all single exhibitions.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<main class="wrapper" id="single-wrapper" role="main">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<?php
			while ( have_posts() ) : the_post();
			$exhibition_content = get_field('exhibition_content'); 
		?>						
		<div class="row justify-content-center">
			<div class="col-md-11 grid-container">	
							
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

				<div class="toggle__content slideshow">
					<div class="owl-carousel next owl-theme owl-loaded">
						<div class="owl-stage-outer">
							<div class="owl-stage" >
							<?php 
								if( $exhibition_content['exhibition_images'] ) : 
									
									foreach( $exhibition_content['exhibition_images'] as $slide ) : ?>
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
												<?php if(!get_field('hide_inquire_link', $slide['ID'])){ 

													echo '<p><a href="'. get_home_url() .'/art-inquiry/?artistid='. get_the_ID() .'&workid='. $slide['ID'] .'">INQUIRE &gt;</a></p>'; 

												}?>
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

				<div class="toggle__content thumbnails active">
					<div class="row">			
					<?php 
						if( $exhibition_content['exhibition_images'] ) : 
								foreach( $exhibition_content['exhibition_images'] as $slide ) : ?>
							<div class="col-sm-6 col-md-4 grid-item"> 
								<a href="#" class="gallery-image img-wrap"><img src="<?php echo $slide['sizes']['gallery-thumb'] ?>"></a>
							</div>
						<?php 
						endforeach;
					endif; ?>
					</div>	
				</div>

			</div>
		</div> <!-- END ROW -->
	</div> <!-- END CONTAINER -->
				
	<div class="container">
		<div class="row justify-content-center">

			<div class="col-md-11 main-content-area">

				<ul class="nav nav-tabs box-stroke" id="tabArtist" role="tablist" >

					<li class="nav-item">
						<a class="nav-link active" id="artist_cv_tab" data-toggle="tab" href="#artist_cv" role="tab" aria-controls="artist_cv" aria-selected="true">Press Release</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " id="artist_li_tab" data-toggle="tab" href="#artist_li" role="tab" aria-controls="artist_li" aria-selected="false">Artist List</a>
					</li>
				</ul>

				<div class="tab-content" id="tabArtistContent">

					<div class="tab-pane fade show active" id="artist_cv" role="tabpanel" aria-labelledby="artist_cv_tab"> 
						<div class="col-md-6 p-0">
							<?php 
								if ($exhibition_content['press_release']) {
									echo $exhibition_content['press_release'];
								}
							?> 
						</div>
					</div>

					<div class="tab-pane fade " id="artist_li" role="tabpanel" aria-labelledby="artist_li_tab"> 
						<div class="col-md-6 p-0">
						<?php 
							
							$ex_ID = get_the_ID();

								$args = array(
									'numberposts'	=> -1,
									'post_type'		=> 'artist',
									'meta_query'	=> array(
										'relation'		=> 'OR',
										array(
											'key'		=> 'artist_content_artist_past_exhibitions',
											'value'		=> $ex_ID,
											'compare'	=> 'LIKE'
										)
									)
								);

								$the_query = new WP_Query( $args );

								?>
								<?php if( $the_query->have_posts() ): ?>
									<ul>
									<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
										<li class="text-uppercase">
											<a href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
											</a>
										</li>
									<?php endwhile; ?>
									</ul>
								<?php endif; ?>

								<?php wp_reset_query(); ?>
						</div>
					</div>

				</div> <!-- END TAB CONTENT -->
			</div>
		</div>
		
		<?php endwhile; ?>
	</div>
</main><!-- Wrapper end -->

<?php get_footer(); ?>
