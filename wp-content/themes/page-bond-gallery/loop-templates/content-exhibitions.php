<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */
$exhibition_content = get_field('exhibition_content');
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php 
			the_title( 
				sprintf( 
					'<a href="%s" rel="bookmark" ><h2>Exhibition: ', 
					esc_url(get_permalink()) 
				),
				'</h2></a>' 
			); 
		?>

	</header><!-- .entry-header -->

	<a href="<?php the_permalink(); ?>">
		<div class="img-wrap">
			<?php	
			if( $exhibition_content['exhibitions_featured_image'] ) {
				echo wp_get_attachment_image( $exhibition_content['exhibitions_featured_image'], 'large' );
			}
			?>
		</div>
	</a>
</article><!-- #post-## -->
