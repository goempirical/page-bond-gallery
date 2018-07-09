<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package understrap
 */

?>
<form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<label class="assistive-text" for="s"><?php esc_html_e( 'Search', 'understrap' ); ?></label>
	<div class="input-group">
		<?php 
			$search_query = get_search_query(); 
			$search_query = $search_query === 'search' ? '' : $search_query;
		?>
		<input class="field form-control" id="s" name="s" type="text"
			placeholder="<?php esc_attr_e( 'Search &hellip;', 'understrap' ); ?>" value="<?php echo $search_query; ?>">
		<span class="input-group-append">
			<input class="submit btn btn-primary searchsubmit" id="searchsubmit" name="submit" type="submit"
			value="<?php esc_attr_e( 'Search', 'understrap' ); ?>">
	</span>
	</div>
</form>
