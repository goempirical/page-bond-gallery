<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();

$container  = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row justify-content-center">

			<div class="col-md-11 main-content-area">
			
			<div class="aux_content">
			
			<div class="row justify-content-between">


			<div class="col-md-8 col-xl-7 content-area test" id="primary">

			<main class="site-main" id="main">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content-news', get_post_format() );
						?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php 
			$args = array(
				'base'               => '%_%',
				'format'             => '?paged=%#%',
				'total'              => 1,
				'current'            => 0,
				'show_all'           => false,
				'end_size'           => 1,
				'mid_size'           => 2,
				'prev_next'          => true,
				'prev_text'          => __('< Previous'),
				'next_text'          => __('Next >'),
				'type'               => 'plain',
				'add_args'           => false,
				'add_fragment'       => '',
				'before_page_number' => '',
				'after_page_number'  => ''
			);
			
			?>
			<div class="blogroll-footer d-flex justify-content-between"> 
			<?php
			previous_posts_link( '&lt; Previous' );
			next_posts_link( 'Next &gt;' );
		 	?>
		 	</div>
		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		<?php get_sidebar( 'right' ); ?>
				</div>
			</div>
		</div> <!-- .col-md-10 -->
	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
