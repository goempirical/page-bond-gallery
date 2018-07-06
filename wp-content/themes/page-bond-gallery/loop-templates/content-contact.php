<?php
/**
 * Partial template for content in get_template_part
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

			<div class="row justify-content-center">

				<div class="col-md-11 main-content-area">

						<?php //echo print_r( wp_get_nav_menu_object('')->count ); 
							wp_nav_menu( 
								array( 'menu' => 'contact_menu', 
									   'menu_class' => 'menu box-stroke__bottom',
									   'container_class' => 'menu-side-container'  ) );
						?> 

					<div class="row">

						<div class="col-md-4 grid-item">

							<?php the_content(); ?>

						</div>

						<div class="col-md-8 grid-item">

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
					
				<div class="box-stroke policy-section">

					<?php echo get_field('contact_policy'); ?>

				</div>

			</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php //edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
