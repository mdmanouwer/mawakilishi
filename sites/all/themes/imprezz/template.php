<?php
// $Id: template.php,v 1.1 2010/12/29 16:30:15 skounis Exp $

/**
 * Sets the body-tag class attribute.
 *
 * Adds 'sidebar-left', 'sidebar-right' or 'sidebars' classes as needed.
 */
function phptemplate_body_class($sidebar_left, $sidebar_right) {
  if ($sidebar_left != '' && $sidebar_right != '') {
    $class = 'sidebars';
  }
  else {
    if ($sidebar_left != '') {
      $class = 'sidebar-left';
    }
    if ($sidebar_right != '') {
      $class = 'sidebar-right';
    }
  }

  if (isset($class)) {
    print ' class="'. $class .'"';
  }
}

/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return a string containing the breadcrumb output.
 */
function phptemplate_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
    return '<div class="breadcrumb">'. implode(' › ', $breadcrumb) .'</div>';
  }
}

/**
 * Allow themable wrapping of all comments.
 */
function phptemplate_comment_wrapper($content, $type = null) {
  static $node_type;
  if (isset($type)) $node_type = $type;

  if (!$content || $node_type == 'forum') {
    return '<div id="comments">'. $content . '</div>';
  }
  else {
    return '<div id="comments"><h2 class="comments">'. t('Comments') .'</h2>'. $content .'</div>';
  }
}

/**
 * Override or insert PHPTemplate variables into the templates.
 */
function _phptemplate_variables($hook, $vars) {
  if ($hook == 'page') {

    if ($secondary = menu_secondary_local_tasks()) {
      $output = '<span class="clear"></span>';
      $output .= "<ul class=\"tabs secondary\">\n". $secondary ."</ul>\n";
      $vars['tabs2'] = $output;
    }

    // Hook into color.module
    if (module_exists('color')) {
      _color_page_alter($vars);
    }
    return $vars;
  }
  return array();
}

/**
 * Returns the rendered local tasks. The default implementation renders
 * them as tabs.
 *
 * @ingroup themeable
 */
function phptemplate_menu_local_tasks() {
  $output = '';

  if ($primary = menu_primary_local_tasks()) {
    $output .= "<ul class=\"tabs primary\">\n". $primary ."</ul>\n";
  }

  return $output;
}


function change_theme() {

  print '
	
    <script type="text/javascript">
	
		
    function toggle_style(color) {
		document.cookie = "css="+color+"" ;  
  		$("#header").css("background-image", "url(sites/all/themes/civileng/img/header-bg"+color+".jpg)");
		$("body").css("background-image", "url(sites/all/themes/civileng/img/overall-bg"+color+".jpg)");
		$("#footer").css("background-image", "url(sites/all/themes/civileng/img/footer-bg"+color+".jpg)");
		$("#navigation ul li").css("background", "transparent url(img/navigation-bg"+color+".jpg) no-repeat right");
		$("body").css("background-color", "#ffffff");
		$("a").css("color", "#ec7500");
		$("#navigation li a").css("color", "#808082");
		$("#footer-message").css("color", "#666666");
		$("#project-message").css("background", "#f3f3f3");
		$("#project-message").css("color", "#666666");
		$("#civilweb-solution").css("border", "2px solid #f3f3f3");
    }
	
    function toggle_style_1(color) {
		document.cookie = "css="+color+"" ;  
  		$("#header").css("background", "#5d5a55");
		$("body").css("background", "#c7c4bf");
		$("#footer").css("background", "#5d5a55");
		$("#navigation ul li").css("background", "transparent url(img/navigation-bg"+color+".jpg) no-repeat right");
		$("a").css("color", "#527dbd");
		$("#navigation li a").css("color", "#ffffff");
		$("#footer-message").css("color", "#ffffff");
		$("#project-message").css("background", "#5d5a55");
		$("#project-message").css("color", "#ffffff");
		$("#civilweb-solution").css("border", "2px solid #5d5a55");
    }
	
	function toggle_style_2(color) {
		document.cookie = "css="+color+"" ;  
  		$("#header").css("background", "#ffdf76");
		$("body").css("background", "#5c5954");
		$("#footer").css("background", "#ffdf76");
		$("#navigation ul li").css("background", "transparent url(img/navigation-bg"+color+".jpg) no-repeat right");
		$("body").css("background-color", "#5c5954");
		$("a").css("color", "#E88B03");
		$("#navigation li a").css("color", "#808082");
		$("#footer-message").css("color", "#666666");	    
		$("#project-message").css("background", "#ffdf76");
		$("#project-message").css("color", "#666666");
		$("#civilweb-solution").css("border", "2px solid #ffdf76");
    }
	
	function toggle_style_3(color) {
		document.cookie = "css="+color+"" ;  
  		$("#header").css("background", "#d58700");
		$("#footer").css("background", "#d58700");
		$("#navigation ul li").css("background", "transparent url(img/navigation-bg"+color+".jpg) no-repeat right");
		$("body").css("background", "#ac6d00");
		$("#footer-message").css("color", "#ffffff");
		$("a").css("color", "#ec7500");
		$("#navigation li a").css("color", "#ffffff");
		$("#project-message").css("background", "#d58700");
		$("#project-message").css("color", "#ffffff");
		$("#civilweb-solution").css("border", "2px solid #d58700");
    }
	
	function toggle_style_4(color) {
		document.cookie = "css="+color+"" ;  
  		$("#header").css("background", "#7ABAF2");
		$("#footer").css("background", "#7ABAF2");
		$("body").css("background", "#4192D9");
		$("#footer-message").css("color", "#ffffff");
		$("a").css("color", "#4192D9");
		$("#navigation li a").css("color", "#ffffff");
		$("#project-message").css("background", "#7ABAF2");
		$("#project-message").css("color", "#ffffff");
		$("#civilweb-solution").css("border", "2px solid #7ABAF2");
    }
	
		function toggle_style_5(color) {
		document.cookie = "css="+color+"" ;  
  		$("#header").css("background", "#ab2222");
		$("#footer").css("background", "#ab2222");
		$("body").css("background", "#5a5a5a");
		$("#footer-message").css("color", "#ffffff");
		$("a").css("color", "#ab2222");
		$("#navigation li a").css("color", "#ffffff");
		$("#project-message").css("background", "#ab2222");
		$("#project-message").css("color", "#ffffff");
		$("#civilweb-solution").css("border", "2px solid #ab2222");
    }
	
		function toggle_style_6(color) {
		document.cookie = "css="+color+"" ;  
  		$("#header").css("background", "#16B314");
		$("#footer").css("background", "#16B314");
		$("body").css("background", "#0E7F0D");
		$("#footer-message").css("color", "#ffffff");
		$("a").css("color", "#0E7F0D");
		$("#navigation li a").css("color", "#ffffff");
		$("#project-message").css("background", "#16B314");
		$("#project-message").css("color", "#ffffff");
		$("#civilweb-solution").css("border", "2px solid #16B314");
    }
	
    </script>
  
    <div id="change_theme">
    <a class="color" href="#" style="background-color:#5d5a55;" onClick="toggle_style_1(\'-1\');"></a>
	<a class="color" href="#" style="background-color:#ffdf76;" onClick="toggle_style_2(\'-2\');"></a>
	<a class="color" href="#" style="background-color:#d58700;" onClick="toggle_style_3(\'-3\');"></a>
	<a class="color" href="#" style="background-color:#7ABAF2;" onClick="toggle_style_4(\'-4\');"></a>
	<a class="color" href="#" style="background-color:#ab2222;" onClick="toggle_style_5(\'-5\');"></a>
	<a class="color" href="#" style="background-color:#16B314;" onClick="toggle_style_6(\'-6\');"></a>
	<a href="#" style="width:50px;" onClick="toggle_style(\'\');">Default</a>
    </div>

  ';

}