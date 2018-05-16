<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php 
			the_title( 
				sprintf( 
					'<a href="%s" rel="bookmark" ><h2>', 
					esc_url(get_permalink()) 
				),
				'</h2></a>' 
			); 
		?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<?php echo get_the_date( 'F j, Y' ); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<?php 
		$video = get_field('video');
		if ( $video ) { 
	?>
				<div class="videoWrapper">
					<?php echo $video; ?>
				</div>
	<?php
		} elseif ( has_post_thumbnail() ) {
			the_post_thumbnail('large');
		}
	?>
				
	<div class="entry-content">
		<p> <?php echo wp_trim_words(  get_the_content() , 30, '...' ); ?> </p>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
