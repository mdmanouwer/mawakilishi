<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block block-<?php print $block->module ?>"><div class="block-inner">

  <?php if ($block->subject): ?>
    <h2 class="title"><?php print $block->subject; ?></h2>
  <?php endif; ?>

  <div class="content">
    <?php print $block->content; ?>
  </div>

</div></div> <!-- /block-inner, /block -->

<?php
  if ($block->module == 'block'):
    if (user_access('administer blocks')) :?>
      <div class="edit-block clear-block"><a class="active" href='<?php print check_url(base_path()) ?>admin/build/block/configure/<?php print $block->module;?>/<?php print $block->delta;?>'>Edit Block</a></div>
<?php 
    endif; 
  endif; 
?>