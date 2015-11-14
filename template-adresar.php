<?php

/**

 * @package WordPress

 * @subpackage Chicago Desavanja

 * Template Name: Adresar Template

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



<div id="cd_vesti_title">ADRESAR<div id="izaberi_kat">



</div></div>



<div id="adresar_levo">

<!-- Preporucujemo deo -->

<div id="adresar_preporucujemo_pozadina">

<div id="ad_preporucujemo"><?php echo do_shortcode('[rev_slider adresar-preporucujemo]'); ?></div>

</div>

<!-- Kraj preporucujemo -->



<div id="adresar_levo_unutar">

<div id="adresar_full">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	

<div id="adresar_only">

<div id="adresar_img">

<a href="<?php the_permalink(); ?>" class="tip" title="<?php echo excerpt(30); ?>"><?php if ( has_post_thumbnail()) : the_post_thumbnail('template_adresar'); endif; ?></a></div>

<div class="adresar_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>

<div id="adresar_opis">

Grad: <?php echo get_post_meta($post ->ID,'adresar_grad', true) ?><br/>

Ulica: <?php echo get_post_meta($post ->ID,'adresar_ulica', true) ?><br/>

Telefon: <?php echo get_post_meta($post ->ID,'adresar_telefon', true) ?></div>

</div>

<?php endwhile; ?>

<?php if (function_exists("pagination")) {

    pagination($loop->max_num_pages);

} ?>

<?php endif; ?></div>

<div style="clear:both"></div>

</div>

</div>

<div id="desnooo">



<div id="desno_vesti">

<div id="desno_vesti_white">

<div class="cat_vesti">Adresar kategorije</div><br/>



<ul class="unstyled">



<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=78);?>">Auto servisi (<?php echo wp_get_cat_postcount(78); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=112);?>">Biznis (<?php echo wp_get_cat_postcount(112); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=113);?>">Deciji svet (<?php echo wp_get_cat_postcount(113); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=114);?>">Doktorske ordinacije (<?php echo wp_get_cat_postcount(114); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=115);?>">Energija i sirovina (<?php echo wp_get_cat_postcount(115); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=116);?>">Finansije i pravo (<?php echo wp_get_cat_postcount(116); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=84);?>">Gradjevinarstvo (<?php echo wp_get_cat_postcount(84); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=117);?>">Restorani, kafici, klubovi, barovi (<?php echo wp_get_cat_postcount(117); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=118);?>">Kuca i kancelarija (<?php echo wp_get_cat_postcount(118); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=119);?>">Kultura i mediji (<?php echo wp_get_cat_postcount(119); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=120);?>">Marketing kompanije (<?php echo wp_get_cat_postcount(120); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=935);?>">Muzicari (<?php echo wp_get_cat_postcount(935); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=27);?>">Osiguranje (<?php echo wp_get_cat_postcount(27); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=121);?>">Pomoc u kuci (<?php echo wp_get_cat_postcount(121); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=122);?>">Prehrana (<?php echo wp_get_cat_postcount(122); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=73);?>">Saloni lepote (<?php echo wp_get_cat_postcount(73); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=124);?>">Skole (<?php echo wp_get_cat_postcount(124); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=125);?>">Sport i rekreacija (<?php echo wp_get_cat_postcount(125); ?>)</a></li>



<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=74);?>">Transport (<?php echo wp_get_cat_postcount(74); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=126);?>">Turizam (<?php echo wp_get_cat_postcount(126); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=127);?>">Usluge (<?php echo wp_get_cat_postcount(127); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=128);?>">Zabava i razonoda (<?php echo wp_get_cat_postcount(128); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=129);?>">Zanatstvo (<?php echo wp_get_cat_postcount(129); ?>)</a></li>

</ul>

<div style="clear:both"></div>

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

</div></div>

<?php get_footer(); ?>