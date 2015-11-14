<?php
/**
 * @package WordPress
 * @subpackage Chicago Desavanja
 * Template Name: Info Template
 */
?>

<?php get_header(); ?>
<div id="cd_vesti_title">INFO<div id="izaberi_kat">



</div></div>

<div id="adresar_levo">
<!-- Preporucujemo deo -->
<div id="adresar_preporucujemo_pozadina">
<div id="ad_preporucujemo"><?php echo do_shortcode('[rev_slider info-preporucujemo]'); ?></div>
</div>
<!-- Kraj preporucujemo -->

<div id="adresar_levo_unutar">
<div id="adresar_full">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
<div id="adresar_only">
<div id="adresar_img">
<a href="<?php the_permalink(); ?>" class="tip" title="<?php echo excerpt(30); ?>"><?php if ( has_post_thumbnail()) : the_post_thumbnail('template_info'); endif; ?></a></div>
<div class="adresar_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
<div id="adresar_opis">
<?php echo get_post_meta($post ->ID,'adresar_grad', true) ?><br/>
<?php echo get_post_meta($post ->ID,'adresar_ulica', true) ?><br/>
<?php echo get_post_meta($post ->ID,'adresar_telefon', true) ?></div>
</div>
<?php endwhile; ?>
<?php endif; ?></div>
<div style="clear:both"></div>
</div>
</div>
<div id="desnooo">

<div id="desno_vesti">
<div id="desno_vesti_white">
<div class="cat_vesti">Info kategorije</div><br/>

<ul class="unstyled">
<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=957);?>">Domace knjige</a></li>
<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=958);?>">Strane knjige</a></li>
<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=959);?>">Film</a></li>
<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=960);?>">Serije</a></li>
<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=961);?>">Korisne informacije</a></li>
</ul>
<div style="clear:both"></div>
</div>
</div>
<div id="desno_vesti_desno">
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
</div></div>
<?php get_footer(); ?>