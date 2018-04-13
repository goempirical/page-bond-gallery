<?php
/**
 * Template Name: Standard Template
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

		<div class="row justify-content-center">
			

			<div class="col-md-12 content-area " id="primary">

				<main class="site-main" id="main" role="main">
						<div class="row justify-content-center">
						<div class="col-md-10 no__padding__left">
							
								<div class="col-md-12 no__padding__right">
									<?php
										if ( is_page() && $post->post_parent > 0 ) : 
											wp_nav_menu( 
												array( 'menu' => 'contact_menu', 
												'menu_class' => 'menu box-stroke__bottom',
												'container_class' => 'menu-side-container'  ) );?>
									<?php endif;?>
								</div>
								<?php /* GALLERY STANDARD */ ?> 
									<div class="col-md-12">
									<?php $gallery_stand = get_field('gallery_standard'); $size = 'full'; ?>

										<?php if ( $gallery_stand ) :  ?>

											<?php foreach( $gallery_stand as $image_standard ) : ?> 

												<?php echo wp_get_attachment_image($image_standard['ID'], $size); ?> 

											<?php endforeach; ?> 


										<?php endif; ?>
									</div>
								<div class="col-md-12">
									<?php while ( have_posts() ) : the_post(); ?>

										<?php get_template_part( 'loop-templates/content', 'page' ); ?>

										<?php
										// If comments are open or we have at least one comment, load up the comment template.
										if ( comments_open() || get_comments_number() ) :

											comments_template();

										endif;
										?>

									<?php endwhile; // end of the loop. ?>
								</div>	

						</div>
					</div> <!-- END ROW -->
			
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
