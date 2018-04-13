<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<pre>
			<?php $my_content = get_field('news_content');?>
		</pre>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		'</a></h2>' ); ?>

		<div> <?php //echo $my_content['news_post_date'] ?> </div> 

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<?php echo get_the_date( 'F j, Y' ); //understrap_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<?php 
		if( $my_content['news_post_image'] ) : 
			foreach ( $my_content as $image ) :
				echo wp_get_attachment_image($image['ID'], 'full');
			endforeach;
		endif;
	?>

	<div class="entry-content">

		<?php
		the_excerpt();
		?>

		<?php
	//	wp_link_pages( array(
	//		'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
	//		'after'  => '</div>',
	//		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
