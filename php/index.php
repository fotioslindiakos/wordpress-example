<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');

$_secure_tokens = array(
  'AUTH_KEY'
);

$a = get_defined_vars();
print "<table>";
foreach ($_secure_tokens as $key) {
  printf ("<tr><td>%s</td><td>%s</td></tr>",$key,$a[$key]);
}
print "</table>";

?>
