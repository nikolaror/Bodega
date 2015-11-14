<?php
//get theme options
$options = get_option( 'workz_theme_settings' );
?>
<?php
	//get custom post type === > Slides
	global $post;
	$args = array(
		'post_type' =>'slides',
		'numberposts' => -1,
		'orderby' => 'ASC'
	);
	$slides = get_posts($args);
?>
<?php if($slides) { ?>
<div id="slider-wrap">
	<div id="slider_nivo" class="nivoSlider"> 
		<?php
		//captions array
		$captions = array();
		// start loop
        foreach($slides as $post) : setup_postdata($post);
		//get featured image ==> full size
		$featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'nivo-slider');
		// get metabox data
		$slidelink = get_post_meta($post->ID, 'workz_slides_url', TRUE);
		$slidedescription = get_post_meta($post->ID, 'workz_slides_description', TRUE);
		$captions[] = $slidedescription;//save caption into array
		?>
        <?php
        //only show slide if featured thumbnail is defined
		if ( has_post_thumbnail() ) { ?>
             <?php
			// show link with slide if meta exists
			if($slidelink != '') { ?>
				<a href="<?php echo $slidelink ?>" title="<?php the_title(); ?>"><img src="<?php echo $featured_image[0]; ?>" alt="<?php the_title(); ?>" width="<?php echo $featured_image[1]; ?>" height="<?php echo $featured_image[2]; ?>" <?php if(!empty($slidedescription)) { ?>title="#caption<?php echo count($captions)-1; ?>"<?php } ?> /></a>
         <?php
         // no meta link defined, show plain img
        } else { ?> 
		<img src="<?php echo $featured_image[0]; ?>" alt="<?php the_title(); ?>"width="<?php echo $featured_image[1]; ?>" height="<?php echo $featured_image[2]; ?>" <?php if(!empty($slidedescription)) { ?>title="#caption<?php echo count($captions)-1; ?>"<?php } ?> />
       <?php } ?>
       <?php } ?>
		<?php endforeach; ?>
	</div><!--/slider nivoSlider-->
	<?php foreach($captions as $key => $caption) if(!empty($caption)) { { echo '<div id="caption'.$key.'" class="nivo-html-caption">'. $caption.'</div>'; } } ?>
</div><!--/slider-wrap -->
<?php } wp_reset_postdata(); ?>