<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
 
?>


<?php
if(isset($row->field_field_project_image)){
	if(array_key_exists('0', $row->field_field_project_image)){
		if(array_key_exists('rendered', $row->field_field_project_image[0])){
			if(array_key_exists('#item', $row->field_field_project_image[0]['rendered'])){
				if(array_key_exists('uri', $row->field_field_project_image[0]['rendered']['#item'])){
				
					$image =  $row->field_field_project_image[0]['rendered']['#item']['uri'];
                    $large_image_url = image_style_url('large', $image);
								
				}
			}
		}
	}
} 	
?>



<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->separator)): ?>
    <?php print $field->separator; ?>
  <?php endif; ?>

  <?php print $field->wrapper_prefix; ?>
    <?php print $field->label_html; ?>
    <?php print $field->content; ?>
  <?php print $field->wrapper_suffix; ?>
  
  <!--each portfolio item-->
  <div class="portfolio-hover hidden-phone hidden-tablet">
  	<div class="portfolio-zoom-container">
	  	<a class="portfolio-link portfolio-colorbox" href="<?php  print $large_image_url ?>" title="" >
	  		<img alt="zoom" src="<?php print base_path() . path_to_theme() ?>/img/magnifier_zoom_in.png" />
		</a>
	</div>
  </div>
  
  
<?php endforeach; ?>
