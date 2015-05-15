<?php
?>
<div class="<?php print $classes . ' ' . $zebra; ?>"<?php print $attributes; ?>>

  <div class="clearfix">

   

  <?php if ($new): ?>
    <span class="new"><?php print drupal_ucfirst($new) ?></span>
  <?php endif; ?>

  

    <?php print render($title_prefix); ?>
    <h3<?php print $title_attributes; ?>><?php print $title ?></h3>
    <?php print render($title_suffix); ?>
	<?php if ($submitted): ?><div class="comment-submitted"><?php print $submitted ?></div><?php endif; ?>
    
    <div class="content"<?php print $content_attributes; ?>>
    
    
    <div class="comment-meta clearfix">
    	 <?php if ($picture): ?><div class="hidden-phone"> <?php print $picture ?></div><?php endif; ?>
    </div>
    	
      <?php hide($content['links']); print render($content); ?>
      <?php if ($signature): ?>
      <div class="clearfix">
        <div>—</div>
        <?php print $signature ?>
      </div>
      <?php endif; ?>
       
    </div>
  </div>
	
  <div class="comments-links">
  <?php print render($content['links']) ?>
  </div>
</div>