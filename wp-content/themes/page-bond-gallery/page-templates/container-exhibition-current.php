<?php
/**
 * Template Name: Container Exhibitions Current
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php
	$query  = new WP_Query(array(
		'post_type' => 'exhibitions',
		'posts_per_page' => 1,
		'tax_query' => array(
			array(
				'taxonomy' => 'exhibition_categories',
				'field' => 'slug',
				'terms' => 'current'
			)
		)
	));?>

<div class="wrapper" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="row">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">					
					<div class="row justify-content-center">
					
						<?php	while ( $query->have_posts() ) : $query->the_post();
							$exhibition_content = get_field('exhibition_content'); ?>

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
															<?php echo wp_get_attachment_image( $slide['ID'], 'large' ); ?>
															<?php
																$info = get_field('information', $slide['ID']);
																echo $info ? '<section>' . $info . '</section>' : '';
															?>  
														</div>
													<?php 
													endforeach;
												endif; 
											?>
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
	<div class="container">
		<div class="row justify-content-center">

			<div class="col-md-11 main-content-area">
				<div class="row">
					<div class="col-md-12">

						<ul class="nav nav-tabs box-stroke" id="tabArtist" role="tablist" >

							<li class="nav-item">
								<a class="nav-link active" id="artist_cv_tab" data-toggle="tab" href="#artist_cv" role="tab" aria-controls="artist_cv" aria-selected="true">Press Release</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " id="artist_li_tab" data-toggle="tab" href="#artist_li" role="tab" aria-controls="artist_li" aria-selected="false">Artist List</a>
							</li>
						</ul>
					</div> <!-- END COL -->
				</div> <!-- END ROW -->
			<div class="tab-content" id="tabArtistContent">

					<div class="tab-pane fade show active" id="artist_cv" role="tabpanel" aria-labelledby="artist_cv_tab"> 
						<div class="col-md-6 p-0">
							<?php echo '';?> 
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
	</div>
</div><!-- Wrapper end -->

<?php get_footer(); ?>
