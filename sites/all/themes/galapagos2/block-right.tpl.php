<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="right-sideblock block-<?php print $block->module ?>"><div class="sideblock-inner">
  <?php if ($block->subject): ?>
    <h2 class="title"><?php print $block->subject; ?></h2>
  <?php endif; ?>
  <div class="content">
    <?php print $block->content; ?>
  </div>
</div></div>