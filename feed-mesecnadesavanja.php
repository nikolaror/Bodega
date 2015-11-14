<?php add_filter( "the_content_feed", "plugin_function_name" ) ?>
<?php/**
* @param  $content Content of post
* @return string
*/
function plugin_function_name($content)
{
   $content .= 'Total '.str_word_count($content).' words';
   return $content;
}?>