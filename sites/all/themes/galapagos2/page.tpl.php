<?php
// $Id: page.tpl.php,v 1.28 2008/01/24 09:42:52 goba Exp $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

  <head>
  <html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<html xmlns:fb="http://ogp.me/ns/fb#">
<meta name="google-site-verification" content="VUWFfESR_AAj9sSrmaxoYYsp638WjWKuzLfQ4FzFxNA" />


<script>jqcc=jQuery.noConflict(true);</script>

    <title><?php print $head_title ?></title>
  
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>	
	<?php 
	  $color = theme_get_setting('color');
      $width_style = theme_get_setting('width_style');
      $fixedwidth = theme_get_setting('fixedwidth');
      $leftwidth = theme_get_setting('leftwidth');
      $rightwidth = theme_get_setting('rightwidth');
	  $menu_style = theme_get_setting('menu_style');
	  $font_family = theme_get_setting('font_family');
      $font_size = theme_get_setting('font_size');
	 ?>
	<?php require_once ('includes/block_layout.php'); ?>
    <?php require_once ('includes/layout.php'); ?>
	<?php require_once ('css/fontswitch.php'); ?>
	 
	 <?php if  ($menu_style == 1) { ?>
	  <script type="text/javascript">	
        $(document).ready(function(){
          $("#primary-links .menu").superfish({
            animation : { height: "show" }
          });
        });
	  </script> 
	<?php } ?>
   
    <script type="text/javascript">
      function equalHeight(group) {
	  tallest = 0;
	  group.each(function() {
		thisHeight = $(this).height();
		if(thisHeight > tallest) {
			tallest = thisHeight;
		}
	  });
	  group.height(tallest);
      }

     $(document).ready(function() {
	  equalHeight($(".feature-inner"));
	  equalHeight($(".equal"));
	  equalHeight($(".match"));
     });
   </script>

    <!--[if lte IE 6]>
    <script type="text/javascript" src="<?php print $base_path ?>sites/all/themes/galapagos2/js/DD_belatedPNG.js"></script>
	<script type="text/javascript">
      DD_belatedPNG.fix('#site-logo, .form-submit, #header-wrapper, #primary-links li, img, li.comment_comments a, li.comment_add a, li.node_read_more a, #search .form-submit,#primary-links li ul, #primary-links li ul li, p.alert, p.download, p.info, p.notice,p.mail,p.system,p.web,p.package,p.stop,p.security,p.settings, blockquote, blockquote p, li.check, h2');
	</script>
	<script type="text/javascript" src="<?php print $base_path ?>sites/all/themes/galapagos2/js/suckerfish.js?8"></script>
    <![endif]-->
    
    <script type="text/javascript"> 
    $(function(){var a = $('#comment-form').find('#edit-name');if($(a).val() == '<?=variable_get('anonymous', t('Anonymous'));?>'){$(a).val('');}});
</script>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-12993577-1");
pageTracker._trackPageview();
} catch(err) {}</script>

<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/14400926/Amantel', [300, 140], 'div-gpt-ad-1378502330043-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/240_90_Top_Right', [240, 90], 'div-gpt-ad-1395177415663-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/AES_300px', [300, 227], 'div-gpt-ad-1379103049880-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/ElimuTagtitle', [300, 190], 'div-gpt-ad-1394128996638-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/KitengelaResort', [498, 75], 'div-gpt-ad-1379615583464-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/G3Telecom_650x100', [650, 100], 'div-gpt-ad-1385585643220-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/EdenPark_300_203', [300, 203], 'div-gpt-ad-1408762050625-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/ABC_300x251', [300, 251], 'div-gpt-ad-1387511773396-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/Titan_300x199', [300, 199], 'div-gpt-ad-1387564111302-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/KenyaMoja_135x86', [135, 86], 'div-gpt-ad-1387570309604-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/Karisan_135x85', [135, 85], 'div-gpt-ad-1387570400925-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/UAP1_300x250', [299, 250], 'div-gpt-ad-1389910455282-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/VL_300x441', [300, 441], 'div-gpt-ad-1391115400007-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/300x93', [300, 93], 'div-gpt-ad-1399315819436-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/SJ_Hall_300x425', [300, 425], 'div-gpt-ad-1391479704705-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/300x300', [300, 300], 'div-gpt-ad-1391544797377-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/im_300_250', [300, 250], 'div-gpt-ad-1393867617729-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/582x72', [582, 72], 'div-gpt-ad-1395412500210-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/299x174', [299, 174], 'div-gpt-ad-1395873812373-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/KCFA_300x310', [300, 310], 'div-gpt-ad-1395949274316-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/300x390', [300, 390], 'div-gpt-ad-1411014196613-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/300x393', [300, 393], 'div-gpt-ad-1402592060448-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/300x185', [300, 185], 'div-gpt-ad-1397760986001-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/160x320', [160, 320], 'div-gpt-ad-1406823066161-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/300x175', [300, 175], 'div-gpt-ad-1398796978060-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/300x123', [300, 123], 'div-gpt-ad-1400598770061-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/Diamond_301_201', [301, 201], 'div-gpt-ad-1400720933810-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/QT_300x220', [300, 220], 'div-gpt-ad-1406818689533-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/300x457', [300, 457], 'div-gpt-ad-1402076269281-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/Rockefeller_Aspen_260x90', [260, 90], 'div-gpt-ad-1402081961070-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/Rockefeller_Aspen_301x174', [301, 174], 'div-gpt-ad-1402081961070-1').addService(googletag.pubads());
googletag.defineSlot('/14400926/KCB_728x90', [728, 90], 'div-gpt-ad-1403012624086-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/300x302', [300, 302], 'div-gpt-ad-1407694808800-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/300x255', [300, 255], 'div-gpt-ad-1403984345225-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/300x160', [300, 160], 'div-gpt-ad-1403998961217-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/300x177', [300, 177], 'div-gpt-ad-1404584258971-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/650x266', [650, 266], 'div-gpt-ad-1404584764506-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/468x90', [468, 90], 'div-gpt-ad-1414010204145-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/300x252', [300, 252], 'div-gpt-ad-1436978024399-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/300x253', [300, 253], 'div-gpt-ad-1437163811343-0').addService(googletag.pubads());
googletag.defineSlot('/14400926/728x95', [728, 95], 'div-gpt-ad-1443557670080-0').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>

		
  </head>

  <body<?php print phptemplate_body_class($left, $right); ?>>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <div id="page-wrapper">
  
  <?php if ($top_banner) { ?>
      <div id="top-banner clear-block">
	    <?php print $top_banner ?>
	  </div>
  <?php } ?> 

  <div id="page-top" class="clear-block">

  </div>
    
<!-- The Header -->  
  <div id="header-wrapper" class="clear-block">
    <?php print $header_wrapper ?>
    <div id="header-left"  class="clear-block">
    
     <?php print $header_left ?>
    
      <?php if ($logo) { ?>
        <div id="site-logo">
            <img src="<?php print $logo ?>" alt="<?php print $site_name ?>" />
        </div>
      <?php }?>
     </div>  <!-- end header_left-->
     
     <div id="header-right"  class="clear-block">
     <?php print $header_right ?>
      
	<?php if ($site_name) { ?>
	  <div id='site-name'>
	      <a href="<?php print $front_page ?>"><?php print $site_name ?></a>
      </div>  
	<?php } ?>
	
	<?php if ($site_slogan) { ?>
      <div id='site-slogan'>
	      <?php print $site_slogan; ?>
      </div> 
	<?php } ?> 
    
        <div id="feed-icons">
             <img src="/sites/all/themes/galapagos2/images/mwakilishi-barcode.png" />
        </div>
    
    <div id="banner-top-right-lower">
      <div id="search-box">
      <?php print $search_box ?>
    </div>
    
     <div id="todays-date">
      <?php print date('l, F j, Y')?>
    </div> 
    </div>
    
    <div id="banner-top-right">
      <?php print $banner_top_right ?>
    </div>
    
   
   
	
    </div>   <!-- end header_right -->
  </div>   <!-- end header_wrapper -->
  

  <div id="border-wrapper">
	   
<!-- Primary Links -->	
	<?php if ($primary): ?>
	  <div id="primary-links" class="clear-block">
        <?php print $primary ?>
	  </div><!-- /primary-links -->
    <?php endif; ?> 
    
<!-- Primary Links -->	
	
	
	
	<?php if ($secondary): ?>
	  <div id="secondary-links" class="clear-block">
        <?php print $secondary ?>
	  </div><!-- /primary-links -->
    <?php endif; ?> 
	
	

<!-- Middle Wrapper -->  
<div id="middle-wrapper"  class="clear-block"><div id="middle-wrapper-bottom">	   	
	 
      <div id="main-content"><div id="squeeze"><div id="main-content-inner">

<!-- Top User Regions -->

    <?php if ($banners_header): ?>
		<?php print $banners_header ?>
    <?php endif; ?> 
        
        <?php if ($dynamic) { ?>
        <div id="feature-regions" class="clear-block">
          
          <div id="dynamic-block">
		    <?php print $dynamic ?>
          </div>
        
        </div>
        <?php } ?>   
        
        <div class="clear-block">
        
        <div id="main-content-inner-inner"><div id="squeeze-2">
        <?php print $tabs ?>
        <?php print $breadcrumb ?>
        <?php print $contenttop ?>
        <?php print $help ?>
        <?php print $messages ?>
        <?php print $content; ?>
        <?php print $contentbottom ?>
        </div></div>    
        
        <?php if ($left) { ?>
	    <div class="sidebar-left">
          <?php print $left ?>
	    </div>
        
		<?php } ?> 
        </div>     
     
        </div>
      
      </div></div>
	  
      <?php if ($right) { ?>
	    <div class="sidebar-right">
          <?php print $right ?>
          
            <div class="rs-top">
             `  <div class="rs-top-left">
                    <?php print $rs_top_left ?>
                </div>
          
                <div class="rs-top-right">
                    <?php print $rs_top_right ?>
                </div>
            </div>
         
            <div class="rs-middle">
             `  <div class="rs-middle-left">
                    <?php print $rs_middle_left ?>
                </div>
          
                <div class="rs-middle-right">
                    <?php print $rs_middle_right ?>
                </div>
            </div>
          
            <div class="rs-bottom">
                <div class="rs-bottom-left">
                    <?php print $rs_bottom_left ?>
                </div>
          
                <div class="rs-bottom-right">
                    <?php print $rs_bottom_right ?>
                </div>
            </div>
            
            <div class="right-sidebar-bottom">
                    <?php print $right_sidebar_bottom ?>
            </div>
          
	    </div>
      <?php } ?>        
        
    </div></div><!-- /middle-wrapper --> 
  
     

<!-- Features -->
    <?php if ($feature1 || $feature2 || $feature3 || $feature4) { ?>
      <div id="feature-blocks" class="clear-block"><div class="feature-blocks-inner">
	    <?php if ($feature1) { ?>
		  <div class="feature <?php echo $featureBlocks; ?>">
		    <div class="feature-inner">
              <?php print $feature1 ?>
		    </div>
		  </div>
        <?php }?>
        <?php if ($feature2) { ?>
		  <div class="feature <?php echo $featureBlocks; ?>">
		    <div class="feature-inner">
              <?php print $feature2 ?>
	        </div>
		  </div>
        <?php }?>
        <?php if ($feature3) { ?>
		  <div class="feature <?php echo $featureBlocks; ?>">
		    <div class="feature-inner">
              <?php print $feature3 ?>
		    </div>
		  </div>
        <?php }?>
		<?php if ($feature4) { ?>
		  <div class="feature <?php echo $featureBlocks; ?>">
		    <div class="feature-inner">
              <?php print $feature4 ?>
		    </div>
		  </div>
        <?php }?>
      </div></div><!-- End of Features -->
	<?php } ?>  
	
 <div id="popular-videos">
		<?php print $popularvideos ?> 
	</div>
	

  <?php print $bottomads ?> 

<!-- Columns -->
  <?php if ($column_1 || $column_2) { ?>
    <div id="columns" class="clear-block">
	    <?php if ($column_1) { ?>
		  <div class="column <?php echo $columnBlocks; ?> match">
		    <div class="column-inner">
              <?php print $column_1 ?>
		    </div>
		  </div>
        <?php }?>
        <?php if ($column_2) { ?>
		  <div class="column <?php echo $columnBlocks; ?> match">
		    <div class="column-inner">
              <?php print $column_2 ?>
	        </div>
		  </div>
        <?php }?>
		<?php if ($bottom_sidebar) { ?>
		  <div id="bottom-sidebar" class="match">
	       <div class="bottom-sidebar-inner">
	         <?php print $bottom_sidebar ?>
	        </div>
          </div>
		<?php }?>
      </div>
	<?php } ?> 
	
<?php if ($footerads) { ?>
  <!-- Footer Ads -->
  <?php print $footerads ?>
  <?php } ?>   
  
<!-- Custom Blocks -->
  <?php if ($custom1 || $custom2 || $custom3 || $custom4 || $custom5) { ?>
      <div id="custom-blocks" class="clear-block">
	    <?php if ($custom1) { ?>
		  <div class="custom-block odd equal <?php echo $customBlocks; ?>">
		    <div class="custom-block-inner">
              <?php print $custom1 ?>
		    </div>
		  </div>
        <?php }?>
        <?php if ($custom2) { ?>
		  <div class="custom-block even equal <?php echo $customBlocks; ?>">
		    <div class="custom-block-inner">
              <?php print $custom2 ?>
	        </div>
		  </div>
        <?php }?>
        <?php if ($custom3) { ?>
		  <div class="custom-block odd equal <?php echo $customBlocks; ?>">
		    <div class="custom-block-inner">
              <?php print $custom3 ?>
		    </div>
		  </div>
        <?php }?>
		<?php if ($custom4) { ?>
		  <div class="custom-block even equal <?php echo $customBlocks; ?>">
		    <div class="custom-block-inner">
              <?php print $custom4 ?>
		    </div>
		  </div>
        <?php }?>
		<?php if ($custom5) { ?>
		  <div class="custom-block odd equal <?php echo $customBlocks; ?>">
		    <div class="custom-block-inner">
              <?php print $custom5 ?>
		    </div>
		  </div>
        <?php }?>
      </div>
	<?php } ?> 
	
 
  
<!-- Footer Links/Menu -->
    <?php if ($footer_links) { ?>
	  <div id="footer-links" class="clear-block">
	  
	    <?php print $footer_links ?>
	  </div><!-- /footer -->
	<?php } ?>  
	
  
<!-- The All Knowing All Seeing Footer Block -->
    <?php if ($footer) { ?>
	  <div id="footer">	  
	
	  <?php print $footer_message ?>
	 	   COPYRIGHT &copy 2014 MWAKILISHI.COM, ALL RIGHTS RESERVED | TEL: +1(410) 881-3145 or +1(443) 499-2760 | E-MAIL: <a style="color:#eeab59; text-decoration:underline;"  href="mailto:info@mwakilishi.com">INFO@MWAKILISHI.COM</a>
	   </div><!-- /footer -->
	<?php } ?>
	

<!-- Script Closure -->
    <?php print $closure ?>
  
  </div><!-- /border-wrapper -->
  </div><!-- /page-wrapper -->
  
  <script type="text/javascript">
   var infolink_pid = 360371;
   var infolink_wsid = 0;
</script>
<script type="text/javascript" src="http://resources.infolinks.com/js/infolinks_main.js"></script>
 
</body>


  </body>
</html>
