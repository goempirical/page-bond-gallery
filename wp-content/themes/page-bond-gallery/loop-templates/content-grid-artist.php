<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

$artist_content = get_field('artist_content');
?>
<div class="col-md-4 grid-item">
	<a href="<?php the_permalink(); ?>">
		<div class="img-wrap">
			<img src="<?php echo $artist_content['artist_featured_image']['sizes']['thumbnail'] ?>" alt="<?php echo the_title();?>">
		</div>
		<h2><?php the_title();?></h2>
	</a>
</div>