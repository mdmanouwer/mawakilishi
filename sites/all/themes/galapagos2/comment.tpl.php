<div class="comment<?php print ($comment->new) ? ' comment-new' : ''; print ' '. $status ?> clear-block">
  
  <?php if ($comment->new): ?>
    <span class="new"><?php print $new ?></span>
  <?php endif; ?>  

  <div class="head clear-block">
    <?php print $picture ?>
    <div class="title-user">
      <h3><?php print $author ?></h3>
      <span class="submitted"><?php print $date ?></span>
    </div>
  </div>

  <div class="content clear-block">
    <?php print $content ?>
    <?php if ($signature): ?>
    <div class="user-signature">
      <?php print $signature ?>
    </div>
    <?php endif; ?>
  </div>

  <?php print $links ?>

</div>

