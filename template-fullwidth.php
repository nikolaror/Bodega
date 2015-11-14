<?php
/**
 * @package WordPress
 * @subpackage bodega Theme
 * Template Name: Full-Width
 */
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- END page-heading -->

<div class="post full-width clearfix">
<?php the_content(); ?>
</div>
<!-- END .post -->
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>