<?php
/**
 * @package WordPress
 * @subpackage Chicago Desavanja
 * Template Name Posts: Novosti Single
 */
?>

<?php get_header(); ?>
<div id="cd_adresar_title"><div id="naslov_gal">CHICAGO DESAVANJA - BIZNIS ADRESAR</div>
<div id="izaberi">
 <div class="btn-group">
                                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                                            Izaberi kategoriju
											<span class="caret"></span>
										</button>
                                        <ul class="dropdown-menu">
										<li><a href="<?php echo get_category_link($cat=34);?>">Restorani</a></li>
                                   <li> <a href="<?php echo get_category_link($cat=5);?>">Zurke</a></li>
                                   <li> <a href="<?php echo get_category_link($cat=7);?>#">Turneje</a></li>
                                   <li> <a href="<?php echo get_category_link($cat=6);?>">Koncerti</a></li>
                                   <li> <a href="<?php echo get_category_link($cat=35);?>">Sportska desavanja</a></li>
                                   <li> <a href="<?php echo get_category_link($cat=4);?>">Manifestacije</a></li>
                                   <li> <a href="<?php echo get_category_link($cat=33);?>">Proslave</a></li>
                                  <li>  <a href="<?php echo get_category_link($cat=9);?>">Ostalo</a></li>

                                        </ul>
                                    </div>


</div></div>


 <div id="adresar_levo">
  <div id="naslov_bg_adresar" class="naslov_adresar_single">
<h1><?php the_title(); ?></h1>
 </div>
<div id="adresar_levo_unutar">      
	   <div id="adresar_single">
	   <!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
				        <!-- END post-bottom -->
		<!-- Stop The Loop (but note the "else:" - see next line). -->
 <?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>

 <!-- REALLY stop The Loop. -->
 <?php endif; ?>
        <div class="clear"></div>
        
        <?php wp_link_pages(' '); ?>
         <?php edit_post_link('Izmeni', '', ''); ?>
        <div class="post-bottom">
        	<?php the_tags('<div class="post-tags">',' , ','</div>'); ?>
        </div>
        <!-- END post-bottom -->
</div>
<?php echo do_shortcode('[fbcomments]');?>
<div style="clear:both"></div></div></div>


<div id="desno_vesti_desno">
<div id="poslednje_gal_desno">
<div class="predstojeca_vesti_txt">Biznis Adresar</div>
<div class="poslednje_gal_desno"><a href="<?php echo get_category_link($cat=17);?>">ADRESAR</a></div>
<div style="clear:both"></div>
<div id="ppaa">
<div class="scroll" style="height:185px; width:302px; overflow:auto; margin-top:10px;">
<?php query_posts('showposts=10&cat=17'.'&offset=0'); if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>   
<div id="poslednja_bg_ad">
<div id="ad_gall">
<a href="<?php the_permalink(); ?>" class="tip" title="<?php echo excerpt(30); ?>"><?php if ( has_post_thumbnail()) : the_post_thumbnail('male_adresar'); endif; ?></a></div>
<div class="adresar_tit_pos"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
<div id="adresar_opis_dva">
Grad: <?php echo get_post_meta($post ->ID,'adresar_grad', true) ?><br/>
Ulica: <?php echo get_post_meta($post ->ID,'adresar_ulica', true) ?><br/>
Telefon: <?php echo get_post_meta($post ->ID,'adresar_telefon', true) ?></div>
</div>
<?php endwhile; ?><?php endif?>  
</div>
</div>
</div>


<div class="prevod_wdg">
<!-- <div class="prevod_txt">Translate</div> -->
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('prevod') ) : endif; ?>
</div>
<img src="<?php echo get_bloginfo('template_directory');?>/images/310x100.png"/>

<div id="predstojeca_desno_vesti">
<div class="predstojeca_vesti_txt">Predstojeca desavanja</div>
<div class="predstijeca_vest_kalendar_txt"><a href="<?php echo get_page_link($cat=17);?>">KALENDAR</a></div>
<div style="clear:both"></div>
<div id="ppaa">
<div class="scroll" style="height:315px; width:302px; overflow:auto; margin-top:10px;">

<?php query_posts(array(
      'post_type' => 'tribe_events',
      'eventDispla' => 'upcoming',
      'showposts'  => 30,
      'order' => 'ASC'
 )); ?>
<?php while (have_posts()) : the_post(); ?>   
<div id="poslednja_bg">
<div id="mesec_gall">
<div class="mesec_gal"><?php echo tribe_get_start_date(null, false, 'M'); ?></div><br>
<div class="mesec_gal"><?php echo tribe_get_start_date(null, false, 'j'); ?></div></div>
<div class="gal_tit_pos"><a href="<?php the_permalink() ?>" class="tip" title="<?php echo excerpt(30); ?>"><?php the_title(); ?></a></div>
</div>

<?php endwhile; ?>    

</div>
</div>
</div>
</div>
<?php get_footer(); ?>