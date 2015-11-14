<?php

/**

 * @package WordPress

 * @subpackage Chicago Desavanja

 * Template Name Posts: Galerija Single

 */

?>



<?php get_header(); ?>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('otbleft') ) : endif; ?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('otbright') ) : endif; ?>

<div id="cd_vesti_title"><div id="naslov_gal">CHICAGO DESAVANJA - FOTO GALERIJE</div>

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





 <div id="galerija_levo">

<div id="galerija_levo_unutar">      

	   <div id="galerija_single">

		<div class="scroll" style="height:760px; width:603px; overflow:auto; margin-top:0px;">  

 <div class="dugmePodeli"><?php if( function_exists('ADDTOANY_SHARE_SAVE_KIT') ) { ADDTOANY_SHARE_SAVE_KIT(); } ?></div>

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

       

        <!-- END post-bottom -->

</div></div>

<div style="clear:both"></div></div></div>





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

</div>

<?php get_footer(); ?>