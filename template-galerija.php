<?php

/**

 * @package WordPress

 * @subpackage Chicago Desavanja

 * Template Name: Galerija Template

 */

?>



<?php get_header(); ?>

<div class="home-wrap clearfix">

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('otbleft') ) : endif; ?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('otbright') ) : endif; ?>



<!-- //** REKLAMNI PROSTOR HOME 940x65 **// -->

<div id="reklama_940">

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('940x65') ) : endif; ?></div>

</div>

<!-- //** REKLAMNI PROSTOR HOME 940x65 **// -->



<div class="clear"></div>



<div id="cd_vesti_title">CHICAGO DESAVANJA GALERIJA</div>



<div id="galerija_levo">

<div id="galerija_levo_unutar">



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	

<div id="gal">

<div id="thumb_gal">

<a href="<?php the_permalink(); ?>" class="tip" title="<?php echo excerpt(30); ?>"><?php if ( has_post_thumbnail()) : the_post_thumbnail('galerija_thumb'); endif; ?></a></div>

<div id="gal_naslov"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>

<div id="gal_datum">

<div class="mesec_gal">

<?php the_time('M'); ?></br>

<?php the_time('d'); ?>

</div></div>

</div>

<?php endwhile; ?>

<?php if (function_exists("pagination")) {

    pagination($loop->max_num_pages);

} ?>

<?php endif; ?>

<div style="clear:both"></div>

</div>

</div>



<div id="desno_vesti_desno">



<div id="predstojeca_desno_vesti" style="margin-bottom:6px;">

<div class="predstojeca_vesti_txt">Poslednje galerije</div>

<div class="poslednje_gal_desno"><a href="<?php echo get_category_link($cat=32);?>">GALERIJA</a></div>

<div style="clear:both"></div>

<div id="ppaa">

<div class="scroll" style="height:315px; width:302px; overflow:auto; margin-top:10px;">

<?php query_posts('showposts=10&cat=32'.'&offset=0'); if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>   

<div id="poslednja_bg">

<div id="mesec_gall">

<div class="mesec_gal"><?php the_time('M'); ?></div><br>

<div class="mesec_gal"><?php the_time('d'); ?></div></div>

<div class="gal_tit_pos"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>

</div>

<?php endwhile; ?><?php endif?>  

</div>

</div>



<div class="prevod_wdg">

<!-- <div class="prevod_txt">Translate</div> -->

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('prevod') ) : endif; ?>

</div>

<div>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('310x100') ) : endif; ?>

</div>



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