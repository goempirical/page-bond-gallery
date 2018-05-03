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
						<div class="col-md-11 grid-container">
							<div class="box-stroke adding__padding__top">
							<div class="row">
								<?php 
									$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
									$query_artists = new WP_Query(array('post_type' => 'artists', 'order' =>  'ASC', 'orderby' => 'title', 'posts_per_page' => 9, 'paged' => $paged ));
									while ($query_artists->have_posts()) : $query_artists->the_post(); 
										$artist_content = get_field('artist_content');
								?>
									<div class="col-md-4 grid-item">
										<a href="<?php the_permalink(); ?>">
											<div class="img-wrap">
												<img src="<?php echo $artist_content['artist_featured_image']['sizes']['thumbnail'] ?>" alt="<?php echo the_title();?>">
											</div>
											<h2><?php the_title();?></h2>
										</a>
									</div>
								<?php 
									previous_posts_link( 'Newer posts &raquo;' );
									next_posts_link('Older &raquo;');
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