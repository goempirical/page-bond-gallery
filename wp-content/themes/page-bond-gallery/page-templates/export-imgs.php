<?php
/**
 * Template Name: Export Imgs
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
									$img_r = array();
									$query_attaches = new WP_Query(array('post_type' => 'attachment', 'post_status' => 'inherit', 'order' =>  'ASC'));
									while ($query_attaches->have_posts()) : $query_attaches->the_post(); 
										$file_name = explode('/2018/04/', $post->guid);
										$img_r[$post->ID] = $file_name[1];
									endwhile; 
									wp_reset_query(); //Reset to post parent

									echo '<pre>';
									print_r($img_r);
									echo '</pre>';
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