<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();
?>

<?php
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row justify-content-center">
			<div class="col-md-11 main-content-area">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<div class="aux_content">
					<div class="row justify-content-between">


			<div class="col-md-8 col-xl-7 content-area" id="primary">

			<main class="site-main" id="main">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', 'news' );
						?>

					<?php endwhile; ?>

				<?php else : ?>

				<div class="aux_content box-stroke adding__space adding__padding__top">
					<div class="row">
					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<div class="blogroll-footer d-flex justify-content-between"> 
			<?php
			previous_posts_link( '&lt; Previous' );
			next_posts_link( 'Next &gt;' );
		 	?>
		 	</div>
		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div> <!-- .row -->
</div>
</div>
</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
