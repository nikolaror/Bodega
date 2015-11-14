<?php
/**
 * @package WordPress
 * @subpackage bodega Theme
 */
?>
<?php get_header(); ?>

<div id="page-heading">
    <h1 class="page-title"><?php _e('404 Error','bodega'); ?></h1>		
</div>
<!-- END page-heading -->

<div class="post clearfix">

<div class="entry clearfix">		
	<p><?php _e('Sorry, the page you were looking for could not be found.','bodega'); ?>.</p>
</div><!-- END entry -->

</div>
<!-- END post -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>