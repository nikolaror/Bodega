<?php
/**
 * @package WordPress
 * @subpackage bodega Theme
 */

?>
<div class="clear"></div>

</div>
<!-- END wrap --> 
<!-- start: FOOTERWRAPPER -->
   	<div id="footer-wrapper">
   		<div id="footer">
   		 <?php //logo_slider(); ?>
   		</div>
   	</div>    	
   	<!-- end: FOOTERWRAPPER -->
   	<!-- start: BOTTOM BAR SOCIAL -->
   	<div id="bottom-bar-wrapper">
	<div id="foot_dva">
	<div id="pratite_footer">Pratite nas i na: 
	<a href="https://www.facebook.com/chicagodesavanjapage" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/images/facebook.png"/></a>
	<a href="https://twitter.com/cikagodesavanja" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/images/twitter.png"/></a>
	<img src="<?php echo get_bloginfo('template_directory');?>/images/g+.png"/>
	<a href="http://www.youtube.com/user/chicagodesavanja" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/images/youtube.png"/></a>
	<img src="<?php echo get_bloginfo('template_directory');?>/images/rss.png"/>
	</div>
	<div id="pretplatitese">
	<!--SUBSCRIBE-->
	</div>
	</div>

   	<!-- END: BOTTOM BAR SOCIAL --> 

<!-- WP Footer -->
<!-- Le javascript
    ================================================== -->
 

    <!-- Charts plugins -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/charts/sparkline/jquery.sparkline.min.js"></script><!-- Sparkline plugin -->
   
    <!-- Misc plugins -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/misc/nicescroll/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/misc/qtip/jquery.qtip.min.js"></script><!-- Custom tooltip plugin -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/misc/totop/jquery.ui.totop.min.js"></script> 
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/misc/jqueryFileTree/jqueryFileTree.js"></script> 

    <!-- Search plugin -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/misc/search/tipuesearch_set.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/misc/search/tipuesearch_data.js"></script><!-- JSON for searched results -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/misc/search/tipuesearch.js"></script>

    <!-- Form plugins -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/forms/watermark/jquery.watermark.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/forms/togglebutton/jquery.toggle.buttons.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/forms/smartWizzard/jquery.smartWizard-2.0.min.js"></script>
    
    <!-- Gallery plugins 
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/gallery/lazy-load/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/gallery/jpages/jPages.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/gallery/pretty-photo/jquery.prettyPhoto2.js"></script>-->
    
    <!-- Fix plugins -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/fix/ios-fix/ios-orientationchange-fix.js"></script>

    <!-- Table plugins -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/tables/dataTables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/tables/responsive-tables/responsive-tables.js"></script><!-- Make tables responsive -->

    <!-- Important Place before main.js  -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/plugins/fix/touch-punch/jquery.ui.touch-punch.min.js"></script><!-- Unable touch for JQueryUI -->

    <!-- Init plugins -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script><!-- Core js functions -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/widgets.js"></script><!-- Init plugins only for page -->

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>
		(function($){
			$(window).load(function(){
				$(".scroll").mCustomScrollbar({
					autoHideScrollbar:true,
				});
				$("#galerija_home_pomeranje .scroll").mCustomScrollbar({
					horizontalScroll:true,
					autoHideScrollbar:true,
					advanced:{
						autoExpandHorizontalScroll:true
					}
				});
				$("#oglasi_pocetak .scroll").mCustomScrollbar({
					horizontalScroll:true,
					autoHideScrollbar:true,
					advanced:{
						autoExpandHorizontalScroll:true
					}
				});
				$("#oblastSlajdera .scroll").mCustomScrollbar({
					horizontalScroll:true,
					autoHideScrollbar:true,
					advanced:{
						autoExpandHorizontalScroll:true
					}
				});
			});
		})(jQuery);
	</script>

<?php wp_footer(); ?>

</body>
</html>