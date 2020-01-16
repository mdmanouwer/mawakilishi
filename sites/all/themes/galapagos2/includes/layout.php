<style type="text/css">
  <?php if ($width_style == 0) { ?>
    #page-wrapper { width: <?php print $fixedwidth ?>px; }
  <?php } else { ?>
    #page-wrapper { width: 95%; }
  <?php } ?>

  body.two-sidebars #main-content-inner-inner { margin-right: -<?php print $leftwidth ?>px; }
  body.two-sidebars #main-content { margin-right: -<?php print $rightwidth ?>px; }
  body.two-sidebars #squeeze { margin-right: <?php print $rightwidth ?>px; }
  body.two-sidebars #squeeze-2 { margin-right: <?php print $leftwidth ?>px; } 

  body.sidebar-left #main-content-inner-inner { margin-right: -<?php print $leftwidth ?>px; }
  body.sidebar-left #squeeze-2 { margin-right: <?php print $leftwidth ?>px; } 

  body.sidebar-right #main-content { margin-right: -<?php print $rightwidth ?>px; }
  body.sidebar-right #squeeze { margin-right: <?php print $rightwidth ?>px; }
  
  #middle-wrapper .sidebar-left { width: <?php print $leftwidth ?>px; }
  #middle-wrapper .sidebar-right { width: <?php print $rightwidth ?>px; }
  
  .sidebar-left .sideblock-inner { width: <?php print $leftwidth - 10 ?>px; }
  .sidebar-right .sideblock-inner { width: <?php print $rightwidth - 10 ?>px; }

</style>
