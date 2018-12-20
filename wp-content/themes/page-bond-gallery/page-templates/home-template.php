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

<main class="wrapper" id="full-width-page-wrapper" role="main">
	<div class="<?php echo esc_attr( $container ); ?> home-gallery" id="content">
	 	<?php
	 		$ex1 = get_field('exhibition_feature_1');
			$ex2 = get_field('exhibition_feature_2');
			
			$two = $ex2['show_2'] ? true : false;
			$two = $ex2['link'] ? $two : false;

			if($two){
		?>
		<div class="row">
			<div class="col-md-6 content-area">
		<?php
			}
		?>
				<div class="owl-carousel owl-theme owl-loaded">
					<div class="owl-stage-outer">
						<div class="owl-stage" >
							<?php 
							
								$link = $ex1['link'] ? $ex1['link'] : false;
								if( $ex1['slides'] ) : 
								foreach( $ex1['slides'] as $slide ) : 

							?>
							<div class="owl-item no__full">
								<?php echo $link ? '<a href="' . $link . '">' : ''; ?> 
									<img src="<?php echo $slide['image']['sizes']['lightbox'] ?>" alt="<?php echo the_title();?>">
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
					$group = $ex1['exhibit_info'];
					if( $ex1['exhibit_info'] ) : 
				?>
				<section class="banner-info">
					<?php echo $link ? '<a href="' . $link . '">' : ''; ?> 
						<h1><?php echo $group['info_title'] ?></h1>
					<?php echo $link ? '</a>' : ''; ?>
					<h2><?php echo $group['info_date_text'] ?></h2>
				</section>
				<?php endif; ?>

		 	<?php
				if($two){
			?>
			</div>
			<div class="col-md-6 content-area">
				<div class="owl-carousel owl-theme owl-loaded">
					<div class="owl-stage-outer">
						<div class="owl-stage" >
							<?php 
							/* HEADER EXHIBITION MANUAL  */
							$link = $ex2['link'] ? $ex2['link'] : false;
							if( $ex2['slides'] ) : 
							foreach( $ex2['slides'] as $slide ) : ?>
							<div class="owl-item no__full">
								<?php echo $link ? '<a href="' . $link . '">' : ''; ?> 
									<img src="<?php echo $slide['image']['sizes']['lightbox'] ?>" alt="<?php echo the_title();?>">
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
					$group = $ex2['exhibit_info'];
					if( $ex1['exhibit_info'] ) : 
				?>
				<section class="banner-info">
					<?php echo $link ? '<a href="' . $link . '">' : ''; ?> 
						<h1><?php echo $group['info_title'] ?></h1>
					<?php echo $link ? '</a>' : ''; ?>
					<h2><?php echo $group['info_date_text'] ?></h2>
				</section>
			<?php  endif; ?>
			</div>
		</div>
		<?php } ?>
	</div>
		<?php
			/* LIST 2 RECENT POST NEWS */
		$recent_news = wp_get_recent_posts( array( 'post_type' => 'post', 'numberposts' => 2) );
	?>

	<div class="<?php echo esc_attr( $container ); ?>">
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
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>