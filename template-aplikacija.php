<?php

/*

Template Name: Aplikacija

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



<div id="pp"></div>

<div id="adresera_bgbg">

<div id="fullcontent_aplikacija">

  <?php if (have_posts()) : ?>

  <?php while (have_posts()) : the_post(); ?>

  <h2 class="pagetitle_aplikacija">

    <?php the_title(); ?>

  </h2>

  <div class="entry">

    <?php the_content('Opsirnije &raquo;'); ?>

  </div>

  <!--end: entry-->

  <div class="clear"></div>

 <div id="izmeni"> <?php edit_post_link('[ '.__('Izmeni', 'themejunkie').' ]', '', ''); ?></div>

  <?php endwhile; ?>

  <?php else : ?>

  <h2 class="pagetitle">Page Not Found</h2>

  <div class="entry"> Sorry, but you are looking for something that isn't here.</div>

  <?php endif; ?>

</div>

<div id="aplikacija_desno">

<img src="<?php bloginfo('template_url'); ?>/images/aplikacija_00.jpg"/>

<div id="gplay"><a href="https://play.google.com/store/apps/details?id=com.us.chicagodesavanja.android&hl=en" target="_blank">

Preuzmi aplikaciju sa<br/> Google Play</a></div>

<a href="https://itunes.apple.com/us/app/chicago-desavanja/id653715847?ls=1&mt=8" class="appDownButton" target="_blank">Preuzmite aplikaciju na<br /> App Store</a>

<div class="prevod_wdg">

<!-- <div class="prevod_txt">Translate</div> -->

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('prevod') ) : endif; ?>

</div>

</div>

</div>

<!--end: fullcontent-->

<?php get_footer(); ?>