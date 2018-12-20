<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="search-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row justify-content-center">
			<div class="col-md-11 main-content-area">
				<div class="aux_content box-stroke adding__space adding__padding__top">
					<div class="row">

						<!-- Do the left sidebar check and opens the primary div -->
						<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

						<main class="site-main" id="main">

							<?php if ( have_posts() ) : ?>

								<header class="page-header">
									
										<h1 class="page-title"><?php printf(
										/* translators:*/
										 esc_html__( 'Search Results for: %s', 'understrap' ),
											'<span>' . get_search_query() . '</span>' ); ?></h1>

								</header><!-- .page-header -->

								<?php /* Start the Loop */ ?>
								<?php while ( have_posts() ) : the_post(); 
								
									if ( 'exhibitions' == get_post_type() ) {
										get_template_part( 'loop-templates/content', 'exhibitions' );
									} elseif ( 'artist' == get_post_type() ) {
										get_template_part( 'loop-templates/content', 'artist' );
									} else {
										get_template_part( 'loop-templates/content', 'news' );
									}
									
								endwhile; ?>

							<?php else : ?>

								<?php get_template_part( 'loop-templates/content', 'none' ); ?>

							<?php endif; ?>

						</main><!-- #main -->
						<div class="blogroll-footer d-flex justify-content-between"> 
						<?php
						previous_posts_link( '&lt; Previous' );
						next_posts_link( 'Next &gt;' );
					 	?>
					 	</div>
					</div>

		<!-- Do the right sidebar check -->
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

				</div><!-- .row -->
			</div>
		</div>

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
