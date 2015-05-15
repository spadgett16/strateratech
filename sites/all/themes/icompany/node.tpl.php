<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> <?php print "iteration-$id"; ?>"<?php print $attributes; ?>>

<?php print render($title_prefix); ?>
<?php if ($page == 0): ?>
  <h2 class="title"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
<?php endif; ?>
<?php print render($title_suffix); ?>

<?php if ($submitted && $teaser): ?>
 	 <div class="submitted clearfix clear"><?php print $submitted; ?> </div>
<?php endif; ?>
<?php if ($page == 1): ?>
<?php if($user_picture) ?><div class="node-user-picture"> <?php print $user_picture ?></div>
<?php endif; ?>  
  
    <div class="meta">

  <article class="content clearfix row-fluid">
      <?php
      hide($content['comments']);
      hide($content['links']);
	  hide($content['field_tags']);
      print render($content);
      ?>
	   
	 <?php if ($submitted && !$teaser): ?>
	   	 <div class="submitted"><?php print $submitted; ?> </div>
	 <?php endif; ?>
  </article>
  
     <?php if ($content['field_tags']):  ?>
      <div class="terms"><?php print render($content['field_tags']); ?></div>
    <?php endif;?>
    </div>
    
  <div class="clearfix">
	<?php  if ($content['links']): ?>
      <div class="links"><?php print render($content['links']) ?></div>
    <?php  endif; ?>
    
     <?php print render($content['comments']); ?>
  </div>

</div>
<?php // } ?>