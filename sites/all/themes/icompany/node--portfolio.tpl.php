<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> <?php print "iteration-$id"; ?>"<?php print $attributes; ?>>
 
<?php if ($page == 0): ?>
  <h2 class="title"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
<?php endif; ?>

  
 
  <div class="content clearfix">
      <?php
      hide($content['comments']);
      hide($content['links']);
	  hide($content['field_skills']);
	  hide($content['field_project_date']);
	  hide($content['field_tags']);
	  hide($content['body']);
      print render($content);
      ?>
  </div>

 
<div class="portfolio_content clearfix row-fluid">	
	<div class="portfolio_body <?php if(!$teaser) print 'span9' ; ?>">
		<div class="body_inner">
		<?php print render($content['body']); ?>
		</div>
	</div>
	
	<?php if ((!empty($content['field_tags']) || !empty($content['field_project_date']) || !empty($content['field_skills'])) && !$teaser ):  ?>
	<div class="portfolio_meta span3">
	<div class="meta_inner">
	  <div class="project_skills"><?php print render($content['field_skills']); ?></div>
	  <div class="project_date"><?php print render($content['field_project_date']); ?></div>
	  <div class="project_tags"><?php print render($content['field_tags']); ?></div>
	</div>
	</div>
	<?php endif;?> 
</div>


    <?php if ($content['field_tags']):  ?>
      <div class="terms"><?php print render($content['field_tags']); ?></div>
    <?php endif;?>
    

  <div class="clearfix">
    <?php  if ($content['links']): ?>
      <div class="links"><?php print render($content['links']) ?></div>
    <?php  endif; ?>
    
     <?php print render($content['comments']); ?>
  </div>

</div>
