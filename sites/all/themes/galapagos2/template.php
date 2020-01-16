<?php

/* Body class control */

function phptemplate_body_class($left, $right) {
  if ($left != '' && $right != '') {
    $class = 'two-sidebars';
  }
  else {
    if ($left != '') {
      $class = 'sidebar-left';
    }
    if ($right != '') {
      $class = 'sidebar-right';
    }
  }

  if (isset($class)) {
    print ' class="'. $class .'"';
  }
}

// Initialize Theme Settings

if (is_null(theme_get_setting('color'))) {  
  global $theme_key;

  $defaults = array(            
	'color' => 0,
    'width_style' => 0,
	'fixedwidth' => 962,
	'leftwidth' => 200,
	'rightwidth' => 200,
	'font_family' => 'Georgia, "Times New Roman", Times, serif',
	'font_size' => '0.8',
	'menu_style' => 0,
  );

  variable_set(
    str_replace('/', '_', 'theme_'. $theme_key .'_settings'),
    array_merge($defaults, theme_get_settings($theme_key))
  );

  theme_get_setting('', TRUE);
}

// Javascript Includes

$menu_style = theme_get_setting('menu_style');

  if  ($menu_style == 0) {
    drupal_add_js(drupal_get_path('theme', 'galapagos2') . '/js/suckerfish.js', 'theme'); } 
  else {
    drupal_add_js(drupal_get_path('theme', 'galapagos2') . '/js/superfish.js', 'theme');
}  

// CSS Includes

drupal_add_css(drupal_get_path('theme', 'galapagos2') . '/css/admin.css', 'theme');

$color = theme_get_setting('color');

  if ($color == 0) {
    drupal_add_css(drupal_get_path('theme', 'galapagos2') . '/css/style1.css', 'theme');
  } 
  else if ($color == 1){ 
    drupal_add_css(drupal_get_path('theme', 'galapagos2') . '/css/style2.css', 'theme');
  } 
  else if ($color == 2){ 
    drupal_add_css(drupal_get_path('theme', 'galapagos2') . '/css/style3.css', 'theme');
  }
  else if ($color == 3){ 
    drupal_add_css(drupal_get_path('theme', 'galapagos2') . '/css/style4.css', 'theme');
  }
  else if ($color == 4){ 
    drupal_add_css(drupal_get_path('theme', 'galapagos2') . '/css/style5.css', 'theme');
  }


function custom_user_bar() {
  global $user;                                                               
  $output = '';

  if (!$user->uid) {                                                          
    $output .= drupal_get_form('user_login_block');                           
  }                                                                           
  else {                                                                      
    $output .= t('<p class="user-info">Hi !user, welcome back to Mwakilishi.com.</p>', array('!user' => theme('username', $user)));
 
    $output .= theme('item_list', array(
      l(t('Your account'), 'user/'.$user->uid, array('title' => t('Edit your account'))),
      l(t('Sign out'), 'logout')));
  }
   
  $output = '<div id="user-bar">'.$output.'</div>';
     
  return $output;
}

/* Feed Icon */

function galapagos2_feed_icon($url, $title) {
  if ($image = theme('image', 'sites/all/themes/galapagos2/images/RSS.png', t('Syndicate content'), $title)) {
    return '<a href="http://www.mwakilishi.com/content/articles/latest/rss.xml" class="feed-icon">'. $image .'</a>';
  }
}

/* Dynamic Display Block */

function galapagos2_preprocess_ddblock_cycle_block_content(&$vars) {
  if ($vars['output_type'] == 'view_fields') {
    $content = array();
    // Add slider_items for the template 
    // If you use the devel module uncomment the following line to see the theme variables
    // dsm($vars['settings']['view_name']);  
    // dsm($vars['content'][0]);
    // If you don't use the devel module uncomment the following line to see the theme variables
    // drupal_set_message('<pre>' . var_export($vars['settings']['view_name'], true) . '</pre>');
    // drupal_set_message('<pre>' . var_export($vars['content'][0], true) . '</pre>');
    if ($vars['settings']['view_name'] == 'news_items') {
      if (!empty($vars['content'])) {
        foreach ($vars['content'] as $key1 => $result) {
          // add slide_image variable 
          if (isset($result->node_data_field_pager_item_text_field_image_fid)) {
            // get image id
            $fid = $result->node_data_field_pager_item_text_field_image_fid;
            // get path to image
            $filepath = db_result(db_query("SELECT filepath FROM {files} WHERE fid = %d", $fid));
            //  use imagecache (imagecache, preset_name, file_path, alt, title, array of attributes)
            if (module_exists('imagecache') && is_array(imagecache_presets()) && $vars['imgcache_slide'] <> '<none>'){
              $slider_items[$key1]['slide_image'] = 
              theme('imagecache', 
                    $vars['imgcache_slide'], 
                    $filepath,
                    $result->node_title);
            }
            else {          
              $slider_items[$key1]['slide_image'] = 
                '<img src="' . base_path() . $filepath . 
                '" alt="' . $result->node_title . 
                '"/>';     
            }          
          }
          // add slide_text variable
          if (isset($result->node_data_field_pager_item_text_field_slide_text_value)) {
            $slider_items[$key1]['slide_text'] =  $result->node_data_field_pager_item_text_field_slide_text_value;
          }
          // add slide_title variable
          if (isset($result->node_title)) {
            $slider_items[$key1]['slide_title'] =  $result->node_title;
          }
          // add slide_read_more variable and slide_node variable
          if (isset($result->nid)) {
            $slider_items[$key1]['slide_read_more'] =  l('Read more...', 'node/' . $result->nid);
            $slider_items[$key1]['slide_node'] =  'node/' . $result->nid;
          }
        }
        $vars['slider_items'] = $slider_items;
      }
    }    
  }
}  
/**
 * Override or insert variables into the ddblock_cycle_pager_content templates.
 *   Used to convert variables from view_fields  to pager_items template variables
 *  Only used for custom pager items
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 *
 */

function galapagos2_preprocess_ddblock_cycle_pager_content(&$vars) {
  if (($vars['output_type'] == 'view_fields') && ($vars['pager_settings']['pager'] == 'custom-pager')){
    $content = array();
    // Add pager_items for the template 
    // If you use the devel module uncomment the following lines to see the theme variables
    // dsm($vars['pager_settings']['view_name']);     
    // dsm($vars['content'][0]);     
    // If you don't use the devel module uncomment the following lines to see the theme variables
    // drupal_set_message('<pre>' . var_export($vars['pager_settings'], true) . '</pre>');
    // drupal_set_message('<pre>' . var_export($vars['content'][0], true) . '</pre>');
    if ($vars['pager_settings']['view_name'] == 'news_items') {
      if (!empty($vars['content'])) {
        foreach ($vars['content'] as $key1 => $result) {
          // add pager_item_image variable
          if (isset($result->node_data_field_pager_item_text_field_image_fid)) {
            $fid = $result->node_data_field_pager_item_text_field_image_fid;
            $filepath = db_result(db_query("SELECT filepath FROM {files} WHERE fid = %d", $fid));
            //  use imagecache (imagecache, preset_name, file_path, alt, title, array of attributes)
            if (module_exists('imagecache') && 
                is_array(imagecache_presets()) && 
                $vars['imgcache_pager_item'] <> '<none>'){
              $pager_items[$key1]['image'] = 
                theme('imagecache', 
                      $vars['pager_settings']['imgcache_pager_item'],              
                      $filepath,
                      $result->node_data_field_pager_item_text_field_pager_item_text_value);
            }
            else {          
              $pager_items[$key1]['image'] = 
                '<img src="' . base_path() . $filepath . 
                '" alt="' . $result->node_data_field_pager_item_text_field_pager_item_text_value . 
                '"/>';     
            }          
          }
          // add pager_item _text variable
          if (isset($result->node_data_field_pager_item_text_field_pager_item_text_value)) {
            $pager_items[$key1]['text'] =  $result->node_data_field_pager_item_text_field_pager_item_text_value;
          }
        }
      }
      $vars['pager_items'] = $pager_items;
    }
  }    
}


/**
 * Theme override of theme_username(), removing '(not verified)'.
 */
/**
 * Theme override of theme_username(), removing '(not verified)'.
 */
function phptemplate_username($object) {
  return str_replace(' ('. t('not verified') .')', '', theme_username($object));
}


