<?php phptemplate_comment_wrapper(NULL, $node->type); ?>

<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">

<?php print $picture ?>

<?php if ($submitted): ?>
<div class="post-time">
<b><?php print format_date($node->created, 'custom', "j"); ?></b>
<div><?php print format_date($node->created, 'custom', "M"); ?><?php print format_date($node->created, 'custom', " Y"); ?></div>
</div>
<?php endif; ?>

<h2 class="page-title"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>

<?php if ($submitted): ?>
<span class="submitted"><?php print t('!date — !username', array('!username' => theme('username', $node), '!date' => format_date($node->created))); ?></span>
<?php endif; ?>

<div class="content">
<?php print $content ?>
</div>

<div class="clear-block clear">
<div class="meta">
<?php if ($taxonomy): ?>
  <div class="terms"><?php print $terms ?></div>
<?php endif;?>
</div>

<?php if ($links): ?>
  <div class="links"><?php print $links; ?></div>
<?php endif; ?>
</div>

</div>