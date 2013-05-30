<?php

function hs_custom_login_logo() {
	echo '<style type="text/css">
		.login h1 a, #login h1 a { background-image: url('.get_stylesheet_directory_uri().'/images/logo.png) !important; background-size: 285px 155px; padding-bottom: 100px; }
	</style>';
}
add_action('login_head', 'hs_custom_login_logo');

function hs_google_publisher() {
	echo '<link href="https://plus.google.com/110109148861996385232" rel="publisher" />';
}
add_action('wp_head', 'hs_google_publisher');

function get_social_media_link(){
  $social = get_option('social_connections');
  $twitter = $facebook = $google_page = '';
  if($social){
    $social = json_decode($social);
    if(isset($social->twitter->active) && $social->twitter->active && $social->twitter->screen_name) $twitter = 'http://twitter.com/'.$social->twitter->screen_name;
    if(isset($social->facebook->active) && $social->facebook->active){
      if(isset($social->facebook->selected_link) && $social->facebook->selected_id!=''){
        $facebook = $social->facebook->selected_link;
      }
      else if($social->facebook->selected_id==$social->facebook->id){
        $facebook = 'http://www.facebook.com/'.(($social->facebook->username!='')?$social->facebook->username:$social->facebook->id);
      }
      else if(isset($social->facebook->pages) && count($social->facebook->pages)>0){
        foreach($social->facebook->pages as $page){
          if($social->facebook->selected_id==$page->id){
            $facebook = (!isset($page->link))?$page->link:'http://www.facebook.com/'.$page->id;
            break;
          }
        }
      }
    }
  }
  $owner = get_site_owner();
  if($owner){
    $google_page = get_user_meta($owner->ID, 'google_page', true);
    if($google_page && $google_page!='' && !strstr($google_page, '?rel=author')) $google_page .= '?rel=author';
    unset($owner);
  }
  if($twitter=='' && $facebook=='' && $google_page=='') return false;
  return array(
    'twitter' => $twitter,
    'facebook' => $facebook,
    'googleplus' => $google_page
  );
}

?>