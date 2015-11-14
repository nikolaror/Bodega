<?php
/*
Template Name: RSS-ADRESAR
*/
 
$numposts = 5;
 
function yoast_rss_date( $timestamp = null ) {
  $timestamp = ($timestamp==null) ? time() : $timestamp;
  echo date(DATE_RSS, $timestamp);
}
 
function yoast_rss_text_limit($string, $length, $replacer = '...') { 
  $string = strip_tags($string);
  if(strlen($string) > $length) 
    return (preg_match('/^(.*)\W.*$/', substr($string, 0, $length+1), $matches) ? $matches[1] : substr($string, 0, $length)) . $replacer;   
  return $string; 
}
 
$posts = query_posts('showposts='.$numposts);
 
$lastpost = $numposts - 1;

define('DONOTCACHEPAGE', "true");

header("Content-Type: application/rss+xml; charset=UTF-8");
echo '<?xml version="1.0"?>';
?><rss version="2.0">
<channel>
  <title>Chicago Desavanja</title>
  <link>http://chicagodesavanja.us</link>
  <description>Sva desavanja u Vasem gradu na jednom mestu!</description>
  <language>sr-RS</language>
  <managingEditor>chicagodesavanja@gmail.com</managingEditor>
<?php if ($_GET['app_type'] == 'day') : ?>
<?php 
  global $post;
  $startday = $_GET['app_day'];
  $startmonth = $_GET['app_month'];
  $startyear = $_GET['app_year'];
  $start = strtotime($startday.'-'.$startmonth.'-'.$startyear);
  $end = strtotime($startday.'-'.$startmonth.'-'.$startyear . ' +6 days');
  $start = date('j M Y', $start);
  $end = date('j M Y', $end);

	$get_posts = tribe_get_events(array(
    'start_date' => $start,
    'end_date' => $end,
    'eventDisplay' => 'all',
    'posts_per_page' => -1,
    ));

	foreach($get_posts as $post) :
      setup_postdata($post);
      $fulltitle = explode('::', get_the_title($post->ID));
      if (isset($fulltitle[1])) $short = trim($fulltitle[1]); else $short = '';
    ?>
    <item>
      <starttime><?php echo tribe_get_start_date(null, true, 'm-d-Y') ?></starttime>
      <timestamp><?php echo strtotime(tribe_get_start_date(null, true, 'd-m-Y')) ?></timestamp>
      <title><?php echo '<![CDATA['.get_the_title($post->ID).']]>'; ?></title>
      <shorttitle><?php echo $short ?></shorttitle>
      <location><?php echo tribe_get_venue( get_the_ID() ); ?></location>
      <address><?php echo tribe_get_address( get_the_ID() ); ?></address>
      <contact><?php echo tribe_get_phone(); ?></contact>
      <longitude></longitude>
      <latitude></latitude>
      <link><?php echo get_permalink($post->ID); ?></link>
      <description><?php echo '<![CDATA['.yoast_rss_text_limit($post->post_content, 1000).']]>';  ?></description>
      <bigimage><?php if ( has_post_thumbnail()) : 
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(400, 9999, true) ); //'mobile_app_fullsize'
        echo $thumb[0];
        endif; ?></bigimage>
      <imagethumb><?php if ( has_post_thumbnail()) : 
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(120, 80, true) ); // 'mobile_app_thumb'
        echo $thumb[0];
        endif; ?></imagethumb>
      <?php /*
      <pubDate><?php yoast_rss_date( strtotime($post->post_date_gmt) ); ?></pubDate> 
      */?>
      <guid><?php echo get_permalink($post->ID); ?></guid>
    </item>
  <?php endforeach; ?>  
  <?php wp_reset_query(); ?>
  
<?php elseif ($_GET['app_type'] == 'month'): ?>
	<?php 
	global $post;
  $startmonth = $_GET['app_month'];
  $startyear = $_GET['app_year'];
  $start = strtotime('1-'.$startmonth.'-'.$startyear);
  $end = strtotime('1-'.$startmonth.'-'.$startyear . ' +1 month -1 day');
  // var_dump(date('d M Y',$start));
  // var_dump(date('d M Y',$end));
  $start = date('j M Y', $start);
  $end = date('j M Y', $end);
  // var_dump($start);
  // var_dump($end);
  // echo '--------------';
	$get_posts = tribe_get_events(array(
    'start_date' => $start,
    'end_date' => $end,
    'eventDisplay' => 'all',
    'posts_per_page' => -1,
    ));

  $days = array();
	foreach($get_posts as $post) { 
    setup_postdata($post);
    // echo tribe_get_start_date($post->ID, false, 'j M Y'). "\n";
    $eventday = tribe_get_start_date($post->ID, false, 'j'). "\n";
    $days[intval($eventday)] = true;
  }
  if(count($days)) {
    ksort($days);
    echo "<item>\n";
    foreach ($days as $daynumber=>$dummy) {
      echo "<day>".$daynumber."</day>\n";
    }
    echo "</item>\n";
  }
  else {
    echo "<item></item>\n";
  }
	?>
	<?php wp_reset_query(); ?>
<?php endif; ?>
</channel>
</rss>