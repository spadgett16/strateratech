<?php
$string = $content;	
				
// replace	
$string = str_replace('[row]', '<div class="row-fluid">', $string);
$string = str_replace('[/row]', '</div>', $string);

$string = str_replace('[one]', '<div class="span12">', $string);
$string = str_replace('[/one]', '</div>', $string);
	 
$string = str_replace('[oneHalf]', '<div class="span6">', $string);
$string = str_replace('[/oneHalf]', '</div>', $string);

$string = str_replace('[oneThird]', '<div class="span4">', $string);
$string = str_replace('[/oneThird]', '</div>', $string);

$string = str_replace('[oneFourth]', '<div class="span3">', $string);
$string = str_replace('[/oneFourth]', '</div>', $string);

$string = str_replace('[oneFifth]', '<div class="span2">', $string);
$string = str_replace('[/oneFifth]', '</div>', $string);

$string = str_replace('[oneSixth]', '<div class="span2">', $string);
$string = str_replace('[/oneSixth]', '</div>', $string);

$string = str_replace('[twoThird]', '<div class="span8">', $string);
$string = str_replace('[/twoThird]', '</div>', $string);

$string = str_replace('[threeFourth]', '<div class="span9">', $string);
$string = str_replace('[/threeFourth]', '</div>', $string);

$string = str_replace('[fiveSixth]', '<div class="span10">', $string);
$string = str_replace('[/fiveSixth]', '</div>', $string);

$string = str_replace('[color]', '<span class="color">', $string);
$string = str_replace('[/color]', '</span>', $string);

$string = str_replace('[h1 bordered]', '<h1 class="bordered">', $string);
$string = str_replace('[/h1]', '</h1>', $string);

$string = str_replace('[h2 bordered]', '<h2 class="bordered">', $string);
$string = str_replace('[/h2]', '</h2>', $string);

$string = str_replace('[h3 bordered]', '<h3 class="bordered">', $string);
$string = str_replace('[/h3]', '</h3>', $string);

$content = $string;

?>



<div id="<?php print $block_html_id; ?>" class="clearfix <?php print $classes; ?>"<?php print $attributes; ?>>


<?php print render($title_prefix); ?>	
<?php if (!empty($block->subject)): ?>
<div class="titlecontainer"><h4 class="blocktitle" <?php print $title_attributes; ?>><?php print $block->subject ?></h4></div>
<?php endif;?>
<?php print render($title_suffix); ?>

  <div class="content"><?php print $content; ?></div>
</div>
