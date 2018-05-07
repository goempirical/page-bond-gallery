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
								<?php 
									$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
									$query_artists = new WP_Query(array('post_type' => 'artist', 'order' =>  'ASC', 'orderby' => 'title', 'posts_per_page' => 12, 'paged' => $paged ));
								?>

									<script>
											// {ID} is any unique name, example: b1, q9, qq, misha etc, it should be unique
											var posts_artists = '<?php echo serialize( $query_artists->query_vars ) ?>',
											    current_page_artists = <?php echo $query_artists->query_vars['paged'] ?>,
											    max_page_artists = <?php echo $query_artists->max_num_pages ?>,
											    ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
									</script>

							<?php
									global $wp_query;
									// Put default query object in a temp variable
									$tmp_query = $wp_query;
									// Now wipe it out completely
									$wp_query = null;
									// Re-populate the global with our custom query
									$wp_query = $query_artists;

									if ($query_artists->have_posts()) :
									?>
								<div id="artist-grid" class="row">
									<?php 
    								while ($query_artists->have_posts()) : $query_artists->the_post();

											get_template_part( 'loop-templates/content-grid-artist' );
										
										endwhile; 
										wp_reset_postdata(); //Reset to post parent

									?>
								</div>
									<?php

										if (  $query_artists->max_num_pages > 1 )
											echo '<a href="#" class="loadmore_artists">More Artists</a>';

									endif;

									$wp_query = null;
									$wp_query = $tmp_query;
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