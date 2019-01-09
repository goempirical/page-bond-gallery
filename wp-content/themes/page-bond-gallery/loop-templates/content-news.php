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

	<?php 
		$content = get_the_content();
		$trimmed_content = wp_trim_words(  $content , 68, '...' );
	?>

	<div class="entry-content">
		<p><?php echo $trimmed_content; ?></p>
		<p><?php if(substr_count($content, ' ') > 66) echo '<a class="read-more" href="'.get_permalink().'">READ MORE &gt;</a>'; ?></p>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
