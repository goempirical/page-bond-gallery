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
						$pass = get_query_var('range');
						$just_past = array( 'taxonomy' => 'exhibition_categories', 
											'field' => 'slug',
											'terms' => 'past' );
						$past_range_year = array( 'relation' => 'AND',
												  array(
													  'taxonomy' => 'exhibition_tags',
													  'field' => 'slug',
													  'terms' => $pass
												  ),
												  $just_past
												);
						
						
						$query  = new WP_Query( array(
							'post_type' => 'exhibitions',
							'tax_query' => (!$pass) ? array( $just_past ) : $past_range_year 
						));
						
						$post_tags = wp_get_post_tags($query->ID);
						
						foreach ($post_tags as $tag):
							echo $tag->name;
						endforeach;
						?>
					<div class="row justify-content-center">
						<div class="col-md-10">
					
							<div class="select-range-years box-stroke__bottom adding__padding__bottom">						
						
						<!-- GET YEARS FROM TERMS (EXHIBITIONS_TAGS) -->
							
						<?php $terms_years =  get_terms('exhibition_tags', array('hide_empty' => false, 'order' => 'DESC')); ?>
							
							<?php foreach($terms_years as $range_year) : 
							
								$params = array( 'range' => $range_year->slug );
										
							?>	
								<a href="<?php echo add_query_arg($params, '/past'); ?>"  <?php if ( $pass && $pass == $range_year->slug ) { echo 'class="active"'; } ?>   > <?php echo $range_year->name; ?> </a>
							
							<?php endforeach; ?>
						
						</div>	

						<div class="row">
						<?php 
							while ( $query->have_posts() ) : $query->the_post(); 
								
							$exhibition_content = get_field('exhibition_content'); ?>
							<div class="col-md-4">
							<?php	
								if( $exhibition_content['exhibitions_featured_image'] ) {
									echo wp_get_attachment_image( $exhibition_content['exhibitions_featured_image'], 'medium' );
								}
							?>
								<a href="<?php the_permalink(); ?>"> <h2 class="adding__space"> <?php the_title();?> </h2> </a> 
								<p><?php echo $exhibition_content['date_text'];?></p>
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
