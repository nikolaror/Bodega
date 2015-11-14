<?php

/**

 * @package WordPress

 * @subpackage Chicago Desavanja

 * Template Name: Novosti Template

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



<div id="cd_vesti_title">Vesti</div>





<div id="vesti_levo">

<div id="vesti_levo_unutar">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	 

<div id="cela_vest">

<div id="vest_img">

<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail()) : the_post_thumbnail('vest_img'); endif; ?></a></div>

<div class="vest_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>

<i class="icon-time"></i> <?php the_time('M j, Y'); ?></br>

<?php echo excerpt(28); ?>  <span class="label label-info"><div class="opsirnije"><a href="<?php the_permalink() ?>">opsirnije</a></div></span>

</div>

<div style="clear:both"></div>

<?php endwhile; ?>

<?php endif; ?>

</div>

</div>



<div id="desno_vesti">

<div id="desno_vesti_white">

<div class="cat_vesti">Vesti kategorije</div><br/>

<span class="icon12 typ-icon-arrow-right blue"></span><a href="<?php echo get_category_link($cat=11);?>"> Muzika</a><br/>

<span class="icon12 typ-icon-arrow-right blue"></span><a href="<?php echo get_category_link($cat=10);?>"> Film </a><br/>

<span class="icon12 typ-icon-arrow-right blue"></span><a href="<?php echo get_category_link($cat=16);?>"> Komunikacije </a><br/>

<span class="icon12 typ-icon-arrow-right blue"></span><a href="<?php echo get_category_link($cat=15);?>"> Ljubav i seks </a><br/>

<span class="icon12 typ-icon-arrow-right blue"></span><a href="<?php echo get_category_link($cat=14);?>"> Porodica </a><br/>

<span class="icon12 typ-icon-arrow-right blue"></span><a href="<?php echo get_category_link($cat=12);?>"> Tracevi </a><br/>

<span class="icon12 typ-icon-arrow-right blue"></span><a href="<?php echo get_category_link($cat=15);?>"> Ludi svet </a><br/><br/>

</div>

</div>

<div id="desno_vesti_desno">

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

</div>

<?php get_footer(); ?>