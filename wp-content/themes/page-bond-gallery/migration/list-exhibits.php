<?php
/**
 * Template Name: List Exhibits
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
									$query_attaches = new WP_Query(array('post_type' => 'exhibitions', 'order' =>  'ASC', 'posts_per_page' => -1));
									while ($query_attaches->have_posts()) : $query_attaches->the_post(); 
										//$file_name = $post->post_title;
										//$img_r[$file_name] = $post->ID;
										// $img_r[$file_name] = $post->ID;

								//   Update exhibit publish date
										// $exhibition_content = get_field('exhibition_content');
										// if(strpos($exhibition_content['date_text'], ' — ') !== false) {
										//   $date_text =  explode(' — ', $exhibition_content['date_text']);
										// 	$file_name = date('Y-m-d H:i:s', strtotime($date_text[0]));
										// } elseif(strpos($exhibition_content['date_text'], ' &mdash; ') !== false) {
										//   $date_text =  explode(' &mdash; ', $exhibition_content['date_text']);
										// 	$file_name = date('Y-m-d H:i:s', strtotime($date_text[0]));
										// } else {
										//   $file_name = $exhibition_content['date_text'];
										// }
										// wp_update_post(
										//     array (
										//         'ID'            => $post->ID, // ID of the post to update
										//         'post_date'     => $file_name,
										//         'post_date_gmt' => get_gmt_from_date( $file_name )
										//     )
										// );
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