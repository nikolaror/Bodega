<?php

/**

 * @package WordPress

 * @subpackage Chicago Desavanja

 * Template Name: Info Template

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

<div id="info_bg">

    <div id="desavanje_img">

        <a href="<?php the_permalink(); ?>" class="tip" title="<?php echo excerpt(30); ?>">

        <?php if ( has_post_thumbnail()) : the_post_thumbnail('template_info'); endif; ?></a>

    </div>

<div id="info_levo">

    <div class="naslov_desavanje_pocetna">

        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">

    <?php the_title(); ?></a>

    </div>

    <div class="opis_event">

		<?php echo excerpt(28); ?>

		<span class="label label-info"><div class="opsirnije"><a href="<?php the_permalink() ?>">opsirnije</a></div></span>

    </div>

</div>

</div><!--info bg-->



<?php endwhile; ?>

<?php if (function_exists("pagination")) {

    pagination($loop->max_num_pages);

} ?>

<?php endif; ?>

</div>

<div style="clear:both"></div>

</div>

</div>

<div id="desnooo">



<div id="desno_vesti">

<div id="desno_vesti_white">

<div class="cat_vesti">Info kategorije</div><br/>



<ul class="unstyled">

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=957);?>">Domace knjige (<?php echo wp_get_cat_postcount(957); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=958);?>">Strane knjige (<?php echo wp_get_cat_postcount(958); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=959);?>">Film (<?php echo wp_get_cat_postcount(959); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=960);?>">Serije (<?php echo wp_get_cat_postcount(960); ?>)</a></li>

<li><span class="icon12 typ-icon-arrow-right red"></span><a href="<?php echo get_category_link($cat=961);?>">Korisne informacije (<?php echo wp_get_cat_postcount(961); ?>)</a></li>

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