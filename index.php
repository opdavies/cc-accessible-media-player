<?php
/*------------------------------------------------------------------------------
Plugin Name: Accessible Media Player
Plugin URI: http://www.coolfields.co.uk
Description: This plugin uses the Nomensa Accessible Media Player to play videos when 
   asked to do so. 
Author: Graham Armfield
Version: 0.1
Author URI: http://www.coolfields.co.uk
------------------------------------------------------------------------------*/ 



function cc_acc_med_player_addJs() {
/*********************************************************************
 writes out any necessary javascript calls into the page
*********************************************************************/

   $pageId = get_the_ID();
   //$videoPresent = get_post_meta($pageId, 'video', true);
   $videoPresent = 'y';
   if ($videoPresent == 'y') {
      wp_enqueue_script('jquery');
      wp_enqueue_script('jquery-ui-core');
      wp_enqueue_script('jquery-ui-slider');
      wp_enqueue_script('swfobject');
      wp_enqueue_script('player', plugins_url('/core/javascript/jquery.player.min.js',__FILE__));
      wp_enqueue_script('loader', plugins_url('/custom/javascript/jquery.loader.js',__FILE__));
      wp_register_style( 'player-style-core', plugins_url('/core/css/player-core.min.css', __FILE__) );
      wp_enqueue_style( 'player-style-core' );
      wp_register_style( 'player-style-theme', plugins_url('/custom/css/player-theme.min.css', __FILE__) );
      wp_enqueue_style( 'player-style-theme' );
   }


}
add_action('template_redirect', 'cc_acc_med_player_addJs');


function cc_acc_med_player_show_vid_sc($atts, $content = null) {

   extract(shortcode_atts(array(
          'type' => 'yt',
          'vidid' => '',
          'title' => 'Watch the video',
          'captions' => ''
          ), $atts));
   
   if ($type != 'yt') return;
   if (empty($vidid)) return;
   
   $strHtml = '<p><a href="http://www.youtube.com/watch?v='.$vidid.'">'.$title.'</a>';
   if (!empty($captions)) {
      $strHtml .= '<a class="captions" href="'.$captions.'" style="display:none;">Captions</a>';
   }
   $strHtml .= '</p>';
   return $strHtml;
}
add_shortcode('videoplayer', 'cc_acc_med_player_show_vid_sc');


/*****************************************************************
** Admin menus
******************************************************************/

/* EOF */
