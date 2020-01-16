<div class="node clear-block"><div class="node-inner">

  <?php if ($teaser): ?>
    
    <div class="teaser clear-block">
              
        <div class="teaser-title clear-block">
          <h2>
            <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
          </h2>
        </div>
        
		<?php if ($date): ?>
          <div class="teaser-submitted clear-block">
             By <?php print $name; ?> on <?php print $date; ?>
          </div>
        <?php endif; ?>
        
        <div class="teaser-content clear-block">
          <?php print $content; ?>
        </div>
             
        <?php if ($links): ?>
        <div class="teaser-links clear-block">
          <?php print $links; ?>
        </div>
        
       <?php endif; ?>
    
    </div>
    
  <?php endif; ?>
  
  <?php if ($page == 1 || $page == 0 && $teaser == 0): ?>
    
    <div class="full-node">
    
    <?php if ($terms): ?>
      <div class="terms clear-block">
        <?php print $terms; ?>
      </div>
    <?php endif; ?>
    
    <h1 class="node-title">
      <?php print $title; ?>
    </h1>

    <?php if ($unpublished) : ?>
      <div class="unpublished"><?php print t('Unpublished'); ?></div>
    <?php endif; ?>

    <?php if ($submitted): ?>
      <div class="submitted clear-block">
        By <?php print $name; ?> | <?php print $date; ?>
      </div>
    <?php endif; ?>
    
    <?php if ($picture) print $picture; ?>
    
    <div class="content clear-block">
       <?php print $content; ?>
    </div>

    <?php if ($links): ?>
      <div class="links">
        <?php print $links; ?>
      </div>
    <?php endif; ?>
    
    </div>
  
  <?php endif; ?>
  

</div></div> <!-- /node-inner, /node -->
