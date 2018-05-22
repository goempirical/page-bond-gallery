<?php
/**
 * Template Name: Container Exhibitions Past
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

          <?php
						$year_group = get_terms('exhibition_tags', array('hide_empty' => false, 'number' => 1, 'order' => 'DESC'));
						$year = '2018-2016--';
						foreach ( $year_group as $tag ) {
						    $year = $tag->name;
						}

						$pass = get_query_var('range');
						$just_past = array( 'taxonomy' => 'exhibition_categories', 
											'field' => 'slug',
											'terms' => 'past' );
						$past_range_year = array( 'relation' => 'AND',
												  array(
													  'taxonomy' => 'exhibition_tags',
													  'field' => 'slug',
													  'terms' => $pass ? $pass : $year
												  ),
												  $just_past
												);
						
						
						$query  = new WP_Query( array(
							'post_type' => 'exhibitions',
							'sort' => 'DESC',
							'tax_query' => $past_range_year,
							'posts_per_page' => -1 
						));
						
						$post_tags = wp_get_post_tags($query->ID);
						
						foreach ($post_tags as $tag):
							echo $tag->name;
						endforeach;
					?>
					<div class="row justify-content-center">
						<div class="col-md-11 grid-container">
					
							<div class="select-range-years box-stroke__bottom adding__padding__bottom">						
						
						<!-- GET YEARS FROM TERMS (EXHIBITIONS_TAGS) -->
							
						<?php $terms_years =  get_terms('exhibition_tags', array('hide_empty' => false, 'order' => 'DESC')); ?>
							
							<?php 

							$i=0;

							foreach($terms_years as $range_year) : 
							
								$params = array( 'range' => $range_year->slug );

								$url = home_url();

								$active = ($pass && $pass == $range_year->slug) ? true : false;

								if(!$pass && $i==0) $active = true;

								$i++;
										
							?>	
								<a href="<?php echo esc_url( $url ) . add_query_arg($params, '/past'); ?>"  <?php if ( $active ) { echo 'class="active"'; } ?>   > <?php echo $range_year->name; ?> </a>
							
							<?php endforeach; ?>
						
						</div>	

						<div class="row">
						<?php 
							while ( $query->have_posts() ) : $query->the_post(); 
								
							$exhibition_content = get_field('exhibition_content'); ?>
							<div class="col-md-4 grid-item">
								<a href="<?php the_permalink(); ?>">
									<div class="img-wrap">
									<?php	
									if( $exhibition_content['exhibitions_featured_image'] ) {
										echo wp_get_attachment_image( $exhibition_content['exhibitions_featured_image'], 'thumbnail' );
									}
									?>
									</div>
									<h2 class="adding__space"><?php the_title();?> </h2> 
									<p><?php echo $exhibition_content['date_text'];?></p>
								</a>
							</div>
						<?php 
							endwhile; ?>
						</div>

						</div>
					</div>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row end -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>
