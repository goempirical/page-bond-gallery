<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

get_header();

get_header();
$container = get_theme_mod( 'understrap_container_type' );
$put_boxStroke = 'box-stroke';
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row justify-content-center">

			<div class="col-md-11 main-content-area" id="primary">

				<main class="site-main" id="main">

					<section class="error-404 not-found page-content">

						<header class="page-header">

							<h1 class="page-title"><?php esc_html_e( 'That page can&rsquo;t be found.',
							'understrap' ); ?></h1>

						</header><!-- .page-header -->

						<div class="page-content">
							<div class="row__space__bottom">
								<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?',
								'understrap' ); ?></p>

								<?php get_search_form(); ?>
							</div>

							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

							<?php if ( understrap_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>

								<div class="widget widget_categories">

									<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'understrap' ); ?></h2>

									<ul>
										<?php
										wp_list_categories( array(
											'orderby'    => 'count',
											'order'      => 'DESC',
											'show_count' => 1,
											'title_li'   => '',
											'number'     => 10,
										) );
										?>
									</ul>

								</div><!-- .widget -->

							<?php endif; ?>

						</div><!-- .page-content -->

					</section><!-- .error-404 -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
