<?php
/**
 * Template Name: Home Page Template
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
				<div class="owl-carousel owl-theme owl-loaded">
					<div class="owl-stage-outer">
						<div class="owl-stage" >
						<?php 
						/* HEADER EXHIBITION MANUAL  */
						$link = get_field('link') ? get_field('link') : false;
						if( get_field('slides') ) : 
						foreach( get_field('slides') as $slide ) : ?>
						<div class="owl-item no__full">
							<?php echo $link ? '<a href="' . $link . '">' : ''; ?> 
								<img src="<?php echo $slide['image']['sizes']['slider'] ?>" alt="<?php echo the_title();?>">
							<?php echo $link ? '</a>' : ''; ?> 
						</div>
						<?php 
						endforeach;
						endif;
						?>
					</div>
				</div>
			</div>
				<?php
					$group = get_field('exhibit_info');
					if( get_field('exhibit_info') ) : 
				?>
				<section class="banner-info">
					<?php echo $link ? '<a href="' . $link . '">' : ''; ?> 
						<h1><?php echo $group['info_title'] ?></h1>
					<?php echo $link ? '</a>' : ''; ?>
					<h2><?php echo $group['info_date_text'] ?></h2>
				</section>
				<?php 
					endif;
				?>
			<?php
					/* LIST 2 RECENT POST NEWS */
				$recent_news = wp_get_recent_posts( array( 'post_type' => 'post', 'numberposts' => 2) );
			?>
			<div class="row justify-content-center">
				<div class="col-md-11 main-content-area">

					<div class="box-stroke"></div>
					<section class="row wrapper-recents">
						
						<?php foreach( $recent_news as $new ) :  ?>
							<article class="col-md-6 grid-item">
								<h1><?php echo $new['post_title']?></h2>
								<h2> <?php echo get_the_date( 'F j, Y', $new["ID"] );?>	 </h4>
								<p><?php echo wp_trim_words( $new['post_content'], 20, '...' ); ?></p>
								<a href="<?php echo get_permalink($new['ID']) ?>">READ MORE ></a>
							</article>
						
						<?php 
							endforeach; wp_reset_query(); 
						?> 
					</section>
				</div>
			</div>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row end -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>