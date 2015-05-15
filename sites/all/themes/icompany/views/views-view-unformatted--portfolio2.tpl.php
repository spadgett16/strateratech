<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
$num = 1;
$button_title = t('View');
$column = t('Column');
?>

<?php if(theme_get_setting('porfolio_1col_link') || theme_get_setting('porfolio_2col_link') || theme_get_setting('porfolio_3col_link') || theme_get_setting('porfolio_4col_link')) {?>
<div class="portfolio-button-container visible-desktop">
	<div class="btn-group">
		<button class="btn btn-small"><?php print $button_title; ?></button>
		<button class="btn btn-small dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
		<li><a href="<?php print theme_get_setting('porfolio_1col_link') ?>" >1 <?php print $column; ?></a></li>
		<li><a href="<?php print theme_get_setting('porfolio_2col_link') ?>" >2 <?php print $column; ?></a></li>
		<li><a href="<?php print theme_get_setting('porfolio_3col_link') ?>" >3 <?php print $column; ?></a></li>
		<li><a href="<?php print theme_get_setting('porfolio_4col_link') ?>" >4 <?php print $column; ?></a></li>
		</ul>
	</div>
</div>
<?php } ?>

<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div <?php if ($classes_array[$id]) { print 'class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php 

if($num%2 == 0){
	print '<div class="clearfix portfolio-divider"></div>';
}

$num++;

endforeach; ?>
