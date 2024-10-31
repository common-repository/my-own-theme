=== My Own Theme ===
Contributors: aercolino
Donate link: http://noteslog.com/
Tags: customize, theme, extreme, customization, jquery, javascript
Requires at least: 2.1
Tested up to: 2.3
Stable tag: 1.2

Extreme theme customization for WordPress with jQuery

== Description ==

Extreme theme customization for WordPress with jQuery.

You can edit `My Own Theme` at will, in two clearly delimited areas, one for the ADMIN VIEW and one for the USERS VIEW.

It's just a matter of adding some jQuery (JavaScript) snippets.


= Examples =
You can try to copy and paste the following jQuery snippets, after the installation.

**USER VIEW: How to highlight your comments** (supposing your display name is `admin`)

`$( 'cite:contains(admin)', '.commentlist' )
  .parent()
  .css( {border: '1px dashed red', padding: '3px'} );`


**ADMIN VIEW: How to hide the panel `Other WordPress News`**

`$( '#planetnews' ).hide();`


== Installation ==

1. Copy the `my-own-theme` folder into your plugins folder
1. Activate `My Own Theme`

== Frequently Asked Questions ==

none


== Screenshots ==

none
