<?php if($teaser){ ?>
	


<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> <?php print "iteration-$id"; ?>"<?php print $attributes; ?>>
 <?php if ($submitted && $teaser): ?>
   	<!-- <div class="submitted clearfix clear"><?php print $submitted; ?> </div>--> <!-- Uncomment to show node submitted info on teasers-->
 <?php endif; ?>
 <!--
 <pre >
 	<code>
  <?php  print_r($content) ?>
   </code>
 </pre>
 -->
  
<div class="meta">

  <div class="content clearfix row-fluid">
  		
  	<div class="row-fluid">
	  	<div class="product-images pull-left span4">
	  		<?php if($title) {?>  <h3 class="product-title"><?php print $title ?></h3> <span class="product-title-border"></span> <?php } ?>
	  		<?php print render($content['uc_product_image']) ?>
	  	</div>
	  	
	      <?php
	      //print_r($content);
	      hide($content['comments']);
	      hide($content['links']);
		  hide($content['field_tags']);
		  hide($content['body']);
		  hide($content['display_price']);
		  hide($content['add_to_cart']);
		  hide($content['taxonomy_catalog']);
		  hide($content['sell_price']);
		  ?>
		  
		  
		  <div class="product-desc pull-right span8">
			  <div class="product-descriptions">
				  <?php
			      print render($content);
				  print render($content['taxonomy_catalog']);
				  
				  
			      ?>
			      
			       <?php
			      print render($content['body']);
			      ?>
			      <div class="cartAndPrice row-fluid">
					  	
					  	<div class="span6">
						  	<?php print render($content['display_price']);	?>
						</div>	
							
						<div class="span6">	
							<?php print render($content['add_to_cart']); ?>
					  	</div>
					  	
				  </div>
		      </div>
			  
		  </div> 
		  
		  
	</div>
	  
	  <div class="product-desc">
		 
	  </div> 
	  
	  
	 <?php if ($submitted && !$teaser): ?>
	   	<!-- <div class="submitted"><?php print $submitted; ?> </div> --><!-- Uncomment to show node submitted info on full nodes-->
	 <?php endif; ?>
	 
  </div>
  
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
	
<?php } else {?>



<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> <?php print "iteration-$id"; ?>"<?php print $attributes; ?>>
 <?php if ($submitted && $teaser): ?>
   	<!-- <div class="submitted clearfix clear"><?php print $submitted; ?> </div>--> <!-- Uncomment to show node submitted info on teasers-->
 <?php endif; ?>
 <!--
 <pre >
 	<code>
  <?php  print_r($content) ?>
   </code>
 </pre>
 -->
  
<div class="meta">

  <div class="content clearfix row-fluid">
  		
  	<div class="row-fluid">
	  	<div class="product-images pull-left span4">
	  		<?php if($title) {?>  <h3 class="product-title"><?php print $title ?></h3> <span class="product-title-border"></span> <?php } ?>
	  		<?php print render($content['uc_product_image']) ?>
	  	</div>
	  	
	      <?php
	      
	      hide($content['comments']);
	      hide($content['links']);
		  hide($content['field_tags']);
		  hide($content['body']);
		  hide($content['display_price']);
		  hide($content['add_to_cart']);
		  hide($content['taxonomy_catalog']);
		  ?>
		  
		  
		  <div class="product-desc pull-right span8">
			  <div class="product-descriptions">
				  <?php
			      print render($content);
				  print render($content['taxonomy_catalog']);
			      ?>
		      </div>
			  <div class="cartAndPrice row-fluid">
			  	
			  	<div class="span6">
				  	<?php print render($content['display_price']);	?>
				</div>	
					
				<div class="span6">	
					<?php print render($content['add_to_cart']); ?>
			  	</div>
			  	
			  </div>
		  </div> 
		  
		  
	</div>
	  
	  <div class="product-desc">
		  <?php
	      print render($content['body']);
	      ?>
	  </div> 
	  
	  
	 <?php if ($submitted && !$teaser): ?>
	   	<!-- <div class="submitted"><?php print $submitted; ?> </div> --><!-- Uncomment to show node submitted info on full nodes-->
	 <?php endif; ?>
	 
  </div>
  
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

<?php } ?>