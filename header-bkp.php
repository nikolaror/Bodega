<?php



/**



 * @package SimpleLook CMS



 * @subpackage ChicagoDesavanja Themes



 */



?>



<!DOCTYPE html>



<head>



<!-- Meta Tags -->



<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />



<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>



<!-- Stylesheet & Favicon -->



<?php if($options['favicon'] !='') { ?>



<link rel="icon" type="image/png" href="<?php echo $options['favicon']; ?>" />



<?php } ?>



<?php include (TEMPLATEPATH . '/podesavanja.php'); ?>



<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />



<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style-cd.css" media="screen" />



<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/jquery.mCustomScrollbar.css" media="screen" />



<link rel="stylesheet" id="flags_tpw_flags_css-css" href="http://chicagodesavanja.us/wp-content/plugins/transposh-translation-filter-for-wordpress/widgets/flags/tpw_flags_css.css?ver=0.9.3.1" type="text/css" media="all">



<!-- link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/layout.css" media="screen" / -->







<!-- WP Head -->



	<!--script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script-->



	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.carousel.js"></script>



<?php wp_enqueue_script("jquery"); ?>



<?php wp_head(); ?>



</head>



<body style="float: none !important" <?php body_class(); ?>>







<div id="header_top_cd">



<div id="header_cd"><div id="cd_top">



<div id="menu_top_cd"><a href="<?php echo get_page_link($cat=997);?>">O Nama</a> | <a href="<?php echo get_page_link($cat=132);?>">Marketing</a></div>



<div id="transposhPrevod"><?php if(function_exists("transposh_widget")) { transposh_widget(array(), array('widget_file' => 'flags/tpw_flags.php')); }?></div>



</div>



<div id="logo_ads">

   <!-- TOP BANER REKLAMA -->

   <div id="header_desno">

       <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('banerib1') ) : endif; ?>

   </div>



   <div id="header_logo"><div id="logo_cd"><a href="<?php echo home_url(); ?>"><img class="tip" title="Sva desavanja u Vasem gradu na jednom mestu!" src="<?php echo get_bloginfo('template_directory');?>/images/logo.png"/></a></div></div>



   <div style='clear:both;'></div>







</div>



<div class="clear"></div>



<div id="menu_bg_cd"><div id="chicago_menu">



 <?php



            //define main navigation



            wp_nav_menu( array(



                'theme_location' => 'menu',



                'sort_column' => 'menu_order',



                'menu_class' => 'sf-menu',



                'fallback_cb' => 'default_menu'



            )); ?>



</div>







<div id="chicago_seach">



<div id="search">



					<form method="get" id="header-search" action="<?php bloginfo('url'); ?>">



						<input type="text" class="field" name="s" id="s"  value="<?php _e('Pretrazivac…', 'themejunkie') ?>" onFocus="if (this.value == '<?php _e('Pretrazivac…', 'themejunkie') ?>') {this.value = '';}" onBlur="if (this.value == '') {this.value = '<?php _e('Pretrazivac…', 'themejunkie') ?>';}" />



						<input class="submit btn" type="image" src="<?php bloginfo('template_directory'); ?>/images/ico-search.png" value="Go" />



					</form>



				</div><!-- #search -->



</div>



</div>



</div></div>



<div id="dodavanja" class="dodavanje"><a href="<?php echo get_page_link($cat=126);?>">Dodaj desavanje</a> | <a href="<?php echo get_page_link($cat=128);?>">Dodaj oglas</a>   </div>



<div id="wrap" class="clearfix">