<?php
/**
 * Partial template for content in get_template_part
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->
	<?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

	

			<div class="row justify-content-center">

				<div class="col-md-10">

					<div class="row justify-content-center">

						<div class="col-md-12">
						<?php //echo print_r( wp_get_nav_menu_object('')->count ); 
							wp_nav_menu( 
								array( 'menu' => 'contact_menu', 
									   'menu_class' => 'menu box-stroke__bottom',
									   'container_class' => 'menu-side-container'  ) );
						?> 
						</div>

					</div>


					<div class="row row__space__bottom">

						<div class="col-md-4">

							<?php the_content(); ?>

						</div>

						<div class="col-md-8">

							<?php $my_address = get_field('contact_map'); ?>
		
								<iframe
									frameborder="0" style="border:0"
									src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBfUJ2B05OTiOmiPpaGLNK8_BaXeFXiATA&q=<?php echo $my_address['address']; ?>&zoom=20">
								</iframe>			
							<?php
								wp_link_pages( array(	
									'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
									'after'  => '</div>',
								) );
							?>
						
					</div>
			
				</div>

			</div>

					</div>


			<div class="row justify-content-center">

				<div class="col-md-10 height_stand">
					
					<div class="box-stroke">

						<?php echo get_field('contact_policy'); ?>

					</div>

				</div>

			</div>
		

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php //edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->