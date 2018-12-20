<?php
/**
 * The template for displaying all single news.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<div class="row justify-content-center">
			<div class="col-md-11 main-content-area">
				<div class="aux_content">
					<div class="row justify-content-between">

						<div class="col-md-8 col-xl-7 content-area" id="primary">

						<main class="site-main" id="main">
							<?php while ( have_posts() ) : the_post(); ?>
								<header class="entry-header">
									<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
								</header><!-- .entry-header -->
								<?php get_template_part( 'loop-templates/content', 'single' ); ?>
							<?php endwhile; // end of the loop. ?>
						</main><!-- #main -->
					</div><!-- #primary -->

					<!-- Do the right sidebar check -->
					<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>
											
					</div>
				</div>
			</div>
		</div><!-- .row -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->
<?php get_footer(); ?>
