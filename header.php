<?php
/** 
 * Header template.
 * 
 * @package CleanAlien
*/
?>
<?php get_template_part('template-partials/header/head'); ?>
<body <?php body_class(); ?>>
<!-- check if function exists first, just in case someone's wordpress is at a version less than 5.2 -->
<?php 
if ( function_exists( 'wp_body_open' )) {
wp_body_open(); 
}
?>
<?php get_template_part( 'template-partials/header/nav'); ?>