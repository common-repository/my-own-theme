<?php
/*
Plugin Name: My Own Theme
Plugin URI: http://noteslog.com/my-own-theme/
Description: Extreme theme customization for WordPress with jQuery
Author: Andrea Ercolino
Version: 1.1
Author URI: http://noteslog.com
*/

require_once( dirname( __FILE__ ) . '/core.php' );

//////////////////////////////////////////////////////////////////////////

function myOwnTheme_ADMIN_VIEW() { /* --------- EDIT AFTER THIS LINE -- */ ?>

$( '#planetnews' ).hide();

<?php /*-------------------------------------- EDIT BEFORE THIS LINE -- */ }

//////////////////////////////////////////////////////////////////////////

function myOwnTheme_USERS_VIEW() { /* --------- EDIT AFTER THIS LINE -- */ ?>

//minimalize MyBlogLog widget
$( '.mbl_mem' ).remove();
$( '.mbl_fo_hidden' ).parent().remove();
$( '.mbl_img' ).css( {backgroundColor: 'white'} );
$( '#MBL_COMM' ).css( {width: '50px', backgroundColor: 'white'} );

//mark my comments
$( 'cite:contains(Andrea Ercolino)', '.commentlist' )
  .parent()
  .css( {'border-right': '2px dashed red'} );

<?php /*-------------------------------------- EDIT BEFORE THIS LINE -- */ }

//////////////////////////////////////////////////////////////////////////

?>