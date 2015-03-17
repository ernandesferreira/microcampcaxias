<?php
/**
 * The template for displaying search forms in web2feel
 *
 * @package web2feel
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Buscar por:', 'label', 'web2feel' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Buscar &hellip;', 'placeholder', 'web2feel' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'web2feel' ); ?>">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Buscar', 'submit button', 'web2feel' ); ?>">
</form>
