<?php
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
<?php global $base_url;?>
<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles ?>
<?php print $scripts ?>
</head>

<body>

<div id="header">
<div id="navigation" class="clearfix">
<?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' =>'links', 'id' => 'primary-links')) ?><?php } ?>
</div><!--/navigation-->
</div><!--/header-->

<div id="main">
<div id="page">
<div id="content" class="narrowcolumn">  
	<?php print $messages;?>
    <?php print $tabs;?>  
    <?php print $content;?> 
</div><!--/content-->

<div id="sidebar">

    <div id="logo">
    <?php
    // Prepare header
    $site_fields = array();
    if ($site_name) {
    $site_fields[] = check_plain($site_name);
    }
    
    $site_title = implode(' ', $site_fields);
    if ($site_fields) {
    $site_fields[0] = '<div>'. $site_fields[0] .'</div>';
    }
    $site_html = implode(' ', $site_fields);
    
    if ($logo || $site_title) {
    print '<h1><a href="'. check_url($front_page) .'" title="'. $site_title .'">';
    if ($logo) {
    print '<img src="'. check_url($logo) .'" alt="'. $site_title .'"/>';
    }
    print $site_html .'</a></h1>';
    }
    
    if ($site_slogan) {
    $site_fields[] = check_plain($site_slogan);
    }
    ?>
    </div>
    <?php print $sidebar;?>
</div><!--/sidebar-->

<div id="sidebar-right">
	<?php print $right_sidebar;?>
</div><!--/sidebar-right-->
    
</div><!--/page-->
</div><!--/main-->


<div id="footer">
    <div id="footer-inside">
        <?php print $footer_message;?> 
        <p>Ported to Drupal by <a href="http://www.drupalizing.com" target="_blank">drupalizing</a> - Designed by <a href="http://www.productivedreams.com/imprezz-a-free-wordpress-theme/" target="_blank">productivedreams</a> for <a href="http://www.smashingmagazine.com/2009/03/10/download-imprezz-a-free-wordpress-theme/" target="_blank">Smashing Magazine</a></p>
    </div>
</div>
    
<?php print $closure ?>

</body>
</html>
