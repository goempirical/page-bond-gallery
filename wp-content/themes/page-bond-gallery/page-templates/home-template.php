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
						if( get_field('slides') ) : 
						foreach( get_field('slides') as $slide ) : ?>
						<div class="owl-item">
							<a href="<?php echo $slide['link'] ?>">
								<?php echo wp_get_attachment_image( $slide['image']['ID'], 'full' ); ?> 
							</a>
							<section>
								<a href="<?php echo $slide['link'] ?>">
									<h1><?php echo $slide['slider_info']['slider_info_title'] ?></h1>
								</a>
								<h2><?php echo $slide['slider_info']['slider_info_date_text'] ?></h2>
							</section>
						  </div>
						<?php 
						endforeach;
						endif; ?>
						</div>
					</div>
				</div>
					<?php
							/* LIST 2 RECENT POST NEWS */
						$recent_news = wp_get_recent_posts( array( 'post_type' => 'post', 'numberposts' => 2) );
					?>
			<div class="row justify-content-center">
				<div class="col-md-10">
					<section class="row wrapper-recents box-stroke">
						
						<?php foreach( $recent_news as $new ) :  ?>
							<article class="col-md-5">
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