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
											<?php echo wp_get_attachment_image($image['ID'], 'full'); ?>
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
