<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
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
	<div class="entry-meta">
		<?php echo get_the_date( 'F j, Y' ); ?>
	</div><!-- .entry-meta -->
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
