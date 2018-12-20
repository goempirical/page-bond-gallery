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
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'exhibition_categories',
				'field' => 'slug',
				'terms' => 'current'
			)
		)
	));
?>

<main class="wrapper" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="row justify-content-center">
			<div class="col-md-11 grid-container">	
					
			<?php
				while ( $query->have_posts() ) : $query->the_post();
				$exhibition_content = get_field('exhibition_content'); 
			?>

				<div id="gallery-title" class="head_content box-stroke__bottom">
					<div>
						<h1 class="gallery-title"><?php the_title(); ?></h1>
						<p><?php echo $exhibition_content['date_text']; ?></p> 
					</div>

					<div class="aux_links" >
						<a href="<?php the_permalink(); ?>" >View Exhibition</a>
					</div>
				</div>

				<div class="row">			
				<?php 
					if( $exhibition_content['exhibition_images'] ) : 
						$i = 1;
						foreach( array_slice($exhibition_content['exhibition_images'], 0, 6) as $slide ) : 
				?>
						<div class="col-md-4 grid-item"> 
							<a href="<?php the_permalink(); ?>" class="gallery-image"><img src="<?php echo $slide['sizes']['thumbnail'] ?>"></a>
						</div>
				<?php 
						$i++;
						endforeach;
					endif; 
				?>
			</div>	

			<?php endwhile; ?>

		</div>
	</div>
</main><!-- #main -->

<?php get_footer(); ?>
