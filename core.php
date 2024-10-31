<?php

function myOwnTheme_init() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://code.jquery.com/jquery-latest.pack.js', false, '' );

	$url = get_bloginfo('wpurl').'/wp-content/plugins/my-own-theme';
	wp_register_script( 'jquery_no_conflict', $url . '/jquery_no_conflict.js', array( 'jquery' ), '' );	
	wp_enqueue_script( 'jquery_no_conflict' );
}

function jquery_no_conflict_follows_jquery( $js_array ) {
	if ( false === $jquery = array_search( 'jquery', $js_array ) )
		return $js_array;

	if ( false === $jquery_no_conflict = array_search( 'jquery_no_conflict', $js_array ) )
		return $js_array;

	if ( $jquery_no_conflict == $jquery + 1 )
		return $js_array;

	array_splice( $js_array, $jquery + 1, 0, 'jquery_no_conflict' );

	unset($js_array[$jquery_no_conflict + ($jquery_no_conflict < $jquery ? 0 : 1)]);

	return $js_array;
}

function myOwnTheme_setup() { 
	?>
<script type="text/javascript">
	jQuery( function( $ ) { 
	<?php
		if( is_admin() ) { myOwnTheme_ADMIN_VIEW(); }
		else             { myOwnTheme_USERS_VIEW(); } 
	?>
	} ); 
</script>
	<?php 
}

add_filter( 'print_scripts_array', 'jquery_no_conflict_follows_jquery' );
add_action( 'wp_print_scripts', 'myOwnTheme_init' );
add_action( is_admin() ? 'admin_head' : 'wp_head', 'myOwnTheme_setup' );
