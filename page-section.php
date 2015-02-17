<?php

$block->openTag('section');

?>
<div class="container<?php echo $block->model['fluid'] ? '-fluid' : ''; ?>">
  <?php echo $block->content('top'); ?>
  <?php echo $block->model->createElement('h1', 'name'); ?>
  <?php echo $block->content('bottom', true); ?>
</div>
<?php

$block->closeTag();
