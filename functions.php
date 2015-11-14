<?php
/**
 * @package WordPress
 * @subpackage bodega Theme
*/

/*-----------------------------------------------------------------------------------*/
/* Add Events to RSS Feed
/*----------------------------------------------------------------------------------*/
function add_events_to_rss_feed( $args ) {
  if ( isset( $args['feed'] ) && !isset( $args['post_type'] ) )
    $args['post_type'] = array('post', 'tribe_events');
  return $args;
}

add_filter( 'request', 'add_events_to_rss_feed' );

// Add Tribe Event Namespace
add_filter( 'rss2_ns', 'events_rss2_namespace' );
function events_rss2_namespace() {
    echo 'xmlns:ev="http://purl.org/rss/2.0/modules/event/"';
}

// Add Event Date to RSS Feeds
add_action('rss_item','tribe_rss_feed_add_eventdate');
add_action('rss2_item','tribe_rss_feed_add_eventdate');
add_action('commentsrss2_item','tribe_rss_feed_add_eventdate');
function tribe_rss_feed_add_eventdate() { ?>
  <ev:tribe_event_meta xmlns:ev="Event">
  <?php if (tribe_get_start_date() !== tribe_get_end_date() ) { ?>
    <ev:startdate><?php echo tribe_get_start_date(); ?></ev:startdate>
    <ev:enddate><?php echo tribe_get_end_date(); ?></ev:enddate>
  <?php } else { ?>
    <ev:startdate><?php echo tribe_get_start_date(); ?></ev:startdate>
  <?php } ?>
  </ev:tribe_event_meta>
<?php }

/*************************** Excerpts ***************************/
// Excerpt Length
function new_excerpt_length($length) {
	return 500;
}
add_filter('excerpt_length', 'new_excerpt_length');

function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt).'...';
	} else {
	$excerpt = implode(" ",$excerpt);
	}	
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
}

// Replace excerpt ellipsis
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
remove_filter('the_excerpt', 'wpautop');

/*************************** Add Excerpt Support To Pages ***************************/
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

/*-----------------------------------------------------------------------------------*/
/*	Images
/*-----------------------------------------------------------------------------------*/
if ( function_exists( 'add_theme_support' ) )
	add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'full-size',  9999, 9999, false );
	add_image_size( 'small-thumb',  50, 50, true );
	add_image_size( 'nivo-slider',  970, 360, true );
	add_image_size( 'post-image',  660, 220, true );
	add_image_size( 'portfolio-thumb',  215, 140, true );
	add_image_size( 'portfolio-single',  500, 9999, false );
	add_image_size( 'thumb_ev',  160, 110, false );
	add_image_size( 'vest_img',  160, 120, false );
add_image_size('oglasioglasi', 145, 75, true);
add_image_size('galerija_thumb', 190, 155, true);
add_image_size('gal_hom_thumb', 195, 145, true);
add_image_size('adresar_thumb_home',70, 85, true);
add_image_size('template_adresar',108, 106, true);
add_image_size('template_oglasi',137, 76, true);
add_image_size('male_adresar',50, 50, true);
add_image_size('events', 600, 285, true);
add_image_size('topone', 290, 85, true);
add_image_size('topother', 140, 90, true);
add_image_size('mobile_app_thumb', 120, 80, false);
add_image_size('mobile_app_fullsize', 400, 9999, false);
add_image_size('home_adresar_item', 189, 100, true);
}

// Converts SQL time to PHP Time Format
function time_sql2php($sqltime){
    return strtotime($sqltime . " GMT");
}

// Converts PHP time format to SQL Time Format

function time_php2sql($unixtime){

    return gmdate("Y-m-d H:i:s", $unixtime);

}

/*-----------------------------------------------------------------------------------*/

/*	Sidebars

/*-----------------------------------------------------------------------------------*/



//Register Sidebars

if ( function_exists('register_sidebar') )

	register_sidebar(array(

		'name' => 'Baneri B1',

		'id' => 'banerib1',

		'description' => 'Baneri B1',

		'before_widget' => '<div id="header_reklama_desno">',

		'after_widget' => '</div>',

		'before_title' => '<span class="none">',

        'after_title' => '</span>',

));

if ( function_exists('register_sidebar') )

	register_sidebar(array(

		'name' => 'Reklamni prosto #1',

		'id' => '768x90',

		'description' => 'Reklama u header',

		'before_widget' => '<div class="kalendar-widget clearfix">',

		'after_widget' => '</div>',

		'before_title' => '<span class="none">',

        'after_title' => '</span>',

));



if ( function_exists('register_sidebar') )

	register_sidebar(array(

		'name' => 'Reklamni prostor #2',

		'id' => '940x65',

		'description' => '940x65',

		'before_widget' => '<div class="kalendar-widget clearfix">',

		'after_widget' => '</div>',

		'before_title' => '<span class="none">',

        'after_title' => '</span>',

));



if ( function_exists('register_sidebar') )

	register_sidebar(array(

		'name' => 'Reklamni prostor #4 - ostale strane',

		'id' => '310x100',

		'description' => 'Reklamni prostor 4 reklame po 310x100',

		'before_widget' => '<div class="kalendar-widget clearfix">',

		'after_widget' => '</div>',

		'before_title' => '<span class="none">',

        'after_title' => '</span>',

));



if ( function_exists('register_sidebar') )

	register_sidebar(array(

		'name' => 'Sidebar',

		'id' => 'sidebar',

		'description' => 'Widgets in this area will be shown in the sidebar.',

		'before_widget' => '<div class="sidebar-box clearfix">',

		'after_widget' => '</div>',

		'before_title' => '<h4><span>',

		'after_title' => '</span></h4>',

));

if ( function_exists('register_sidebar') )

	register_sidebar(array(

		'name' => 'Translate',

		'id' => 'prevod',

		'description' => 'prevod',

		'before_widget' => '<div class="sidebar-box clearfix">',

		'after_widget' => '</div>',

		'before_title' => '<span class="none">',

        'after_title' => '</span>',

));

if ( function_exists('register_sidebar') )

	register_sidebar(array(

		'name' => 'Kalendar desavanja - Pocetna',

		'id' => 'kalendar-desavanja',

		'description' => 'Kalendar desavanja, pocetna strana, chicago',

		'before_widget' => '<div class="kalendar-widget clearfix">',

		'after_widget' => '</div>',

		'before_title' => '<span class="none">',

        'after_title' => '</span>',

));



if ( function_exists('register_sidebar') )

	register_sidebar(array(

		'name' => 'Izdvajamo Banneri',

		'id' => 'izdvajamo',

		'description' => 'Izdvojeni banneri reklame, desavanja',

		'before_widget' => '<div class="kalendar-widget clearfix">',

		'after_widget' => '</div>',

		'before_title' => '<span class="none">',

        'after_title' => '</span>',

));

if ( function_exists('register_sidebar') )

	register_sidebar(array(

		'name' => 'Baneri B3 i B4',

		'id' => 'baneri34',

		'description' => 'Baneri 300x90px B3 i B4',

		'before_widget' => '<div class="baneri34">',

		'after_widget' => '</div>',

		'before_title' => '<span class="none">',

        'after_title' => '</span>',

));

if ( function_exists('register_sidebar') )

	register_sidebar(array(

		'name' => 'Baneri B5 B6 B7 B8 B9',

		'id' => 'baneri5678',

		'description' => 'Baneri 300x90px B5 B6 B7 B8 B9',

		'before_widget' => '<div class="baneri5678">',

		'after_widget' => '</div>',

		'before_title' => '<span class="none">',

        'after_title' => '</span>',

));

if ( function_exists('register_sidebar') )

	register_sidebar(array(

		'name' => 'Outside Baner left',

		'id' => 'otbleft',

		'description' => 'Outside Baner left',

		'before_widget' => '<div class="brendingL">',

		'after_widget' => '</div>',

		'before_title' => '<span class="none">',

        'after_title' => '</span>',

));

if ( function_exists('register_sidebar') )

	register_sidebar(array(

		'name' => 'Outside Baner right',

		'id' => 'otbright',

		'description' => 'Outside Baner right',

		'before_widget' => '<div class="brendingR">',

		'after_widget' => '</div>',

		'before_title' => '<span class="none">',

        'after_title' => '</span>',

));



if ( function_exists('register_sidebar') )

	register_sidebar(array(

		'name' => 'Reklamni prostor 3x',

		'id' => 'reklamni-620',

		'description' => 'Reklamni prostor 3 reklame po 200x105',

		'before_widget' => '<div class="kalendar-widget clearfix">',

		'after_widget' => '</div>',

		'before_title' => '<span class="none">',

        'after_title' => '</span>',

));

if ( function_exists('register_sidebar') )

	register_sidebar(array(

		'name' => 'Footer Middle',

		'id' => 'footer-middle',

		'description' => 'Widgets in this area will be shown in the footer middle area.',

		'before_widget' => '<div class="footer-widget clearfix">',

		'after_widget' => '</div>',

		'before_title' => '<h4>',

		'after_title' => '</h4>',

));

if ( function_exists('register_sidebar') )

	register_sidebar(array(

		'name' => 'Footer Right',

		'id' => 'footer-right',

		'description' => 'Widgets in this area will be shown in the footer right area.',

		'before_widget' => '<div class="footer-widget clearfix">',

		'after_widget' => '</div>',

		'before_title' => '<h4>',

		'after_title' => '</h4>',

));









/*-----------------------------------------------------------------------------------*/

/*	Other functions

/*-----------------------------------------------------------------------------------*/



// Limit Post Word Count

function wpex_new_excerpt_length($length) {

	return 50;

}

add_filter('excerpt_length', 'wpex_new_excerpt_length');



//Replace Excerpt Link

function wpex_new_excerpt_more($more) {

       global $post;

	return '...';

}

add_filter('excerpt_more', 'wpex_new_excerpt_more');



// Enable Custom Background

add_theme_support( 'custom-background' );



// register navigation menus

register_nav_menus(

	array(

	'menu'=>__('Menu'),

	)

);



/// add home link to menu

function home_page_menu_args( $args ) {

$args['show_home'] = true;

return $args;

}

add_filter( 'wp_page_menu_args', 'home_page_menu_args' );



// menu fallback

function default_menu() {

	require_once (TEMPLATEPATH . '/includes/default-menu.php');

}





// Localization Support

load_theme_textdomain( 'bodega', TEMPLATEPATH.'/lang' );



//create featured image column

add_filter('manage_posts_columns', 'posts_columns', 5);

add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);

function posts_columns($defaults){

    $defaults['riv_post_thumbs'] = __('Thumbs', 'powered');

    return $defaults;

}

function posts_custom_columns($column_name, $id){

	if($column_name === 'riv_post_thumbs'){

        echo the_post_thumbnail( 'small-thumb' );

    }

}



// functions run on activation --> important flush to clear rewrites

if ( is_admin() && isset($_GET['activated'] ) && $pagenow == 'themes.php' ) {

	$wp_rewrite->flush_rules();

}



// functions run on activation --> important flush to clear rewrites

function pagination($pages = '', $range = 4)

{

     $showitems = ($range * 2)+1;  

     global $paged;

     if(empty($paged)) $paged = 1;

     if($pages == '')

     {

         global $wp_query;

         $pages = $wp_query->max_num_pages;

         if(!$pages)

         {

             $pages = 1;

         }

     }   

     if(1 != $pages)

     {

         echo "<div class=\"pagination\">";

         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; Prva</a>";

         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Prethodna</a>";



         for ($i=1; $i <= $pages; $i++)

         {

             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))

             {

                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";

             }

         }



         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Sledeca &rsaquo;</a>";

         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Poslednja &raquo;</a>";

         echo "</div>\n";

     }

}

// Brojac postova

function wp_get_cat_postcount($id) {

    $cat = get_category($id);

    $count = (int) $cat->count;

    $taxonomy = 'category';

    $args = array(

      'child_of' => $id,

    );

    $tax_terms = get_terms($taxonomy,$args);

    foreach ($tax_terms as $tax_term) {

        $count +=$tax_term->count;

    }

    return $count;

}

//Function to add featured image in RSS feeds PetarP
function featured_image_in_rss($content)
{
    // Global $post variable
    global $post;
    // Check if the post has a featured image
    if (has_post_thumbnail($post->ID))
    {
        $content = get_the_post_thumbnail($post->ID, 'full', array('style' => 'margin-bottom:10px;')) . $content;
    }
    return $content;
}
//Add the filter for RSS feeds Excerpt
add_filter('the_excerpt_rss', 'featured_image_in_rss');
//Add the filter for RSS feed content
add_filter('the_content_feed', 'featured_image_in_rss');
//End PetarP
?>