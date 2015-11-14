<?php
/**
 * @package WordPress
 * @subpackage bodega Theme
 */
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>   

<div id="page-heading">
	<h1><?php the_title(); ?></h1>
    
    <div id="single-portfolio-nav" class="clearfix"> 
			<div id="single-nav-left"><?php next_post_link('%link', '&larr; Next', FALSE); ?></div>
			<div id="single-nav-right"><?php previous_post_link('%link', 'Previous &rarr;', FALSE); ?></div>
	</div>
    
</div>

<div class="post full-width clearfix">

<div id="single-portfolio" class="clearfix">

		<div id="single-portfolio-left">
			<?php the_content(); ?>
            <div class="clear"></div>
            
                        
            <?php
			//get terms
			$terms = get_the_term_list( get_the_ID(), 'portfolio_cats' );
			?>
            <?php if($terms) { ?>
            <div id="single-portfolio-meta" class="clearfix">
            <h4><?php _e('Posted Under','bodega'); ?></h4>
            	<?php echo $terms; ?>
            </div>
            <?php } ?>
            
            
        </div>
        
        <div id="single-portfolio-right">
        
         <?php
		//get attachement count
		$get_attachments = get_children( array( 'post_parent' => $post->ID ) );
		$attachments_count = count( $get_attachments );
		
		//attachement loop
		$args = array(
			'orderby' => 'menu_order',
			'post_type' => 'attachment',
			'post_parent' => get_the_ID(),
			'post_mime_type' => 'image',
			'post_status' => null,
			'posts_per_page' => -1
		);
		$attachments = get_posts($args);
		
		//start loop
		foreach ($attachments as $attachment) :
		
        //get images
        $full_img = wp_get_attachment_image_src( $attachment->ID, 'full-size');
        $portfolio_single = wp_get_attachment_image_src( $attachment->ID, 'portfolio-single');
		?>
			<a href="<?php echo $full_img[0]; ?>" title="<?php echo apply_filters('the_title', $attachment->post_title); ?>" <?php if($attachments_count =='1') { echo 'class="prettyphoto-link"'; } else { echo 'rel="prettyPhoto[gallery]"'; } ?>><img src="<?php echo $portfolio_single[0]; ?>" height="<?php echo $portfolio_single[2]; ?>" width="<?php echo $portfolio_single[1]; ?>" alt="<?php echo apply_filters('the_title', $attachment->post_title); ?>" /></a>
		<?php endforeach; ?>
        
        </div>
  
</div>   
</div>
        
        
<?php endwhile; ?>
<?php endif; ?>	
<?php get_footer(); ?>