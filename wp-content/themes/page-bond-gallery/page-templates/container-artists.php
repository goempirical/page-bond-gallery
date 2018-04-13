<?php
/**
 * Template Name: Container Artists
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
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
						<div class="col-md-10">
							<div class="box-stroke adding__padding__top">
							<div class="row">
								<?php 
									$query_artists = new WP_Query(array('post_type' => 'artists', 'order' =>  'ASC'));
									while ($query_artists->have_posts()) : $query_artists->the_post(); 
										$artist_content = get_field('artist_content');
								?>
									<div class="col-md-4">
										<a href="<?php the_permalink(); ?>">
											<img src="<?php echo $artist_content['artist_featured_image']['sizes']['medium'] ?>" alt="<?php echo the_title();?>">
											<p><?php the_title();?> </p>
										</a>
									</div>
								<?php 
									endwhile; 
									wp_reset_query(); //Reset to post parent
								?>
							</div>
							</div>
						</div>

					</div>
				
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row end -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>