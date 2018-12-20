<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */
$artist_content = get_field('artist_content');
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php 
			the_title( 
				sprintf( 
					'<a href="%s" rel="bookmark" ><h2>Artist: ', 
					esc_url(get_permalink()) 
				),
				'</h2></a>' 
			); 
		?>

	</header><!-- .entry-header -->

	<a href="<?php the_permalink(); ?>">
		<div class="img-wrap">
			<img src="<?php echo $artist_content['artist_featured_image']['sizes']['large'] ?>" alt="<?php echo the_title();?>">
		</div>
	</a>
</article><!-- #post-## -->
