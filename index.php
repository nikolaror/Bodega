<?php

/**

 * @package SimpleLook

 * @subpackage Dusan Miladinovic // DESIFN & CODING //

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



<!-- //** LEVA STRANA POCETNA **// -->

<div id="left_cd">



<!-- //** PREPORUCUJEMO SLAJDER **// -->

<div id="slajder_home">

<?php echo do_shortcode('[rev_slider preporucujemo]'); ?>

</div>

<!-- //** PREPORUCUJEMO SLAJDER **// -->

<div id="desavanja_bg_home">
<div class="desavanja_pocetna_txt">
<a href="<?php echo get_page_link($cat=17);?>">Desavanja</a></div>	
	<ul class="nav nav-pills">
		<li class='active'>
			<a href="#3" data-toggle="tab" class="onClickUpdate">Predstojeca desavanja</a></li>
		<li>
			<a href="#4" data-toggle="tab" class="onClickUpdate">Najnoviji unosi</a></li>
	</ul>
	<div class="box-content" id="skrol_desavanja">
		<div class="tab-content">
			<div class="tab-pane active" id="3">
				<div class="scroll" style="height:660px; width:603px; overflow:auto; margin-top:10px;">    

<?php query_posts(array(
      'post_type' => 'tribe_events',
      'eventDispla' => 'upcoming',
      'showposts'  => 15,
      'order' => 'ASC'
 )); ?>

<?php while (have_posts()) : the_post(); ?>                           

<div id="desavanje_bg" id="desavanje_bg_bg">

<div id="desavanje_img">

<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail()) : the_post_thumbnail('thumb_ev'); endif; ?></a>

</div>

<div id="desavanje_levo_home">

<div class="naslov_desavanje_pocetna"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>



<div class="opis_event"><?php echo excerpt(28); ?></div>



</div>



<div id="desavanje_desno_datum">



<div class="mesec"><?php echo tribe_get_start_date(null, false, 'M'); ?></div><br>



<div class="mesec"><?php echo tribe_get_start_date(null, false, 'j'); ?></div>



</div>



</div><!--Desavanje bg-->



<?php endwhile; ?>                                 </div>



								</div>



								<div class="tab-pane" id="4">



<div class="scroll" style="height:660px; width:603px; overflow:auto; margin-top:10px;">    



<?php query_posts(array(



      'post_type'=>array(TribeEvents::POSTTYPE),



      'showposts'  => 15,



      'order' => 'DESC'



      )); ?>



<?php while (have_posts()) : the_post(); ?>                            



<div id="desavanje_bg" id="desavanje_bg_bg">



<div id="desavanje_img">



<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail()) : the_post_thumbnail('thumb_ev'); endif; ?></a>



</div>



<div id="desavanje_levo_home">



<div class="naslov_desavanje_pocetna"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>



<div class="opis_event"><?php echo excerpt(28); ?></div>



</div>



<div id="desavanje_desno_datum">



<div class="mesec"><?php echo tribe_get_start_date(null, false, 'M'); ?></div><br>



<div class="mesec"><?php echo tribe_get_start_date(null, false, 'j'); ?></div>



</div>



</div><!--Desavanje bg-->



<?php endwhile; ?>                                 </div></div>



							</div>



						</div>

</div>



<!-- //** Baneri B5 B6 B7 B8 B9 **// -->

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('baneri5678') ): endif; ?>

<br class="clear" />



</div>



<!-- //** LEVA STRANA POCETNA **// -->







<!-- //** DESNA STRANA POCETNA **// -->



<div id="right_cd">



<!-- //** KALENDAR DESAVANJA MINI **// -->



<div id="kalendar_pocenta">



<div class="kalendar_pocetna_txt">Kalendar Desavanja</div>



<div id="kalendar_pocetna_pomeranje"><?php



      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('kalendar-desavanja') ) :



      endif; ?>



</div></div>



<div class="prevod_wdg">

<!-- <div class="prevod_txt">Translate</div> -->

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('prevod') ) : endif; ?>

</div>



<!-- //** KALENDAR DESAVANJA MINI **// -->



<div id="izdvajamo_bg_home">



<div class="izdvajamo_pocetna_txt">Izdvajamo</div>



<div class="scroll" style="height:475px; width:290px; overflow:auto; margin-top:10px;">                                   



<div id="izdvajamo_pomeranje" class="izdvajamo_pomeranje">



<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('izdvajamo') ) : endif; ?></div>



 </div>



</div>



<!-- //** KRAJ IZDVAJAMO HOME **// -->



<!-- //** Baneri B3 i B4 **// -->

	<div class="naslovVidzeta">Reklamni prostor</div>

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('baneri34') ): endif; ?>



</div><div style="clear:both"></div>



<!-- //** DESNA STRANA POCETNA **// -->



<div style="clear:both"></div>



<!-- //** OGLASI BG **// -->



<div id="oglasi_bg">



<div class="oglasi_pocetna_txt"><a href="<?php echo get_category_link($cat=36);?>">Oglasi</a></div>



<div class="oglasi_pocetna_txt_dodaj"><?php echo do_shortcode('[iphorm_popup id="2" name="Chicago Oglasi"]DODAJ OGLAS BESPLATNO[/iphorm_popup]'); ?></div>



<div id="oglasi_pocetak">



 <div class="scroll" style="overflow:auto; margin-top:12px; height:170px;">   



 <div style="width:1550px;"> 



<?php query_posts('showposts=10&cat=36'.'&offset=0'); if (have_posts()) : ?>



<?php while (have_posts()) : the_post(); ?>                      



<div id="oglas_posebno_bg">



<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail()) : the_post_thumbnail('oglasioglasi'); endif; ?></a>



<div id="pd"></div>



<div id="oglas_home">



<div class="naslov_oglas">



<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>



<div id="opisoglas"><?php echo excerpt(9); ?></div>



</div>



</div><?php endwhile; ?><?php endif?><!-- Pozadina posebno oglasa -->



</div></div>



</div>



</div>



<!-- //** REKLAMNI DEO FULL **//-->



<div id="reklamni_bg_full">



<a href="http://chicagodesavanja.us/adresar/restorani-kafici-klubovi-barovi/restoranzupa/"><img src="http://chicagodesavanja.us/wp-content/uploads/2013/12/midbaner-zupa-Recovered.jpg"/></a>



<a href="http://chicagodesavanja.us/adresar/restorani-kafici-klubovi-barovi/kikos-market-restoran/"><img src="http://chicagodesavanja.us/wp-content/uploads/2013/10/kikos-baner.jpg"/></a>



</div>



<div style="clear:both"></div>



<!-- //** GALERIJA **// -->



<!-- //** Adresar Levo +  Top5 Desno **// -->



<div id="left_cd">



<div id="galerija_home_bg">



<div class="galerije_pocetna_txt"><a href="<?php echo get_category_link($cat=32);?>">Poslednje Galerije</a></div>



<div id="galerija_home_pomeranje">



 <div class="scroll" style="overflow:auto; margin-top:12px; height:160px;">   



 <div style="width:1200px;">



<?php query_posts('showposts=6&cat=32'.'&offset=0'); if (have_posts()) : ?>



<?php while (have_posts()) : the_post(); ?>  



<div class="single-featured-image">



<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>



<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail()) : the_post_thumbnail('gal_hom_thumb'); endif; ?></a>







</div>







<?php endwhile; ?><?php endif?></div></div></div>



</div><!--poselednje galerije-->



<div id="adresar_bg">



<div class="adresar_pocetna_txt"><a href="<?php echo get_category_link($cat=17);?>">Adresar</a></div>



<div id="adresar_slider"><?php echo do_shortcode('[rev_slider adresarhome]'); ?></div>



<div id="oblastSlajdera">



 <div class="scroll" style="overflow:auto; height:190px;">   



 <div style="width:850px;">



<?php query_posts('showposts=4&cat=17'.'&offset=0'); if (have_posts()) : ?>



<?php while (have_posts()) : the_post(); ?> 



<div id="adresar_items"> 



<div class="single-featured-imagee">



<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>



<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail()) : the_post_thumbnail('home_adresar_item'); endif; ?></a>







</div>



<div id="adresar_izdvojena_polja">Grad: <?php echo get_post_meta($post ->ID,'adresar_grad', true) ?><br/>



Ulica: <?php echo get_post_meta($post ->ID,'adresar_ulica', true) ?><br/>



Telefon: <?php echo get_post_meta($post ->ID,'adresar_telefon', true) ?></div>



</div>



<?php endwhile; ?><?php endif?>



</div></div></div>



<!-- End: Adresar pozivanje -->











</div><!-- Adresar -->



</div><!-- Levo -->



<div id="right_cd">



<div id="top5_bg">



<div class="top5_pocetna_txt">Top5</div><div id="top_one">



<?php query_posts('showposts=1&cat=42'.'&offset=0'); if (have_posts()) : ?>



								<?php while (have_posts()) : the_post(); ?>



									<a href="<?php echo get_post_meta($post ->ID,'youtube', true) ?>" rel="prettyPhoto" class="tip" title="Izvodjac: <?php echo get_post_meta($post ->ID,'izvodjac', true) ?><br/>Naziv: <?php echo get_post_meta($post ->ID,'naziv', true) ?><br/>



Vreme: <?php echo get_post_meta($post ->ID,'vreme', true) ?>"><?php if ( has_post_thumbnail()) : the_post_thumbnail('topone'); endif; ?></a>



									<?php endwhile; ?><?php endif?></div><!-- Top one 1 -->



									<div id="top_other">



<?php query_posts('showposts=4&cat=42'.'&offset=1'); if (have_posts()) : ?>



								<?php while (have_posts()) : the_post(); ?>



									<a href="<?php echo get_post_meta($post ->ID,'youtube', true) ?>" rel="prettyPhoto" class="tip" title="Izvodjac: <?php echo get_post_meta($post ->ID,'izvodjac', true) ?><br/>Naziv: <?php echo get_post_meta($post ->ID,'naziv', true) ?><br/>



Vreme: <?php echo get_post_meta($post ->ID,'vreme', true) ?>"><?php if ( has_post_thumbnail()) : the_post_thumbnail('topother'); endif; ?></a>



									<?php endwhile; ?><?php endif?></div><!-- Top 4 -->



</div><!--top5-->



<div id="oglasna_tabla">



<div class="oglasna_pocetna_txt">Oglasna tabla</div>



<?php echo do_shortcode('[rev_slider oglasna-tabla]'); ?>



</div><!--top5-->



</div><!-- Desno -->



<div class="clear"></div>



















<!-- //** KRAJ HOME BG **// -->



<!-- Tiny scrollbars -->



<script type="text/javascript">



$(function(){





  try {

   initDesavanjaSlider();

  }catch(err)

  { }



try {

   initIzdvajamoSlider();

  }catch(err)

  {  }









$( ".onClickUpdate" ).click( "live", function() {

try {

   initDesavanjaSlider();

  }catch(err)

  { }



try {

   initIzdvajamoSlider();

  }catch(err)

  {  }

});



//enable syntax highlighter



prettyPrint();



});



function initDesavanjaSlider(){

$('#desavanja_slider').parent().replaceWith($('#desavanja_slider'));

$('#desavanja_slider').slimscroll({

height: '675px',

});

}



function initIzdvajamoSlider(){

$('#izdvajamo_slider').parent().replaceWith($('#izdvajamo_slider'));

$('#izdvajamo_slider').slimscroll({

height: '470px',

});

}







</script>











<?php get_footer(' '); ?>