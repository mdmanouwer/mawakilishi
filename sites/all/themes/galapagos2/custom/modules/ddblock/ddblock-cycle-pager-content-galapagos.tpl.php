<!-- custom pager with images and text. -->
<div id="ddblock-custom-pager-<?php print $delta ?>" class="<?php print $pager ?>">
 <div  class="<?php print $pager ?>-inner clear-block border">
  <?php if ($pager_items): ?>
   <?php $item_counter=0; ?>
   <?php foreach ($pager_items as $pager_item): ?>
    <div class="<?php print $pager ?>-item <?php print $pager ?>-item-<?php print $item_counter ?>">
     <div class="<?php print $pager ?>-item-inner"> 
      <a href="#" title="navigate to topic" class="pager-link"><?php print $pager_item['image']; ?><?php print $pager_item['text']; ?></a>
     </div>
    </div> <!-- /custom-pager-item -->
   <?php endforeach; ?>
  <?php endif; ?>
 </div> <!-- /pager-inner-->
</div>  <!-- /pager-->